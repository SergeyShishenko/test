<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-materialy.php';
$materialyClass = 'class="active"';
$item_svet_Class = 'active';
include 'inc/inc-head3.php';
include 'inc/inc-header-menu3.php';
include 'inc/inc-left-side-menu-materialy.php';


$article_id ="svet";// название группы и имя массива группы

// $curr_page = 1;// индекс элемента в группе
switch ($_GET["node"]) {
    case "lenta":
        $curr_page = 1;
        break;
    case "profily":
        $curr_page = 2;
        break;
    case "transformatory":
        $curr_page = 3;
        break;
    case "accessories":
        $curr_page = 4;
        break;
    default:
        $curr_page = 1;
        break;  
}

ContentPage($$article_id,$curr_page,$article_id);  

include 'inc/inc-footer2.php'; 
