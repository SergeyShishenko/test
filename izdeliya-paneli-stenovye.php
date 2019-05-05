<?php
include 'inc-session-start.php';
// izdeliya-paneli-stenovye.php
$detaliClass = '';
$izdeliyaClass = 'class="active"';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_bloki_dvernye_Class = '';
$item_mebel_korpusnaya_Class = '';
$item_paneli_stenovye_Class = 'active';
$item_karnizy_i_frizy_Class = '';
$item_plintusy_i_moldingi_Class = '';
$item_ekrany_Class = '';
$item_pilyastry_Class = '';
$item_potolki_Class = '';
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