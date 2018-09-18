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
$item_list_dvizh_obrazcov_Class = '';
$item_list_titulnyy_dp_Class = 'active';
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
                          <h1 itemprop="name" id="shablon-albom-dp">Альбом ДП </h1>
                        </div>
                        <h2 id="list-titulnyy-dp_1">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Лист титульный ДП</h4>
                                                       
                            <p> <a>
                                <img src="./dist/images/shablon-albom-dp_1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Лист титульный ДП"                               
                                 alt="Лист титульный ДП"
                               
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>
                      

                        <h2 id="shablon-albom-dp_2">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Второй лист ДП</h4>
                                                   
                            <p> <a>
                                <img src="./dist/images/shablon-albom-dp_2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Второй лист ДП"                               
                                 alt="Второй лист ДП"
                                
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>

                        <h2 id="shablon-albom-dp_3">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Состав проекта</h4>
                                                   
                            <p> <a>
                                <img src="./dist/images/shablon-albom-dp_3.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Состав проекта"                               
                                 alt="Состав проекта"
                                
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>

                        <h2 id="shablon-albom-dp_4">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Ситуационный план</h4>
                                                   
                            <p> <a>
                                <img src="./dist/images/shablon-albom-dp_4.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Ситуационный план"                               
                                 alt="Ситуационный план"
                                
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>

                        <h2 id="shablon-albom-dp_5">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Обмерный план</h4>
                                                   
                            <p> <a>
                                <img src="./dist/images/shablon-albom-dp_5.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Обмерный план"                               
                                 alt="Обмерный план"
                                 data-pdf="./dist/files/pdf/shablon-albom-dp.pdf"
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
                            <li><a href="#shablon-albom-dp">Альбом ДП </a>
                            <ul class="nav">
                                    <li><a href="#list-titulnyy-dp_1">&#9999;&nbsp;Лист титульный ДП</a>
                                    </li>
                                    <li><a href="#shablon-albom-dp_2">&#9999;&nbsp;Второй лист ДП</a>
                                    </li>
                                    <li><a href="#list-titulnyy-dp_3">&#9999;&nbsp;Состав проекта</a>
                                    </li>
                                    <li><a href="#shablon-albom-dp_4">&#9999;&nbsp;Ситуационный план</a>
                                    </li>
                                    <li><a href="#shablon-albom-dp_5">&#9999;&nbsp;Обмерный план</a>
                                    </li>
                                                                      
                                </ul>
                            </li>                           
                            
                                                   
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>