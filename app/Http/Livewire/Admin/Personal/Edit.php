<?php

namespace App\Http\Livewire\Admin\Personal;

use App\Models\City;
use App\Models\Personal;
use App\Models\Position;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $formId;

    public User $empleado;
    public $cities, $positions;

    protected $rules = [
        'empleado.username' => 'required',
        'empleado.year_of_income' => 'nullable',
        'empleado.vacation_days' => 'nullable',

        'empleado.name' => 'required',
        'empleado.last_name' => 'required',
        'empleado.dni' => 'required',

        'empleado.city_id' => 'required',
        'empleado.address' => 'nullable',
        'empleado.neighborhood' => 'nullable',

        'empleado.position_id' => 'required',
        'empleado.apartado' => 'nullable',
        'empleado.ceic' => 'nullable',

        'empleado.anti_date' => 'nullable',
        
        'empleado.system_date' => 'nullable',

        'empleado.ley_6039_date' => 'nullable',

        'empleado.anses_date' => 'nullable',
    ];

    public function mount(User $empleado)
    {
        $this->empleado = $empleado;
        $this->formId = $this->empleado->id;
    }
    public function render()
    {
        $this->cities = City::all();
        $this->positions = Position::all();
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
