<?php
// exit.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        include  dirname(dirname(__FILE__)).'/DATA/TABLES/exit.php';//local
    }else{
      include   dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/exit.php';
    }
header("Location: index-session.php");
?>
