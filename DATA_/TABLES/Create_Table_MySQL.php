<?php
include_once("configDB.php");
///////////////////////////////create tables////////////////////////////////////////////////

////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS head(
    head_id INT NOT NULL AUTO_INCREMENT,
    name_head VARCHAR(40) NOT NULL,
    data_href_head VARCHAR(255),
    PRIMARY KEY (head_id))";
// ALTER TABLE `head` ADD COLUMN `number_in_order_head`  INT

if (mysqli_query($dbconn, $query)) echo "Таблица head создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);

////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS category(
    category_id INT NOT NULL AUTO_INCREMENT,
    name_category VARCHAR(40) NOT NULL,
    data_href_category VARCHAR(255),
    head_id INT,
    PRIMARY KEY (category_id),
    FOREIGN KEY (head_id)
    REFERENCES head(head_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";

if (mysqli_query($dbconn, $query)) echo "Таблица category создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS grupp(
    grupp_id INT NOT NULL AUTO_INCREMENT,
    name_grupp VARCHAR(40) NOT NULL,
    data_href_grupp VARCHAR(255),
    category_id INT,    
    PRIMARY KEY (grupp_id),
    FOREIGN KEY (category_id)
    REFERENCES category(category_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица grupp создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj(
    obj_id INT NOT NULL AUTO_INCREMENT,
    name_obj VARCHAR(40) NOT NULL,
    grupp_id INT,
    html_id VARCHAR(255) NOT NULL,
    path_img_obj VARCHAR(255),
    fname_img_obj VARCHAR(255) NOT NULL DEFAULT  'test.png',
    data_href_img_obj VARCHAR(255),
    fname_img_smoll_obj VARCHAR(255) NOT NULL DEFAULT  'no-foto.png', 
    data_href_img_smoll_obj VARCHAR(255), 
    img_def TEXT,  
    PRIMARY KEY (obj_id),
    FOREIGN KEY (grupp_id)
    REFERENCES grupp(grupp_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица obj создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj_download(
    obj_download_id INT NOT NULL AUTO_INCREMENT,
    pdf_obj VARCHAR(255),
    xls_obj VARCHAR(255),
    doc_obj VARCHAR(255),
    dwg_obj VARCHAR(255),    
    obj_id INT,
    PRIMARY KEY (obj_download_id),
    FOREIGN KEY (obj_id)
    REFERENCES obj(obj_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица obj_download создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);

////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj_furnitur_prop(
    obj_furnitur_prop_id INT NOT NULL AUTO_INCREMENT,
    name_furnitur_obj_prop VARCHAR(255),
    articul_furnitur_obj VARCHAR(255),
    made_furnitur_obj VARCHAR(255),
    url_furnitur_obj_prop VARCHAR(255),    
    obj_id INT,
    PRIMARY KEY (obj_furnitur_prop_id),
    FOREIGN KEY (obj_id)
    REFERENCES obj(obj_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица obj_furnitur_prop создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj_alias(
    obj_alias_id INT NOT NULL AUTO_INCREMENT,
    keywords_alias VARCHAR(255),      
    obj_id INT,
    PRIMARY KEY (obj_alias_id),
    FOREIGN KEY (obj_id)
    REFERENCES obj(obj_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица obj_alias создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);


////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$query = "CREATE TABLE IF NOT EXISTS obj_in_addition(
    obj_in_addition_id INT NOT NULL AUTO_INCREMENT,
    html_in_addition_id VARCHAR(255) DEFAULT  '',
    path_img_obj_in_addition VARCHAR(255),
    fname_img_obj_in_addition VARCHAR(255) ,
    data_href_img_obj_in_addition VARCHAR(255),
    fname_img_smoll_obj_in_addition VARCHAR(255), 
    data_href_img_smoll_obj_in_addition VARCHAR(255), 
    img_def TEXT,         
    obj_id INT,
    PRIMARY KEY (obj_in_addition_id),
    FOREIGN KEY (obj_id)
    REFERENCES obj(obj_id)
    ON UPDATE CASCADE ON DELETE CASCADE )";


if (mysqli_query($dbconn, $query)) echo "Таблица obj_in_addition создана.<br>";
else echo "Таблица не создана: ".mysqli_error();

mysqli_close($dbconn);

// obj_in_addition
// obj_alias
// data_href

// number_in_order_head
// Для добавления столбцов в существующую таблицу используется следующий синтаксис оператора alter table:

// ALTER TABLE table_name ADD COLUMN name_colum, type_of column



////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `number_in_order_head` FROM `head` WHERE 0");
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
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `number_in_order_grupp` FROM `grupp` WHERE 0");
if ($res) {
echo "Поле 'number_in_order_grupp' существует.<br>";
}
else {
    $query = "ALTER TABLE `grupp` ADD COLUMN `number_in_order_grupp`  INT ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN number_in_order_grupp в таблицу grupp.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `number_in_order_obj` FROM `obj` WHERE 0");
if ($res) {
echo "Поле 'number_in_order_obj' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` ADD COLUMN `number_in_order_obj`  INT ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN number_in_order_obj в таблицу obj.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);



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
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);



////
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `url_video_obj_prop` FROM `obj_furnitur_prop` WHERE 0");
if ($res) {
echo "Поле 'url_video_obj_prop' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj_furnitur_prop` ADD COLUMN `url_video_obj_prop`  VARCHAR(255) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN url_video_obj_prop в таблицу obj_furnitur_prop.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);


////
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
mysqli_close($dbconn);


//// data-prnt="noPrint"
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `data_prnt` FROM `obj_download` WHERE 0");
if ($res) {
echo "Поле 'data-prnt' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj_download` ADD COLUMN `data_prnt`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN data_prnt в таблицу obj_download.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

//// data-spng="noPNG" 
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

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
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `data_ydoc` FROM `obj_download` WHERE 0");
if ($res) {
echo "Поле 'data_ydoc' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj_download` ADD COLUMN `data_ydoc`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN data_ydoc в таблицу obj_download.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);

//// 
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `data_ypdf` FROM `obj_download` WHERE 0");
if ($res) {
echo "Поле 'data_ypdf' существует.<br>";
}
else {
    $query = "ALTER TABLE `obj_download` ADD COLUMN `data_ypdf`  VARCHAR(10) ";
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
    $query = "ALTER TABLE `obj_download` ADD COLUMN `data_yxls`  VARCHAR(10) ";
if (mysqli_query($dbconn, $query)) echo "ADD COLUMN data_yxls в таблицу obj_download.<br>";
else echo "Поле не добавленно: ".mysqli_error();
}
mysqli_close($dbconn);


// /////////////////////////////////////////////////////////////////////////////////////// 


//// Изменить свойства одного или нескольких столбцов
$dbconn=dbconnect();
if ( !$dbconn ) die("Error");

$res = mysqli_query($dbconn,"SELECT `img_def` FROM `obj` WHERE 0");


if (!$res) {
echo "Поле 'img_def' не существует.<br>";
}
else {
    $query = "ALTER TABLE `obj` CHANGE img_def obj_def TEXT";
   
if (mysqli_query($dbconn, $query)) echo "CHANGE COLUMN img_def в таблице obj на obj_def.<br>";
else echo "Поле не изменено: ".mysqli_error();
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


// //db_store("Petrov","Sergey","Olegovich",22,33000);

// if($_POST['tp']=="store")
// {
//  db_store($_POST['f'],$_POST['i'],$_POST['o'],$_POST['age'],$_POST['salary']);
// }
// else if ($_POST['tp']=="search")
// {
// $b=db_search($_POST['minage'],$_POST['maxage'],$_POST['minsalary'],$_POST['maxsalary']);
// echo "<br><hr><br>";
// echo "!".$b."<br>";
// foreach($b as $kk=>$vv)
// {
// echo $kk.": ".$vv['f']." ".$vv['i']." ".$vv['age']."/".$vv['salary']."<br>";
// }
// }
// else if ($_POST['tp']=="id")
// {
// $b=get_customer($_POST['f']);
// //$b=get_customer_id($_POST['f'],$_POST['i'],$_POST['o']);
// //echo "<br><hr><br>";
// //echo "!!!".$b."<br>";
// }
// else if ($_POST['tp']=="category")
// {
// $b=get_category();
// foreach($b as $kk=>$vv)
// {
// 	//id_category serial PRIMARY KEY,name varchar,quantity integer
// echo $vv['id_category']." ".$vv['name']." ".$vv['quantity']."<br>";
// }
// }
// else if ($_POST['tp']=="exists")
// {
// echo db_add_exists($_POST['name']);
// /* foreach($b as $kk=>$vv)
// {
	
// echo $vv['id_category']." ".$vv['name']." ".$vv['quantity']."<br>";
// } */


// }
// //INSERT INTO test (a) VALUES (50) RETURNING *;
?>
