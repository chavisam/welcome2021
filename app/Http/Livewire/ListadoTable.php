<?php

namespace App\Http\Livewire;

use App\Models\Reparacione;
use App\Models\User;
use Livewire\Component;

class ListadoTable extends Component
{
    public $reparaciones;
    public $estado;
 
    public $selectedItem;

    public function selectItem($itemId){
        $this->selectedItem = $itemId;
        $this->dispatchBrowserEvent('openModal');

    }
    
    public function delete(){
        Reparacione::destroy($this->selectedItem);
        return redirect("/listado");
    }
    

    public function mount(){
             
            $this->reparaciones = Reparacione::query()
            ->orderByDesc('id')
            ->get();    
      
    }


    public function render()
    {
        return view('livewire.listado-table' ,[
           
            'reparaciones' => Reparacione::paginate() ,
            'users' => User::paginate()
        ]);
    }

    
//FUNCIÓN PARA MODIFICAR EL ESTADO DE LA REPARACIÓN
    public function estado($id)
    {
        $estado = Reparacione::find($id);
        if($estado->estado=='ESTROPEADO'){
        $estado->estado = 'OK';
        }else{
            $estado->estado = 'ESTROPEADO';
        }
        $estado->save();
        return redirect("/listado");
    }




 
}
