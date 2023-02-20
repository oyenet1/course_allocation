<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;


class Courses extends Component
{
    use WithPagination;
    public $title, $unit, $code, $level_id, $cid, $search, $perPage = 12;

    public $form = false;
    public $update = false;
    public $checked = [];
    function refreshInputs()
    {
        $this->title = null;
        $this->code = null;
        $this->level_id = null;
        $this->unit = null;
        $this->search = null;
        $this->cid = null;
        $this->form = null;
        $this->update = null;
    }
    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];

    public function confirmDelete(Course $course)
    {

        $this->cid = $course->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $user = Course::findOrFail($this->cid);
        $true = $user->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'A Course has been removed from the system including all allocations',
                'title' => 'Deleted Successfully',
                'timer' => 6000,
            ]);
        }
        $this->refreshInputs();
    }
    public function render()
    {
        $term = "%$this->search%";
        $courses = Course::with('level')->where('name', 'LIKE', $term)
            ->orWhereHas('level', function (Builder $query) {
                $query->where('name', 'LIKE', "%$this->search%");
            })->paginate($this->perPage);
        return view('livewire.courses', compact(['courses']));
    }
}