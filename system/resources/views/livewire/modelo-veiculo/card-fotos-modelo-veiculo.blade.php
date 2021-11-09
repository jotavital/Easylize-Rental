<div class="col-12 d-flex justify-content-center">
    <div class="col-8 card card-primary card-outline">
        <div class="card-body">
            <h5 class="mb-3 col-12 card-title">Fotos do modelo ({{ $qtd_fotos }})</h5>
            <div class="row d-flex justify-content-center">
                @if($modelo->fotos_modelo->isEmpty())
                <p><span class="text-danger">Sem fotos.</span></p>
                @else

                @foreach($fotos_modelo as $foto_modelo)
                <div class="d-flex justify-content-center align-content-between flex-wrap img-actions col-md-6 mb-5">
                    <div class="row img-actions-image d-flex align-items-center">
                        <img src=" {{ route('images.show', $foto_modelo->path) }} " alt="imagem_{{ $modelo->nome }}">
                    </div>
                    <div class="col-12 row img-actions-overlay">
                        <div class="col-12 d-flex justify-content-center">
                            <a wire:click="deletarFoto({{ $foto_modelo->id }}, {{ $loop->index }})">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                @endif
            </div>
        </div>
    </div>
</div>