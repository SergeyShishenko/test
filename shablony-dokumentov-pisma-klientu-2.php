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
$item_list_titulnyy_dp_Class = '';
$item_list_titulnyy_kd_Class = '';
$item_vpi_Class = '';
$item_dogovor_Class = '';
$item_akty_Class = '';
$item_pisma_klientu_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-yuridicheskie-dokumenty.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="pisma-klientu">Письма клиенту</h1>
                        </div>
                        <h2  id="shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont"><h4>Шаблон ЖЕСТКАЯ Письма о предоставлении согласования ДП_КДЗ_Образца</h4>
                                                       
                            <p> <a>
                                <img src="./dist/files/yri/shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-book"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                                
                                 alt="Шаблон ЖЕСТКАЯ Письма о предоставлении согласования ДП_КДЗ_Образца"
                                 data-ydoc="./dist/files/yri/shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca.doc"
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
                            <li><a href="#pisma-klientu">Письма клиенту</a>
                            <ul class="nav">
                                    <li><a href="shablony-dokumentov-pisma-klientu.php#shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru">&#9999;&nbsp;Шаблон ЖЕСТКАЯ Письма о предоставлении информации по Договору</a>
                                    </li> 
                                    <li><a href="#shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca">&#9999;&nbsp;Шаблон ЖЕСТКАЯ Письма о предоставлении согласования ДП_КДЗ_Образца</a>
                                    </li>                                   
                                </ul>
                            </li> 
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>