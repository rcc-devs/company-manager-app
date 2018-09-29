<?php
    // open session
    session_start();

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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/homepage-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                <ul class="list-unstyled ABT">
                    <li><a href="" class="copy" data-toggle="popover" data-trigger="focus" title="Copyright" data-content="&copy; 2018 Gestão de Companhias">Copyright</a></li>
                    <li><a href="" class="copy" data-toggle="popover" data-trigger="focus" title="Desenvolvedores" data-content="Desenvolvido por: ,SrGabriel & .Wire.-">Desenvolvedores</a></li>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- Additional JS -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>

</body>
</html>
