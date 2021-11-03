<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotosModeloVeiculo extends Model
{
    public $table = 'fotos_modelo_veiculo';

    use HasFactory;
    use SoftDeletes;
}
