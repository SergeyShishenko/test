<?php
include 'inc/inc-session-start.php';
// izdeliya-paneli-stenovye.php
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-izdeliya.php';
$izdeliyaClass = 'class="active"';
$item_paneli_stenovye_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-izdeliya.php';
?> 
  <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page">       
      <?php 
        contentListGoupMenu($panelistenovye);
        contentListGoupMenu($sborochnyeshemypst);
      ?>       
    </div> 
  <!-- /main  -->
          <?php                  
            $arrlist = [$panelistenovye,$sborochnyeshemypst];           
            sideMenuList($arrlist)
          ?> 
<?php include 'inc/inc-footer.php'; ?>