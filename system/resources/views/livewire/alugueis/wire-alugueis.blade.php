<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <x-alert type="success" :message="session('success')" class="col-5" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" class="col-5" />
        @endif

        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tablealuguels">
                <thead>
                    <th>ID</th>
                    <th>Data e hora saída</th>
                    <th>Data e hora prev. devolução</th>
                    <th>Status</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($alugueis as $aluguel)
                    <tr>
                        <td> {{ $aluguel->nome }} </td>
                        <td> {{ $aluguel->cpf }} </td>
                        <td> {{ $aluguel->rg }} </td>
                        <td> {{ $aluguel->cnh }} </td>
                        <td> {{ $aluguel->telefone }} </td>
                        <td> {{ $aluguel->email }} </td>
                        <td> {{ $aluguel->data_nascimento }} </td>
                        <td> {{ $aluguel->sexo }} </td>
                        <td>
                            <?php
                            $rotaEditar = route('alugueis.edit', $aluguel->id);
                            $rotaExcluir = route('alugueis.destroy', $aluguel->id);
                            $textoModalDeletar = 'Tem certeza que deseja deletar o aluguel de nome "' . $aluguel->nome . '" e CPF "' . $aluguel->cpf . '"?';
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