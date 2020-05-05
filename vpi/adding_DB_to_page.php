<?php
// vpi\adding_DB_to_page.php
require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';
$db = class_DataBase::getDB(); // Создаём объект базы данных

$query = "SELECT * FROM `obj_furnitur_prop`";
	$tblDB = $db->select($query); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
	 if ($tblDB){ 
        for($i=0;$i<count($tblDB);$i++) {  
            echo '<tr>';           
                // echo '<td>'.($i+1).'</td>';
                echo '<td>'.$tblDB[$i]['articul_furnitur_obj'].'</td>';
                echo '<td>'.$tblDB[$i]['name_furnitur_obj_prop'].'</td>';
            echo '</tr>';
        }
	 }

?>           
   
    
