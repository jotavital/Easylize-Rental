<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <x-alert type="success" :message="session('success')" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" />
        @endif

        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableMarcas">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td> {{ $cliente->id }} </td>
                        <td> {{ $cliente->nome }} </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="{{ route('clientes.edit', $cliente->id) }}" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarCliente({{ $cliente->id }})" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalDeletarCliente" tabindex="-1" aria-labelledby="modalDeletarCliente" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarCliente">Deletar cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar cliente de nome "{{ $nomeCliente }}" e CPF "{{ $cpfCliente }}" ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarCliente" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div>