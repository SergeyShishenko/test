<?php
// vpi\getDataBaseVPI.php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
	$site='';// для сайта !!!!!!!
}
else {	
	$site='/www';// localhost !!!!!!!
}

require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';

$dbconn=dbconnect();
$db = class_DataBase::getDB(); // Создаём объект базы данных
echo "getDataBaseVPI.php";
?>