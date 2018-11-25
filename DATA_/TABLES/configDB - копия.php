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


// $connecDB = mysql_connect($hostname, $username, $password);
// 
?>