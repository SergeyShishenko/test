<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php');
   $tbl = filter_var($_POST["tbl"],FILTER_SANITIZE_STRING);
    // $field = filter_var($_POST["field"],FILTER_SANITIZE_STRING);
    $fieldid = filter_var($_POST["fieldid"],FILTER_SANITIZE_STRING);
    // $id = filter_var($_POST["id"],FILTER_SANITIZE_STRING);

    // очищаем значение переменной, PHP фильтр FILTER_SANITIZE_NUMBER_INT
    // Удаляет все символы, кроме цифр и знаков плюса и минуса
    
    $idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_STRING);
    settype($idToDelete, "integer");
    // header('HTTP/1.1 500 gettype '.gettype($idToDelete));
    //     exit();
    $dbconn=dbconnect();

// (isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
if(isset($idToDelete)&& strlen($idToDelete)>0 && is_numeric($idToDelete))
{//do we have a delete request? $_POST["recordToDelete"]  

    //try deleting record using the record ID we received from POST
    $sql = "DELETE FROM `$tbl` WHERE `$fieldid`=".$idToDelete;
    
    if(!mysqli_query($dbconn,$sql))
    {
        //If mysql delete record was unsuccessful, output error
        header('HTTP/1.1 500 Could not delete record! '.$sql);
        exit();
    }
    mysqli_close($dbconn);

}
else{
    $sql = "DELETE FROM `$tbl` WHERE `$fieldid`=".$idToDelete;
    //Output error
    header('HTTP/1.1 500 Error occurred, Could not process request! '.$sql);
    exit();
}
?>