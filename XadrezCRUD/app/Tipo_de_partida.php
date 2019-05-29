<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_de_partida extends Model
{
    protected $table = 'Tipo_de_partida';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
}
