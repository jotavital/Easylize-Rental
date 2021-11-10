<div class="d-flex justify-content-center">
    <form class="no-padding-form">
        <div class="custom-control custom-switch">
            <input type="checkbox" id="ativar-inativar-{{ $model->id }}" class="custom-control-input" wire:click="ativarInativar" {{ $checked }} >
            <label class="custom-control-label" for="ativar-inativar-{{ $model->id }}"></label>
        </div>
    </form>
</div>
