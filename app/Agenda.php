<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'titulo',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }
}
