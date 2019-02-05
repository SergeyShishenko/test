<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/Moscow');


if (isset($_POST['client'])) {
    // $my_var = $_GET['var1'];
    echo "<pre>";
	 echo printf($_POST['dataArrayTitle[0]']);	 
    echo "</pre>";
    }else{ echo "Не найден!";}






exit();