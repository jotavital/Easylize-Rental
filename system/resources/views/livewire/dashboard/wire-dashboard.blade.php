<div class="">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('alugueis.index') }}" class="text-dark">
                <div class="col-12 info-box">
                    <span class="col-3 info-box-icon bg-info"><i class="fas fa-car"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Alugúeis em andamento</span>
                        <span class="info-box-number">{{ $qtdAlugueisEmAndamento }}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('alugueis.index') }}" class="text-dark">
                <div class="col-12 info-box">
                    <span class="col-3 info-box-icon bg-danger"><i class="fas fa-hand-holding-usd"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Aluguéis com pagamento pendente</span>
                        <span class="info-box-number">{{ $qtdAlugueisPagamentoPendente }}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="col-12 info-box">
                <span class="col-3 info-box-icon bg-info"><i class="fas fa-car"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sem dados ainda</span>
                    <span class="info-box-number">{{ $qtdAlugueisEmAndamento }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if($completarCadastro)
        <div class="col-lg-6 col-md-6 col-sm-12 card card-danger card-outline">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="col-9">
                    <h5 class="m-0">Complete o cadastro da sua empresa</h5>
                </div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sua empresa precisa completar o cadastro nas configurações.</h6>

                <p class="card-text">Acrescente informações como endereço, CNPJ, e outros dados essenciais.</p>
                <a href="#" class="btn btn-primary">Completar cadastro</a>
            </div>
        </div>
        @endif

    </div>
</div>