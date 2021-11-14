<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message="session('success')" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" />
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
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <form action="{{ route('modelos.edit', $modelo->id) }}" method="GET" class="no-padding-form">
                                        <button type="submit" class="iconButton">
                                            <i class="fas fa-edit text-primary table-action-icon"></i>
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <i wire:click="modalDeletarModelo({{ $modelo->id }})" class="fas fa-trash-alt text-danger table-action-icon"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="modal fade" id="modalDeletarModelo" tabindex="-1" aria-labelledby="modalDeletarModelo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeletarModelo">Deletar modelo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletar modelo de nome "{{ $nomeModelo }}"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="deletarModelo" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div>