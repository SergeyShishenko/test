<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-materialy.php';
$materialyClass = 'class="active"';
$item_svet_Class = 'active';
include 'inc/inc-head3.php';
include 'inc/inc-header-menu3.php';
include 'inc/inc-left-side-menu-materialy.php';

if (isset($_GET["group"])) {
    $article_id =$_GET["group"];// название группы и имя массива группы lenta
}else{
   $article_id ="svet";// название группы и имя массива группы 
}


// $curr_page = 1;// индекс элемента в группе
switch ($_GET["node"]) {
    case "lenta_hot_white":
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

// contentPage($$article_id,$curr_page,$article_id); 
// $much_arr=[$$article_id];
// $much_arr=[$lenta,$alumprofily,$transformatory,$accessories];
$much_arr=[$$article_id];
// $much_arr=[$lenta_hot_white];
contentPage2($much_arr,$curr_page,$article_id); 


// sideMenu($$article_id,$curr_page); 

// $arrlist = [$$article_id];//группы в боковом меню
$arrlist = [$lenta_hot_white,$alumprofily,$transformatory,$accessories];//группы в боковом меню
sideMenuListPages($arrlist);

include 'inc/inc-footer2.php'; 
