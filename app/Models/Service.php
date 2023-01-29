<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $guarded = [];

    // Relationships
    public function point()
    {
        return $this->belongsTo(Point::class);
    }
}
