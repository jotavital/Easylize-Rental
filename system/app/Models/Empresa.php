<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $table = "empresa";

    use HasFactory;

    public function plano(){
        return $this->belongsTo(Plano::class);
    }
}
