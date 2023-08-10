<?php

namespace App\Http\Livewire\Admin\Personal;

use App\Models\Personal;
use Livewire\Component;

class Create extends Component
{
    public Personal $empleado;
    public $showModal=false;
    public $showModalEdit=false;

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
    }

    public function render()
    {
        return view('livewire.admin.personal.create');
    }

    public function store()
    {
        //dd($this->empleado);
        $this->validate();

        $this->empleado->save();

        $this->mount(new Personal);

        $this->showModal = false;

        $this->emit('saved');
    }
}
