<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    public $table = 'veiculo';

    use HasFactory;
    use SoftDeletes;

    public static function getTodosNaoAlugados()
    {
        return Veiculo::where('esta_alugado', '=', 0)->get();
    }

    public function marca()
    {
        return $this->belongsTo(MarcaVeiculo::class)->withTrashed();
    }

    public function modelo()
    {
        return $this->belongsTo(ModeloVeiculo::class)->withTrashed();
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class)->withTrashed();
    }
}
