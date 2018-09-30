<!DOCTYPE html>
<html>
<head>

  <!-- Required tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login — Gestão de companhias</title>

  <!-- Required CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/login-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

  <img src="../assets/img/logo.png" class="d-block mx-auto img-fluid logo" alt="">
  <div class="container">
    <div class="d-flex justify-content-center">
        <form id="login">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Usuário">
                <div id="error-email" class="alert mt-1 alert-danger alert-dismissible fade show error-input" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="text-error-email"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha">
                <div id="error-password" class="alert mt-1 alert-danger alert-dismissible fade show error-input" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="text-error-password"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-lgn mb-2">Login</button>
            <div class="row painel-options-login">
                <div class="col-md-5">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label text-white" for="Check">Permanecer conectado</label>
                    </div>
                </div>
                <div class="col-md-2">
                   <div class="headerDivider"></div>
                </div>
                <div class="col-md-5">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#recuperarSenha">Esqueceu sua senha?</a>
                </div>
            </div>
            <div class="col-md-12">
                <a href="javascript:void(0)" class="btn btn-sm btn-signup btn-block btn-primary">Registre-se</a>
            </div>
        </form>
      </div>
  </div>
  <div class="modal fade" tabindex="-1" id="recuperarSenha">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Recupere a sua senha</h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Insira o seu endereço de email abaixo. Você receberá um email com um link para redefinir sua senha.</p>
                <div class="form-group">
                    <label for="emailReset"><small class="text-danger">*</small> Endereço de email</label>
                    <input type="email" class="form-control" id="emailReset" required>
                </div>
                <button type="button" class="btn btn-success">Resetar senha</button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Voltar</button>
              </div>
          </div>
      </div>
  </div>


  <!-- Required JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

</body>
</html>
<script>
    // jQuery functions
    (function ($) {
        'use strict';

        $(function () {
            $('form').on('submit', function (event) {
                var email = $("input[type='email']").val();
                var password = $("input[type='password']").val();
                var check_session = $("#Check").is(":checked");

                var error = 0;

                if(email === '') {
                    $('#text-error-email').html('<strong>*</strong> Campo <strong>obrigatório<strong>');
                    $('#error-email').slideDown("fast");
                    error = 1;
                } else {
                    $('#error-email').slideUp("fast");
                }

                if(password === '') {
                    $('#text-error-password').html('<strong>*</strong> Campo <strong>obrigatório<strong>');
                    $('#error-password').slideDown("fast");
                    error = 1;
                } else {
                    $('#error-password').slideUp('fast');
                }

                if(error === 1)
                    event.preventDefault();
            });
        });
        // starting alerts
        $(".alert").alert();
    })(jQuery);
</script>
