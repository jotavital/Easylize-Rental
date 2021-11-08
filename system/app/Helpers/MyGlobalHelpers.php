<?php

use App\Models\Empresa;

function current_empresa()
{
    return Empresa::first();
}
