<section id="section-create-veiculo" class="hide-element-with-transition">
    <form id="form-create-veiculo" wire:submit.prevent="submit" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
        @csrf
        <div class="form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-3">
                <label for="placaInput">Placa <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="8" required>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-5">
                <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-4">
                <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required>
                <x-campo-obrigatorio />
            </div>
        </div>
        <div class="mb-2 form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-4">
                <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                    <option data-placeholder="true"></option>
                    @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
                    @endforeach
                </select>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-4">
                <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                <select id="modeloSelect" name="modeloSelect" disabled class="validate-select" required>
                    <option data-placeholder="true"></option>
                </select>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-2">
                <label for="corInput">Cor <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" id="corInput" name="corInput" placeholder="Cor" required>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-2">
                <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                    <option data-placeholder="true"></option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"> {{ $categoria->nome }} </option>
                    @endforeach
                </select>
                <x-campo-obrigatorio />
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
        </div>
    </form>
    <hr>
</section>