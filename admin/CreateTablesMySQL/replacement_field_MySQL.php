<?php
// admin\CreateTablesMySQL\replacement_field_MySQL.php
define('__ROOT__', dirname(dirname(__FILE__))); 
// echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
require_once dirname(dirname(__ROOT__)).'/DATA/TABLES/configDB.php'; 
require_once dirname(dirname(dirname(__FILE__))).'/vendor/MyClass/class_DataBase.php';
$dbconn=dbconnect();

$db = class_DataBase::getDB(); // Создаём объект базы данных


$query = "SELECT *  FROM `obj_furnitur_prop` ";
$table = $db->select($query); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()

foreach ($table as $field) {
    $field['url_video_obj_prop'] ? $val=$field['url_video_obj_prop']:$val=false;
    $id=$field['obj_furnitur_prop_id'];
   
    if ($val){
      echo $id ." -> ".$val."<br>" ;   
        // $query = "UPDATE `obj_furnitur_prop` SET `url_furnitur_obj_prop`= $val WHERE `obj_furnitur_prop_id`=$id";
        // mysqli_query($dbconn, "UPDATE `obj` SET `html_id` = $html_id WHERE `obj`.`obj_id`=$id");
        if (!mysqli_query($dbconn,"UPDATE `obj_furnitur_prop` SET `url_furnitur_obj_prop`= '$val' WHERE `obj_furnitur_prop_id` = $id")){
            echo "Не вышло!". $dbconn->error. "<br>"; 
        }
        if (!mysqli_query($dbconn,"UPDATE `obj_furnitur_prop` SET `url_video_obj_prop`= '' WHERE `obj_furnitur_prop_id` = $id")){
            echo "Не вышло удалить!". $dbconn->error. "<br>"; 
        }
    }
}
////
// $dbconn=dbconnect();
// if ( !$dbconn ) die("Error");

// $sql = "UPDATE `obj` SET `html_id`='$html_id'";
// mysqli_query($dbconn,$sql);
  

// mysqli_close($dbconn);

////
