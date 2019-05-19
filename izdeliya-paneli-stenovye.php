<?php
include 'inc-session-start.php';
// izdeliya-paneli-stenovye.php
include 'inc-menu-value.php';
include 'inc-menu-value-izdeliya.php';
$izdeliyaClass = 'class="active"';
$item_paneli_stenovye_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
  <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page">       
      <?php 
        ContentListGoupMenu($panelistenovye);
        ContentListGoupMenu($sborochnyeshemypst);
      ?>       
    </div> 
  <!-- /main  -->
          <?php                  
            $arrlist = [$panelistenovye,$sborochnyeshemypst];           
            SideMenuList($arrlist)
          ?> 
<?php include 'inc-footer.php'; ?>