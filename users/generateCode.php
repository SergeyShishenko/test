<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$salt = generateCode(4);
$password= generateCode(6);
$password = sha1($password.$salt); 

?>