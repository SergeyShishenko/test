<?php
// admin\CreateTablesMySQL\FORM_obj_furnitur_prop_TO_obj_MySQL.php
define('__ROOT__', dirname(dirname(__FILE__))); 
// echo dirname(__ROOT__).'/DATA/TABLES/configDB.php';
require_once dirname(dirname(__ROOT__)).'/DATA/TABLES/configDB.php'; 
require_once dirname(dirname(dirname(__FILE__))).'/vendor/MyClass/class_DataBase.php';
$dbconn=dbconnect();

$db = class_DataBase::getDB(); // Создаём объект базы данных

$arrForm_ID=array(200,201,202,203,204,205,206,207,208);
$query = "SELECT *  FROM `obj_furnitur_prop` ";
$table = $db->select($query); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()




foreach ($table as $field) {
   
    $id=$field['obj_furnitur_prop_id'];
   
    $name=$field['name_furnitur_obj_prop'];
    $html_id='obj_'.$id;
    $fname_img_obj=$field['fname_img_furn'];
    $obj_def=$field['def_obj_prop'];
    
    if (in_array($id, $arrForm_ID)) {
        if (!mysqli_query($dbconn,"UPDATE `obj` SET  `name_obj`= '$name',
                                                     `html_id`= '$html_id',
                                                     `fname_img_obj`= '$fname_img_obj',
                                                     `obj_def`= '$obj_def'
                                                      WHERE `obj_id` = $id")){
            echo "Не вышло!". $dbconn->error. "<br>"; 
        }else{
            echo $id ." -> перенесен!<br>" ; 
        }
    }

}

