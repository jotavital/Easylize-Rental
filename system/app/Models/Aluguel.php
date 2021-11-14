<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluguel extends Model
{
    public $table = 'aluguel';

    use HasFactory;
    use SoftDeletes;
}
