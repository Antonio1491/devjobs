<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{

    //escuchando por algún evento
    //se pueden colocar multiples funciones que van a escuchar por alguna vista o template
    protected $listeners = ['eliminarVacante'];

    // public function prueba($vacante_id)
    // {
    //     dd($vacante_id);
    // }

    public function eliminarVacante(Vacante $id)
    {
        $id->delete();
    }
    public function render()
    {

        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
