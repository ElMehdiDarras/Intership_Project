<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    public function boats()
{
    return $this->belongsToMany(Boat::class, 'boat_shifts');
}
}
