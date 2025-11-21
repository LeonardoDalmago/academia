<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        "nome",
        "descricao"
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }
}
