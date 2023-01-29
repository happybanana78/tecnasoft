<?php

namespace App\Http\Livewire\Points;

use App\Models\Point;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Show extends Component
{
    public Point $point;
    public Collection $services;

    public function mount(Point $point)
    {
        $this->point = $point;
    }

    // Enable service
    public function enable($id)
    {
        $point = Service::find($id);
        $point->update([
            'is_active' => true,
        ]);
    }

    // Disable service
    public function disable($id)
    {
        $point = Service::find($id);
        $point->update([
            'is_active' => false,
        ]);
    }

    public function render()
    {
        $this->services = Service::select()
            ->where('point_id', $this->point->id)
            ->get();
        
        return view('livewire.points.show');
    }
}
