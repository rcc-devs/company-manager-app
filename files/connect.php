<?php

// require database connection file
require_once './database.php';

$username_rcc = $_REQUEST['username_rcc'];
$password_rcc = $_REQUEST['password_rcc'];

$connect = $pdo->prepare('SELECT * FROM user
                            WHERE nickname = :nickname
                            AND
                            password = md5(:password)
                        ');
// bind params
$connect->bindValue(':nickname', $username_rcc, PDO::PARAM_STR);
$connect->bindValue(':password', $password_rcc, PDO::PARAM_STR);
$connect->execute();

$row_count = $connect->rowCount();

if($row_count == 1) {
    session_start();
    $_SESSION['rcc_companhias_session'] = $connect->fetch();
}

echo $row_count;

?>
