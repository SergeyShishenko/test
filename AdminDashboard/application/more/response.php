<?php
// require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/DATA/TABLES/configDB.php'); 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/DATA/TABLES/configDB.php'); 

$db = class_DataBase::getDB(); // Создаём объект базы данных
//проверяем $_POST["content_Furn"] на пустое значение
if(isset($_POST["content_Furn"]) && strlen($_POST["content_Furn"])>0)
{
    // проверка на существование артикула в Базе
    $Furn=$db->realEscape($_POST["content_Furn"]);
    $Art=$db->realEscape($_POST["content_Art"]);
    $Alias1=$db->realEscape($_POST["content_Alias1"]);
    $Alias2=$db->realEscape($_POST["content_Alias2"]);
    $Alias3=$db->realEscape($_POST["content_Alias3"]);
    $NameFile=$db->realEscape($_POST["content_NameFile"]);    
    $GruppId=$db->realEscape($_POST["content_grupp_id"]);
    $Bild=$db->realEscape($_POST["content_Bild"]);
    $Colour=$db->realEscape($_POST["content_Colour"]);
    $Unit=$db->realEscape($_POST["content_Unit"]);
    $HrefArticul=$db->realEscape($_POST["content_HrefArticul"]);
    $typeFurn=$db->realEscape($_POST["content_path_img_obj"]);

   if (arniculCheck ($Art,$db)){exit();}
   if (arniculCheck ($Alias1,$db)){exit();}
   if (arniculCheck ($Alias2,$db)){exit();}
   if (arniculCheck ($Alias3,$db)){exit();}

     echo include($_SERVER['DOCUMENT_ROOT'] . '/DATA/TABLES/inc_obj_furnitur.php');
}


?>