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
$item_pilyastry_Class = '';
$item_potolki_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-izdeliya.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">             

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" id="bs-docs-section">
                        <div class="page-header">
                          <h1 itemprop="name" id="potolki-kessonirovannye">Конструкции потолков кессонированных типовых</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt harum minus possimus, tempore suscipit fugit nostrum enim hic illum tempora assumenda nemo, vero officiis asperiores, fuga aut. Ex, ratione!</p>
                        <div class="bs-callout bs-callout-warning" id="jquery-required">
                          <h4>Lorem ipsum dolor</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quo reiciendis sed est nihil explicabo animi, illo ea autem necessitatibus iusto odit! Dolores consequuntur aliquid, dolore ullam neque enim voluptate.</p>
                        </div>

                        <h2 id="potolki-kessony-tipovye">&nbsp;</h2>
                        <h2 >5000211-00_100 кессоны типовые</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>


                        <h2 id="potolki-potolok-kessonirovannyy">&nbsp;</h2>
                        <h2 >5000211-00_101 потолок кессонированный</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum enim ipsum libero placeat quo quam laudantium sed perferendis labore excepturi neque repellendus dolore unde suscipit, sapiente fugiat commodi necessitatibus tenetur.</p>
                    </article>

                   
                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" id="bs-docs-section">
                          <div class="page-header">
                            <h1 itemprop="name" id="sborochnye-shemy-potolki">Сборочно-монтажные схемы</h1>
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
                            <li><a href="#potolki-kessonirovannye">ПОТОЛКИ КЕССОНИРОВАННЫЕ</a>
                                <ul class="nav">
                                        <li><a href="#potolki-kessony-tipovye">&#9999;&nbsp;5000211-00_100 кессоны типовые</a>
                                        </li>
                                        <li><a href="#potolki-potolok-kessonirovannyy">&#9999;&nbsp;5000211-00_101 потолок кессонированный</a>
                                        </li>                                   
                                    </ul>
                            </li>               
                            
                            <li><a href="#sborochnye-shemy-potolki">Сборочно-монтажные схемы</a>
                            </li>                         
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>