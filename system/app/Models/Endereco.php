<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $table = 'endereco';

    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
