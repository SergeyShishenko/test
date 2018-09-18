<?php
include 'inc-session-start.php';
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = 'class="active"';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_albom_obrazcov_Class = '';
$item_list_dvizh_obrazcov_Class = 'active';
$item_list_titulnyy_dp_Class = '';
$item_list_titulnyy_kd_Class = '';
$item_vpi_Class = '';
$item_dogovor_Class = '';
$item_akty_Class = '';
$item_pisma_klientu_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-shablony-dokumentov.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                    <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="list-dvizheniya-obrazcov">Лист движения образцов</h1>
                        </div>
                        <h2 id="dok--385">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Док. № 385</h4>
                                                       
                            <p> <a>
                                <img src="./dist/images/list-dvizheniya-obrazcov_1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Лист движения образцов"                               
                                 alt="Лист движения образцов"
                                 data-pdf="./dist/files/pdf/list-dvizheniya-obrazcov.pdf"
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
                            <li><a href="#list-dvizheniya-obrazcov">Лист движения образцов</a>
                            <ul class="nav">
                                    <li><a href="#dok--385">&#9999;&nbsp;Док. № 385</a>
                                    </li>                              
                                </ul>
                            </li>                     
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>