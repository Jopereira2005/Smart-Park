<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'phone',
        'picture',
        'type'
    ];

    protected $hidden = [
        'password'
    ];

    public $timestamps = false;

    public function reserves(): HasMany
    {
        return $this->hasMany(Reserve::class, 'id_client');
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'id_client');
    }
}
