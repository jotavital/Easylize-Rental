@if($rotaCreate)
<form action=" {{ route('veiculos.store') }} " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
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
            <select wire:model="marcaSelecionada" id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
                @endforeach
            </select>
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-4">
            <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
            <select id="modeloSelect" name="modeloSelect" disabled class="form-control form-control-sm validate-select" required>
                @if($modelos)
                @foreach($modelos as $modelo)
                <option value="{{ $modelo->id }}"> {{ $modelo->nome }} </option>
                @endforeach
                @endif
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
            <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="form-control form-control-sm validate-select" required>
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

@elseif(@rotaEdit)

<form action=" {{ route('veiculos.update', $veiculo->id) }} " method="POST" class="col-12 needs-validation" novalidate>
    @csrf
    @method('PUT')
    <div class="form-row col-12 d-flex justify-content-center">
        <div class="form-group col-sm-3">
            <label for="placaInput">Placa <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="8" required value="{{ $veiculo->placa }}">
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-5">
            <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required value="{{ $veiculo->chassi }}">
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-4">
            <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required value="{{ $veiculo->renavam }}">
            <x-campo-obrigatorio />
        </div>
    </div>
    <div class="mb-2 form-row col-12 d-flex justify-content-center">
        <div class="form-group col-sm-4">
            <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
            <select wire:model="marcaSelecionada" id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
                @endforeach
            </select>
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-4">
            <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
            <select wire:model="modeloSelecionado" id="modeloSelect" name="modeloSelect" class="form-control form-control-sm validate-select" required>
                @if($modelos)
                @foreach($modelos as $modelo)
                <option value="{{ $modelo->id }}"> {{ $modelo->nome }} </option>
                @endforeach
                @endif
            </select>
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-2">
            <label for="corInput">Cor <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" id="corInput" name="corInput" placeholder="Cor" required value="{{ $veiculo->cor }}">
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-sm-2">
            <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
            <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="form-control form-control-sm validate-select" required>
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ ($categoria->id == $veiculo->categoria->id) ? "selected" : "" }}> {{ $categoria->nome }} </option>
                @endforeach
            </select>
            <x-campo-obrigatorio />
        </div>
    </div>
    <div class="col-sm-12 d-flex justify-content-center">
        <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
    </div>
</form>

@endif