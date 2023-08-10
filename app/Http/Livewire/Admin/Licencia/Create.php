<?php

namespace App\Http\Livewire\Admin\Licencia;

use App\Models\Licencia;
use Livewire\Component;
use PharIo\Manifest\License;

class Create extends Component
{
    //public $openModal = false;
    public Licencia $licencia;

    protected $rules = [
        'licencia.concept'    => 'required|min:6',
        'licencia.days'       => 'required',
        'licencia.is_active'  => 'required',
    ];

    public function mount(Licencia $licencia)
    {
        $this->licencia = $licencia;
        $this->licencia->is_active = true;
    }

    public function render()
    {
        return view('livewire.admin.licencia.create');
    }

    public function store()
    {

        $this->validate();

        $this->licencia->save();

        // $this->dispatchBrowserEvent('created', [
        //     'title' => 'LICENCIA CREADA!',
        //     'icon' => 'success',
        //     'iconColor' => 'green',
        // ]);

        $this->emit('saved');

        $this->mount(new Licencia);

    }
}
