<div class="form-row mb-3 col-12 d-flex justify-content-center">
    <div class="mt-4 mb-3 input-group col-md-6">
        <label for="fotosInput" aria-describedby="fotosInput">Fotos <span class="text-danger">(Máximo: 10 fotos)</span></label>
        <input type="file" wire:model="fotosInput" class="form-control-file" id="fotosInput" name="fotosInput[]" accept="image/*" multiple>
        <button wire:click="testar">testar</button>
    </div>
    <div class="col-10 d-flex justify-content-center">
        <div class="col-8 card card-primary card-outline">
            <div class="card-body">
                <div class="row card-headers col-12">
                    <div class="card-title">
                        <h5 class="mb-3 col-12 card-title">Fotos do modelo</h5>
                    </div>
                </div>
                <div class="row d-flex justify-content-center col-12">
                    <div wire:loading.flex wire:target="fotosInput" class="col-12 justify-content-center">
                        <div class="spinner">

                        </div>
                    </div>

                    @if(!$fotosInput)
                    <p><span class="text-danger">Sem fotos.</span></p>
                    @else

                    @foreach($fotosInput as $key => $foto)
                    <div id="img-modelo-" class="img-actions col-md-6">
                        <img class="img-actions-image" src="{{ $foto->temporaryUrl() }}" alt="">

                        <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
                            <livewire:remover-imagem-preview  />
                        </div>
                    </div>
                    @endforeach

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>