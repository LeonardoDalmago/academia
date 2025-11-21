<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'ativo'
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'preco' => 'decimal:2'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
