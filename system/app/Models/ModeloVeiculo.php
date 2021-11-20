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

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'modelo_id');
    }

    public function veiculos_disponiveis()
    {
        return $this->veiculos()->where('ativo', '=', 1)->where('status_id', '=', 1);
    }
}
