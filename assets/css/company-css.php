<?php
  session_start();
  header("Content-type: text/css; charset: UTF-8");

  $options = array();

  // Mudem entre 0 ou 1 -> VER FICHEIRO: company-css.php em /assets/css
  $company = $_SESSION['company_code'];

  switch($company) {
    case 0: {
      $options["color"] = 'linear-gradient(90deg, #4CAF50, #8BC34A)';
      $options["hover"] = '#4CAF50';
      $options["rgba"] = 'rgba(76, 175, 80, 0.5)';
      $options["outline"] = '#4CAF50';
      break;
    }
    case 1: {
      $options["color"] = 'linear-gradient(90deg, #673AB7, #3F51B5)';
      $options["hover"] = '#673AB7';
      $options["rgba"] = 'rgba(103, 58, 183, 0.5)';
      $options["outline"] = '#673AB7';
      break;
    }
  }
?>

#sidebar ul li.active>a,
#sidebar ul li a:hover {
  color: #fff;
  background: <?php echo $options["hover"] ?> !important;
}

.bg-custom-company{
  background: <?php echo $options["color"] ?>
}

.btn-custom-company {
  background: <?php echo $options["hover"] ?>;
  border-color: <?php echo $options["hover"] ?>;
  color: #fff;
}

.btn-custom-company:hover{
  background: <?php echo $options["hover"] ?>
}

.btn-custom-company:focus {
  box-shadow: 0 0 0 0.2rem <?php echo $options["rgba"] ?>;
}

.btn-outline-company {
  color: <?php echo $options["outline"] ?>;
  background-color: transparent;
  background-image: none;
  border-color: <?php echo $options["outline"] ?>;
}

.btn-outline-company:hover {
  color: #fff;
  background: <?php echo $options["color"] ?>;
  border-color: <?php echo $options["outline"] ?>;
}

footer {
  background: <?php echo $options["color"] ?>
}
