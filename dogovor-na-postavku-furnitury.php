<?php
include 'inc/inc-session-start.php';
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$yrishablonyClass= 'class="active"';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_albom_obrazcov_Class = '';
$item_list_dvizh_obrazcov_Class = '';
$item_list_titulnyy_dp_Class = '';
$item_list_titulnyy_kd_Class = '';

$item_dogovor_Class = '';
$item_dogovor_na_postavku_furnitury_Class = 'active';
$item_akty_Class = '';
$item_pisma_klientu_Class = '';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-yuridicheskie-dokumenty.php';
?> 
                <!-- main  -->  
                    <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                    <article >
                      <section >
                        <div class="page-header">
                        <h1 itemprop="name" id="dogovor-na-postavku-furnitury">ДОГОВОР НА ПОСТАВКУ ФУРНИТУРЫ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4></h4>
                                                       
                        <p> <a>
                                <img src="./dist/files/yri/dogovor-na-postavku-furnitury_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-book"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                                
                                 alt="ДОГОВОР НА ПОСТАВКУ ФУРНИТУРЫ"
                                 data-ydoc="./dist/files/yri/dogovor-na-postavku-furnitury.doc"
                                 data-ypdf="./dist/files/yri/dogovor-na-postavku-furnitury.pdf"
                                 data-prnt="noPrint"
                                 data-spng="noPNG" 
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>  
                       
                      </section>
                    </article>

                    

                    
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >
                        <ul class="nav bs-sidenav">
                            <li><a href="#dogovor-na-postavku-furnitury">ДОГОВОР НА ПОСТАВКУ ФУРНИТУРЫ</a>
                            </li> 
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc/inc-footer.php'; ?>