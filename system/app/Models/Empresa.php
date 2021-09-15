<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    public $table = "empresa";
    public $timestamps = false;

    use HasFactory;
}
