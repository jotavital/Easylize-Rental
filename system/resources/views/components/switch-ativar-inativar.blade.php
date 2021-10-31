<?php

$dataAtivarInativar = json_encode(
    array(
        "_token" => csrf_token(),
        "idRegistro" => $id
    )
);

?>

<div class="d-flex justify-content-center">
    <form class="no-padding-form" id="form-ativar-inativar-{{ $id }}">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="{{ $id }}" {{ $checked }} onclick="ativarInativarRegistro('{{ $rotaAtivarInativar }}', '{{ $dataAtivarInativar }}')">
            <label class="custom-control-label" for="{{ $id }}"></label>
        </div>
    </form>
</div>