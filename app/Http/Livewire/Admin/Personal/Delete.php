<?php

namespace App\Http\Livewire\Admin\Personal;

use App\Models\Personal;
use Livewire\Component;

class Delete extends Component
{

    public Personal $empleado;

    public function mount(Personal $empleado)
    {
        $this->empleado = $empleado;
    }

    public function render()
    {
        return view('livewire.admin.personal.delete');
    }

    public function delete($id)
    {
        //dd($id);
        $empleado = Personal::find($id);

        $empleado->delete();

        $this->emit('saved');
    }
}
