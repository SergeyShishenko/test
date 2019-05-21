<?php
include 'inc/inc-session-start.php';
// materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-materialy.php';
$materialyClass = 'class="active"';
$item_steklo_zerkalo_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-materialy-ne-derevyannye.php';
?> 
  <!-- main  -->
  <div class="col-md-8 col-md-8-non" role="main" id="main-page">

  <?php 
    ContentListGoupMenu($steklazerkala);
    // ContentListGoupMenu($sborochnyeshemypst);
  ?>                  

      <!-- <article >
        <section >
          <div class="page-header">
            <h1 itemprop="name" id="zerkala-i-stekla-tablica-standartnyh-obrazcov">Зеркала и стекла - таблица стандартных образцов</h1>
          </div>
          <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt harum minus possimus, tempore suscipit fugit nostrum enim hic illum tempora assumenda nemo, vero officiis asperiores, fuga aut. Ex, ratione!</p>
          <div class="bs-callout bs-callout-warning" id="jquery-required">
            <h4>Lorem ipsum dolor</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>


          </section>
      </article> -->
    
  </div> <!-- main  -->
<?php                  
  $arrlist = [$steklazerkala];           
  SideMenuList($arrlist)
?> 
<?php include 'inc/inc-footer.php'; ?>