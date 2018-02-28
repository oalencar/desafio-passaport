<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'telefone',
        'email'
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}
