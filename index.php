<?php

//Alkalmazas gyoker konyvtar a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/WebprogII_1_beadando_IXAAAT/');

//URL cim az alkalmazas gyokerehez
define('SITE_ROOT', 'http://localhost/WebprogII_1_beadando_IXAAAT/');

 require_once(SERVER_ROOT.'controllers/'.'router.php');
?>