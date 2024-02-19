<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'valor', 'usuario_id', 'categoria_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}