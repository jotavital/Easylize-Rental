<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarcaVeiculo extends Model
{
    protected $table = "marca_veiculo";

    use HasFactory;
    use SoftDeletes;

    public function modelos()
    {
        return $this->hasMany(ModeloVeiculo::class, 'marca_id');
    }
}
