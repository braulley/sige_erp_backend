<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamentos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'setor', 'categoria',
    ];
}
