<div class="d-flex justify-content-center">
    <form class="no-padding-form" id="form-{{ $id }}">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="{{ $id }}" {{ $checked }} onChange="{{ $submitFunctionName }}(this.id)">
            <label class="custom-control-label" for="{{ $id }}"></label>
        </div>
    </form>
</div>