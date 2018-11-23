<?php

function dbconnect()
    {
    $dbHost='localhost';
    $mysql_user ='u0474172_default';
    $mysql_password ='_MnExd3G';
    $my_db ='u0474172_default';
    $dbconn=mysqli_connect($dbHost, $mysql_user, $mysql_password, $my_db )or die('не удалось подключиться к базе данных');
    
    return $dbconn; 
    }
    // путь у файлам к PATH__FILES добавить doc, dwg, images, images/thumbs, pdf, xls  
    define('PATH__FILES', '.dist/filesdb/'); 

?>