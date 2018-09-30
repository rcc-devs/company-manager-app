<?php
    // open session
    session_start();

    // in dev - bmartins
    /* if(isset($_SESSION['rcc_main_session'])) {
        header('Location: ../login');
    } */

    $_SESSION['company_code'] = 0;
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
    <link rel="stylesheet" href="../assets/css/homepage-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom colors base in company -->
    <link rel='stylesheet' type='text/css' href='../assets/css/company-css.php' />

</head>
<body>
    <button id="test"> test </button>
    <div class="global-wrapper">
        <aside class="nav-wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-white">Gestão de Companhias</h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="active"><a href=""><i class="fas fa-home"></i> Home</a></li>
                    <li><a href=""><i class="fas fa-lightbulb"></i> Liderança</a></li>
                    <li><a href=""><i class="fas fa-gavel"></i> Ministério</a></li>
                    <li><a href=""><i class="fas fa-users"></i> Membros</a></li>
                    <li><a href=""><i class="fas fa-chalkboard-teacher"></i> Aulas</a></li>
                    <li><a href=""><i class="fas fa-medal"></i> Gratificações</a></li>
                    <li><a href=""><i class="far fa-calendar-alt"></i> Eventos</a></li>
                    <li><a href=""><i class="fas fa-layer-group"></i> Projetos</a></li>
                    <li><a href=""><i class="fas fa-th-large"></i> Utilitários</a></li>
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
            <?php
                switch($main_url) {
                    // TODO: System by database
                    default :  {
                        include '../files/home.php';
                        break;
                    }
                }
            ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="../assets/js/audCharts.js"></script>

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

            $("#test").click(() => {
                $.ajax({
                    url: "",
                    method: "POST",
                    success:function () {
                        alert("Funciona!");
                    }
                })
            })
        })
    </script>

</body>
</html>
