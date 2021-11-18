<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    public $table = 'endereco';

    use HasFactory;
    use SoftDeletes;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
