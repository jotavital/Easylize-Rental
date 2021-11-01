@extends('layouts.adminLayout')

@section('title', 'Editar veículo')

@section('contentTitle', 'Editar veículo')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">

    <div class="container-fluid">
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
                    <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect" name="modeloSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
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
                    <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/ativar-inativar-registro.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    var PopularSlimSelectsObj = new PopularSlimSelects();

    var dataAjax = {
        "_token": "{{ csrf_token() }}"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("{{ route('marcas.all.get') }}", "#marcaSelect", "id", "nome", dataAjax, "{{ $veiculo->marca_id }}");

    var dataAjaxModelo = {
        "_token": "{{ csrf_token() }}",
        "idMarca": "{{ $veiculo->marca_id }}"
    };
    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("{{ route('modelos.bymarca.get') }}", "#modeloSelect", "id", "nome", dataAjaxModelo, "{{ $veiculo->modelo_id }}");

    PopularSlimSelectsObj.popularSlimSelectComValorSelecionado("{{ route('categorias.veiculos.get') }}", "#categoriaVeiculoSelect", "id", "nome", dataAjax, "{{ $veiculo->categoria_id }}");

    $("#marcaSelect").on('change', function() {
        if (marcaSelect.selected() != '') {
            $('#modeloSelect').empty();
            modeloSelect.enable();

            PopularSlimSelectsObj.popularSlimSelectBasico("{{ route('modelos.bymarca.get') }}", '#modeloSelect', 'id', 'nome', dataAjaxModelo);
        } else {
            $('#modeloSelect').empty();
            modeloSelect.disable();
        }
    });
</script>

@endsection