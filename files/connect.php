<?php

// require database connection file
require_once './database.php';

$username_rcc = $_REQUEST['username_rcc'];
$password_rcc = $_REQUEST['password_rcc'];

$connect = $pdo->prepare('SELECT user.nickname,
                                 user.is_active,
                                 user.is_ban,
                                 user.pk_user,
                                 type_user.type_designation,
                                 company_position.position_designation,
                                 company.company_name,
                                 company.pk_company
                          FROM user, type_user, company_position, company
                          WHERE
	                      user.pk_type_user = type_user.pk_type_user
                          AND
                          user.pk_company_position = company_position.pk_company_position
                          AND
                          company_position.pk_company = company.pk_company
                          AND
                          nickname = :nickname
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
