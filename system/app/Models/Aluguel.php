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

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function ocorrencia()
    {
        return $this->belongsTo(Ocorrencia::class);
    }

    public function status()
    {
        return $this->belongsTo(StatusAluguel::class);
    }

    public static function getQtdTotalAlugueisEmAndamento()
    {
        $alugueis = Aluguel::all()->where('status_id', '=', 1);
        return count($alugueis);
    }
}
