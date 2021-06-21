<?php
// log in to the panel
include 'inc/inc-session-start.php';
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! проверка на session['admin']
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
    $site=dirname(dirname(__FILE__)).'/DATA/TABLES/icq/';//local       
    }else{
     $site=dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/icq/';          
    }
include  $site.'/ajax-s.php';
exit();
?>