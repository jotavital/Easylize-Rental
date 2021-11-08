<div class="col-12 d-flex justify-content-center">
    <div class="col-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo ({{ $qtd_fotos }})</h5>
            <div class="row d-flex justify-content-center">
                @if($modelo->fotos_modelo->isEmpty())
                <p><span class="text-danger">Sem fotos.</span></p>
                @else

                @foreach($fotos_modelo as $foto_modelo)
                <div class="img-actions col-md-6">
                    <img class="img-actions-image" src=" {{ route('images.show', $foto_modelo->path) }} " alt="imagem_{{ $modelo->nome }}">
                    <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
                        <div class="d-flex justify-content-center">
                            <div class="mr-2">
                                <a wire:click="deletarFoto({{ $foto_modelo->id }}, {{ $loop->index }})">
                                    <i class="fas fa-trash-alt fa-2x text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @endif
            </div>
        </div>
    </div>
</div>