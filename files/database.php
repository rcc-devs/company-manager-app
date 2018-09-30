<?php
// define global vars
global $pdo, $options;

define('MYSQL_CONN_ERROR', 'Unable to connect to database.');

// Ensure reporting is setup correctly
mysqli_report(MYSQLI_REPORT_STRICT);

$options = array();
$options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
$options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_ASSOC;
$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
define('DATABASE_HOST', 'localhost:3306'); //host
define('DATABASE_NAME', 'rcc_company_database'); //database name
define('DATABASE_USER', 'rcc_company_user'); //database user
define('DATABASE_PASS', 'company_user_passwd'); //database password

try {
  $pdo = new PDO('mysql:host=' . DATABASE_HOST .
                    ';dbname=' . DATABASE_NAME,
                                 DATABASE_USER,
                                 DATABASE_PASS, $options);
} catch (PDOException $exeption) {
  echo 'PDO Error: <br>';
  echo $exeption->getMessage();
  exit;
}

?>
