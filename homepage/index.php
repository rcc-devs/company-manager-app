<?php
    // open session
    session_start();

    // if session = expired or null. No session yet return to login/register page
    if(!isset($_SESSION['rcc_companhias_session'])) {
        header("Location: ../login/");
        exit;
    }

    $_SESSION['company_code'] = $_SESSION['rcc_companhias_session']['pk_company'];
    // require database connection
    require("../files/database.php");

    // get command and params
    $main_url = (isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestão de companhias</title>

    <!-- Required CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/content.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom colors base in company -->
    <link rel='stylesheet' type='text/css' href='../assets/css/company-css.php' />

</head>
<body>
    <div class="global-wrapper">
        <aside class="nav-wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-white">Gestão de Companhias</h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="active"><a href=""><i class="fas fa-home"></i> Home</a></li>
                    <li>
                        <a href="#leadershipMenu" data-toggle="collapse" class="dropdown-toggle">
                            <i class="fas fa-lightbulb"></i>
                            Liderança
                        </a>
                        <ul class="collapse list-unstyled" id="leadershipMenu">
                            <li><a href=""><i class="fas fa-cogs"></i> Configurações</a></li>
                            <li><a href=""><i class="fas fa-sort"></i> Cargos</a></li>
                            <li><a href=""><i class="fas fa-layer-group"></i> Projetos</a></li>
                            <li><a href=""><i class="fas fa-archive"></i> Requerimentos</a></li>
                            <li><a href=""><i class="far fa-calendar-alt"></i> Reuniões</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ministryMenu" data-toggle="collapse" class="dropdown-toggle">
                            <i class="fas fa-gavel"></i>
                            Ministério
                        </a>
                        <ul class="collapse list-unstyled" id="ministryMenu">
                            <li><a href=""><i class="fas fa-sync-alt"></i> Atualizações</a></li>
                            <li><a href=""><i class="fas fa-calculator"></i> Calcular metas</a></li>
                            <li><a href=""><i class="fas fa-star"></i> Destaque mensal</a></li>
                            <li><a href=""><i class="fas fa-certificate"></i> Emblemas</a></li>
                            <li><a href=""><i class="fas fa-clipboard-list"></i> Seletivas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#classMenu" data-toggle="collapse" class="dropdown-toggle">
                            <i class="fas fa-chalkboard-teacher"></i>
                            Aulas
                        </a>
                        <ul class="collapse list-unstyled" id="classMenu">
                            <li><a href=""><i class="fas fa-chalkboard"></i> Supervisão para Soldados</a></li>
                            <li><a href=""><i class="fas fa-chalkboard"></i> Aula de Segurança</a></li>
                            <li><a href=""><i class="fas fa-chalkboard"></i> Aula para Promotor</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="far fa-newspaper"></i> Avisos</a></li>
                    <li><a href=""><i class="fas fa-book"></i> Documentação</a></li>
                    <li><a href=""><i class="far fa-calendar-alt"></i> Eventos</a></li>
                    <li>
                        <a href="#formMenu" data-toggle="collapse" class="dropdown-toggle">
                            <i class="fas fa-file-alt"></i>
                            Formulários
                        </a>
                        <ul class="collapse list-unstyled" id="formMenu">
                            <li><a href=""><i class="fas fa-file-signature"></i> Supervisão para Soldados</a></li>
                            <li><a href=""><i class="fas fa-file-signature"></i> Aula de Segurança</a></li>
                            <li><a href=""><i class="fas fa-file-signature"></i> Aula para Promotor</a></li>
                            <li><a href=""><i class="fas fa-file-signature"></i> Requerimentos</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="fas fa-medal"></i> Gratificações</a></li>
                    <li><a href=""><i class="fas fa-users"></i> Membros</a></li>
                    <li><a href=""><i class="fas fa-layer-group"></i> Projetos</a></li>
                    <li>
                        <a href="#utilitiesMenu" data-toggle="collapse" class="dropdown-toggle">
                            <i class="fas fa-th-large"></i>
                            Utilitários
                        </a>
                        <ul class="collapse list-unstyled" id="utilitiesMenu">
                            <li><a href=""><i class="fas fa-th-list"></i> Programas</a></li>
                            <li><a href=""><i class="fas fa-th-list"></i> Ouvidoria</a></li>
                            <li><a href=""><i class="fas fa-th-list"></i> Tutoriais</a></li>
                            <li><a href=""><i class="fas fa-th-list"></i> Links</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="far fa-question-circle"></i> Perguntas frequentes</a></li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <a href="" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Copyright" data-content="&copy; 2018 Gestão de Companhias"><i class="far fa-copyright"></i> Copyright</a>
                    </li>
                    <li>
                        <a href="" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Desenvolvedores" data-content=",SrGabriel / .Wire.- / Goufix."><i class="fas fa-code"></i> Desenvolvedores</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="content-wrapper">
            <div class="main-content">
                <nav class="navbar navbar-expand-lg navbar-dark bg-custom-company">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-custom-company">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent">
                            <i class="fas fa-align-justify"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Olá, .Wire.-</a>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">
                                            Alertas
                                            <span class="badge badge-pill badge-success">14</span>
                                        </a>
                                        <a href="" class="dropdown-item">Meu perfil</a>
                                        <a href="" class="dropdown-item">Configurações</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sair</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-search"></i></a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">
                                            Bugs
                                            <span class="badge badge-pill badge-danger">3</span>
                                        </a>
                                        <a href="" class="dropdown-item">Central de ajuda</a>
                                        <a href="" class="dropdown-item">Ferramentas do desenvolvedor</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- files zone -->
                    <?php require '../files/pages/home.php'; ?>
                <!-- files zone -->
            </div>
            <?php
                //Including footer
                include '../files/footer.php';
            ?>
        </main>
    </div>

    <!-- Required JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Additional JS -->
    <script type="text/javascript">
        $(function () {
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
            // starting tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // starting popovers
            $('[data-toggle="popover"]').popover();
        })
    </script>

</body>
</html>
