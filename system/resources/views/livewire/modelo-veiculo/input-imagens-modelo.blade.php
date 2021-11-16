<div class="form-row mb-3 col-12 d-flex justify-content-center">
    <div class="mt-4 mb-3 input-group col-md-6">
        <label for="fotosInput" aria-describedby="fotosInput">Fotos <span class="text-danger">(Máximo: {{ $maximoFotos }} fotos)</span></label>
        <input type="file" wire:model="fotosInput" wire:livewire-upload-finish="validar" class="form-control-file" id="fotosInput" name="fotosInput[]" accept="image/*" multiple>
    </div>
    <div class="col-md-10 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10 col-sm-12 card card-primary card-outline">
            <div class="card-body">
                <div class="row card-headers col-12">
                    <div class="card-title">
                        <h5 class="mb-3 col-12 card-title">Fotos carregadas ({{ count($fotosInput) }})</h5>
                    </div>
                </div>
                <div class="row d-flex justify-content-center col-12">
                    <div wire:loading.flex wire:target="fotosInput" class="col-12 justify-content-center">
                        <div class="spinner">

                        </div>
                    </div>

                    @if(!$fotosInput)
                    <p><span wire:loading.remove class="text-danger">Sem fotos.</span></p>
                    @else

                    <div class="row col-12 d-flex justify-content-around">
                        @foreach($fotosInput as $foto_modelo)
                        <div class="col-md-5 col-sm-8 card d-flex align-content-between mb-3 py-1">
                            <div class="img-actions col-12">
                                <div class="img-actions-image d-flex justify-content-center align-items-center">
                                    <img src=" {{ $foto_modelo->temporaryUrl() }} " alt="imagem_{{ $foto_modelo->temporaryUrl() }}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>