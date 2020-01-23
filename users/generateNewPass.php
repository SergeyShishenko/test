<?php
// users\generateNewPass.php
session_start();
require_once(dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
// $salt = generateCode(4);
// $gpassword= generateCode(6);
// $password = sha1($gpassword.$salt); 

// сохранить в базу и отправить ссылку

// $_SESSION['gpass']=$gpassword;

$_SESSION['gpass']='12345678';//ghjdthrf
$_SESSION['glogin']=$_POST['loginnewpass'];

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
	// require_once ($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php');
	$site='';// для сайта !!!!!!!
}
else {
	// require_once ($_SERVER['DOCUMENT_ROOT'] . '/www/Classes/PHPExcel/IOFactory.php');
	$site='/www';// localhost !!!!!!!
}

header('Location:'.$site.'/index-session.php');
exit();
?>