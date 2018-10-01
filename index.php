<?php

/*
*
* RCC - Gerenciamento de companhias
* Author bmartins@rcc.com
*
*/
header(isset($_SESSION['rcc_companhias_session']) ? 'Location: ./homepage': 'Location: ./login');
