<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class Edit extends Component
{
    public Service $service;

    protected function rules()
    {
        return [
            'service.name' => 'required|min:0|string',
            'service.price' => 'required|min:0|integer',
        ];
    }

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    // Update service information
    public function save()
    {
        $this->validate();
        $this->service->update();

        session()->flash('service_saved', 'Servizio salvato');
    }

    public function render()
    {
        return view('livewire.services.edit');
    }
}