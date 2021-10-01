<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- //!! nao achou  -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="{{ mix('/js/app.js') }}"> -->
    <link rel="stylesheet" href="/js/app.js">

    <title>{{ isset($_COOKIE['nome_empresa']) && Route::current()->getName() != 'showRegister' ? $_COOKIE['nome_empresa'] : "Easylize Rental" }} - @yield('title')</title>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <small style="float:right;">
            <p>Powered by Easylize Rental team - 2021. Todos os direitos reservados©</p>
        </small>
        
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js" ></script>

        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })();
        </script>
    </footer>

</body>

</html>