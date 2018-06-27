<?php
session_start();
$_SESSION['ref'] = $_SERVER['REQUEST_URI'].$_SERVER['HTTP_REFERER'];
// alert($_SESSION['ref']);
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass']) || $_SESSION['sess_login']!==$enter_login || $_SESSION['sess_pass']!==$enter_passw) { header('Location:index-session.php');    exit();}
//if ($_SESSION['sess_login']!==$enter_login || $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
$detaliClass = '';
$izdeliyaClass = 'class="active"';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_bloki_dvernye_Class = '';
$item_mebel_korpusnaya_Class = '';
$item_paneli_stenovye_Class = '';
$item_karnizy_i_frizy_Class = '';
$item_plintusy_i_moldingi_Class = '';
$item_ekrany_Class = '';
$item_pilyastry_Class = '';
$item_potolki_Class = '';
$item_lestnicy_Class = '';
$item_standartnye_uzly_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-ekrany">УЗЛЫ ЭКРАНЫ</h1>
                        </div>                     
                        <h2 id="uzel--e1-700">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Узел № Э1/700</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--e1-700.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Э1/700"                               
                                 alt="Узел № Э1/700"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      
                        <h2 id="uzel--e1-600">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4 >Узел № Э1/600</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p> -->
                            <!-- <a href=""><img  src="img.jpg" alt="" style="width:200px; height:200px;" data-toggle="modal" data-target="#myModal"class="img-rounded img-thumbnail"></a> -->
                           
                            <p> <a>
                                <img src="./dist/images/uzel--e1-600.png" class="center-block   img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Э1/600"                             
                                 alt="Узел № Э1/600"
                                 data-dwg=""
                                   ></a>
                            </p>
                            <div class="overlay"></div>
                        </div>

                        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-pilyastry">УЗЛЫ ПИЛЯСТРЫ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-1-h1">Узел № Пл1/1/Х_1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-1-h1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/1/Х_1"                               
                                 alt="Узел № Пл1/1/Х_1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-1-h2">Узел № Пл1/1/Х_2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-1-h2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/1/Х_2"                               
                                 alt="Узел № Пл1/1/Х_2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-1-h3">Узел № Пл1/1/Х_3</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-1-h3.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/1/Х_3"                               
                                 alt="Узел № Пл1/1/Х_3"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-1-h4">Узел № Пл1/1/Х_4</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-1-h4.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/1/Х_4"                               
                                 alt="Узел № Пл1/1/Х_4"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-2-h1">Узел № Пл1/2/Х_1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-2-h1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/2/Х_1"                               
                                 alt="Узел № Пл1/2/Х_1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-2-h2">Узел № Пл1/2/Х_2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-2-h2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/2/Х_2"                               
                                 alt="Узел № Пл1/2/Х_2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-2-h3">Узел № Пл1/2/Х_3</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-2-h3.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/2/Х_3"                               
                                 alt="Узел № Пл1/2/Х_3"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl1-2-h4">Узел № Пл1/2/Х_4</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl1-2-h4.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл1/2/Х_4"                               
                                 alt="Узел № Пл1/2/Х_4"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl2-h">Узел № Пл2/Х</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl2-h.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл2/Х"                               
                                 alt="Узел № Пл2/Х"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl3-1-1">Узел № Пл3/1_1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl3-1-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл3/1_1"                               
                                 alt="Узел № Пл3/1_1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl3-1-2">Узел № Пл3/1_2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl3-1-2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл3/1_2"                               
                                 alt="Узел № Пл3/1_2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl3-2-1">Узел № Пл3/2_1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl3-2-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл3/2_1"                               
                                 alt="Узел № Пл3/2_1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl3-2-2">Узел № Пл3/2_2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl3-2-2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл3/2_2"                               
                                 alt="Узел № Пл3/2_2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl4-1">Узел № Пл4_1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl4-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл4_1"                               
                                 alt="Узел № Пл4_1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pl4-2">Узел № Пл4_2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pl4-2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Пл4_2"                               
                                 alt="Узел № Пл4_2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                         
                       </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-shponki" >УЗЛЫ ШПОНКИ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--shp1-10-16-24">Узел № Шп1/24; Узел № Шп1/16; Узел № Шп1/10 </h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--shp1-10-16-24.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Шп1/24; Узел № Шп1/16; Узел № Шп1/10"                               
                                 alt="Узел № Шп1/24; Узел № Шп1/16; Узел № Шп1/10"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      </section>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-polki" >УЗЛЫ ПОЛКИ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--p-4-6-8">Узел № П/4; Узел № П/6; Узел № П/8 </h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--p-4-6-8.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № П/4; Узел № П/6; Узел № П/8 "                               
                                 alt="Узел № П/4; Узел № П/6; Узел № П/8 "
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--p-4-6-8perf">Узел № П/4/перф.; Узел № П/6/перф.; Узел № П/8/перф. </h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--p-4-6-8perf.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № П/4/перф.; Узел № П/6/перф.; Узел № П/8/перф. "                               
                                 alt="Узел № П/4/перф.; Узел № П/6/перф.; Узел № П/8/перф. "
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-shtangoderzhateli" >УЗЛЫ ШТАНГОДЕРЖАТЕЛИ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--shd1-shd2">Узел № ШД1; Узел № ШД2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--shd1-shd2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № ШД1; Узел № ШД2"                               
                                 alt="Узел № ШД1; Узел № ШД2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>

                     <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-ekscentrikovye-styazhki-evrovinty" >УЗЛЫ ЭКСЦЕНТРИКОВЫЕ СТЯЖКИ, ЕВРОВИНТЫ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--e1-evr">Узел № Э1/16; Узел № Э1/24; Узел № Э2/16; Узел № Э2/24; Узел №Евр/16; Узел №Евр/24</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--e1-evr.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Э1/16; Узел № Э1/24; Узел № Э2/16; Узел № Э2/24; Узел №Евр/16; Узел №Евр/24"                               
                                 alt="Узел № Э1/16; Узел № Э1/24; Узел № Э2/16; Узел № Э2/24; Узел №Евр/16; Узел №Евр/24"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="paneli-poyasa" >ПАНЕЛИ ПОЯСА</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--polup-15-30gr">Узел № Полуп/15*30гр</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--polup-15-30gr.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Полуп/15*30гр"                               
                                 alt="Узел № Полуп/15*30гр"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                        
                          <h1 itemprop="name" id="uzly-ustanovki-ruchki" >УЗЛЫ УСТАНОВКИ РУЧКИ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        
                        <h4  id="uzel--ruch-1">Узел № Руч/1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--ruch-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Руч/1"                               
                                 alt="Узел № Руч/1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div> 
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--ruch-2">Узел № Руч/2</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--ruch-2.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № Руч/2"                               
                                 alt="Узел № Руч/2"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzly-podlozhka-montazhnaya" >УЗЛЫ ПОДЛОЖКА МОНТАЖНАЯ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pm-1">Узел № ПМ/1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pm-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № ПМ/1"                               
                                 alt="Узел № ПМ/1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="uzel-po-prisadke-paneli-poyasa-pod-samorez" >УЗЕЛ ПО ПРИСАДКЕ ПАНЕЛИ ПОЯСА ПОД САМОРЕЗ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--ppp-1">Узел № ППП/1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--ppp-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № ППП/1"                               
                                 alt="Узел № ППП/1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="paz-nizhniy-razdvizhnaya-dver" >ПАЗ НИЖНИЙ РАЗДВИЖНАЯ ДВЕРЬ</h1>
                        </div>
                        <h2 >&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" >
                        <h4  id="uzel--pnrd-1">Узел № ПНРД/1</h4>
                            <!-- <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                             -->
                            <p> <a>
                                <img src="./dist/images/uzel--pnrd-1.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="Узел № ПНРД/1"                               
                                 alt="Узел № ПНРД/1"
                                 data-dwg=""
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>                      
                      </section>
                    </article>
                   
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary"  id="main-page">
                        <ul class="nav bs-sidenav">
                            <li><a href="#uzly-ekrany" >УЗЛЫ ЭКРАНЫ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--e1-700">&#9999;&nbsp;Узел № Э1/700</a>
                                    </li>
                                    <li><a href="#uzel--e1-600">&#9999;&nbsp;Узел № Э1/600</a>
                                    </li> 
                                                                      
                                </ul>
                            </li>
                            <li><a href="#uzly-pilyastry" >УЗЛЫ ПИЛЯСТРЫ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--pl1-1-h1">&#9999;&nbsp;Узел № Пл1/1/Х_1</a>
                                    </li>
                                    <li><a href="#uzel--pl1-1-h2">&#9999;&nbsp;Узел № Пл1/1/Х_2</a>
                                    </li>
                                    <li><a href="#uzel--pl1-1-h3">&#9999;&nbsp;Узел № Пл1/1/Х_3</a>
                                    </li>
                                    <li><a href="#uzel--pl1-1-h4">&#9999;&nbsp;Узел № Пл1/1/Х_4</a>
                                    </li>
                                    <li><a href="#uzel--pl1-2-h1">&#9999;&nbsp;Узел № Пл1/2/Х_1</a>
                                    </li>
                                    <li><a href="#uzel--pl1-2-h2">&#9999;&nbsp;Узел № Пл1/2/Х_2</a>
                                    </li>
                                    <li><a href="#uzel--pl1-2-h3">&#9999;&nbsp;Узел № Пл1/2/Х_3</a>
                                    </li>
                                    <li><a href="#uzel--pl1-2-h4">&#9999;&nbsp;Узел № Пл1/2/Х_4</a>
                                    </li>
                                    <li><a href="#uzel--pl2-h">&#9999;&nbsp;Узел № Пл2/Х</a>
                                    </li>
                                    <li><a href="#uzel--pl3-1-1">&#9999;&nbsp;Узел № Пл3/1_1</a>
                                    </li>
                                    <li><a href="#uzel--pl3-1-2">&#9999;&nbsp;Узел № Пл3/1_2</a>
                                    </li>
                                    <li><a href="#uzel--pl3-2-1">&#9999;&nbsp;Узел № Пл3/2_1</a>
                                    </li>
                                    <li><a href="#uzel--pl3-2-2">&#9999;&nbsp;Узел № Пл3/2_2</a>
                                    </li>
                                    <li><a href="#uzel--pl4-1">&#9999;&nbsp;Узел № Пл4_1</a>
                                    </li>
                                    <li><a href="#uzel--pl4-2">&#9999;&nbsp;Узел № Пл4_2</a>
                                    </li>                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-shponki" >УЗЛЫ ШПОНКИ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--shp1-10-16-24">&#9999;&nbsp;Узел № Шп1/24;<br>Узел № Шп1/16;<br>Узел № Шп1/10 </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-polki" >УЗЛЫ ПОЛКИ</a>
                                <ul class="nav">
                                <li><a href="#uzel--p-4-6-8">&#9999;&nbsp;Узел № П/4;<br>Узел № П/6;<br>Узел № П/8 </a>
                                    </li>
                                    <li><a href="#uzel--p-4-6-8perf">&#9999;&nbsp;Узел № П/4/перф.;<br>Узел № П/6/перф.;<br>Узел № П/8/перф. </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-shtangoderzhateli" >УЗЛЫ ШТАНГОДЕРЖАТЕЛИ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--shd1-shd2">&#9999;&nbsp;Узел № ШД1;<br>Узел № ШД2; </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-ekscentrikovye-styazhki-evrovinty" >УЗЛЫ ЭКСЦЕНТРИКОВЫЕ СТЯЖКИ, ЕВРОВИНТЫ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--e1-evr">&#9999;&nbsp;Узел № Э1/16;<br>Узел № Э1/24;<br>Узел № Э2/16;<br>Узел № Э2/24;<br>Узел №Евр/16;<br>Узел №Евр/24</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#paneli-poyasa" >ПАНЕЛИ ПОЯСА</a>
                                <ul class="nav">
                                    <li><a href="#uzel--polup-15-30gr">&#9999;&nbsp;Узел № Полуп/15*30гр</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-ustanovki-ruchki" >УЗЛЫ УСТАНОВКИ РУЧКИ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--ruch-1">&#9999;&nbsp;Узел № Руч/1</a>
                                    </li>
                                    <li><a href="#uzel--ruch-2">&#9999;&nbsp;Узел № Руч/2</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#uzly-podlozhka-montazhnaya" >УЗЛЫ ПОДЛОЖКА МОНТАЖНАЯ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--pm-1">&#9999;&nbsp;Узел № ПМ/1</a>
                                    </li> 
                                </ul>
                            </li>
                            <li>
                                <a href="#uzel-po-prisadke-paneli-poyasa-pod-samorez" >УЗЕЛ ПО ПРИСАДКЕ ПАНЕЛИ ПОЯСА ПОД САМОРЕЗ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--ppp-1">&#9999;&nbsp;Узел № ППП/1</a>
                                    </li> 
                                </ul>
                            </li>
                            <li>
                                <a href="#paz-nizhniy-razdvizhnaya-dver" >ПАЗ НИЖНИЙ РАЗДВИЖНАЯ ДВЕРЬ</a>
                                <ul class="nav">
                                    <li><a href="#uzel--pnrd-1">&#9999;&nbsp;Узел № ПНРД/1</a>
                                    </li> 
                                </ul>
                            </li>
                                                    
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>