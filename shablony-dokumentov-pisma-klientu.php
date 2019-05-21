<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-shablony-dokumentov.php';
$yrishablonyClass= 'class="active"';
$item_pisma_klientu_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-yuridicheskie-dokumenty.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="pisma-klientu">Письма клиенту</h1>
                        </div>
                        <h2  id="shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont"><h4>Шаблон ЖЕСТКАЯ Письма о предоставлении информации по Договору</h4>
                                                       
                            <p> <a>
                                <img src="./dist/files/yri/shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-book"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                                
                                 alt="Шаблон ЖЕСТКАЯ Письма о предоставлении информации по Договору"
                                 data-ydoc="./dist/files/yri/shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru.doc"
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
                                    <li><a href="#shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru">&#9999;&nbsp;Шаблон ЖЕСТКАЯ Письма о предоставлении информации по Договору</a>
                                    </li> 
                                    <li><a href="shablony-dokumentov-pisma-klientu-2.php#shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca">&#9999;&nbsp;Шаблон ЖЕСТКАЯ Письма о предоставлении согласования ДП_КДЗ_Образца</a>
                                    </li>                                    
                                </ul>
                            </li> 
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc/inc-footer.php'; ?>