<?php
// !other\PROBA\probaDB.php
define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));
// echo '__ROOT__  '.__ROOT__;

require_once(__ROOT__.'/DATA/TABLES/configDB.php'); // подключение к базе данных
require_once __ROOT__.'/www/vendor/MyClass/class_DataBase.php';
// use MyClass\class_DataBase;
$dbconn=dbconnect();
$db = class_DataBase::getDB(); // Создаём объект базы данных
$query = "SELECT * FROM `obj_furnitur_prop` WHERE `color_obj_prop` = {?} AND `made_furnitur_obj` = {?}";
$table = $db->select($query, array("Оцинкованный", "BLUM")); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
$query = "SELECT `user_login` FROM `sofia_users` WHERE `user_mail` = {?}";
$login = $db->selectCell($query, array("serge-meb@mail.ru"));// Запрос должен вывести конкретную ячейку, поэтому вызываем метод selectCell()
var_dump($table);
var_dump($login);

?>