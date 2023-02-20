<?php

namespace App\Http\Livewire;

use App\Models\Level;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Levels extends Component
{
    public $search, $name, $cid, $delete;

    function refreshInputs()
    {
        $this->name = null;
        $this->search = null;
        $this->cid = null;
    }

    protected $messages = [
        'name.unique' => 'Level with the same name already exits.'
    ];

    function save()
    {
        $data = $this->validate([
            'name' => ['required', 'unique:levels,name'],
        ]);

        $true = Level::create($data);
        if ($true) {
            $this->refreshInputs();
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => 'Level has been added',
                'title' => 'Added Successfully',
                'timer' => 5000,
            ]);
        }
    }
    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];

    public function confirmDelete(Level $level)
    {

        $this->cid = $level->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $user = Level::findOrFail($this->cid);
        $true = $user->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'A Level has been removed from the system including all courses associated with it',
                'title' => 'Deleted Successfully',
                'timer' => 6000,
            ]);
        }
        $this->refreshInputs();
    }
    public function render()
    {
        $term = "%$this->search%";
        $levels = Level::where('name', 'LIKE', $term)
            ->orWhereHas('courses', function (Builder $query) {
                $query->where('title', 'LIKE', "%$this->search%");
            })->get();
        return view('livewire.levels', compact(['levels']));
    }
}