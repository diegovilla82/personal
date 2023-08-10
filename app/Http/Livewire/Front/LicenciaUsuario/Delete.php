<?php

namespace App\Http\Livewire\Front\LicenciaUsuario;

use App\Models\LicenciaUser;
use Livewire\Component;

class Delete extends Component
{
    public $formId, $solicitud;
    public $showOpenDelete = false;

    public function mount($id)
    {
        $this->solicitud = $id;
    }

    public function render()
    {
        return view('livewire.front.licencia-usuario.delete');
    }

    public function delete($id)
    {

        $solicitud = LicenciaUser::find($id);

        $solicitud->delete();

        $this->emitUp('saved');

        $this->showOpenDelete = false;
    }
}
