<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModeloVeiculo extends Model
{

    protected $table = "modelo_veiculo";

    use HasFactory;
    use SoftDeletes;

    public function marca()
    {
        return $this->belongsTo(MarcaVeiculo::class)->withTrashed();
    }

    public function fotos_modelo()
    {
        return $this->hasMany(FotosModeloVeiculo::class);
    }
}
