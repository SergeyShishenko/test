<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

$dbconn=dbconnect();
//проверяем $_POST["content_txt"] на пустое значение
if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
{

    // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
    // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

    $contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);

    // Insert sanitize string in record
    if(mysqli_query($dbconn,"INSERT INTO add_delete_record(content) VALUES('".$contentToSave."')"))
    {
        //Record is successfully inserted, respond to ajax request
        $my_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
        echo '<div id="item_'.$my_id.'">';
        echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$my_id.'">';
        echo '<img src="img/icon_del.gif" border="0" />';
        echo '</a></div>';
        echo $contentToSave.'</div>';
        mysqli_close($dbconn);

    }else{
        //вывод ошибки

        //header('HTTP/1.1 500 '.mysql_error());
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        exit();
    }

}
elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{//do we have a delete request? $_POST["recordToDelete"]

    // очищаем значение переменной, PHP фильтр FILTER_SANITIZE_NUMBER_INT
    // Удаляет все символы, кроме цифр и знаков плюса и минуса

    $idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT);

    //try deleting record using the record ID we received from POST
    if(!mysqli_query($dbconn,"DELETE FROM add_delete_record WHERE id=".$idToDelete))
    {
        //If mysql delete record was unsuccessful, output error
        header('HTTP/1.1 500 Could not delete record!');
        exit();
    }
    mysqli_close($dbconn);

}
else{

    //Output error
    header('HTTP/1.1 500 Error occurred, Could not process request!');
    exit();
}
?>