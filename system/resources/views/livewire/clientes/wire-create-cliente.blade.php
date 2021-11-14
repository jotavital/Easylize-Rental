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
                <div class="form-group col-sm-4">
                    <label for="nomeInput">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="nomeInput" name="nomeInput" placeholder="Nome" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="cpfInput">CPF <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cpfInput" name="cpfInput" placeholder="CPF" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="dataNascimentoInput">Data Nascimento <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm" id="dataNascimentoInput" name="dataNascimentoInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="sexoSelect">Sexo <span class="text-danger">*</span></label>
                    <select id="sexoSelect" name="sexoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="cnhInput">CNH <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cnhInput" name="cnhInput" placeholder="CNH" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="rgInput">RG <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="rgInput" name="rgInput" placeholder="RG" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="emailInput">E-mail <span class="text-danger">*</span></label>
                    <input type="email" class="form-control form-control-sm" id="emailInput" name="emailInput" placeholder="E-mail" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="tipoTelefoneSelect">Tipo de telefone <span class="text-danger">*</span></label>
                    <select id="tipoTelefoneSelect" name="tipoTelefoneSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        <option value="Celular" selected>Celular</option>
                        <option value="Fixo">Fixo</option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="telefoneInput">Telefone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="telefoneInput" name="telefoneInput" placeholder="Telefone" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="estadoSelect">Estado <span class="text-danger">*</span></label>
                    <select id="estadoSelect" name="estadoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        @foreach($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="cidadeSelect">Cidade <span class="text-danger">*</span></label>
                    <select id="cidadeSelect" name="cidadeSelect" class="validate-select" disabled required>
                        <option data-placeholder="true"></option>
                    </select>
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
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>
    </div>
</div>