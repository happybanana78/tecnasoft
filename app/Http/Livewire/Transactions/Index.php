<?php

namespace App\Http\Livewire\Transactions;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public User $user;
    public Collection $trxs;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    
    public function render()
    {
        $this->trxs = Transaction::select()
            ->where('user_id', $this->user->id)
            ->get();
        
        return view('livewire.transactions.index');
    }
}
