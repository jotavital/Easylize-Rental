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
