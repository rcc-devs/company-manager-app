<!DOCTYPE html>
<html>
<head>

  <!-- Required tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login — Gestão de companhias</title>

  <!-- Required CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/login-style.css">

</head>
<body>

  <img src="../assets/img/logo.png" class="d-block mx-auto img-fluid logo" alt="">
  <div class="container">
    <div class="d-flex justify-content-center">
        <form id="login">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Usuário">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha">
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
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>

</body>
</html>
<script>
    // jQuery functions
    (function ($) {
        'use strict';

        $(function () {
            $('form').on('submit', function (event) {
                event.preventDefault();
            });
        });
    })(jQuery);
</script>
