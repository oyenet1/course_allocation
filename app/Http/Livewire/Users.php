<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;

class Users extends Component
{
    public $first_name, $last_name, $username, $title, $delete, $email, $phone, $cid, $role;
    public $code = "+234";

    // public User $users;

    public $update = false;
    public $form = false;

    public $selectedRole = null;
    public ?array $checked = [];
    public $perPage = 25;
    public $sortField = 'id';
    public $sortAsc = true;
    public $search = '';
    public $selectPage = false;

    use WithPagination;

    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];
    // sorting column
    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    function refreshInputs()
    {
        $this->first_name = null;
        $this->last_name = null;
        $this->username = null;
        $this->role = null;
        $this->title = null;
        $this->phone = null;
        $this->email = null;
        $this->cid = null;
        $this->code = "+234";
        $this->resetPage();
        $this->checked = [];
        $this->update = false;
        $this->search = null;
    }

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'title' => 'required',
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'role' => ['required', 'not_in:select,nurse,Nurse']
    ];

    public function resetFilters()
    {
        $this->reset(['search', 'perPage', 'selected', 'checked']);
    }

    function save()
    {
        $data = $this->validate();
        $user = User::create($data);
        $saved = $user->attachRole($this->role);
        $lecturer = $user->title . ' ' . $user->first_name;

        try {

            if ($saved) {
                $this->form = false;

                $this->dispatchBrowserEvent('swal:success', [
                    'icon' => 'success',
                    'confirmButton' => '#0d2364',
                    'text' => $lecturer . ' has been added as lecturer into the system',
                    'title' => 'Lecturer added Successfully',
                    'timer' => 5000,
                ]);

                $this->refreshInputs();
            }
        } catch (\Throwable $e) {
            dd($e->getMessage());
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


    public function confirmDelete($id)
    {

        $user = User::findOrFail($id);

        $this->delete = $id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $user = User::with('roles')->findOrFail($this->delete);
        $true = $user->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => $user->first_name . 'has been removed from the system',
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
        $users = User::findMany($this->checked);
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
        $users = User::where('first_name', 'LIKE', $term)
            ->orWhere('last_name', 'LIKE', $term)
            ->orWhere('username', 'LIKE', $term)
            ->orWhere('email', 'LIKE', $term)
            ->orWhere('title', 'LIKE', $term)
            ->orWhereHas('roles', function (Builder $query) {
                $term = "%$this->search%";
                $query->where('name', 'LIKE', strtolower($term));
            })
            ->paginate($this->perPage);
        return view('livewire.users', compact(['users']));
    }
}