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
$metodichkiClass = 'class="active"';
$furnituraClass = '';
$materialyClass = '';
$literaturaClass = '';

$item_dokument_117_Class = '';
$item_dokument_135_Class = '';
$item_ergonomika_Class = '';
$item_proektnoy_rabote_Class = 'active';
include 'inc-head.php';
include 'inc-header-menu.php';
include 'inc-left-side-menu-metodichki.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main">
                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="vyhodnye-svedeniya">ВЫХОДНЫЕ СВЕДЕНИЯ</h1>
                        </div>

                        
                        <h2 id="list-titulnyy">Лист титульный</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/Листы титульные.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/Листы титульные.pdf"></a>
                            </object>
                            <!-- <h2 >&nbsp;</h2> -->
                        <h2 id="sostav-proekta">Состав проекта</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-01-001 состав комплекта типового ДП.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-01-001 состав комплекта типового ДП.pdf"></a>
                            </object>
                            <object data="./dist/files/5000404-01-002 состав комплекта типовой КД.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-01-002 состав комплекта типовой КД.pdf"></a>
                            </object>
                            <a href="./dist/files/Комплект документов КД.xlsx" type="button" class="btn btn-primary"download="Комплект документов КД.xlsx">Скачать - Комплект документов КД.xlsx</a>


                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="vizualnaya-chast-proekta">ВИЗУАЛЬНАЯ ЧАСТЬ ПРОЕКТА</h1>
                        </div>  
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt harum minus possimus, tempore suscipit fugit nostrum enim hic illum tempora assumenda nemo, vero officiis asperiores, fuga aut. Ex, ratione!</p>
                        <object data="./dist/files/5000404-00_02 раздел 03 ВИЗУАЛИЗАЦИЯ2.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00_02 раздел 03 ВИЗУАЛИЗАЦИЯ2.pdf"></a>
                            </object>
                       
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="obmery-inzhenerno-stroitelnaya-chast">ОБМЕРЫ (инженерно-графическая часть)</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                        <object data="./dist/files/5000404-00_03 раздел 03 ОБМЕРЫ.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00_03 раздел 03 ОБМЕРЫ.pdf"></a>
                            </object>


                        <h2 id="plany-poetazhnye">&nbsp;</h2>
                        <h2 >Планы поэтажные</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00_03.01 план_помещений.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00_03.01 план_помещений.pdf"></a>
                            </object>

                        <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                        <h2 id="plan-pomeshcheniya-obmerochnyy" >План помещения обмерочный</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00_03.02 план_обмерный.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00_03.02 план_обмерный.pdf"></a>
                            </object>

                        <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                        <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">Развертка помещения по стенам обмерочная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00_03.03 развертки_обмерные.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00_03.03 развертки_обмерные.pdf"></a>
                            </object>        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="dizayn-proekt-inzhenerno-graficheskaya-chast">ДИЗАЙН-ПРОЕКТ (инженерно-графическая часть)</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/5000404-00_03 раздел 03 ОБМЕРЫ.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00_03 раздел 03 ОБМЕРЫ.pdf"></a>
                              </object>
  
  
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="plan-poetazhnyy-s-ukazaniem-nomerov-izdeliy">План поэтажный с указанием номеров изделий</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_04.02 план_с_изделиями.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00_04.02 план_с_изделиями.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="plan-pomeshcheniya-s-ukazaniem-nomerov-izdeliy">План помещения с указанием номеров изделий</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_04.02 план_с_изделиями.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00_04.02 план_с_изделиями.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="razvertka-pomeshcheniya-po-stenam-s-ustanovlennymi-izdeliyami">Развертка помещения по стенам с установленными изделиями</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_04.03 развертки_дизайн-проекта.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00_04.03 развертки_дизайн-проекта.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="tablica-rezbovyh-elementov-svodnaya-dok-36501">Таблица резьбовых элементов сводная, док. №365.01</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/365.01 и 365.02 Таблица резных элементов на заказ.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/365.01 и 365.02 Таблица резных элементов на заказ.pdf"></a>
                              </object>

                              <a href="./dist/files/365.01 и 365.02 Таблица резных элементов на заказ.xlsx" type="button" class="btn btn-primary"download="365.01 и 365.02 Таблица резных элементов на заказ.xlsx">365.01 и 365.02 Таблица резных элементов на заказ.xlsx</a>

                              <object data="./dist/files/Сводная таблица рез.эл._№договора_изд.№.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/Сводная таблица рез.эл._№договора_изд.№.pdf"></a>
                              </object>

                              <a href="./dist/files/Сводная таблица рез.эл._№договора_изд.№.xlsx" type="button" class="btn btn-primary"download="Сводная таблица рез.эл._№договора_изд.№.xlsx">Скачать - Сводная таблица рез.эл._№договора_изд.№-.xlsx</a>
  
                            </section>
                      </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="albom-obrazcov-cveta-i-formy">АЛЬБОМ ОБРАЗЦОВ ЦВЕТА И ФОРМЫ</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
  
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="svodnaya-tablica-soglasovannyh-obrazcov-prilozhenie-2">Сводная таблица согласованных образцов («приложение №2»)</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="foto-soglasovannyh-obrazcov-cveta-i-formy">Фото согласованных образцов цвета и формы</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="chertezhi-soglasovannyh-obrazcov-cveta-i-formy">Чертежи согласованных образцов цвета и формы</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>        
                        </section>
                      </article>


                      <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="tehnicheskoe-zadanie-dlya-zakazchika">ТЕХНИЧЕСКОЕ ЗАДАНИЕ ДЛЯ ЗАКАЗЧИКА</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
  
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="tehnicheskoe-zadanie-dlya-zakazchika-tipovoe">Техническое задание для заказчика типовое</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="tehnicheskoe-zadanie-dlya-zakazchika-netipovoe">Техническое задание для заказчика нетиповое</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="informacionnyy-list-o-smezhnyh-organizaciyah">Информационный лист о смежных организациях</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>        
                        </section>
                      </article>

                      <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="obshchie-trebovaniya-po-proektirovaniyu">ОБЩИЕ ТРЕБОВАНИЯ ПО ПРОЕКТИРОВАНИЮ</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
  
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="shema-etapov-proetirovaniya-izdeliya">Схема этапов проетирования изделия</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="sostav-komplekta-tipovogo-dp">Состав комплекта типового ДП</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="sostav-komplekta-tipovoy-kd">Состав комплекта типовой КД</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="ierarhicheskaya-struktura-izdeliy">Иерархическая структура изделий</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="tablica-tipovyh-tolshchin-plitnyh-materialov">Таблица типовых толщин плитных материалов</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="poryadok-prisvoeniya-nomerov-detalyam">Порядок присвоения номеров деталям</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="vedomost-tipovyh-naimenovaniy-sepsedetaley">Ведомость типовых наименований СЕ.ПСЕ.деталей</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="tablica-kodov-operaciy">Таблица кодов операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="mp-po-kd-s-raznorodnymi-materialami">МП по КД с разнородными материалами</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="algoritm-raboty-s-shablonami">Алгоритм работы с шаблонами</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="algoritm-raboty-s-informaciey-o-smezhnyh-organizaciyah">Алгоритм работы с информацией о смежных организациях</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti">Отступлений от требований эргономики и безопасности</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_03.03 развертки_обмерные.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se">Схема расчета габаритов стекла и зеркала в составе СЕ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="ierarhicheskaya-struktura-katalogov-proekt-i-zakaz">Иерархическая структура каталогов ПРОЕКТ и ЗАКАЗ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="ierarhicheskaya-struktura-kataloga-500stp">Иерархическая структура каталога 500.СТП</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          
                        </section>
                      </article>

                      <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="obrazcy-zapolneniya-dokumentov">ОБРАЗЦЫ ЗАПОЛНЕНИЯ ДОКУМЕНТОВ</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
  
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="obrazec-zapolneniya-dok-vedomost-furnitury">Образец заполнения док. ВЕДОМОСТЬ ФУРНИТУРЫ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="obrazec-zapolneniya-dok-vedomost-stekol-i-zerkal">Образец заполнения док. ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya">Образец указания на чертеже параметров шпонирования</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-na-chertezhe-obrazcov-cveta">Образец указания на чертеже образцов цвета</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-na-chertezhe-parametrov-stekla">Образец указания на чертеже параметров стекла</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy">Образец указания в КД кодов сборочно-отделочных операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_03.03 развертки_обмерные.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-smo">План по карнизу с обозначением римскими цифрами СМО</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-smo">План по молдингу с обозначением римскими цифрами СМО</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-smo">План по плинтусу с обозначением римскими цифрами СМО</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_03.03 развертки_обмерные.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-na-chertezhe-kolichestva-detaley">Образец указания на чертеже количества деталей</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2> -->
                          <h2 id="obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy">Образец указания на чертеже номеров повторных приложений</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <!-- <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2> -->
                          <h2 id="obrazec-tz-stroitelyam-zakazchika">Образец ТЗ строителям Заказчика</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00_03.03 развертки_обмерные.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <!-- <h2 id="plany-poetazhnye">&nbsp;</h2> -->
                          <h2 id="kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom">КД на ДБ с распашным одностворчатым глухим полотном</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                         
                          <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        </section>
                      </article>





                   
                  
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" id="main-page">
                        <ul class="nav bs-sidenav">
                            <li><a href="#vyhodnye-svedeniya">ВЫХОДНЫЕ СВЕДЕНИЯ</a>
                                <ul class="nav">
                                    <li><a href="#list-titulnyy">Лист титульный</a>
                                    </li>
                                    <li><a href="#sostav-proekta">Состав проекта</a>
                                    </li>                                   
                                </ul> 
                            </li>
                            <li><a href="#vizualnaya-chast-proekta">ВИЗУАЛЬНАЯ ЧАСТЬ ПРОЕКТА</a>
                                <!-- <ul class="nav">
                                    <li><a href="#polotna-bez-falca">Полотна без фальца</a>
                                    </li>
                                    <li><a href="#polotna-s-falcem">Полотна с фальцем</a>
                                    </li>                                   
                                </ul> -->
                            </li>
                            <li>
                                <a href="#obmery-inzhenerno-stroitelnaya-chast">ОБМЕРЫ (ИНЖЕНЕРНО-СТРОИТЕЛЬНАЯ ЧАСТЬ)</a>
                                <ul class="nav">
                                    <li><a href="#plany-poetazhnye">Планы поэтажные</a>
                                    </li>
                                    <li><a href="#plan-pomeshcheniya-obmerochnyy">План помещения обмерочный</a>
                                    </li>
                                    <li><a href="#razvertka-pomeshcheniya-po-stenam-obmerochnaya">Развертка помещения по стенам обмерочная</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#dizayn-proekt-inzhenerno-graficheskaya-chast">ДИЗАЙН-ПРОЕКТ (ИНЖЕНЕРНО-ГРАФИЧЕСКАЯ ЧАСТЬ)</a>
                                <ul class="nav">
                                    <li><a href="#plan-poetazhnyy-s-ukazaniem-nomerov-izdeliy">План поэтажный с указанием номеров изделий</a>
                                    </li>
                                    <li><a href="#plan-pomeshcheniya-s-ukazaniem-nomerov-izdeliy">План помещения с указанием номеров изделий</a>
                                    </li>
                                    <li><a href="#razvertka-pomeshcheniya-po-stenam-s-ustanovlennymi-izdeliyami">Развертка помещения по стенам с установленными изделиями</a>                                        
                                     </li>
                                    <li><a href="#tablica-rezbovyh-elementov-svodnaya-dok-36501">Таблица резьбовых элементов сводная, док. №365.01</a>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#albom-obrazcov-cveta-i-formy">АЛЬБОМ ОБРАЗЦОВ ЦВЕТА И ФОРМЫ</a>
                                <ul class="nav">
                                    <li><a href="#svodnaya-tablica-soglasovannyh-obrazcov-prilozhenie-2">Сводная таблица согласованных образцов («приложение №2»)</a>
                                    </li>
                                    <li><a href="#foto-soglasovannyh-obrazcov-cveta-i-formy">Фото согласованных образцов цвета и формы</a>
                                    </li>
                                    <li><a href="#chertezhi-soglasovannyh-obrazcov-cveta-i-formy">Чертежи согласованных образцов цвета и формы</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika">ТЕХНИЧЕСКОЕ ЗАДАНИЕ ДЛЯ ЗАКАЗЧИКА</a>
                                <ul class="nav">
                                    <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika-tipovoe">Техническое задание для заказчика типовое</a>
                                    </li>
                                    <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika-netipovoe">Техническое задание для заказчика нетиповое</a>
                                    </li>
                                    <li><a href="#informacionnyy-list-o-smezhnyh-organizaciyah">Информационный лист о смежных организациях</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#obshchie-trebovaniya-po-proektirovaniyu">ОБЩИЕ ТРЕБОВАНИЯ ПО ПРОЕКТИРОВАНИЮ</a>
                                <ul class="nav">
                                    <li><a href="#shema-etapov-proetirovaniya-izdeliya">Схема этапов проетирования изделия</a>
                                    </li>
                                    <li><a href="#sostav-komplekta-tipovogo-dp">Состав комплекта типового ДП</a>
                                    </li>
                                    <li><a href="#sostav-komplekta-tipovoy-kd">Состав комплекта типовой КД</a>
                                    </li>                                    
                                    <li><a href="#ierarhicheskaya-struktura-izdeliy">Иерархическая структура изделий</a>
                                    </li>
                                    <li><a href="#tablica-tipovyh-tolshchin-plitnyh-materialov">Таблица типовых толщин плитных материалов</a>
                                    </li>
                                    <li><a href="#poryadok-prisvoeniya-nomerov-detalyam">Порядок присвоения номеров деталям</a>
                                    </li>
                                    <li><a href="#vedomost-tipovyh-naimenovaniy-sepsedetaley">Ведомость типовых наименований СЕ.ПСЕ.деталей</a>
                                    </li>
                                    <li><a href="#tablica-kodov-operaciy">Таблица кодов операций</a>
                                    </li>
                                    <li><a href="#mp-po-kd-s-raznorodnymi-materialami">МП по КД с разнородными материалами</a>
                                    </li>
                                    <li><a href="#algoritm-raboty-s-shablonami">Алгоритм работы с шаблонами</a>
                                    </li>
                                    <li><a href="#algoritm-raboty-s-informaciey-o-smezhnyh-organizaciyah">Алгоритм работы с информацией о смежных организациях</a>
                                    </li>
                                    <li><a href="#otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti">Отступлений от требований эргономики и безопасности</a>
                                    </li>
                                    <li><a href="#shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se">Схема расчета габаритов стекла и зеркала в составе СЕ</a>
                                    </li>
                                    <li><a href="#ierarhicheskaya-struktura-katalogov-proekt-i-zakaz">Иерархическая структура каталогов ПРОЕКТ и ЗАКАЗ</a>
                                    </li>
                                    <li><a href="#ierarhicheskaya-struktura-kataloga-500stp">Иерархическая структура каталога 500.СТП</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#obrazcy-zapolneniya-dokumentov">ОБРАЗЦЫ ЗАПОЛНЕНИЯ ДОКУМЕНТОВ</a>
                                <ul class="nav">
                                    <li><a href="#obrazec-zapolneniya-dok-vedomost-furnitury">Образец заполнения док. ВЕДОМОСТЬ ФУРНИТУРЫ</a>
                                    </li>
                                    <li><a href="#obrazec-zapolneniya-dok-vedomost-stekol-i-zerkal">Образец заполнения док. ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya">Образец указания на чертеже параметров шпонирования</a>
                                    </li>                                    
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-obrazcov-cveta">Образец указания на чертеже образцов цвета</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-parametrov-stekla">Образец указания на чертеже параметров стекла</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy">Образец указания в КД кодов сборочно-отделочных операций</a>
                                    </li>
                                    <li><a href="#plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-smo">План по карнизу с обозначением римскими цифрами СМО</a>
                                    </li>
                                    <li><a href="#plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-smo">План по молдингу с обозначением римскими цифрами СМО</a>
                                    </li>
                                    <li><a href="#plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-smo">План по плинтусу с обозначением римскими цифрами СМО</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-kolichestva-detaley">Образец указания на чертеже количества деталей</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy">Образец указания на чертеже номеров повторных приложений</a>
                                    </li>
                                    <li><a href="#obrazec-tz-stroitelyam-zakazchika">Образец ТЗ строителям Заказчика</a>
                                    </li>
                                    <li><a href="#kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom">КД на ДБ с распашным одностворчатым глухим полотном</a>
                                    </li>
                                    
                                </ul>
                            </li>
                                                   
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>