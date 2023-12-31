<?php

namespace App\Http\Livewire\Front\Usuario;

use App\Models\Employee;
use App\Models\Licencia;
use App\Models\Personal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CargarLicencia extends Component
{
    public $licencias, $licencia, $dias, $empleado;

    public function mount()
    {
        $this->licencias = Licencia::all();
        $this->empleado = Employee::where('dni', Auth::user()->dni)->first();
    }
    public function render()
    {
        return view('livewire.front.usuario.cargar-licencia')->layout('layouts.admin');
    }

    public function store()
    {

    }
}
