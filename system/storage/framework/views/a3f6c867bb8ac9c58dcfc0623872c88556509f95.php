

<?php $__env->startSection('title', 'Cadastro'); ?>

<?php $__env->startSection('content'); ?>

<style>
    small {
        font-size: .8em;
    }
</style>

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center flex-column">

        <h1 class="mb-4 d-flex justify-content-center text-center">Cadastro</h1>

        <div class="col-md-12 d-flex justify-content-center">
            <form action="" id="registerForm" class="col-md-6 form-floating needs-validation" method="POST" novalidate>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário da empresa" required>
                    <div class="invalid-feedback" id="invalid-usuario">

                    </div>
                    <small class="d-flex">Sua equipe usará este nome para acessar sua empresa. Ex.: easylizerental.com/nome_usuario </small>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de acesso" required>
                    <div class="invalid-feedback" id="invalid-senha">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="nome_empresa" class="form-label">Nome da empresa</label>
                    <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="Nome da empresa" required>
                    <div class="invalid-feedback" id="invalid-senha">
                        Preencha este campo.
                    </div>
                </div>

                <?php if(session('message')): ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        <small>
                            <p class="p-0 m-0" style="text-align:center;">
                                <?php echo e(session('message')); ?>

                            </p>
                        </small>
                    </div>
                </div>
                <?php endif; ?>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="mt-3 btn btn-success btn-rounded">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script src="js/verify_company_username.js"></script>
<script>
    window.onload = function() {

        var usuarioInput = document.getElementById('usuario');
        var senhaInput = document.getElementById('senha');
        var usuarioInputValue;
        var senhaInputValue;
        var invalidFeedbackUsernameDiv = document.getElementById('invalid-usuario');
        var invalidFeedbackUsernameTooShort = document.createTextNode('O nome de usuário é muito curto.');
        var invalidFeedbackUsernameExists = document.createTextNode('O nome de usuário já existe.');
        var invalidFeedbackSenhaDiv = document.getElementById('invalid-senha');
        var invalidFeedbackSenhaTooShort = document.createTextNode('A senha é muito curta. Mínimo 8 caracteres.');
        var companies;
        const passwordMinLenght = 8;
        var verifyUsernameObj = new VerifyCompanyUsername();

        $.ajax({
            url: "/getAllCompanies",
            type: "post",
            async: false,
            data: {},
            dataType: "json",
            success: function(response) {
                companies = response;
            }
        });

        function verifyUsername(usuarioInputValue) {
            var usernameTooShort = verifyUsernameObj.usernameTooShort(usuarioInput);
            var userNameExists = verifyUsernameObj.usernameExists(companies, usuarioInputValue);

            invalidFeedbackUsernameDiv.innerHTML = '';
            if (usernameTooShort) {
                usuarioInput.classList.add('is-invalid');
                invalidFeedbackUsernameDiv.appendChild(invalidFeedbackUsernameTooShort);
            } else if (userNameExists) {
                usuarioInput.classList.add('is-invalid');
                invalidFeedbackUsernameDiv.appendChild(invalidFeedbackUsernameExists);
            } else {
                usuarioInput.classList.remove('is-invalid');
                usuarioInput.classList.add('is-valid');
            }

        }

        usuarioInput.onblur = function() {
            usuarioInputValue = $(usuarioInput).val();

            verifyUsername(usuarioInputValue);
        }

        senhaInput.onblur = function() {

            console.log($(senhaInput).val().length);
            invalidFeedbackSenhaDiv.innerHTML = '';
            if ($(senhaInput).val().length < passwordMinLenght) {
                senhaInput.classList.add('is-invalid');
                invalidFeedbackSenhaDiv.appendChild(invalidFeedbackSenhaTooShort);
            } else {
                senhaInput.classList.remove('is-invalid');
                senhaInput.classList.add('is-valid');
            }
        }

    }
</script>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Faculdade\6 sem\eng software 2\Easylize-Rental\system\resources\views/register.blade.php ENDPATH**/ ?>