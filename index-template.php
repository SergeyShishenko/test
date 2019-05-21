<?php
include 'inc/inc-session-start.php';

// /template-shablony-dokumentov.php?obj_id=1

if(isset($_GET['obj_id'])) 
{
    // echo 'id объекта '.$_GET['obj_id'];
    // echo '<hr>';
    $_SESSION['obj_id'] = $_GET['obj_id'];
    header('Location:/DATA/TABLES/template.php');
    
    // exit();
  
}

else{echo '<br>Нет такого элемента!';}

 ?>