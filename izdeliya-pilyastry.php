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

$item_bloki_dvernye_Class = '';
$item_mebel_korpusnaya_Class = '';
$item_paneli_stenovye_Class = '';
$item_karnizy_i_frizy_Class = '';
$item_plintusy_i_moldingi_Class = '';
$item_ekrany_Class = '';
$item_pilyastry_Class = 'active';
$item_potolki_Class = '';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="pilyastry-konstrukcii">Конструкции пилястр типовых</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus, voluptates eligendi quo exercitationem molestias voluptate aspernatur aliquam similique nihil, officiis fugiat! Obcaecati velit, debitis porro sunt ipsam dignissimos similique?</p>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus, voluptates eligendi quo exercitationem molestias voluptate aspernatur aliquam similique nihil, officiis fugiat! Obcaecati velit, debitis porro sunt ipsam dignissimos similique?</p>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus, voluptates eligendi quo exercitationem molestias voluptate aspernatur aliquam similique nihil, officiis fugiat! Obcaecati velit, debitis porro sunt ipsam dignissimos similique?</p>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus, voluptates eligendi quo exercitationem molestias voluptate aspernatur aliquam similique nihil, officiis fugiat! Obcaecati velit, debitis porro sunt ipsam dignissimos similique?</p>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus, voluptates eligendi quo exercitationem molestias voluptate aspernatur aliquam similique nihil, officiis fugiat! Obcaecati velit, debitis porro sunt ipsam dignissimos similique?</p>
               
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" id="bs-docs-section">
                          <div class="page-header">
                            <h1 itemprop="name" id="sborochnye-shemy-pilyastry">Сборочно-монтажные схемы</h1>
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
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            <li><a href="#pilyastry-konstrukcii">Конструкции пилястр типовых</a>
                            </li>
                            <!-- <li><a href="#polotna">Дверные блоки с распашными полотнами </a>
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
                            </li> -->
                            
                            <li><a href="#sborochnye-shemy-pilyastry">Сборочно-монтажные схемы</a>
                            </li>                         
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>