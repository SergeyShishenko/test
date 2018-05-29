<?php
session_start();
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass'])) { header('Location:index-session.php');    exit();}
if ($_SESSION['sess_login']!==$enter_login ||   $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = 'class="active"';
$materialyClass = '';
$literaturaClass = '';

$item_dlya_dvernyh_blokov_Class = 'active';
$item_dlya_mebeli_Class = '';
$item_universalnaya_Class = '';
$item_katalogi_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-furnitura.php';

?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="petli-dlya-poloten-dvernyh">ПЕТЛИ для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div> 
                        <h2 id="petli-vvertnye-chetyrehshtyrkovye-otlav" >&nbsp;</h2>                   
                        <h2 >Петли ввертные четырехштырьковые OTLAV 14 мм</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/petli-vvertnye-chetyrehshtyrkovye-otlav-14-mm.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/petli-vvertnye-chetyrehshtyrkovye-otlav-14-mm.pdf"></a>
                            </object>
                            <h2 id="otlav2" >&nbsp;</h2>
                        <h2>Петли ввертные четырехштырьковые OTLAV</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/petli-vvertnye-chetyrehshtyrkovye-otlav.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/petli-vvertnye-chetyrehshtyrkovye-otlav.pdf"></a>
                            </object>
                            <h2 id="otlav3">&nbsp;</h2>
                        <h2 >Петли дверные разные</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/petli-dvernye-raznye.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/petli-dvernye-raznye.pdf"></a>
                            </object>
                          <h2  id="petli-kartochnye-dvernye-fs">&nbsp;</h2> 
                             <h2>Петли карточные дверные FS</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/artikuly-petel-kartochnyh-dvernyh-fs.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/artikuly-petel-kartochnyh-dvernyh-fs.pdf"></a>
                            </object>
                            <h2  id="petli-skrytogo-montazha-tectus">&nbsp;</h2> 
                             <h2 >Петли скрытого монтажа TECTUS TE_240_3D</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/TE_240_3D.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/TE_240_3D.pdf"></a>
                            </object>
                            <h2  id="petli-skrytogo-montazha-tectus-TE_340_3D">&nbsp;</h2> 
                             <h2 >Петли скрытого монтажа TECTUS TE_340_3D</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/TE_340_3D.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/TE_340_3D.pdf"></a>
                            </object>

                      </section>
                    </article>


                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="mehanizmy-razdvizheniya-dlya-poloten-dvernyh">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div> 
                        <h2 id="sistema-razdvizheniya-laguna-standart">&nbsp;</h2>                   
                        <h2 >Система раздвижения Laguna Standart</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/sistema-razdvizheniya-laguna-standart.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/sistema-razdvizheniya-laguna-standart.pdf"></a>
                            </object>

                      </section>
                    </article>

                     <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="zamki-dlya-poloten-dvernyh">ЗАМКИ для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div> 

                        <h2 id="zamki-agb-dlya-razdvizhnyh-dverey">&nbsp;</h2>                   
                        <h2 >Замки AGB для раздвижных дверей</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/Scivola Tre.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Scivola Tre.pdf"></a>
                            </object>
                            
                        <h2 id="zamki-i-otvetnye-planki-agb">&nbsp;</h2>                   
                        <h2 >Замки и ответные планки AGB</h2>
                        <p>Mediana Evolution</p>
                        <object data="./dist/files/zamki-agb-mediana-evolution.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/zamki-agb-mediana-evolution.pdf"></a>
                            </object>
                            <p>Mediana Polaris</p>
                        <object data="./dist/files/Z9003802X2_fd_progettoXT_ita.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Z9003802X2_fd_progettoXT_ita.pdf"></a>
                            </object>
                               
                        <h2 id="zamki-i-otvetnye-planki-ces">&nbsp;</h2>                   
                        <h2 >Замки и ответные планки CES</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/gabaritnye-razmery-zamkov-i-otvetnyh-planok-ces.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/gabaritnye-razmery-zamkov-i-otvetnyh-planok-ces.pdf"></a>
                            </object>
                      </section>
                    </article>


                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="porogi-avtomaticheskie-dlya-poloten-dvernyh">ПОРОГИ АВТОМАТИЧЕСКИЕ для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div>                         
                        <h2 id="planet-ft">&nbsp;</h2>
                                         
                        <h2 >Planet_FT</h2>
                         <a href="./dist/files/Planet_FT_CAD-drawing_2D.dwg" type="button" class="btn btn-primary"download="Planet_FT_CAD-drawing_2D.dwg">Скачать - Planet_FT_CAD-drawing_2D.dwg</a> 
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p> -->
                        <object data="./dist/files/Planet_FT.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Planet_FT.pdf"></a>
                            </object>
                            <object data="./dist/files/Planet_FT_Installation_instructions.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Planet_FT_Installation_instructions.pdf"></a>
                            </object>
                            
                      </section>
                    </article>


                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="rigeli-shpingalety-dlya-poloten-dvernyh">РИГЕЛИ (ШПИНГАЛЕТЫ) для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div> 

                        <h2 id="rigel1">&nbsp;</h2>                   
                        <h2 >rigel1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>

                        <h2 id="rigel2">&nbsp;</h2>                   
                        <h2 >rigel2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="rigel3">&nbsp;</h2>                   
                        <h2 >rigel3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>                        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="dovodchiki-dlya-poloten-dvernyh">ДОВОДЧИКИ для ПОЛОТЕН ДВЕРНЫХ</h1>
                        </div> 

                        <h2 id="dovodchik1">&nbsp;</h2>                   
                        <h2 >dovodchik1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>

                        <h2 id="dovodchik2">&nbsp;</h2>                   
                        <h2 >dovodchik2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="dovodchik3">&nbsp;</h2>                   
                        <h2 >dovodchik3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>                        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="upory-napolnye-i-nastennye">УПОРЫ НАПОЛЬНЫЕ и НАСТЕННЫЕ</h1>
                        </div> 

                        <h2 id="upor1">&nbsp;</h2>                   
                        <h2 >upor1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>

                        <h2 id="upor2">&nbsp;</h2>                   
                        <h2 >upor2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object> 

                        <h2 id="upor3">&nbsp;</h2>                   
                        <h2 >upor3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/test.pdf"></a>
                        </object>                        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks-standart">Сводная таблица фурнитуры дверей распашных</h1>
                        </div> 
                        <a href="./dist/files/svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks-standart.xlsx" type="button" class="btn btn-primary"download="svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks-standart.xlsx">Скачать - сводная таблица фурнитуры дверей распашных, класс ЛЮКС, STANDART.xlsx</a> 
                        <h2 id="klass-lyuks">&nbsp;</h2>                   
                        <h2 >класс ЛЮКС</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks.pdf"></a>
                        </object>

                        <h2 id="klass-standart">&nbsp;</h2>                   
                        <h2 >класс STANDART</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/svodnaya-tablica-furnitury-dverey-raspashnyh-klass-standart.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/svodnaya-tablica-furnitury-dverey-raspashnyh-klass-standart.pdf"></a>
                        </object> 
                        
                                            
                      </section>
                    </article>

                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            
                            <li><a href="#petli-dlya-poloten-dvernyh">ПЕТЛИ для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#petli-vvertnye-chetyrehshtyrkovye-otlav">&#9999;&nbsp;Петли ввертные четырехштырьковые OTLAV 14 мм</a>
                                    </li>
                                    <li><a href="#otlav2">&#9999;&nbsp;Петли ввертные четырехштырьковые OTLAV</a>
                                    </li>
                                    <li><a href="#otlav3">&#9999;&nbsp;Петли дверные разные</a>
                                    </li>
                                    <li><a href="#petli-kartochnye-dvernye-fs">&#9999;&nbsp;Петли карточные дверные FS</a>
                                    </li>
                                    <li><a href="#petli-skrytogo-montazha-tectus">&#9999;&nbsp;Петли скрытого монтажа TECTUS TE_240_3D</a>
                                    </li>
                                    <li><a href="#petli-skrytogo-montazha-tectus-TE_340_3D">&#9999;&nbsp;Петли скрытого монтажа TECTUS TE_340_3D</a>
                                    </li>
                                                                       
                                </ul>
                            </li>
                            <li>
                                <a href="#mehanizmy-razdvizheniya-dlya-poloten-dvernyh">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#sistema-razdvizheniya-laguna-standart">&#9999;&nbsp;Система раздвижения Laguna Standart</a>
                                    </li>                                  
                                </ul>
                            </li>

                            <li><a href="#zamki-dlya-poloten-dvernyh">ЗАМКИ для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#zamki-agb-dlya-razdvizhnyh-dverey">&#9999;&nbsp;Замки AGB для раздвижных дверей</a>
                                    </li> 
                                    <li><a href="#zamki-i-otvetnye-planki-agb">&#9999;&nbsp;Замки и ответные планки AGB</a>
                                    </li>
                                    <li><a href="#zamki-i-otvetnye-planki-ces">&#9999;&nbsp;Замки и ответные планки CES</a>
                                    </li>                                 
                                </ul>
                            </li>
                            <li><a href="#porogi-avtomaticheskie-dlya-poloten-dvernyh">ПОРОГИ АВТОМАТИЧЕСКИЕ для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#planet-ft">&#9999;&nbsp;Planet_FT</a>
                                    </li>                                                                   
                                </ul>
                            </li>
                            
                            <li><a href="#rigeli-shpingalety-dlya-poloten-dvernyh">РИГЕЛИ (ШПИНГАЛЕТЫ) для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#rigel1">&#9999;&nbsp;rigel1</a>
                                    </li> 
                                    <li><a href="#rigel2">&#9999;&nbsp;rigel2</a>
                                    </li>
                                    <li><a href="#rigel3">&#9999;&nbsp;rigel3</a>
                                    </li>                                                                  
                                </ul>
                            </li> 

                            <li><a href="#dovodchiki-dlya-poloten-dvernyh">ДОВОДЧИКИ для ПОЛОТЕН ДВЕРНЫХ</a>
                                <ul class="nav">
                                    <li><a href="#dovodchik1">&#9999;&nbsp;dovodchik1</a>
                                    </li> 
                                    <li><a href="#dovodchik2">&#9999;&nbsp;dovodchik2</a>
                                    </li>
                                    <li><a href="#dovodchik3">&#9999;&nbsp;dovodchik3</a>
                                    </li>                                                                  
                                </ul>
                            </li> 

                            
                            <li><a href="#upory-napolnye-i-nastennye">УПОРЫ НАПОЛЬНЫЕ и НАСТЕННЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#upor1">&#9999;&nbsp;upor1</a>
                                    </li> 
                                    <li><a href="#upor2">&#9999;&nbsp;upor2</a>
                                    </li>
                                    <li><a href="#upor3">&#9999;&nbsp;upor3</a>
                                    </li>                                                                  
                                </ul>
                            </li>  

                            <li><a href="#svodnaya-tablica-furnitury-dverey-raspashnyh-klass-lyuks-standart">Сводная таблица фурнитуры дверей распашных</a>
                                <ul class="nav">
                                    <li><a href="#klass-lyuks">&#9999;&nbsp;класс ЛЮКС</a>
                                    </li> 
                                    <li><a href="#klass-standart">&#9999;&nbsp;класс STANDART</a>
                                    </li>
                                                                                                     
                                </ul>
                            </li>                         
                        </ul>
                    </div>
                     
                </div><!-- боковое меню блоки дверные конец -->
                
<?php include 'inc-footer.php'; ?>