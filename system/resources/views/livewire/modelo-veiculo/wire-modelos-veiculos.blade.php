<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message="session('success')" class="col-5" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" class="col-5" />
        @endif

        <section class="mb-3">
            <livewire:modelo-veiculo.form-create-edit-modelo />
        </section>
        <hr>
        <div class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableModelos">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Motor</th>
                    <th>Marca</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                    <tr>
                        <td> {{ $modelo->id }} </td>
                        <td> {{ $modelo->nome }} </td>
                        <td> {{ $modelo->ano_modelo }} </td>
                        <td> {{ $modelo->motor }} </td>
                        <td> {{ $modelo->marca->nome }} </td>
                        <td>
                            <?php
                            $textoModalDeletar = 'Deseja realmente deletar o modelo de nome "' . $modelo->nome . '"?';
                            $rotaEditar = route('modelos.edit', $modelo->id);
                            $rotaExcluir = route('modelos.destroy', $modelo->id);
                            $alertTitle = "Atenção";
                            $alertMessage = "Se deletar este modelo, as fotos associadas a ele também serão deletadas.";
                            ?>
                            <livewire:acoes-tabela :wire:key="$modelo->id" :model="$modelo" :rotaEditar="$rotaEditar" :rotaExcluir="$rotaExcluir" :textoSucessoDeletar="$textoSucessoDeletar" :textoErroDeletar="$textoErroDeletar" :tituloModalDeletar="$tituloModalDeletar" :textoModalDeletar="$textoModalDeletar" :temAlert="1" alertType="danger" :alertTitle="$alertTitle" :alertMessage="$alertMessage" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>