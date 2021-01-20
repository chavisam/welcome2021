<?php

namespace App\Http\Livewire;

use App\Models\Reparacione;
use Livewire\Component;

class EditarReparations extends Component
{ 
  public  Reparacione $modif;

     public function render()
    { 
    
       return view("livewire.editar-reparations");
    }
}
