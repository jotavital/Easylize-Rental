<?php

use App\Models\Empresa;

function current_empresa()
{
    return Empresa::first();
}

function current_plano_empresa()
{
    return current_empresa()->plano;
}
