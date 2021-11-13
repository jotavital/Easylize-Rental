<div class="content">
    @if(session('success'))
    <x-alert type="success" :message="session('success')" />
    @elseif(session('error'))
    <x-alert type="danger" :message="session('error')" />
    @endif

    <div class="container-fluid">
        <div wire:ignore class="col-12">
            <table class="table table-striped table-bordered" width="100%" id="tableVeiculos">
                <thead>
                    <th>ID </th>
                    <th>Placa</th>
                    <th>Chassi</th>
                    <th>Renavam</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Categoria</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($veiculos as $veiculo)
                    <tr>
                        <td> {{ $veiculo->id }} </td>
                        <td> {{ $veiculo->placa }} </td>
                        <td> {{ $veiculo->chassi }} </td>
                        <td> {{ $veiculo->renavam }} </td>
                        <td> {{ $veiculo->marca->nome }} </td>
                        <td> {{ $veiculo->modelo->nome }} </td>
                        <td> {{ $veiculo->cor }} </td>
                        <td> {{ $veiculo->categoria->nome }} </td>
                        <td>
                            <livewire:switch-ativar-inativar :wire:key="$veiculo->id" :model="$veiculo" />
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="{{ route('veiculos.edit', $veiculo->id) }}" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarVeiculo({{ $veiculo->id }})" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div wire:ignore class="modal fade" id="modalDeletarVeiculo" tabindex="-1" aria-labelledby="modalDeletarVeiculo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarVeiculo">Deletar veículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar veículo de placa {{ $placa }}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarVeiculo" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>

</div>