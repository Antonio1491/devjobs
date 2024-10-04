<?php

namespace App\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{
    public $cv;

    protected $rules = [
        'cv' =>'required|mimes:pdf'
    ];

    public function postularme()
    {
        $this->validate();

        //Almacenar cv en DD


        //Crear la vacante


        //crear notificación y enviar el mail


        //Mostrar el usuario un mensaje de ok

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
