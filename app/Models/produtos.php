<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
   protected $table = 'produtos';

    protected $fillable = [
        
        "nome",
        "descricao"
    ];
}
