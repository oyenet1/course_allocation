<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageUpload extends Component
{
    public $image;

    public User $user;

    use WithFileUploads;

    function changeProfileImage()
    {
        $this->validate(['image' => 'required|image|max:512']);
        $user = User::where('id', auth()->user()->id)->first();

        // delete exixting profile image if exist
        if ($user->image || Storage::exists($user->image)) {
            Storage::disk('public')->delete($user->image);
        }

        $url = $this->image->store('profile', 'public');

        $update = User::where('id', auth()->user()->id)->update(['image' => $url]);
        // dd($update);

        if ($update) {
            $this->image = '';
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Profile Image Changed successfully',
                'title' => 'Uploaded',
                'timer' => 3000,
            ]);
        }

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}