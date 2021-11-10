<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCategoria extends Model
{
    protected $table = 'tipo_categoria';

    use HasFactory;

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }
}
