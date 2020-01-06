<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
$output = generateCode(6);
echo $output;
?>