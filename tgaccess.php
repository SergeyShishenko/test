<?php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        include  dirname(dirname(__FILE__)).'/DATA/TABLES/tgaccess.php';//local
    }else{
      include   dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/tgaccess.php';
    }
?>