<?php
session_start();
// echo'<pre>';
// Print_r ($_SESSION);
// echo'</pre>';
// очистить таблицу user_vpi
// define('__ROOT__', dirname(dirname(dirname(__FILE__)))); 

/////////////
// require_once(dirname(dirname(__FILE__)).'/DATA/TABLES/configDB.php'); // подключение к базе данных
// $dbconn=dbconnect();
// $hash=$_COOKIE["hash"];
// mysqli_query($dbconn,"DELETE FROM `user_vpi` WHERE `vpi_hash_id`='$hash'");
// mysqli_close($dbconn); 
// // Удаляем cookies
// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }
// session_unset(); // Удаляем все переменные
// session_destroy();
// header("Location: index-session.php");
///////////////






// exit.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        include  dirname(dirname(__FILE__)).'/DATA/TABLES/exit.php';//local
    }else{
      include   dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/exit.php';
    }
header("Location: index-session.php");
?>
