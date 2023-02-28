<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CourseAllocation;
use App\Models\Department;
use Illuminate\Database\Eloquent\Builder;

class Allocation extends Component
{
    public $user_id, $semester_id, $course_id, $cid;
    public $update = false;
    public $form = false;

    public $perPage = 12;
    public $sortField = 'id';
    public $sortAsc = true;
    public $search = null;
    public $selectPage = false;
    use WithPagination;
    public ?array $checked = [];

    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];

    // protected $paginationTheme = 'bootstrap';

    function refreshInputs()
    {
        $this->user_id = null;
        $this->course_id = null;
        $this->semester_id = null;
        $this->cid = null;
        $this->resetPage();
        $this->checked = [];
        $this->update = false;
        $this->search = null;
        $this->form = false;
        $this->update = false;
    }

    public function resetFilters()
    {
        $this->reset(['search', 'perPage', 'selected', 'checked']);
    }

    function save()
    {
        $data = $this->validate(
            [
                'semester_id' => ['required'],
                'course_id' => ['required', 'unique:course_allocations,course_id'],
                'user_id' => ['required'],
            ],
            [
                'semester_id.required' => 'Invalid Selection, pls select the right semester',
                'user_id.required' => 'Invalid Selection, pls select lecturer',
                'course_id.required' => 'Invalid Selection, pls select course',
                'course_id.unique' => 'Course already allocated to another lecturer',
            ]
        );


        $saved = CourseAllocation::create($data);
        $lecturer = $saved->user->title . ' ' . $saved->user->first_name;
        if ($saved) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => $lecturer . ' has been assigned to teach ' . $saved->course->code,
                'title' => 'Course Assigned Successfully',
                // 'timer' => 3000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
    }

    function edit(CourseAllocation $calt)
    {
        $this->semester_id = $calt->semester_id;
        $this->user_id = $calt->user_id;
        $this->course_id = $calt->course_id;
        $this->cid = $calt->id;
        $this->form = true;
        $this->update = true;
    }
    function update()
    {
        $data = $this->validate(
            [
                'semester_id' => ['required'],
                'course_id' => ['required'],
                'user_id' => ['required'],
            ],
            [
                'semester_id.required' => 'Invalid Selection, pls select the right semester',
                'user_id.required' => 'Invalid Selection, pls select lecturer',
                'course_id.required' => 'Invalid Selection, pls select course',
                'course_id.unique' => 'Course already allocated to another lecturer',
            ]
        );


        $saved = CourseAllocation::find($this->cid);
        $user = $saved;
        $saved->update($data);
        $lecturer = $user->user->title . ' ' . $user->user->first_name;
        if ($saved) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => $lecturer . ' has been assigned to teach ' . $saved->course->code,
                'title' => 'Allocation adjusted Successfully',
                // 'timer' => 12000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
    function add()
    {
        $this->update = false;
    }

    function showForm()
    {
        $this->form = true;
    }

    // colored each seleted rows
    function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->users->pluck('id')->toArray();
        } else {
            $this->checked = [];
        }
    }

    //
    function updatedChecked()
    {
        $this->selectPage = false;
    }


    public function confirmDelete(CourseAllocation $calt)
    {

        $this->cid = $calt->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $user = CourseAllocation::findOrFail($this->cid);
        $true = $user->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Course has been dissociated from lecturer',
                'title' => 'Deleted Successfully',
                'timer' => 5000,
            ]);
        }
        $this->refreshInputs();

        // return redirect()->route('user');
    }
    // confirmation of multiple delete
    function deleteMutiple()
    {
        // $checked = $this->checked;
        $this->dispatchBrowserEvent('swal:multiple');
    }

    // buck delete
    function buckDelete()
    {
        $users = CourseAllocation::findMany($this->checked);
        $true = $users->each->delete();

        if ($true) {
            session()->flash('success', count($this->checked) . ' user  deleted successfully');
        }
        $this->resetPage();
        $this->checked = [];
        $this->update = false;
        $this->search = '';

        return redirect()->route('user');
    }
    public function render()
    {
        $term = "%$this->search%";
        $allocations = CourseAllocation::with(['course.level', 'semester', 'user'])
            ->where('departments', 'LIKE', $term)
            ->orWhereHas('semester', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('name', 'LIKE', strtolower($term));
            })
            ->orWhereHas('course', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('title', 'LIKE', $term)
                    ->orWhere('code', 'LIKE', $term)
                    ->orWhere('unit', 'LIKE', $term);
            })
            ->orWhereHas('user', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('first_name', 'LIKE', $term)
                    ->orWhere('last_name', 'LIKE', $term);
            })->orderBy('id', 'desc')
            ->paginate($this->perPage);
        $departments = Department::select(['id', 'name'])->get();
        return view('livewire.allocation', compact(['allocations', 'departments']));
    }
}