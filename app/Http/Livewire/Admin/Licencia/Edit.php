<?php

namespace App\Http\Livewire\Admin\Licencia;

use App\Models\Licencia;
use Livewire\Component;

class Edit extends Component
{
    public $formId;
    public Licencia $licencia;

    protected $rules = [
        'licencia.concept'    => 'required|min:6',
        'licencia.days'       => 'required',
        'licencia.is_active'  => 'required',
    ];

    public function mount(Licencia $licencia)
    {
        //dd($licencia);
        $this->licencia = $licencia;
        $this->formId = $licencia->id;
    }

    public function render()
    {
        return view('livewire.admin.licencia.edit');
    }

    public function update()
    {

        $this->validate();

        $this->licencia->save();

        $this->dispatchBrowserEvent('message', [
            'title' => 'LICENCIA ACTUALIZADA!',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);

        $this->emit('saved');
    }
}
