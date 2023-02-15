<?php

namespace App\Http\Livewire;

use App\Models\Bind;
use App\Models\Book;
use App\Models\User;
use Livewire\Component;
use App\Models\Borrower;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Books extends Component
{

    use WithPagination;

    public $perPage = 10;

    // types of book

    public  $cid;
    public $show = false;
    public $update = false;
    public $modal = false;

    public $search;

    public $data = [];

    protected $listeners = [
        'delete' => 'delete',
        'show' => 'alert'
    ];

    // refreshinputs after saved
    function refreshInputs()
    {
        $this->title = '';
        $this->author = '';
        $this->quantity = '';
        $this->cover = '';
        $this->isBind = '';
    }

    // show modal
    public function show()
    {
        $this->modal = true;
    }

    public function borrow(Book $book)
    {
        $data = [
            'book_id' => $book->id,
            'user_id' => auth()->user()->id,
            'date_borrowed' => Carbon::now(),
        ];

        //    check if the user can borrow book, then allow if not show error message
        if (auth()->user()->can_borrow == true) {
            // update user can borrow field
            $user = User::where('id', auth()->user()->id)->update(['can_borrow' => false]);
            $borrowed = Borrower::create($data); //saved borrowers records

            if ($borrowed && $user) {
                $this->dispatchBrowserEvent('swal:success', [
                    'icon' => 'success',
                    'text' => 'Abeg no allow the book pass 10days for your hand, nobe only you dey borrow book for our library',
                    'title' => 'Confirm ' . strtoupper(auth()->user()->name),
                    // 'timer' => 5000,
                ]);

                $this->refreshInputs();
            }
        } else {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'error',
                'text' =>  strtoupper(auth()->user()->name) . ' Aba, you never return the one you borrow',
                'title' => 'You no fit borrow book',
                // 'timer' => 3000,
            ]);
        }
    }




    public function render()
    {
        $term = '%' . $this->search . '%';
        $books = Book::where('authors', 'LIKE', $term)->orWhere('title', 'LIKE', $term)->orWhere('isbn', 'LIKE', $term)->orWhere('published_at', 'LIKE', $term)->paginate($this->perPage);
        return view('livewire.books', compact(['books']));
    }
}