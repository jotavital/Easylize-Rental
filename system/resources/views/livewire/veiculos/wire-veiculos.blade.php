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
                    <th>Status</th>
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
                            @if($veiculo->esta_alugado)
                            <x-alert type="danger" message="Alugado" class="py-0" />
                            @else
                            <x-alert type="success" message="Disponível" class="py-0" />
                            @endif
                        </td>
                        <td>
                            <livewire:switch-ativar-inativar :wire:key="$veiculo->id" :model="$veiculo" />
                        </td>
                        <td>
                            <?php
                            $textoModalDeletar = 'Deseja realmente deletar o veículo de placa "' . $veiculo->placa . '"?';
                            $rotaEditar = route('veiculos.edit', $veiculo->id);
                            $rotaExcluir = route('veiculos.destroy', $veiculo->id);
                            ?>
                            <livewire:acoes-tabela :wire:key="$veiculo->id" :model="$veiculo" :rotaEditar="$rotaEditar" :rotaExcluir="$rotaExcluir" :textoSucessoDeletar="$textoSucessoDeletar" :textoErroDeletar="$textoErroDeletar" :tituloModalDeletar="$tituloModalDeletar" :textoModalDeletar="$textoModalDeletar" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>