<div>

    @if($rotaCreate)
    <form action=" {{ route('alugueis.store') }} " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' onsubmit="sanitizarCampos();" novalidate>
        @csrf
        <div class="form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-6 col-md-4 col-lg-3">
                <label for="dataHoraSaidaInput">Data e Hora de Saída <span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control form-control-sm" id="dataHoraSaidaInput" name="dataHoraSaidaInput" required>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-6 col-md-4 col-lg-5">
                <label for="dataHoraPrevistaDevolucaoInput">Previsão Data e Hora de Devolução <span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control form-control-sm" id="dataHoraPrevistaDevolucaoInput" name="dataHoraPrevistaDevolucaoInput" required>
                <x-campo-obrigatorio />
            </div>
            <div wire:ignore class="form-group col-sm-6 col-md-3 col-lg-3">
                <label for="valorInput">Valor <span class="text-danger">*</span></label>
                <input type="text" inputmode="numeric" novalidate class="form-control form-control-sm" id="valorInput" name="valorInput" placeholder="Valor do aluguel" required>
                <x-campo-obrigatorio />
            </div>
            <div wire:ignore class="form-group col-sm-6 col-md-4 col-lg-4">
                <label for="clienteSelect">Cliente <span class="text-danger">*</span></label>
                <select id="clienteSelect" name="clienteSelect" class="form-control form-control-sm validate-select" required>
                    <option value="" selected>Selecione</option>
                    @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}"> {{ $cliente->nome }} - {{ $cliente->cpf }} </option>
                    @endforeach
                </select>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-6 col-md-3 col-lg-4">
                <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                <select wire:model="modeloSelecionado" id="modeloSelect" name="modeloSelect" class="form-control form-control-sm validate-select" required>
                    <option value="" selected>Selecione</option>
                    @foreach($modelos as $modelo)
                    <option value="{{ $modelo->id }}"> {{ $modelo->nome }} {{ $modelo->motor }} - {{ $modelo->ano_modelo }} </option>
                    @endforeach
                </select>
                <x-campo-obrigatorio />
            </div>
            <div class="form-group col-sm-6 col-md-4 col-lg-3">
                <label for="veiculoSelect">Veículo <span class="text-danger">*</span></label>
                <select id="veiculoSelect" name="veiculoSelect" class="form-control form-control-sm validate-select" disabled required>
                    <option value="" selected>Selecione</option>
                    @if($veiculos)
                    @foreach($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}"> {{ $veiculo->modelo->nome }} - {{ $veiculo->placa }} </option>
                    @endforeach
                    @endif
                </select>
                <x-campo-obrigatorio />
            </div>
        </div>
        <div class="mb-2 form-row col-12 d-flex justify-content-center">
            <div class="form-group col-sm-12 col-md-11 col-lg-6">
                <label for="observacaoInput">Observação <span class="text-danger"></span></label>
                <textarea class="form-control" name="observacaoInput" id="observacaoInput" cols="30" rows="2"></textarea>
            </div>
            <div class="pt-4 form-group col-lg-5 col-md-5 col-sm-5">
                <div class="col d-flex justify-content-center">
                    <label for="pagoInput">Está pago?</label>
                </div>
                <div class="col d-flex justify-content-center">
                    <label class="switch switch-md">
                        <input type="checkbox" name="pagoInput" id="pagoInput">
                        <span class="slider slider-md round"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
        </div>
    </form>

    @elseif($rotaEdit)

    @endif

    <script>
        function sanitizarCampos() {
            var x = $('#valorInput').val();
            x = x.replace(/[.]/gim, "");
            x = x.replace(/[,]/gim, ".");
            document.getElementById('valorInput').value = x;
        }
    </script>
</div>