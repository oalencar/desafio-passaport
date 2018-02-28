<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'agenda_id'
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}
