<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-detali.php';
$detaliClass = 'class="active"';
$item_profili_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-detali.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
              
                    <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="profili">Профили</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/images/GALLERY/SHTAPIKI'); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                 


                   
                    
                </div> <!-- main  -->                
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2"  id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary"  >
                        <ul class="nav bs-sidenav">
                            <li><a href="#profili">Профили</a>
                                <!-- <ul class="nav">
                                    <li><a href="#profili-nakladki-50" >&#9999;&nbsp;МДФ накладка №050/ДШ</a>
                                    </li>
                                    <li><a href="#profili-nakladki-51" >&#9999;&nbsp;МДФ накладка №051/ДШ</a>
                                    </li> 
                                    <li><a href="#profili-nakladki-52" >&#9999;&nbsp;МДФ накладка №052/ДШ</a>
                                    </li>
                                    <li><a href="#profili-nakladki-53" >&#9999;&nbsp;МДФ накладка №053/ДШ</a>
                                    </li>                                    
                                </ul> -->
                            </li>
                                               
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc/inc-footer.php'; ?>