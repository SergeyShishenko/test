<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-shablony-dokumentov.php';
$yrishablonyClass= 'class="active"';
$item_dogovor_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-yuridicheskie-dokumenty.php';
?> 
                <!-- main  -->  
                    <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                    <article >
                      <section >
                        <div class="page-header">
                        <h1 itemprop="name" id="shablon-dogovor-osnovnoy-bez-nds-v-21062018">ДОГОВОР ОСНОВНОЙ (БЕЗ НДС) V 21.06.2018</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4></h4>
                           <div class="overlay"></div> 

                        <!-- <p> <a>
                                <img src="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-book"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                                
                                 alt="ДОГОВОР ОСНОВНОЙ (БЕЗ НДС) V 21.06.2018"
                                 data-ydoc="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018.doc"
                                 data-ypdf="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018.pdf"
                                 data-prnt="noPrint"
                                 data-spng="noPNG" 
                                   ></a>
                             </p> -->



                        <?php for ($i = 1; $i <= 17; $i++) { ?>

                            <p> <a>
                                <img src="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018_<?php echo $i ?>-v1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-book"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                                
                                 alt="ДОГОВОР ОСНОВНОЙ (БЕЗ НДС) V 21.06.2018"
                                 data-ydoc="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018.doc"
                                 data-ypdf="./dist/files/yri/shablon-dogovor-osnovnoy-bez-nds-v-21062018.pdf"
                                 data-prnt="noPrint"
                                 data-spng="noPNG" 
                                   ></a>
                             </p>

                        <?php } ?>


                             
                        </div>  
                       
                      </section>
                    </article>

                    

                    

                    
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >
                        <ul class="nav bs-sidenav">
                            <li><a href="#shablon-dogovor-osnovnoy-bez-nds-v-21062018">ДОГОВОР ОСНОВНОЙ (БЕЗ НДС) V 21.06.2018</a>
                            </li> 
                           
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc/inc-footer.php'; ?>