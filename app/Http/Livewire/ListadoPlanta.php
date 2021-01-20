<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reparacione;
use App\Models\User;

class ListadoPlanta extends Component
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
            ->orderBy('planta')
            ->get();
       
      
    }


    public function render()
    {
        return view('livewire.listado-planta' ,[
           
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

    // public function eliminar(Reparacione $reparacion){
    //     $reparacion->delete();
    //     return redirect("/listado");
    // }
}

