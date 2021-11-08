@extends('layouts.adminLayout')

@section('title', 'Editar Modelo')

@section('contentTitle', 'Editar modelo de veículo')

@section('frota-menu-active', 'active')
@section('modelos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <section class="mb-3">
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
                        <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" value=" {{ $modelo->motor }} " required>
                        <x-campo-obrigatorio />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                        <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                            <option data-placeholder="true"></option>
                        </select>
                        <x-campo-obrigatorio />
                    </div>
                </div>
                <livewire:modelo-veiculo.input-imagens-modelo />
                <hr>
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-8 card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="mb-3 col-12 card-title">Fotos do modelo</h5>

                            <div class="row d-flex justify-content-center">
                                @if($modelo->fotos_modelo->isEmpty())
                                <p><span class="text-danger">Sem fotos.</span></p>
                                @else

                                @foreach($modelo->fotos_modelo as $foto_modelo)
                                <div id="img-modelo-{{ $foto_modelo->id }}" class="img-actions col-md-6">
                                    <img class="img-actions-image" src=" {{ route('images.show', $foto_modelo->path) }} " alt="imagem_{{ $modelo->nome }}">

                                    <div class="img-actions-overlay col-12 d-flex justify-content-center align-items-center">
                                        <x-acoes-imagem id="{{ $foto_modelo->id }}" />
                                    </div>
                                </div>
                                @endforeach

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
                </div>
            </form>
        </section>
    </div>
</div>

@endsection

@section('script')

<script>
    var anoModelo = "{{ $modelo->ano_modelo }}"; // ! esta variável é iniciada agora pois é usada no script de inicializar os selects
</script>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    window.onload = function() {

        PopularSlimSelectsObj = new PopularSlimSelects();

        //! popular select marca
        var dataAjaxMarca = {
            "_token": "{{ csrf_token() }}"
        };
        PopularSlimSelectsObj.popularSlimSelectAjaxComValorSelecionado("{{ route('marcas.all.get') }}", "#marcaSelect", "id", "nome", dataAjaxMarca, "{{ $modelo->marca_id }}");

        $("[id^='delete-photo-']").click(function(event) {
            var idFoto = $(this).data('id');
            var url = '{{ route("fotos_modelo_veiculo.destroy", ":idFoto") }}';
            url = url.replace(':idFoto', idFoto);
            divImgModelo = "#img-modelo-" + event.currentTarget.dataset.id;


            $.ajax({
                type: "DELETE",
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    $(divImgModelo).remove();
                },
                statusCode: {
                    500: function(response) {
                        alert("Não foi possível excluir esta foto, tente novamente.");
                    }
                }

            });
        })
    }
</script>

@endsection