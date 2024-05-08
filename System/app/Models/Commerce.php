<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'phone',
        'picture',
        'description'
    ];

    protected $hidden = [
        'password'
    ];

    public function address(): belongsTo
    {
        return $this->belongsTo(Address::class, 'id_commerce');
    }

    public function park_lots(): HasMany
    {
        return $this->hasMany(ParkLot::class, 'id_commerce');
    }
}
