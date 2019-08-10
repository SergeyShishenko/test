<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-metodichki.php';
$metodichkiClass = 'class="active"';
$item_basis_Class = '';
$item_sofiapro3_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-metodichki.php';
?> 
    <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page">                
 <?php  
    ContentListGoupMenuVideo($SP3);    
 ?> 
    </div>
    <!-- main  --> 
<?php
$arrlist = [$SP3];           
SideMenuList($arrlist);
include 'inc/inc-footer.php';
 ?>