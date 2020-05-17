<?php

//FRONT CONTROLLER


/*
    1) UMUMIY SOZLAMALAR

 * SAYTDAGI XATOLIKLARNI BATAFSIL KO'RSATADI
 * PROYEKT ISHGA TUSHGANDA O'CHIRIB QO'YILADI
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
/* END */


/*
    2) SISTEMAGA FAYLLARNI ULASH

 * PROYEKTNI TO'LIQ JOYLASHUVINI ANIQLAB OLISH
 * VA ROUTERGA BOG'LANISH
 */
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');


/*
    3) BAZA BILAN ALOQANI O'RNATISH

 * 
 */



/*
    4) ROUTERNI ISHGA TUSHIRISH

 * 
 */
$router = new Router();
$router->run();
