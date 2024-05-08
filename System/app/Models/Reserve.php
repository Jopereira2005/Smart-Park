<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkLot extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_reserve',
        'price_per_hour',
        'total_price',
        'time_enter',
        'time_exit',
        'payment_method',
        'status',
        'id_client',
        'id_park_lot'
    ];

    public function client(): belongsTo
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function ParkLot(): HasMany
    {
        return $this->hasMany(ParkLot::class, 'id_park_lot');
    }
}
