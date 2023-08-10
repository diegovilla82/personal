<?php

namespace App\Http\Livewire\Admin\Personal;

use App\Models\Personal;
use Livewire\Component;

class Edit extends Component
{
    public $formId;

    public Personal $empleado;

    protected $rules = [
        'empleado.name' => 'required',
        'empleado.last_name' => 'required',
        'empleado.username' => 'required',
        'empleado.dni' => 'required',
        'empleado.year_of_income' => 'required'
    ];

    public function mount(Personal $empleado)
    {
        $this->empleado = $empleado;
        $this->formId = $this->empleado->id;
    }
    public function render()
    {
        return view('livewire.admin.personal.edit');
    }

    public function update()
    {
        //dd($this->empleado);
        $this->validate();

        $this->empleado->save();

        $this->emit('saved');
    }
}
