<?php

function dbconnect()
    {
  
    $dbconn=mysqli_connect($dbHost, $mysql_user, $mysql_password, $my_db )or die('не удалось подключиться к базе данных');
    
    return $dbconn; 
    }


// $connecDB = mysql_connect($hostname, $username, $password);
// 
?>
