<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $name;
    public $message;
    public $date;

    public $count;
    
    public function mount($name){

        $this->count = 0;
        $this->name =$name;
        $this->message ='Hello World';
        $this->date = now()->format ('d-m-Y');
    }
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->count ++;
    }
}
