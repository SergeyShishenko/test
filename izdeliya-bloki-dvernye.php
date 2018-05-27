<?php
session_start();
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass'])) { header('Location:index-session.php');    exit();}
if ($_SESSION['sess_login']!==$enter_login ||   $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
$detaliClass = '';
$izdeliyaClass = 'class="active"';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_bloki_dvernye_Class = 'active';
$item_mebel_korpusnaya_Class = '';
$item_paneli_stenovye_Class = '';
$item_karnizy_i_frizy_Class = '';
$item_plintusy_i_moldingi_Class = '';
$item_ekrany_Class = '';
$item_pilyastry_Class = '';
$item_potolki_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header cont">
                          <h1 itemprop="name" id="dveri-konstrukcii">Конструкции дверных блоков</h1>
                        
                         <p> <a>
                            <img src="./dist/images/spisok-poloten-dvernyh-blokov-tipovyh-0.png" class="center-block img-rounded img-thumbnail"
                             data-toggle="modal"
                             data-target="#myModal"                                                         
                             alt="Список полотен дверных блоков типовых"
                             data-dwg="./dist/files/5000201-00-100-2d-polotna-tipovye.dwg"
                               ></a>
                         </p>
                         <div class="overlay"></div>
                         </div>
                        <h2 id="polotno-bloka-dvernogo-gluhoe-pco">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного глухое 
                            <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr></h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-gluhoe-pco.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного глухое ПЦО"
                                    data-dwg="./dist/files/5000201-00-100-0101-polotno-bloka-dvernogo-gluhoe-pco.dwg"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного глухое
                                <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr> виды-DE</h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-gluhoe-pco-DE.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного глухое ПЦО виды-DE"
                                    data-dwg="non"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        
                        <h2 id="polotno-bloka-dvernogo-so-steklom-pco">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного со стеклом
                            <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr></h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-so-steklom-pco.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                    
                                    alt="Полотно блока дверного со стеклом ПЦО"
                                    data-dwg="./dist/files/5000201-00-100-0111-polotno-bloka-dvernogo-so-steklom-pco.dwg"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного со стеклом
                                <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr> виды-DE</h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-so-steklom-pco-DE.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного глухое ПЦО виды-DE"
                                    data-dwg="non"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>

                        <h2 id="polotno-bloka-dvernogo-so-steklomfacet-pco">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного со стеклом(фацет) 
                            <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr></h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-so-steklomfacet-pco.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного со стеклом(фацет) ПЦО"
                                    data-dwg="./dist/files/5000201-00-100-0113-polotno-bloka-dvernogo-so-steklomfacet-pco.dwg"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного со стеклом(фацет)
                                <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr> виды-DE</h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-so-steklomfacet-pco-DE.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного со стеклом(фацет) ПЦО виды-DE"
                                    data-dwg="non"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <h2 id="polotno-bloka-dvernogo-s-zerkalom-pco">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного с зеркалом
                            <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr></h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-s-zerkalom-pco.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного с зеркалом ПЦО"
                                    data-dwg="./dist/files/5000201-00-100-0121-polotno-bloka-dvernogo-s-zerkalom-pco.dwg"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного с зеркалом
                                <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr> виды-DE</h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-s-zerkalom-pco-DE.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного с зеркалом ПЦО виды-DE"
                                    data-dwg="non"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <h2 id="polotno-bloka-dvernogo-s-zerkalomfacet-pco">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного с зеркалом(фацет) 
                            <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr></h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-s-zerkalomfacet-pco.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного с зеркалом(фацет) ПЦО"
                                    data-dwg="./dist/files/5000201-00-100-0123-polotno-bloka-dvernogo-s-zerkalomfacet-pco.dwg"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" ><h4>Полотно блока дверного с зеркалом(фацет)
                                <abbr title="Прозрачный Цикл Отделки">ПЦО</abbr> виды-DE</h4>
                                                        
                            <p><a>
                                <img src="./dist/images/polotno-bloka-dvernogo-s-zerkalomfacet-pco-DE.png" class="center-block img-rounded img-thumbnail"
                                    data-toggle="modal"
                                    data-target="#myModal"                                                     
                                    alt="Полотно блока дверного с зеркалом(фацет) ПЦО виды-DE"
                                    data-dwg="non"
                                    ></a>
                                </p>
                                <div class="overlay"></div>
                        </div>
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="polotna">Дверные блоки с распашными полотнами</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt harum minus possimus, tempore suscipit fugit nostrum enim hic illum tempora assumenda nemo, vero officiis asperiores, fuga aut. Ex, ratione!</p>
                        <div class="bs-callout bs-callout-warning" id="jquery-required">
                          <h4>Lorem ipsum dolor</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>


                        <h2 id="polotna-bez-falca">&nbsp;</h2>
                        <h2 >Полотна без фальца</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>


                        <h2 id="polotna-s-falcem">&nbsp;</h2>
                        <h2 >Полотна c фальцем</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="razdvizhnye-polotna">Дверные блоки с раздвижными полотнами</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio quis ratione quam magni rerum aliquid doloremque commodi, possimus, sit incidunt.</p>
                        
                        <h2 id="razdvizhnye-polotna-po-stene">&nbsp;</h2>
                        <h2 >Полотна без складывания — раздвижение по стене</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                         
                        <h2 id="razdvizhnye-polotna-v-penal">&nbsp;</h2>
                        <h2 >Полотна без складывания — раздвижение в пенал</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>

                        <h2 id="razdvizhnye-polotna-v-proeme">&nbsp;</h2>
                        <h2 >Полотна без складывания — раздвижение в проеме</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>

                      </section>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="mayatnikovye-polotna">Дверные блоки с маятниковыми (барными) полотнами</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                      </section>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" id="bs-docs-section">
                          <div class="page-header">
                            <h1 itemprop="name" id="portaly">Дверные блоки без полотен (порталы)</h1>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                        </section>
                      </article>
                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" id="bs-docs-section">
                          <div class="page-header">
                            <h1 itemprop="name" id="sborochnye-shemy-polotna">Сборочно-монтажные схемы</h1>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid possimus animi ullam harum officia perferendis sit unde incidunt id eaque? Impedit sequi ullam pariatur veritatis excepturi accusamus, officiis maxime perspiciatis.</p>
                        </section>
                    </article>
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" >
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            <li><a href="#dveri-konstrukcii">Конструкции дверных блоков</a>
                                <ul class="nav">
                                    <li><a href="#polotno-bloka-dvernogo-gluhoe-pco" >5000201-00_100_01.01 Полотно блока дверного глухое ПЦО</a>
                                    </li>
                                    <li><a href="#polotno-bloka-dvernogo-so-steklom-pco" >5000201-00_100_01.11 Полотно блока дверного со стеклом ПЦО</a>
                                    </li>
                                    <li><a href="#polotno-bloka-dvernogo-so-steklomfacet-pco" >5000201-00_100_01.13 Полотно блока дверного со стеклом(фацет) ПЦО</a>
                                    </li>
                                    <li><a href="#polotno-bloka-dvernogo-s-zerkalom-pco" >5000201-00_100_01.21 Полотно блока дверного с зеркалом ПЦО</a>
                                    </li>
                                    <li><a href="#polotno-bloka-dvernogo-s-zerkalomfacet-pco" >5000201-00_100_01.23 Полотно блока дверного с зеркалом(фацет) ПЦО</a>
                                    </li>                                   
                                </ul>
                            </li>
                            <li><a href="#polotna">Дверные блоки с распашными полотнами </a>
                                <ul class="nav">
                                    <li><a href="#polotna-bez-falca">Полотна без фальца</a>
                                    </li>
                                    <li><a href="#polotna-s-falcem">Полотна с фальцем</a>
                                    </li>                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#razdvizhnye-polotna">Дверные блоки с раздвижными полотнами</a>
                                <ul class="nav">
                                    <li><a href="#razdvizhnye-polotna-po-stene">Полотна без складывания — раздвижение по стене</a>
                                    </li>
                                    <li><a href="#razdvizhnye-polotna-v-penal">Полотна без складывания — раздвижение в пенал</a>
                                    </li>
                                    <li><a href="#razdvizhnye-polotna-v-proeme">Полотна без складывания — раздвижение в проеме</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#mayatnikovye-polotna">Дверные блоки с маятниковыми (барными) полотнами</a>
                            </li>
                            <li><a href="#portaly">Дверные блоки без полотен (порталы)</a>
                            </li>
                            
                            <li><a href="#sborochnye-shemy-polotna">Сборочно-монтажные схемы</a>
                            </li>                         
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>