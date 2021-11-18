@if($rotaCreate)
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
            <select id="anoModeloSelect" name="anoModeloSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
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
            <select id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
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

@elseif($rotaEdit)

<form action=" {{ route('modelos.update', $modelo->id) }} " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
    @csrf
    @method('PUT')
    <div class="form-row col-12 d-flex justify-content-center">
        <div class="form-group col-md-4">
            <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" value=" {{ $modelo->nome }} " required>
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-md-4">
            <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
            <select id="anoModeloSelect" name="anoModeloSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
                <?php
                foreach (range(date('Y') + 3, 1900) as $year) {
                ?>
                    <option value="<?= $year ?>" {{ ($modelo->ano_modelo == $year) ? "selected" : "" }}><?= $year ?></option>
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
            <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" value=" {{ $modelo->motor }} " required>
            <x-campo-obrigatorio />
        </div>
        <div class="form-group col-md-4">
            <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
            <select id="marcaSelect" name="marcaSelect" class="form-control form-control-sm validate-select" required>
                <option value="" selected>Selecione</option>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}" {{ ($marca->id == $modelo->marca->id) ? "selected" : "" }}> {{ $marca->nome }} </option>
                @endforeach
            </select>
            <x-campo-obrigatorio />
        </div>
    </div>
    <livewire:modelo-veiculo.input-imagens-modelo :modelo="$modelo" />
    <hr>
    <livewire:modelo-veiculo.card-fotos-modelo-veiculo :modelo="$modelo" />
    <div class="col-sm-12 d-flex justify-content-center">
        <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
    </div>
</form>

@endif