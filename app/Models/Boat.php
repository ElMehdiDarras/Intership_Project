<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;
    public function shifts()
{
    return $this->belongsToMany(Shift::class, 'boat_shifts');
}
}
