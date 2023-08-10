<?php

namespace App\Http\Livewire\Front\LicenciaUsuario;

use App\Models\Licencia;
use App\Models\LicenciaUser;
use App\Models\Personal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $dias, $empleado, $max_days;
    public $licencias = [];
    public LicenciaUser $licencia;
    public $showModal = false;

    protected $rules = [
        'licencia.licencia_id' => 'required',
        'licencia.days' => 'required'
    ];

    public function mount(LicenciaUser $licencia)
    {
        $this->licencia = $licencia;
        $this->licencia->days = 1;
        $this->licencias = Licencia::all();
        $this->empleado = Personal::where('username', Auth::user()->username)->first();
    }

    public function render()
    {
        return view('livewire.front.licencia-usuario.create')->layout('layouts.admin');
    }

    public function store()
    {

        $this->validate();

        $this->licencia->user_id = Auth::user()->id;
        $this->licencia->year = '2023';
        $this->licencia->status = false;

        $this->licencia->save();

        //$this->dispatchBrowserEvent('name-updated', ['newName' => 'Diego']);
        $this->showModal = false;

        $this->mount(new LicenciaUser);
        $this->emit('saved');

    }
}
