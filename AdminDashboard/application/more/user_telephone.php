<?php
//  file_put_contents('DEBUG-message.txt', print_r($_POST, true));exit();
//  file_put_contents('DEBUG-message.txt', print_r("Запись", true));exit();
// return  "local!"; exit();
return include($_SERVER['DOCUMENT_ROOT'] . '/DATA/TABLES/users/user_telephone.php');
// if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
//     //   echo  "local"; exit();
//         include  dirname(dirname(dirname(dirname(__FILE__)))).'/DATA/TABLES/users/user_telephone.php';//local
//     }else{
//         // echo  "else"; exit();
//       include   dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/users/user_telephone';
//     }
?>
