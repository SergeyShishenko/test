<?php
// inc\inc-session-start.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        $role = include  dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/inc-session-start.php';//local
    }else{
        $role = include  dirname( dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/inc-session-start.php';
    }
    return $role;
 
  

