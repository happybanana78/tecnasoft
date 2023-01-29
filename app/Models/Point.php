<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    public $guarded = [];

    // Relationships
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
