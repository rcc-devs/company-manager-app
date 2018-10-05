<?php
    session_start();
    if(isset($_SESSION['rcc_companhias_session'])) {
        header("Location: ../homepage/");
        exit;
    }
?>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <style>
      #main_content {
        display: none;
      }
  </style>
</head>
<body>

    <div id="main_content">
    </div>

  <!-- Required JS -->

</body>
</html>
<script>

    // jQuery functions
    (function ($) {
        'use strict';

        //events
         $('form').on('submit', function (event) {
            var username_rcc = $("input[type='text']").val();
            var password_rcc = $("input[type='password']").val();
            var check_session_rcc = $("#Check").is(":checked");

            var error = 0;

            if(username_rcc === '') {
                $('#text-error-username').html('<strong>*</strong> Campo <strong>obrigatório<strong>');
                $('#error-username').slideDown("fast");
                error = 1;
            } else {
                $('#error-username').slideUp("fast");
            }

            if(password_rcc === '') {
                $('#text-error-password').html('<strong>*</strong> Campo <strong>obrigatório<strong>');
                $('#error-password').slideDown("fast");
                error = 1;
            } else {
                $('#error-password').slideUp('fast');
            }
            if(error != 1) {
                $.ajax({
                    url: '../files/connect.php',
                    method: 'POST',
                    dataType: 'text',
                    data : {
                        username_rcc      : username_rcc,
                        password_rcc      : password_rcc,
                        check_session_rcc : check_session_rcc
                    },
                    success : function (response) {
                        if(response == 1){
                            location.replace('../homepage/');
                            return;
                        }else {
                            //Sweet alert definition
                            swal({
                                title: 'Falha na Autenticação',
                                text: 'O usuário e/ou senha fornecidos estão incorreto(s).',
                                type: 'error',
                                confirmButtonText: 'Tentar novamente'
                            })
                        }
                        // clear inputs
                        $("input[type='text']").val("");
                        $("input[type='password']").val("");
                    },
                    error : function () {
                        alert("Ocorreu um erro inesperado!");
                    }
                })
            }
            event.preventDefault();
        });

        $(document).on('click', '#trigger_register_button', function() {
            $('#main_content').hide('430', function() {
                updateMain(1);
            });
            event.preventDefault();
        });

        $(document).on('click', '#trigger_login_button', function () {
            $('#main_content').hide('430', function() {
                updateMain(0);
            });
            event.preventDefault();
        })

        // start layout in login mode {0}
        updateMain(0);

        // starting alerts
        $(".alert").alert();

    })(jQuery);

    function updateMain(x) {
        var file = '';

        if(x === 0) {
            file = 'login.php';
        }else if(x === 1) {
            file = 'register.php';
        }

        // require file and get content to show it
        $.ajax({
            url: './' + file,
            dataType: 'text',
            method: 'POST',
            success : function (response){
                $('#main_content').html(response);
                $('#main_content').fadeIn('fast');
            },
            error : function () {
                $('#main_content').html('<font color="white"><h3>Ocorreu um erro interno! - contate o administrador</h3></font>');
            }
        })

    }
</script>
