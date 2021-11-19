<?php

use App\Models\Empresa;
use Carbon\Carbon;

function current_empresa()
{
    return Empresa::first();
}

function current_plano_empresa()
{
    return current_empresa()->plano;
}

function formatar_data_hora($dataHora)
{
    return Carbon::parse($dataHora)->format('d/m/Y à\s H:i');
}

function formatar_real(float $val): string
{
    setlocale(LC_ALL, 'pt_BR');
    $fmt = new NumberFormatter(setlocale(LC_MONETARY, null), NumberFormatter::CURRENCY);
    $locale = localeconv();
    return $fmt->formatCurrency($val, $locale['int_curr_symbol']);
}
