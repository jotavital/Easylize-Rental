<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <x-alert type="success" :message="session('success')" class="col-5" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" class="col-5" />
        @endif
        
        <div wire:ignore class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableClientes">
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data nascimento</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td> {{ $cliente->nome }} </td>
                        <td> {{ $cliente->cpf }} </td>
                        <td> {{ $cliente->rg }} </td>
                        <td> {{ $cliente->cnh }} </td>
                        <td> {{ $cliente->telefone }} </td>
                        <td> {{ $cliente->email }} </td>
                        <td> {{ $cliente->data_nascimento }} </td>
                        <td> {{ $cliente->sexo }} </td>
                        <td> {{ $cliente->endereco->rua }}, n° {{ $cliente->endereco->numero }}, {{ $cliente->endereco->bairro }}, {{ $cliente->endereco->cidade }} - {{ $cliente->endereco->sigla_estado }} </td>
                        <td>
                            <?php
                            $rotaEditar = route('clientes.edit', $cliente->id);
                            $rotaExcluir = route('clientes.destroy', $cliente->id);
                            $textoModalDeletar = 'Tem certeza que deseja deletar o cliente de nome "' . $cliente->nome . '" e CPF "' . $cliente->cpf . '"?';
                            ?>
                            <livewire:acoes-tabela :wire:key="$cliente->id" :model="$cliente" :rotaEditar="$rotaEditar" :rotaExcluir="$rotaExcluir" :textoSucessoDeletar="$textoSucessoDeletar" :textoErroDeletar="$textoErroDeletar" :tituloModalDeletar="$tituloModalDeletar" :textoModalDeletar="$textoModalDeletar" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>