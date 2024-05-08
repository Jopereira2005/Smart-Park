<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkLot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'type',
        'id_commerce'
    ];

    protected $hidden = [
        'password'
    ];

    public function commerce(): HasMany
    {
        return $this->belongsTo(Commerce::class, 'id_commerce');
    }

    public function reserves(): HasMany
    {
        return $this->hasMany(Reserve::class, 'id_park_lot');
    }
}
