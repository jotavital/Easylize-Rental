<form class="no-padding-form" id="form-{{ $id }}">
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="{{ $id }}" {{ $checked }} onChange="submitAtivarInativarForm(this.id)">
        <label class="custom-control-label" for="{{ $id }}"></label>
    </div>
</form>