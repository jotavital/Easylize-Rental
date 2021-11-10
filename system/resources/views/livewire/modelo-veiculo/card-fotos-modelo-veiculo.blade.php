<div class="row col-12 d-flex justify-content-center">
    <div class="col-md-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo ({{ $qtd_fotos }})</h5>

            @if($modelo->fotos_modelo->isEmpty())
            <div class="row d-flex justify-content-center">
                <p><span class="text-danger">Sem fotos.</span></p>
            </div>
            @else

            <div class="row col-12 d-flex justify-content-around">
                @foreach($fotos_modelo as $foto_modelo)
                <div class="col-md-5 col-sm-8 card d-flex align-content-between mb-3">
                    <div class="img-actions col-12">
                        <div class="img-actions-image d-flex align-items-center">
                            <img src=" {{ route('images.show', $foto_modelo->path) }} " alt="imagem_{{ $modelo->nome }}">
                        </div>
                        <hr>
                        <div class="col-12 img-actions-overlay d-flex justify-content-center">
                            <a wire:click="deletarFoto({{ $foto_modelo->id }}, {{ $loop->index }})">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                            <a href="{{ route('images.show', $foto_modelo->path) }}" target="_blank">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a wire:click="baixarFoto('{{ $foto_modelo->path }}')">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </div>
    </div>
</div>