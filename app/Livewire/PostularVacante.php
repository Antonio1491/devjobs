<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacante;

    protected $rules = [
        'cv' =>'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante)
    {
       $this->vacante = $vacante;
    }

    public function postularme()
    {
        $datos = $this->validate();

          //Almacenar cv en DD
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        //Crear candidato la vacante
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        //crear notificación y enviar el mail


        //Mostrar el usuario un mensaje de ok

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
