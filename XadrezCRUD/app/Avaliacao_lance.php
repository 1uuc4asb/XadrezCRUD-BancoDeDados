<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao_lance extends Model
{
    protected $table = 'Avaliacao_lance';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
}
