<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $table = 'treinos';
    protected $fillable = ['exercicio', 'series'];
}
