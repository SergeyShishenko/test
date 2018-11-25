<?php
include_once("configDB.php");
///////////////////////////////create tables////////////////////////////////////////////////

////


if (mysqli_query($dbconn, $query)) echo "Таблица obj_furnitur_prop создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);



mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj_in_addition(
    obj_in_
if ($res) {
echo "Поле 'number_in_order_head' существует.<br>";
}
else {
    $query = "ALTER TABLE `head` ADD COLUMN `number_in_order_head`  INT ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN number_in_order_head в таблицу head.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `number_in_order_category` FROM `category` WHERE 0");
if ($res) {
echo "Поле 'number_in_order_category' существует.<br>";
}
else {
    $query = "ALTER TABLE `category` ADD COLUMN `number_in_order_category`  INT ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN number_in_order_category в таблицу category.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

////


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `img_orientation_obj` FROM `obj` WHERE 0");
if ($res) {
echo "Поле 'img_orientation_obj' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` ADD COLUMN `img_orientation_obj`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN img_orientation_obj в таблицу obj.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `img_alt_obj` FROM `obj` WHERE 0");
if ($res) {
echo "Поле 'img_alt_obj' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` ADD COLUMN `img_alt_obj`  VARCHAR(255) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN img_alt_obj в таблицу obj.<br>";
else echo "Поле не д
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `characteristic_obj` FROM `obj` WHERE 0");
if ($res) {
echo "Поле 'characteristic_obj' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` ADD COLUMN `characteristic_obj`  TEXT ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN characteristic_obj в таблицу obj.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `template_obj` FROM `obj` WHERE 0");
if ($res) {
echo "Поле 'template_obj' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` ADD COLUMN `template_obj`  VARCHAR(255) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN template_obj в таблицу obj.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}

$res = mysqli_query($dbconn,"SELECT `data_spng` FROM `obj_download` WHERE 0");
if ($res) {
echo "Поле 'data_spng' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj_download` ADD COLUMN `data_spng`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN data_spng в таблицу obj_download.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

//// 
$dbconn=dbconnect();
if ( !$dbconn ) die("Edata_ypdf`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN data_ypdf в таблицу obj_download.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

//// 
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `data_yxls` FROM `obj_download` WHERE 0");
if ($res) {
echo "Поле 'data_yxls' существует.<br>";
}
else {
    $query = "ALTER T
}
mysqli_close($dbconn);

//// 
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `data_href_grupp` FROM `grupp` WHERE 0");


if (!$res) {
echo "Поле 'data_href_grupp' не существует.<br>";
}
else {
    $query = "ALTER TABLE `grupp` CHANGE data_href_grupp html_id varchar(255)";
   
if (mysqli_query($dbconn, $query)) echo "CHANGE COLUMN data_href_grupp в таблице grupp на html_id.<br>";
else echo "Поле не изменено: ".mysqli_error();
}
mysqli_close($dbconn);
 
// //$encoding = pg_client_encoding($dbconn);


// /* foreach($b as $kk=>$vv)
// {
	
// echo $vv['id_category']." ".$vv['name']." ".$vv['quantity']."<br>";
// } */


// }
// //INSERT INTO test (a) VALUES (50) RETURNING *;
?>
