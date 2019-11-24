<?php

include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-materialy.php';
$materialyClass = 'class="active"';
$item_svet_Class = 'active';
include 'inc/inc-head3.php';
include 'inc/inc-header-menu3.php';
include 'inc/inc-left-side-menu-materialy-ne-derevyannye.php';


$article_id ="svet";// название группы и имя массива группы
$curr_page = 3;// индекс элемента в группе
ContentPage($$article_id,$curr_page,$article_id);  

include 'inc/inc-footer2.php'; 
