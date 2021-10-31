<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelo extends Model
{

    protected $table = "modelo_veiculo";

    use HasFactory;
    use SoftDeletes;

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
