<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <x-alert type="success" :message="session('success')" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" />
        @endif

        <section class="col-12 mb-3">
            <form action=" {{ route('marcas.store') }} " method="POST" class="col-12 needs-validation" novalidate>
                @csrf
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-sm-3">
                        <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" required>
                        <x-campo-obrigatorio />
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
        </section>

        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableMarcas">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                    <tr>
                        <td> {{ $marca->id }} </td>
                        <td> {{ $marca->nome }} </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="{{ route('marcas.edit', $marca->id) }}" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarMarca({{ $marca->id }})" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalDeletarMarca" tabindex="-1" aria-labelledby="modalDeletarMarca" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarMarca">Deletar marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar marca de nome "{{ $nomeMarca }}"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarMarca" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div>