<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'maritime_number', 'visit_count', 'merchandise_type'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($boat) {
            $boat->maritime_number = self::generateMaritimeNumber();
        });
    }

    public function docks()
    {
        return $this->belongsToMany(Dock::class);
    }

    public function cranes()
    {
        return $this->belongsToMany(Crane::class);
    }

    public function shifts()
    {
        return $this->belongsToMany(Shift::class);
    }

    private static function generateMaritimeNumber()
    {
        $yearMonth = date('Ym');
        $lastBoat = self::where('maritime_number', 'like', "$yearMonth%")->orderBy('maritime_number', 'desc')->first();
        $lastCount = $lastBoat ? (int) substr($lastBoat->maritime_number, 6) : 0;

        return $yearMonth . str_pad($lastCount + 1, 4, '0', STR_PAD_LEFT);
    }
}
