<?php
session_start();
require_once('data.php');
if (!isset($_SESSION['sess_login']) || !isset($_SESSION['sess_pass'])) { header('Location:index-session.php');    exit();}
if ($_SESSION['sess_login']!==$enter_login ||   $_SESSION['sess_pass']!==$enter_passw) {header('Location:index-session.php');    exit();}
?> 
<?php
$detaliClass = 'class="active"';
$izdeliyaClass = '';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_profili_Class = '';
$item_reznye_Class = '';
$item_kamni_Class = '';
$item_rezby_Class = 'active';
$item_tokarka_Class = '';
$item_frezy_Class = '';
$item_pazy_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-detali.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="profili-nakladki">Накладки</h1>
                        </div>                     
                        <h2 id="profili-nakladki-50">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>МДФ НАКЛАДКА №050/ДШ</h4>
                            <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>                            
                            <p> <a>
                                <img src="./dist/images/mdf-nakladka-050-dsh.png" class="center-block img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="МДФ_НАКЛАДКА_№050/ДШ"                               
                                 alt="МДФ_НАКЛАДКА_№050/ДШ"
                                 data-dwg="./dist/files/mdf-nakladka-050-dsh.dwg"
                                   ></a>
                             </p>
                             <div class="overlay"></div>
                        </div>
                      
                        <h2 id="profili-nakladki-51">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>МДФ НАКЛАДКА №051/ДШ</h4>
                            <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>
                            <!-- <a href=""><img  src="img.jpg" alt="" style="width:200px; height:200px;" data-toggle="modal" data-target="#myModal"class="img-rounded img-thumbnail"></a> -->
                           
                            <p> <a>
                                <img src="./dist/images/mdf-nakladka-051-dsh.png" class="center-block   img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="МДФ_НАКЛАДКА_№051/ДШ"                             
                                 alt="МДФ_НАКЛАДКА_№051/ДШ"
                                 data-dwg="./dist/files/mdf-nakladka-051-dsh.dwg"
                                   ></a>
                            </p>
                             <div class="overlay"></div>
                        </div>

                        <h2 id="profili-nakladki-52">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>МДФ НАКЛАДКА №052/ДШ</h4>
                            <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>
                            <!-- <a href=""><img  src="img.jpg" alt="" style="width:200px; height:200px;" data-toggle="modal" data-target="#myModal"class="img-rounded img-thumbnail"></a> -->
                           
                            <p> <a>
                                <img src="./dist/images/mdf-nakladka-052-dsh.png" class="center-block   img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="МДФ_НАКЛАДКА_№052/ДШ"                             
                                 alt="МДФ_НАКЛАДКА_№052/ДШ"
                                 data-dwg="./dist/files/mdf-nakladka-052-dsh.png.dwg"
                                   ></a>
                            </p>
                             <div class="overlay"></div>
                        </div>
                        <h2 id="profili-nakladki-53">&nbsp;</h2>
                        <div class="bs-callout bs-callout-warning cont" ><h4>МДФ НАКЛАДКА №053/ДШ</h4>
                            <p>Д - 1 или 2 фрезеровки по Длине</p>
                            <p>Ш - 1 или 2 фрезеровки по Ширине</p>
                            <!-- <a href=""><img  src="img.jpg" alt="" style="width:200px; height:200px;" data-toggle="modal" data-target="#myModal"class="img-rounded img-thumbnail"></a> -->
                            
                            <p> <a>
                                <img src="./dist/images/mdf-nakladka-053-dsh.png" class="center-block   img-rounded img-thumbnail"
                                 data-toggle="modal"
                                 data-target="#myModal"
                                 data-content="МДФ_НАКЛАДКА_№053/ДШ"                            
                                 alt="МДФ_НАКЛАДКА_№053/ДШ"
                                 data-dwg="./dist/files/mdf-nakladka-053-dsh.dwg"
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
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
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
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary"  id="main-page">
                        <ul class="nav bs-sidenav">
                            <li><a href="#profili-nakladki">Накладки</a>
                                <ul class="nav">
                                    <li><a href="#profili-nakladki-50" >МДФ накладка №050/ДШ</a>
                                    </li>
                                    <li><a href="#profili-nakladki-51" >МДФ накладка №051/ДШ</a>
                                    </li> 
                                    <li><a href="#profili-nakladki-52" >МДФ накладка №052/ДШ</a>
                                    </li>
                                    <li><a href="#profili-nakladki-53" >МДФ накладка №053/ДШ</a>
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