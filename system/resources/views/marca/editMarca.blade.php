@extends('layouts.adminLayout')

@section('title', 'Editar Marca')

@section('contentTitle', 'Editar marca de veículo')

@section('frota-menu-active', 'active')
@section('marcas-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">

    <div class="container-fluid">
        <form action=" {{ route('marcas.update', $marca->id) }} " method="POST" class="col-12 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" value="{{ $marca->nome }}" required>
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
    PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado("{{ route('marcas.all.get') }}", "#marcaSelect", "id", "nome", dataAjax, "{{ $marca->marca_id }}");

    var dataAjaxModelo = {
        "_token": "{{ csrf_token() }}",
        "idMarca": "{{ $marca->marca_id }}"
    };
    PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado("{{ route('modelos.bymarca.get') }}", "#modeloSelect", "id", "nome", dataAjaxModelo, "{{ $marca->modelo_id }}");

    PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado("{{ route('categorias.veiculos.get') }}", "#categoriaVeiculoSelect", "id", "nome", dataAjax, "{{ $marca->categoria_id }}");

    $("#marcaSelect").on('change', function() {
        if (marcaSelect.selected() != '') {
            $('#modeloSelect').empty();
            modeloSelect.enable();

            PopularSlimSelectsObj.popularSlimSelectAjaxBasico("{{ route('modelos.bymarca.get') }}", '#modeloSelect', 'id', 'nome', dataAjaxModelo);
        } else {
            $('#modeloSelect').empty();
            modeloSelect.disable();
        }
    });
</script>

@endsection