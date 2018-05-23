<?php
session_start();
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass'])) { header('Location:index-session.php');    exit();}
if ($_SESSION['sess_login']!==$enter_login ||   $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = 'class="active"';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_titulniki_Class = '';
$item_shtampy_chertezhey_Class = 'active';
$item_specifikacii_Class = '';
$item_pokupnye_izdeliya_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-shablony-dokumentov.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">                

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="shtampy-chertezhey-arhitekturnogo-byuro">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</h1>
                        </div> 

                        <h2 id="net-informacii-1">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Нет информации</h4>
                                                    
                            <p> <a>
                                <img src="./dist/images/test.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="test"                               
                                 alt="test"
                                 data-dwg="./dist/files/МДФ_НАКЛАДКА_№050_ДШ.dwg"
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="shtam-osnovnoy-nadpisi-chertezhey-kd">ШТАМПЫ ЧЕРТЕЖЕЙ КОНСТРУКТОРСКОГО БЮРО</h1>
                        </div> 
                        <h2 id="shtam-osnovnoy-nadpisi-chertezhey-kd">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>5000302-02-001 штамп основной надписи чертежей КД</h4>
                                                    
                            <p> <a>
                                <img src="./dist/images/test.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="test"                               
                                 alt="test"
                                 data-dwg="./dist/files/МДФ_НАКЛАДКА_№050_ДШ.dwg"
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                      </section>
                    </article> 
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            
                            <li><a href="#shtampy-chertezhey-arhitekturnogo-byuro">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</a>
                                <ul class="nav">
                                    <li><a href="#net-informacii-1">Нет информации</a>
                                    </li>                                                                       
                                </ul>
                            </li>
                            <li><a href="#shtam-osnovnoy-nadpisi-chertezhey-kd">ШТАМПЫ ЧЕРТЕЖЕЙ КОНСТРУКТОРСКОГО БЮРО</a>
                                <ul class="nav">
                                    <li><a href="#shtam-osnovnoy-nadpisi-chertezhey-kd">5000302-02-001 штам основной надписи чертежей КД</a>
                                    </li>                                  
                                </ul>
                            </li>
                                                 
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>