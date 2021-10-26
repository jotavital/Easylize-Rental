<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{

    protected $table = "modelo_veiculo";

    use HasFactory;

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
