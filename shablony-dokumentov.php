<?php
include 'inc-session-start.php';


if(isset($_GET['obj_id'])) {
    echo 'id объекта '.$_GET['obj_id'];
    //подключаем конфигурационный файл
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    // require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 
    require_once('DATA/TABLES/configDB.php');
  
	die("<br>Остановка скрипта"); 

}


$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = 'class="active"';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_albom_obrazcov_Class = 'active';
$item_list_dvizh_obrazcov_Class = '';
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
                          <h1 itemprop="name" id="shablon-alboma-obrazcov">ШАБЛОН АЛЬБОМА ОБРАЗЦОВ</h1>
                        </div>
                        <h2 id="shablon-alboma-obrazcov_1">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Лист титульный</h4>
                                                       
                            <p> <a>
                                <!-- <img src="./dist/images/shablon-alboma-obrazcov2_1.png" class="center-block img-rounded img-thumbnail" -->
                                <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/shablon-alboma-obrazcov2_1.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Лист титульный"                               
                                 alt="Лист титульный"
                                
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>
                      

                        <h2 id="shablon-alboma-obrazcov_2">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Состав альбома образцов</h4>
                                                   
                            <p> <a>
                                <!-- <img src="./dist/images/shablon-alboma-obrazcov_2-v2.png" class="center-block img-rounded img-thumbnail" -->
                            <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/shablon-alboma-obrazcov_2-v2.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                                
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Состав альбома образцов"                               
                                 alt="Состав альбома образцов"
                                
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>

                        <h2 id="shablon-alboma-obrazcov_3">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Размещение изделий на плане</h4>
                                                   
                            <p> <a>
                                <!-- <img src="./dist/images/shablon-alboma-obrazcov2_3.png" class="center-block img-rounded img-thumbnail" -->
                                <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/shablon-alboma-obrazcov2_3.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Размещение изделий на плане"                               
                                 alt="Размещение изделий на плане"
                              
                                   ></a>
                             </p>
                             <!-- <div class="overlay"></div> -->
                        </div>

                        <h2 id="shablon-alboma-obrazcov_4">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Образец №</h4>
                                                   
                            <p> <a>
                                <!-- <img src="./dist/images/shablon-alboma-obrazcov2_4.png" class="center-block img-rounded img-thumbnail" -->
                                <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/shablon-alboma-obrazcov2_4.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Образец №"                               
                                 alt="Образец №"
                                 data-pdf="./dist/files/pdf/shablon-alboma-obrazcov.pdf"
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
                            <li><a href="#shablon-alboma-obrazcov">ШАБЛОН АЛЬБОМА ОБРАЗЦОВ</a>
                            <ul class="nav">
                                    <li><a href="#shablon-alboma-obrazcov_1">&#9999;&nbsp;Лист титульный</a>
                                    </li>
                                    <li><a href="#shablon-alboma-obrazcov_2">&#9999;&nbsp;Состав альбома образцов</a>
                                    </li>
                                    <li><a href="#shablon-alboma-obrazcov_3">&#9999;&nbsp;Размещение изделий на плане</a>
                                    </li>
                                    <li><a href="#shablon-alboma-obrazcov_4">&#9999;&nbsp;Образец №</a>
                                    </li>
                                                                      
                                </ul>
                            </li>                           
                          
                                                   
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>