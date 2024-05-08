<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'complemento',
        'bairro',
        'numero',
        'rua',
        'cep',
        'id_client',
        'id_commerce'
    ];

    public $timestamps = false;


    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function commerce(): BelongsTo
    {
        return $this->belongsTo(Commerce::class, 'id_commerce');
    }

}
