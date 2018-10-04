<!DOCTYPE html>
<html>
<head>

  <!-- Required tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestão de companhias</title>

  <!-- Required CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/index-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

    <img src="../assets/img/logo.png" class="img-fluid d-block mx-auto logo">
    <div class="container">
        <div class="row content mx-auto">
            <div class="col-lg-4">
                <div class="welcome">
                    <h4>Você ainda não possui uma conta?</h4>
                    <p>A inovação anda de mãos dadas com a <strong>Polícia RCC</strong>, registre-se hoje e aproveite os recursos do sistema de <strong>Gestão de Companhias</strong>.</p>
                    <a href="" class="btn btn-outline-secondary">Registrar</a>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="divider mx-auto my-3"></div>
            </div>
            <div class="col-lg-5">
                <div class="login">
                    <h6>Entrar</h6>
                    <hr class="my-4">
                    <form>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control form-custom" placeholder="Usuário">
                            <span class="icon-input"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-custom" placeholder="Senha">
                            <span class="icon-input"><i class="fas fa-lock"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="cias">
                                <option selected>Selecione</option>
                                <option value="tre">Treinadores</option>
                                <option value="sup">Supervisores</option>
                                <option value="ins">Instrutores</option>
                                <option value="prof">Professores</option>
                                <option value="rond">Organizadores de Rondas</option>
                                <option value="efe">Escola de Formação de Executivos</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="cias">Companhias</label>
                            </div>
                        </div>
                    </form>
                    <a href="">Esqueceu sua senha?</a>
                    <button class="btn btn-block btn-custom btn-secondary">Entrar</button>
                </div>
            </div>
        </div>
    </div>


  <!-- Required JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
