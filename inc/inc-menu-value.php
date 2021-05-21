<?php
// inc\inc-menu-value.php
$detaliClass = '';
$assemblyUnitClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$yrishablonyClass= '';
$ustanovochnyeClass= '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        include  dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/inc-menu-value.php';//local
    }else{
        include  dirname( dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/inc-menu-value.php';
    }
   
