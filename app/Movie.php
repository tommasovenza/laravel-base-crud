<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{   
    // le colonne gestite da me
    protected $fillable = [
        'nome_film',
        'anno',
        'voto'
    ];
}
