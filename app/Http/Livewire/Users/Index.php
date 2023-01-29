<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $users;

    public function mount()
    {
        $this->users = User::select()
            ->where('is_admin', false)
            ->get();
    }
    
    public function render()
    {
        return view('livewire.users.index');
    }
}