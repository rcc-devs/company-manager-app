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
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

  <!-- @TODO: Arruma essa logo. Por amor de deus. bmartins -->

  <img src="../assets/img/logo.png" class="d-block mx-auto my-5" alt="">
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
                    <a href="#" class="text-white">Esqueceu sua senha?</a>
                </div>
            </div>
            <div class="col-md-12">
                <a href="javascript:void(0)" class="btn btn-sm btn-signup btn-block btn-primary">Registar militar</a>
            </div>
        </form>
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
    $(() => {
        $(document).on("submit", "form#login", () => {
            return false;
        })
    })
</script>
