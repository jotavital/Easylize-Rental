<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <x-alert type="success" :message="session('success')" class="col-5" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" class="col-5" />
        @endif

        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableAlugueis">
                <thead>
                    <th>ID</th>
                    <th>Data e hora saída</th>
                    <th>Data e hora prev. devolução</th>
                    <th>Valor</th>
                    <th>Pago</th>
                    <th>Veículo</th>
                    <th>Cliente - CPF</th>
                    <th>Status</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($alugueis as $aluguel)
                    <tr>
                        <td> {{ $aluguel->id }} </td>
                        <td> {{ formatar_data_hora($aluguel->data_hora_inicio) }} </td>
                        <td> {{ formatar_data_hora($aluguel->data_hora_prevista_devolucao) }} </td>
                        <td> {{ formatar_real($aluguel->valor) }} </td>
                        <td> 
                            @if($aluguel->pago)
                            <x-alert type="success" message="Pago" />
                            @else
                            <x-alert type="danger" message="Pendente" />
                            @endif
                        </td>
                        <td> {{ $aluguel->veiculo->placa }} </td>
                        <td> {{ $aluguel->cliente->nome }} - {{ $aluguel->cliente->cpf }} </td>
                        <td> 
                            <x-alert type="{{ $aluguel->status->tipo_alert }}" :message="$aluguel->status->descricao" />
                        </td>
                        <td>
                            <?php
                            $rotaEditar = route('alugueis.edit', $aluguel->id);
                            $rotaExcluir = route('alugueis.destroy', $aluguel->id);
                            $textoModalDeletar = 'Tem certeza que deseja deletar o aluguel ID "' . $aluguel->id . '"?';
                            ?>
                            <livewire:acoes-tabela :wire:key="$aluguel->id" :model="$aluguel" :rotaEditar="$rotaEditar" :rotaExcluir="$rotaExcluir" :textoSucessoDeletar="$textoSucessoDeletar" :textoErroDeletar="$textoErroDeletar" :tituloModalDeletar="$tituloModalDeletar" :textoModalDeletar="$textoModalDeletar" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>