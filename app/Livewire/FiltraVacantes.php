<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class FiltraVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    public function leerDatosFormulario()
    {
        dd('buscando...');
    }

    public function render()
    {

        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.filtra-vacantes',[
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
