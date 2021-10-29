<div class="d-flex justify-content-center">
    <div class="mr-2">
        <form action="{{ route('veiculos.index') }}" method="GET" class="no-padding-form">
            <input type="hidden" name="idVeiculoEditar" value="{{ $id }}">
            <button type="submit" class="iconButton">
                <i class="fas fa-edit text-primary table-action-icon"></i>
            </button>
        </form>
    </div>
    <div>
        <i class="fas fa-trash-alt text-danger table-action-icon"></i>
    </div>
</div>