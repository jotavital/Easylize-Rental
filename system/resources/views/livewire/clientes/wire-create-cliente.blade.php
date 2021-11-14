<div class="content">

    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message='$success' />
        @elseif(session('error'))
        <x-alert type="danger" :message='$error' />
        @endif

        <form action=" {{ route('clientes.store') }} " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
            @csrf
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-2">
                    <label for="dataInicioInput">Data Início <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm" id="dataInicioInput" name="dataInicioInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="horaInicioInput">Hora de Início <span class="text-danger">*</span></label>
                    <input type="time" class="form-control form-control-sm" id="horaInicioInput" name="horaInicioInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="dataPrevistaDevolucaoInput">Data Prevista Devolução <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm" id="dataPrevistaDevolucaoInput" name="dataPrevistaDevolucaoInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="horaDevolucaoInput">Hora de Devolução <span class="text-danger">*</span></label>
                    <input type="time" class="form-control form-control-sm" id="horaDevolucaoInput" name="horaDevolucaoInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="valorInput">Valor <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="valorInput" name="valorInput" placeholder="Valor do aluguel" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="veiculoSelect">Veículo <span class="text-danger">*</span></label>
                    <select id="veiculoSelect" name="veiculoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4">
                    <div class="custom-control custom-switch">
                        <label class="custom-control-label" for="ativar-inativar">Pago?</label>
                        <input type="checkbox" id="ativar-inativar" class="custom-control-input" checked>
                    </div>
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="observacaoInput">Observação <span class="text-danger"></span></label>
                    <textarea class="form-control" name="observacaoInput" id="observacaoInput" cols="30" rows="2"></textarea>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>
    </div>
</div>