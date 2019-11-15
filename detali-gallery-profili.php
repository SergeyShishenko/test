<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-detali.php';
$detaliClass = 'class="active"';
$item_profile_directory_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-detali.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                <p>&nbsp;</p>
                <a href="./dist/files/GALLERY/ALL IN ONE/sborka-profiley-ot-28052019.dwg" type="button" class="btn btn-primary"  download="СБОРКА ПРОФИЛЕЙ (от 28.05.2019).dwg">Скачать - СБОРКА ПРОФИЛЕЙ (от 28.05.2019).DWG</a>
                <!--  -->
                    <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="NAKLADKI">Накладки</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/NAKLADKI',3,"Накладки"); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                <!--  -->
                    <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="SHTAPIKI">Профили гладкие</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/SHTAPIKI',2,"Профили гладкие"); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                <!--  -->
                 <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="PROFILI-REZNYE">Профили резные</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/PROFILI-REZNYE',2,"Профили резные"); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                <!--  -->
                 <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="KARNIZY">Карнизы</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/KARNIZY',2,"Карнизы"); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                <!--  -->
                 <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="PLINTUSY">Плинтус</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/PLINTUSY',2,"Плинтус"); ?>
                                 <!--/gallery --> 
                              <!-- <div >&nbsp;.</div>                                                                               -->
                            </div>
                        </section>
                    </article > 
                <!--  -->
                <!--  -->
                 <article class="gallery" >
                        <section  >
                            <div class="page-header cont ">
                            <h1 itemprop="name" id="NALICHNIKI">Наличники</h1>
                            </div> 
                            <!-- <h2 id="profili-nakladki-50">&nbsp;</h2> -->
                              <!--gallery -->   
                            <div class="bs-callout bs-callout-warning cont gallery-cont" > 
                                 <?php  ListGallery('./dist/files/GALLERY/NALICHNIKI',2,"Наличники"); ?>
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
                            <li><a href="#NAKLADKI">Накладки</a>                             
                            </li>
                            <li><a href="#SHTAPIKI">Профили гладкие</a>                             
                            </li>
                            <li><a href="#PROFILI-REZNYE">Профили резные</a>                             
                            </li>
                            <li><a href="#KARNIZY">Карнизы</a>                             
                            </li>
                            <li><a href="#PLINTUSY">Плинтус</a>                             
                            </li>
                            <li><a href="#NALICHNIKI">Наличники</a>                             
                            </li>
                                               
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php
$notFrame=true;//нет Frame
 include 'inc/inc-footer.php';
  ?>