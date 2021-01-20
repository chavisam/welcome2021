<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Reparacione;
class AddForm extends Component
{

    
    public $fecha_limite;
    public $urgencia;
    public $planta;
    public $reparacion;
    public $user;
    public $modif;
    
    protected $rules = [
        'fecha_limite' => 'required',
        'reparacion' => 'required',
        'urgencia' => 'required',
        'planta' => 'required'
    ];

    public function mount($modif){

        $this->modif = null;


        if($modif){
            $this->modif = $modif;
            $this->reparacion = $this->modif->reparacion;
            $this->urgencia = $this->modif->urgencia;
            $this->planta = $this->modif->planta;
            $this->fecha_limite = $this->modif->fecha_limite;
        }
    }


    public function submit(){
        $this-> validate();

        $modif = [

            'user' => Auth::user()->name,
            'reparacion' => $this->reparacion,
            'urgencia' => $this->urgencia ,
            'planta' => $this->planta,
            'fecha_limite' => $this->fecha_limite
        ];


        if($this->modif){
            Reparacione::find($this->modif->id)->update($modif);
        }else{          
            Reparacione::create($modif);
        }

        $this->addError('reparacion', 'Es obligatorio, chaval!!');
        $this->addError('planta', 'Elije la planta!!');
        $this->addError('urgencia', 'Selecciona la urgencia');
        $this->addError('fecha_limite', 'Último día para reparar');

        //$this->reset($modif);
        return $this->redirectRoute(name:'listado');
    }



    public function render()
    {
        return view('livewire.add-form');
    }
}
