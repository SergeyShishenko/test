<?php
include 'inc-session-start.php';
include 'inc-menu-value.php';
include 'inc-menu-value-shablony-dokumentov.php';
$shablonyClass = 'class="active"';
$item_shtampy_chertezhey_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-shablony-dokumentov.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">                

                    <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="shtampy-chertezhey-arhitekturnogo-byuro">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</h1>
                        </div> 

                        <h2 id="Stamp_Sofia">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Stamp_Sofia</h4>
                                                    
                            <p> <a>
                                <img src="./dist/images/Stamp_Sofia_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"                                                             
                                 alt="Stamp_Sofia"
                                 data-dwg="./dist/files/dwg/Stamp_Sofia.dwg"
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      </section>
                    </article>

                    <article >
                      <section >
                        <div class="page-header">
                          <h1 itemprop="name" id="shtam-osnovnoy-nadpisi-chertezhey-kd">ШТАМПЫ ЧЕРТЕЖЕЙ КОНСТРУКТОРСКОГО БЮРО</h1>
                        </div> 
                        <h2 id="5000302-02-001-shtam-osnovnoy-nadpisi-chertezhey-kd">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>5000302-02-001 штамп основной надписи чертежей КД</h4>
                                                    
                            <p> <a>
                                <img src="./dist/images/5000302-02-001-shtam-osnovnoy-nadpisi-chertezhey-kd_1.png" class="center-block img-rounded img-thumbnail b-lazy bar img-album"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                                                
                                 alt="5000302-02-001 штамп основной надписи чертежей КД"
                                 data-dwg="./dist/files/dwg/5000302-02-001-shtam-osnovnoy-nadpisi-chertezhey-kd.dwg"
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
                            
                            <li><a href="#shtampy-chertezhey-arhitekturnogo-byuro">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</a>
                                <ul class="nav">
                                    <li><a href="#Stamp_Sofia">&#9999;&nbsp;Stamp_Sofia</a>
                                    </li>                                                                       
                                </ul>
                            </li>
                            <li><a href="#shtam-osnovnoy-nadpisi-chertezhey-kd">ШТАМПЫ ЧЕРТЕЖЕЙ КОНСТРУКТОРСКОГО БЮРО</a>
                                <ul class="nav">
                                    <li><a href="#5000302-02-001-shtam-osnovnoy-nadpisi-chertezhey-kd">&#9999;&nbsp;5000302-02-001 штам основной надписи чертежей КД</a>
                                    </li>                                  
                                </ul>
                            </li>
                                                 
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>