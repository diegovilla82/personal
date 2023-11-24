<?php

namespace App\Http\Livewire\Admin\Licencia;

use App\Models\Licencia;
use Livewire\Component;

class Delete extends Component
{
    public $formId;
    public Licencia $licencia;

    public function mount(Licencia $licencia)
    {
        $this->licencia = $licencia;
    }

    public function render()
    {
        return view('livewire.admin.licencia.delete');
    }

    public function delete($id)
    {

        $licencia = Licencia::find($id);
        //dd($licencia);

        $licencia->delete();

        $this->dispatchBrowserEvent('message', [
            'title' => 'LICENCIA ELIMINADA!',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);

        $this->emit('saved');
    }
}
