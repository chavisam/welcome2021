<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public function render()
    {
        return view('livewire.users-table',[
            'users' => User::paginate()
        ]);
    }
}
