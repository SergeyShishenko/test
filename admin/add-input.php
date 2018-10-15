<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

// $dbconn=dbconnect();
//проверяем $_POST["content_txt"] на пустое значение
// if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
// {

//     // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
//     // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

//     $contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);
//     $tbl = filter_var($_POST["tbl"],FILTER_SANITIZE_STRING);
//     $field = filter_var($_POST["field"],FILTER_SANITIZE_STRING);
//     $fieldid = filter_var($_POST["fieldid"],FILTER_SANITIZE_STRING);
//     $id = filter_var($_POST["id"],FILTER_SANITIZE_STRING);

//     // Обновляем запись
//     // UPDATE  `u0474172_default`.`head` SET  `name_head` =  'Раздел 1' WHERE  `head`.`head_id` =52;
//     // if(mysqli_query($dbconn,"INSERT INTO head(name_head) VALUES('".$contentToSave."')"))
//     // echo "UPDATE  ".$tbl." SET  ".$field." =  '".$contentToSave."' WHERE  ".$fieldid."` ='.$id.'";
//     // TRIM('region_name')
    
//     $sql = "UPDATE `$tbl` SET `$field`= TRIM('$contentToSave') WHERE `$fieldid`=$id";
//     // echo $sql;
//     if(mysqli_query($dbconn,$sql))
//     {
//         //Record is successfully inserted, respond to ajax request
//         $head_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
        
       
//         mysqli_close($dbconn);

//     }else{
//         //вывод ошибки
//         // echo $sql;
//         //header('HTTP/1.1 500 '.mysql_error());
//         header('HTTP/1.1 500 Looks like mysql error, could not insert record!'.$sql);
//         exit();
//     }

// }

echo '<li id="tb-head" class="active">';
echo '<label for="recipient-href" class="form-control-label">Файл!!!!:</label>';
echo '<input type="text" class="form-control" id="recipient-href"  required>';
echo '<label for="recipient-order" class="form-control-label">Номер по порядку!!!!!:</label>';
echo '<input type="text" class="form-control" id="recipient-order"  required>';
echo '</li>'
?>