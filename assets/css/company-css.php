<?php
  session_start();
  header("Content-type: text/css; charset: UTF-8");

  $options = array();

  // Mudem entre 0 ou 1 -> VER FICHEIRO: company-css.php em /assets/css
  $company = $_SESSION['company_code'];

  switch($company) {
      // INS
    case 1: {
      $options["color"] = 'linear-gradient(90deg, #3E2723, #795548)';
      $options["hover"] = '#3E2723';
      $options["rgba"] = 'rgba(62, 39, 35, 0.5)';
      $options["outline"] = '#3E2723';
      break;
    }
    // EFE
    case 2: {
        $options["color"] = ' linear-gradient(90deg, #2196F3, #03A9F4)';
        $options["hover"] = '#2196F3';
        $options["rgba"] = 'rgba(33, 150, 243, 0.5)';
        $options["outline"] = '#2196F3';
        break;
    }
    // SUP
    case 3: {
      $options["color"] = 'linear-gradient(90deg, #4CAF50, #8BC34A)';
      $options["hover"] = '#4CAF50';
      $options["rgba"] = 'rgba(76, 175, 80, 0.5)';
      $options["outline"] = '#4CAF50';
      break;
    }
    // TRE
    case 4: {
      $options["color"] = 'linear-gradient(90deg, #b71c1c, #f44336)';
      $options["hover"] = '#b71c1c';
      $options["rgba"] = 'rgba(183, 28, 28, 0.5)';
      $options["outline"] = '#b71c1c';
      break;
    }
    // PROF
    case 5: {
      $options["color"] = 'linear-gradient(90deg, #673AB7, #3F51B5)';
      $options["hover"] = '#673AB7';
      $options["rgba"] = 'rgba(103, 58, 183, 0.5)';
      $options["outline"] = '#673AB7';
      break;
    }
    // ROND
    case 6: {
      $options["color"] = 'linear-gradient(90deg, #FF9800, #FFC107)';
      $options["hover"] = '#FF9800';
      $options["rgba"] = 'rgba(255, 152, 0, 0.5)';
      $options["outline"] = '#FF9800';
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
