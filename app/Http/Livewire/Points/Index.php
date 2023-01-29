<?php

namespace App\Http\Livewire\Points;

use App\Models\Point;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $points;

    // Enable point
    public function enable($id)
    {
        $point = Point::find($id);
        $point->update([
            'is_active' => true,
        ]);
    }

    // Disable point
    public function disable($id)
    {
        $point = Point::find($id);
        $point->update([
            'is_active' => false,
        ]);
    }

    public function render()
    {
        $this->points = Point::all();
        
        return view('livewire.points.index');
    }
}
