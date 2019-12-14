<?php
//furnitura-dlya-mebeli-shtangi1.php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-furnitura.php';
$furnituraClass = 'class="active"';
$item_dlya_mebeli_Class = 'active';
include 'inc/inc-head3.php';
include 'inc/inc-header-menu3.php';
include 'inc/inc-left-side-menu-furnitura.php';
$article_id ="shtangi";// название группы и имя массива группы
$curr_page = explode("_", $_GET["node"])[1];// индекс элемента в группе
$much_arr=[$$article_id];
contentPage($much_arr,$curr_page,$article_id);  
sideMenu($$article_id,$curr_page);
include 'inc/inc-footer2.php'; 
