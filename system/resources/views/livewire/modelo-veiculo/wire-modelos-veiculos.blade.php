<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message="session('success')" class="col-5" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" class="col-5" />
        @endif

        <section class="mb-3">
            <form action=" {{ route('modelos.store') }} " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
                @csrf
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" required>
                        <x-campo-obrigatorio />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
                        <select id="anoModeloSelect" name="anoModeloSelect" class="validate-select" required>
                            <option data-placeholder="true"></option>
                            <?php
                            foreach (range(date('Y') + 3, 1900) as $year) {
                            ?>
                                <option value="<?= $year ?>"><?= $year ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <x-campo-obrigatorio />
                    </div>
                </div>
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" required>
                        <x-campo-obrigatorio />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                        <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                            @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
                            @endforeach
                        </select>
                        <x-campo-obrigatorio />
                    </div>
                </div>
                <livewire:modelo-veiculo.input-imagens-modelo />
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
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
                            ?>
                            <livewire:acoes-tabela :wire:key="$modelo->id" :model="$modelo" :rotaEditar="$rotaEditar" :rotaExcluir="$rotaExcluir" :textoSucessoDeletar="$textoSucessoDeletar" :textoErroDeletar="$textoErroDeletar" :tituloModalDeletar="$tituloModalDeletar" :textoModalDeletar="$textoModalDeletar" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>