<?php

/*
*
* RCC - Gerenciamento de companhias
* Author bmartins@rcc.com
*
*/

// Verify if session exists
if (!isset($_SESSION["rcc_companhias_session"])) {
    header('Location: ./login');
} else if (isset($_SESSION["rcc_companhias_session"])) {
    header('Location: ./homepage');
}

?> 