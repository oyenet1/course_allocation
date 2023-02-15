<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\User;
use Livewire\Component;
use App\Models\Borrower;
use Carbon\Carbon;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Builder;

class Borrows extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $data = [];
    public $perPage = 5;
    public $modal = false;
    public $collection = [];

    public $search;
    public $sort = 'asc';

    public $update = false;


    function  checkOut(Borrower $history)
    {
        $return = $history->update([
            'date_returned' => Carbon::now(),
            'status' => 'checked-out'
        ]);
        if ($return) {

            // if the book has been checkout, change then the user can borrow again
            $history->user()->update(['can_borrow' => true]);

            // $user->update(['can_borrow' => true]); // user will be able to borrow book again
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Book has been returned by' . $history->user->name,
                'title' => 'Checked Out',
                'timer' => 3000,
            ]);
        }
    }


    public function render()
    {
        $term = '%' . $this->search . '%';

        $histories = Borrower::with('user', 'book')
            ->where('date_borrowed', 'LIKE', $term)
            ->orWhere('status', 'LIKE', $term)
            ->orWhereHas('user', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('name', 'LIKE', $term)
                    ->orWhere('email', 'LIKE', $term);
            })->orWhereHas('book', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('title', 'LIKE', $term)
                    ->orWhere('authors', 'LIKE', $term)
                    ->orWhere('publisher', 'LIKE', $term)
                    ->orWhere('genre', 'LIKE', $term);
            })->latest()->paginate($this->perPage);
        return view('livewire.borrows', compact(['histories']));
    }
}