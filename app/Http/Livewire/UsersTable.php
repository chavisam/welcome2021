<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public $modalConfirmDelete = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;


    public function DeleteShowModal ($id){
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
       
    }


    public function DeleteUser(){
       User::destroy($this->modelId);
       $this->modalConfirmDeleteVisible = false;
       return redirect('/users');
    }


    public function render()
    {
        return view('livewire.users-table',[
            'users' => User::paginate()
        ]);
    }
}
