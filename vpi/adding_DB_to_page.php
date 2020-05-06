<?php
// vpi\adding_DB_to_page.php
require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';
$db = class_DataBase::getDB(); // Создаём объект базы данных

$query = "SELECT * FROM `obj_furnitur_prop`";
	$tblDB = $db->select($query); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
	 if ($tblDB){ 
        for($i=0;$i<count($tblDB);$i++) {  
            echo '<tr data-id="'.$tblDB[$i]['obj_furnitur_prop_id'].'" 
            data-made="'.$tblDB[$i]['made_furnitur_obj'].'" 
            data-src="'.$tblDB[$i]['fname_img_furn'].'" 
            data-articul="'.$tblDB[$i]['articul_furnitur_obj'].'" 
            data-name="'.$tblDB[$i]['name_furnitur_obj_prop'].'" 
            data-color="'.$tblDB[$i]['color_obj_prop'].'" 
            data-unit="'.$tblDB[$i]['unit_obj_prop'].'">';           
                // echo '<td>'.($i+1).'</td>';               
                // echo '<td>ID-'.$tblDB[$i]['obj_furnitur_prop_id'].'</td>';               
                echo '<td><img src="'.$tblDB[$i]['fname_img_furn'].'" alt="imgDB" style="width: 100px;"></td>';
                echo '<td>'.$tblDB[$i]['articul_furnitur_obj'].'</td>';
                echo '<td>'.$tblDB[$i]['name_furnitur_obj_prop'].'</td>';
            echo '</tr>';
        }
	 }

?>           
   
    
