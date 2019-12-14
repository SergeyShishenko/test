<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-metodichki.php';
// metodichki-ergonomika.php
$metodichkiClass = 'class="active"';
$item_oshibki_proektirovaniya = 'active';
include 'inc/inc-head4.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-metodichki.php';
?> 
  <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page">       
      <?php 
        contentListGoupMenu($vannaya);
        contentListGoupMenu($garderobnaya);
        contentListGoupMenu($prihozhaya);
    
      ?>       
    </div> 
  <!-- /main  -->
          <?php                  
            $arrlist = [$vannaya,$garderobnaya,$prihozhaya];           
            sideMenuList($arrlist)
          ?> 
<?php include 'inc/inc-footer.php'; ?>