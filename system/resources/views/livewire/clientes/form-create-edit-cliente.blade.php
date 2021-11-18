@if($rotaCreate)
<!-- !! formulario de criação -->
<div class="col-12 d-flex justify-content-center form-create-cliente">
    <form action=" {{ route('clientes.store') }} " method="POST" class="col-lg-8 col-md-12 col-sm-12 needs-validation" enctype='multipart/form-data' novalidate>
        @csrf
        <div class="form-section mb-3">
            <h6><strong class="text-primary">Dados pessoais</strong></h6>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4 col-sm-5">
                    <label for="nomeInput">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="nomeInput" name="nomeInput" placeholder="Nome" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="dataNascimentoInput">Data Nascimento <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm" id="dataNascimentoInput" name="dataNascimentoInput" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4 col-sm-3">
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
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="cpfInput">CPF <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cpfInput" name="cpfInput" placeholder="CPF" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="rgInput">RG <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="rgInput" name="rgInput" placeholder="RG" maxlength="15" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="cnhInput">CNH <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cnhInput" name="cnhInput" placeholder="CNH" maxlength="12" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-5">
                    <label for="emailInput">E-mail <span class="text-danger">*</span></label>
                    <input type="email" class="form-control form-control-sm" id="emailInput" name="emailInput" placeholder="E-mail" maxlength="100" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="tipoTelefoneSelect">Tipo de telefone <span class="text-danger">*</span></label>
                    <select id="tipoTelefoneSelect" name="tipoTelefoneSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        <option value="Celular" selected>Celular</option>
                        <option value="Fixo">Fixo</option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="telefoneInput">Telefone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="telefoneInput" name="telefoneInput" placeholder="Telefone" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
        </div>
        <div class="form-section mb-3">
            <h6><strong class="text-primary">Endereço</strong></h6>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
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
                <div class="form-group col-sm-4">
                    <label for="cepInput">CEP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cepInput" name="cepInput" placeholder="CEP" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="ruaInput">Rua <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="ruaInput" name="ruaInput" placeholder="Rua" maxlength="90" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="bairroInput">Bairro <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="bairroInput" name="bairroInput" placeholder="Bairro" maxlength="45" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="numeroInput">Número <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="numeroInput" name="numeroInput" placeholder="Número" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
        </div>
        <div class="col-sm-12 mb-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
        </div>
    </form>
</div>

@elseif($rotaEdit)
<!-- !! formulario de edição -->
<div class="col-12 d-flex justify-content-center form-create-cliente">
    <form action=" {{ route('clientes.update', $cliente->id) }} " method="POST" class="col-lg-8 col-md-12 col-sm-12 needs-validation" enctype='multipart/form-data' novalidate>
        @csrf
        @method('PUT')
        <div class="form-section mb-3">
            <h6><strong class="text-primary">Dados pessoais</strong></h6>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4 col-sm-5">
                    <label for="nomeInput">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="nomeInput" name="nomeInput" placeholder="Nome" value="{{ $cliente->nome }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4 col-sm-4">
                    <label for="dataNascimentoInput">Data Nascimento <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-sm" id="dataNascimentoInput" name="dataNascimentoInput" value="{{ $cliente->data_nascimento }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4 col-sm-3">
                    <label for="sexoSelect">Sexo <span class="text-danger">*</span></label>
                    <select id="sexoSelect" name="sexoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        <option value="Masculino" {{ $sexoMasculinoSelected }} >Masculino</option>
                        <option value="Feminino" {{ $sexoFemininoSelected }} >Feminino</option>
                        <option value="Outro" {{ $sexoOutroSelected }} >Outro</option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="cpfInput">CPF <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cpfInput" name="cpfInput" placeholder="CPF" value="{{ $cliente->cpf }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="rgInput">RG <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="rgInput" name="rgInput" placeholder="RG" maxlength="15" value="{{ $cliente->rg }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="cnhInput">CNH <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cnhInput" name="cnhInput" placeholder="CNH" maxlength="12" value="{{ $cliente->cnh }}" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-5">
                    <label for="emailInput">E-mail <span class="text-danger">*</span></label>
                    <input type="email" class="form-control form-control-sm" id="emailInput" name="emailInput" placeholder="E-mail" maxlength="100" value="{{ $cliente->email }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="tipoTelefoneSelect">Tipo de telefone <span class="text-danger">*</span></label>
                    <select id="tipoTelefoneSelect" name="tipoTelefoneSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        <option value="Celular" {{ $celularSelected }} >Celular</option>
                        <option value="Fixo" {{ $fixoSelected }} >Fixo</option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-3">
                    <label for="telefoneInput">Telefone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="telefoneInput" name="telefoneInput" placeholder="Telefone" value="{{ $cliente->telefone }}" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
        </div>
        <div class="form-section mb-3">
            <h6><strong class="text-primary">Endereço</strong></h6>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="estadoSelect">Estado <span class="text-danger">*</span></label>
                    <select id="estadoSelect" name="estadoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        @foreach($estados as $estado)
                        <option value="{{ $estado->id }}" {{ ($estado->id == $cliente->endereco->estado_id) ? "selected" : "" }} >{{ $estado->nome }}</option>
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="cidadeSelect">Cidade <span class="text-danger">*</span></label>
                    <select id="cidadeSelect" name="cidadeSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="cepInput">CEP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="cepInput" name="cepInput" placeholder="CEP" value="{{ $cliente->endereco->cep }}" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="ruaInput">Rua <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="ruaInput" name="ruaInput" placeholder="Rua" maxlength="90" value="{{ $cliente->endereco->rua }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="bairroInput">Bairro <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="bairroInput" name="bairroInput" placeholder="Bairro" maxlength="45" value="{{ $cliente->endereco->bairro }}" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="numeroInput">Número <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="numeroInput" name="numeroInput" placeholder="Número" value="{{ $cliente->endereco->numero }}" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
        </div>
        <div class="col-sm-12 mb-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
        </div>
    </form>
</div>

@endif