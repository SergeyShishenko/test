<?php
//подключаем конфигурационный файл бд
// define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__))); 
require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/DATA/TABLES/configDB.php'); 
// require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';

$dbconn=dbconnect();
if ($dbconn->connect_errno) {
    printf("Не удалось подключиться: %s\n", $dbconn->connect_error);
    exit();
}
$db = class_DataBase::getDB(); // Создаём объект базы данных
//проверяем $_POST["content_Furn"] на пустое значение
if(isset($_POST["content_Furn"]) && strlen($_POST["content_Furn"])>0)
{

    // проверка на существование артикула в Базе



    $Furn=$_POST["content_Furn"];
    $Art=$_POST["content_Art"];
    $Alias1=$_POST["content_Alias1"];
    $Alias2=$_POST["content_Alias2"];
    $Alias3=$_POST["content_Alias3"];
    $NameFile=$_POST["content_NameFile"];    
    $GruppId=$_POST["content_grupp_id"];
    $Bild=$_POST["content_Bild"];
    $Colour=$_POST["content_Colour"];
    $Unit=$_POST["content_Unit"];
    $HrefArticul=$_POST["content_HrefArticul"];
    $typeFurn=$_POST["content_path_img_obj"];

   if (arniculCheck ($Art,$db)){exit();}
   if (arniculCheck ($Alias1,$db)){exit();}
   if (arniculCheck ($Alias2,$db)){exit();}
   if (arniculCheck ($Alias3,$db)){exit();}


    // добавляем новую запись во все таблицы объекта
                    $sql = " INSERT INTO `obj` (`obj_id`, `name_obj`, `grupp_id`, `html_id`, `path_img_obj`, `fname_img_obj`, `data_href_img_obj`, `fname_img_smoll_obj`, `data_href_img_smoll_obj`, `obj_def`, `number_in_order_obj`, `characteristic_obj`, `img_orientation_obj`, `img_alt_obj`, `template_obj`)
                     VALUES (NULL,'$Furn', '$GruppId', '', '$typeFurn','$NameFile', NULL, '', NULL, '$Furn', NULL, NULL, 'album', NULL, NULL)";
                    if(mysqli_query($dbconn,$sql))
                    {                    
                        $id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL 
                        $html_id = "obj_".$id;
                        $sql = "UPDATE `obj` SET `html_id`='$html_id' WHERE `obj_id`=$id";
                        if(mysqli_query($dbconn,$sql))
                            { 
                            mysqli_query($dbconn, "UPDATE `obj` SET `html_id` = $html_id WHERE `obj`.`obj_id`=$id");
                            mysqli_query($dbconn, "INSERT INTO  `obj_alias`(`obj_id`) VALUES ('$id')");
                            mysqli_query($dbconn, "INSERT INTO  `obj_download`(`obj_id`) VALUES ('$id')");
                           
                           if( !mysqli_query($dbconn, "INSERT INTO  `obj_furnitur_prop`(`obj_furnitur_prop_id`, `name_furnitur_obj_prop`, `articul_furnitur_obj`, `articul_alias1`, `articul_alias2`, `articul_alias3`, `made_furnitur_obj`, `url_furnitur_obj_prop`, `obj_id`, `url_video_obj_prop`, `color_obj_prop`, `def_obj_prop`, `unit_obj_prop`, `fname_img_furn`)  
                             VALUES (NULL, '$Furn', '$Art', '$Alias1', '$Alias2', '$Alias3', '$Bild', '$HrefArticul', '$id', NULL, '$Colour', '$Furn', '$Unit', '$NameFile')")){
                                header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                                // exit();
                             }

                            mysqli_query($dbconn, "INSERT INTO  `obj_in_addition`(`obj_id`) VALUES ('$id')");
                             }
                            else{//вывод ошибки                                        
                                header('HTTP/1.1 500 Looks like mysql error, could not insert record1! '.$sql." -> ".mysqli_error($dbconn));
                                exit();
                            } 
                        
                    }else{//вывод ошибки                                        
                        header('HTTP/1.1 500 Looks like mysql error, could not insert record2! '.$_POST["parent"]." ---".$sql." -> ".mysqli_error($dbconn));
                        exit();
                    }  


    echo $html_id;
}



function arniculCheck ($articul,$db){
    if($articul !=""){
        $query = "SELECT * FROM `obj_furnitur_prop` WHERE `articul_furnitur_obj` = {?} OR `articul_alias1` = {?} OR `articul_alias2` = {?} OR `articul_alias3` = {?} ";
        $table = $db->select($query, array($articul)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
        if ($table){
            echo "Артикул уже внесен в Базу Данных!";
            return true;
        }
        else {
            return false;
        }
    }
   

}

?>