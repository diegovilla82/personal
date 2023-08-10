<?php

namespace App\Http\Livewire\Front\LicenciaUsuario;

use App\Models\Licencia;
use App\Models\LicenciaUser;
use Livewire\Component;

class Edit extends Component
{
    public $licencias, $formId;
    public LicenciaUser $licencia;
    public $showModalEdit = false;

    protected $rules = [
        'licencia.licencia_id' => 'required',
        'licencia.days' => 'required'
    ];

    public function mount(LicenciaUser $licencia)
    {
        $this->licencia = $licencia;
        $this->formId = $this->licencia->id;
        $this->licencias = Licencia::all();
    }
    public function render()
    {
        return view('livewire.front.licencia-usuario.edit');
    }
    public function update()
    {
       // dd('llega');
       $this->validate();

       $this->licencia->save();

       $this->showModalEdit = false;

       $this->emit('saved');
    }
}
