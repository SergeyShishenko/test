<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-metodichki.php';
// metodichki-ergonomika.php
$metodichkiClass = 'class="active"';
$item_ergonomika_Class = 'active';
include 'inc/inc-head4.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-metodichki.php';
?> 
  <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page">       
      <?php 
        ContentListGoupMenu($vannaya);
        ContentListGoupMenu($garderobnaya);
        ContentListGoupMenu($prihozhaya);
        ContentListGoupMenu($stoly);
        ContentListGoupMenu($detskaya);
        ContentListGoupMenu($antropologiya);
        ContentListGoupMenu($gostinaya);
        ContentListGoupMenu($spalnya);
        ContentListGoupMenu($aktovyyzal);
        ContentListGoupMenu($kuhnya);
      ?>       
    </div> 
  <!-- /main  -->
          <?php                  
            $arrlist = [$vannaya,$garderobnaya,$prihozhaya,$stoly,$detskaya,$antropologiya,$gostinaya,$spalnya,$aktovyyzal,$kuhnya];           
            SideMenuList($arrlist)
          ?> 
<?php include 'inc/inc-footer.php'; ?>