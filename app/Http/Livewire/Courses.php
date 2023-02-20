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

    function add()
    {
        $this->update = false;
    }

    function showForm()
    {
        $this->form = true;
    }

    function save()
    {
        $data = $this->validate([
            'title' => 'required',
            'code' => 'required|unique:courses',
            'unit' => 'required|min:1|numeric|digits:1',
            'level_id' => 'required',
        ]);
        $saved = Course::create($data);

        if ($saved) {
            $this->form = false;

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => $saved->code . ' has been added to list of courses',
                'title' => 'Course added Successfully',
                'timer' => 5000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
    }

    function edit(Course $course)
    {
        $this->cid = $course->id;
        $this->code = $course->code;
        $this->unit = $course->unit;
        $this->level_id = $course->level_id;
        $this->title = $course->title;
        $this->form = true;
        $this->update = true;
    }

    function update()
    {
        $data = $this->validate([
            'title' => 'required',
            'code' => 'required|unique:courses,' . $this->cid,
            'unit' => 'required|min:1|numeric|digits:1',
            'level_id' => 'required',
        ]);
        $saved = Course::find($this->cid)->update($data);

        if ($saved) {
            $this->form = false;

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => 'Course has been corrected and updated',
                'title' => 'Course updated Successfully',
                'timer' => 5000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
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
        $courses = Course::with('level')
            ->where('title', 'LIKE', $term)
            ->orWhere('code', 'LIKE', $term)
            ->orWhere('unit', 'LIKE', $term)
            ->orWhereHas('level', function (Builder $query) {
                $query->where('name', 'LIKE', "%$this->search%");
            })->paginate($this->perPage);
        return view('livewire.courses', compact(['courses']));
    }
}