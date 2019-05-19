<?php
include 'inc-session-start.php';
include 'inc-menu-value.php';
include 'inc-menu-value-izdeliya.php';
$izdeliyaClass = 'class="active"';
$item_lestnicy_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">             

                <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="konstrukcii-lestnic-tipovyh">КОНСТРУКЦИИ ЛЕСТНИЦ ТИПОВЫХ</h1>
                        </div>                     
                        <h2 id="balyasiny-stolby">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Балясины, Столбы</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="./dist/images/balyasiny-stolby_1.png" class="center-block img-rounded img-thumbnail b-lazy img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Балясины, Столбы"                               
                                 alt="Балясины, Столбы"
                                 data-dwg="./dist/files/dwg/balyasiny-stolby.dwg"
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
                            <li><a href="#konstrukcii-lestnic-tipovyh">КОНСТРУКЦИИ ЛЕСТНИЦ ТИПОВЫХ</a>
                                <ul class="nav">
                                        <li><a href="#balyasiny-stolby">Балясины, Столбы </a>
                                        </li>
                                                                         
                                    </ul>
                            </li>               
                                                  
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>