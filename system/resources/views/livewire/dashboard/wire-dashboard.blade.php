<div>
    @if($completarCadastro)
    <div class="col-6">
        <div class="card card-danger card-outline">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="col-9">
                    <h5 class="m-0">Complete o cadastro da sua empresa</h5>
                </div>
                <div class="card-tools">
                    <!-- This will cause the card to collapse when clicked -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <!-- This will cause the card to be removed when clicked -->
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sua empresa precisa completar o cadastro nas configurações.</h6>

                <p class="card-text">Acrescente informações como endereço, CNPJ, e outros dados essenciais.</p>
                <a href="#" class="btn btn-primary">Completar cadastro</a>
            </div>
        </div>
    </div>
    @endif

    <div class="row col-12">
        <div class="col-3">
            <div class="col-12">
                <div class="small-box bg-info">
                    <div class="col-6 inner">
                        <h3 class="text-center">{{ $qtdAlugueisEmAndamento }}</h3>
                        <p class="text-center"> {{ ($qtdAlugueisEmAndamento == 1) ? 'Aluguel em andamento' : 'Aluguéis em andamento' }} </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <a href="{{ route('alugueis.index') }}" class="small-box-footer">
                        Ver todos <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="col-12">
                <div class="small-box bg-danger">
                    <div class="col-6 inner">
                        <h3 class="text-center">{{ $qtdAlugueisPagamentoPendente }}</h3>
                        <p class="text-center"> {{ ($qtdAlugueisPagamentoPendente == 1) ? 'Aluguel com pagamento pendente' : 'Aluguéis com pagamento pendente' }} </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <a href="{{ route('alugueis.index') }}" class="small-box-footer">
                        Ver todos <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-12">
        <div class="col-6">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">410</span>
                </div>
            </div>
        </div>

    </div>
</div>