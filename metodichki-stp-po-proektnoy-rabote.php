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
                        <object data="./dist/files/listy-titulnye.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/listy-titulnye.pdf"></a>
                            </object>
                            <h2 id="sostav-proekta">&nbsp;</h2>
                        <h2 >Состав проекта</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-01-001-sostav-komplekta-tipovogo-dp.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-01-001-sostav-komplekta-tipovogo-dp.pdf"></a>
                            </object>
                            <object data="./dist/files/5000404-01-002-sostav-komplekta-tipovoy-kd.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-01-002-sostav-komplekta-tipovoy-kd.pdf"></a>
                            </object>
                            <a href="./dist/files/komplekt-dokumentov-kd.xlsx" type="button" class="btn btn-primary"download="komplekt-dokumentov-kd.xlsx">Скачать - Комплект документов КД.xlsx</a>


                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="vizualnaya-chast-proekta">ВИЗУАЛЬНАЯ ЧАСТЬ ПРОЕКТА</h1>
                        </div>  
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt harum minus possimus, tempore suscipit fugit nostrum enim hic illum tempora assumenda nemo, vero officiis asperiores, fuga aut. Ex, ratione!</p>
                        <object data="./dist/files/5000404-00-02-razdel-03-vizualizaciya2.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00-02-razdel-03-vizualizaciya2.pdf"></a>
                            </object>
                       
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                      <section itemprop="articleBody" >
                        <div class="page-header">
                          <h1 itemprop="name" id="obmery-inzhenerno-stroitelnaya-chast">ОБМЕРЫ (инженерно-графическая часть)</h1>
                        </div>
                        <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                        <object data="./dist/files/5000404-00-03-razdel-03-obmery.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00-03-razdel-03-obmery.pdf"></a>
                            </object>


                        <h2 id="plany-poetazhnye">&nbsp;</h2>
                        <h2 >Планы поэтажные</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00-0301-plan-pomeshcheniy.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00-0301-plan-pomeshcheniy.pdf"></a>
                            </object>

                        <h2 id="plan-pomeshcheniya-obmerochnyy">&nbsp;</h2>
                        <h2  >План помещения обмерочный</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00-0302-plan-obmernyy.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00-0302-plan-obmernyy.pdf"></a>
                            </object>

                        <h2 id="razvertka-pomeshcheniya-po-stenam-obmerochnaya">&nbsp;</h2>
                        <h2 >Развертка помещения по стенам обмерочная</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                        <object data="./dist/files/5000404-00-0303-razvertki-obmernye.pdf" type="application/pdf" width="100%" height="720px">
                            alt: <a href="./dist/files/5000404-00-0303-razvertki-obmernye.pdf"></a>
                            </object>        
                      </section>
                    </article>

                    <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="dizayn-proekt-inzhenerno-graficheskaya-chast">ДИЗАЙН-ПРОЕКТ (инженерно-графическая часть)</h1>
                          </div>
                          <p itemprop="description" class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sed cum vero facere quisquam iure veritatis laboriosam soluta optio .</p>
                          <object data="./dist/files/5000404-00-03-razdel-03-obmery.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00-03-razdel-03-obmery.pdf"></a>
                              </object>
  
  
                          <h2 id="plan-poetazhnyy-s-ukazaniem-nomerov-izdeliy">&nbsp;</h2>
                          <h2 >План поэтажный с указанием номеров изделий</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00-0402-plan-s-izdeliyami.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00-0402-plan-s-izdeliyami.pdf"></a>
                              </object>  
                        
  
                          <h2 id="razvertka-pomeshcheniya-po-stenam-s-ustanovlennymi-izdeliyami">&nbsp;</h2>
                          <h2 >Развертка помещения по стенам с установленными изделиями</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-00-0403-razvertki-dizayn-proekta.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-00-0403-razvertki-dizayn-proekta.pdf"></a>
                              </object>
  
                          <h2 id="tablica-rezbovyh-elementov-svodnaya-dok-36501">&nbsp;</h2>
                          <h2 >Таблица резьбовых элементов сводная, док. №365.01</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/36501-i-36502-tablica-reznyh-elementov-na-zakaz.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/36501-i-36502-tablica-reznyh-elementov-na-zakaz.pdf"></a>
                              </object>

                              <a href="./dist/files/36501-i-36502-tablica-reznyh-elementov-na-zakaz.xlsx" type="button" class="btn btn-primary"download="36501-i-36502-tablica-reznyh-elementov-na-zakaz.xlsx">365.01 и 365.02 Таблица резных элементов на заказ.xlsx</a>

                              <object data="./dist/files/svodnaya-tablica-rezel-dogovora-izd.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/svodnaya-tablica-rezel-dogovora-izd.pdf"></a>
                              </object>

                              <a href="./dist/files/svodnaya-tablica-rezel-dogovora-izd.xlsx" type="button" class="btn btn-primary"download="svodnaya-tablica-rezel-dogovora-izd.xlsx">Скачать - Сводная таблица рез.эл._№договора_изд.№-.xlsx</a>
  
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
  
  
                          <h2 id="svodnaya-tablica-soglasovannyh-obrazcov-prilozhenie-2">&nbsp;</h2>
                          <h2 >Сводная таблица согласованных образцов («приложение №2»)</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <h2 id="foto-soglasovannyh-obrazcov-cveta-i-formy">&nbsp;</h2>
                          <h2 >Фото согласованных образцов цвета и формы</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <h2 id="chertezhi-soglasovannyh-obrazcov-cveta-i-formy">&nbsp;</h2>
                          <h2 >Чертежи согласованных образцов цвета и формы</h2>
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
  
  
                          <h2 id="tehnicheskoe-zadanie-dlya-zakazchika-tipovoe">&nbsp;</h2>
                          <h2 >Техническое задание для заказчика типовое</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <h2 id="tehnicheskoe-zadanie-dlya-zakazchika-netipovoe">&nbsp;</h2>
                          <h2 >Техническое задание для заказчика нетиповое</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <h2 id="informacionnyy-list-o-smezhnyh-organizaciyah">&nbsp;</h2>
                          <h2 >Информационный лист о смежных организациях</h2>
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
                         
  
  
                          <h2 id="shema-etapov-proetirovaniya-izdeliya">&nbsp;</h2>
                          <h2 >Схема этапов проетирования изделия</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-000-shema-etapov-proetirovaniya-izdeliya-titul.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-000-shema-etapov-proetirovaniya-izdeliya-titul.pdf"></a>
                              </object>
                              <object data="./dist/files/5000404-01-000-shema-etapov-proetirovaniya-izdeliya.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-000-shema-etapov-proetirovaniya-izdeliya.pdf"></a>
                              </object>
                              
  
                          <h2 id="sostav-komplekta-tipovogo-dp">&nbsp;</h2>
                          <h2 >Состав комплекта типового ДП</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                              </object>
  
                          <h2 id="sostav-komplekta-tipovoy-kd">&nbsp;</h2>
                          <h2 >Состав комплекта типовой КД</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/test.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/test.pdf"></a>
                          </object>
                          <h2 id="ierarhicheskaya-struktura-izdeliy">&nbsp;</h2>
                          <h2 >Иерархическая структура изделий</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-003-ierarhicheskaya-struktura-izdeliy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-003-ierarhicheskaya-struktura-izdeliy.pdf"></a>
                              </object>
  
                          <h2 id="tablica-tipovyh-tolshchin-plitnyh-materialov">&nbsp;</h2>
                          <h2 >Таблица типовых толщин плитных материалов</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-005-tablica-tipovyh-tolshchin-plitnyh-materialov.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-005-tablica-tipovyh-tolshchin-plitnyh-materialov.pdf"></a>
                              </object>
  
                          <h2 id="poryadok-prisvoeniya-nomerov-detalyam">&nbsp;</h2>
                          <h2 >Порядок присвоения номеров деталям</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-006-poryadok-prisvoeniya-nomerov-detalyam.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-006-poryadok-prisvoeniya-nomerov-detalyam.pdf"></a>
                          </object>
                          <h2 id="vedomost-tipovyh-naimenovaniy-sepsedetaley">&nbsp;</h2>
                          <h2 >Ведомость типовых наименований СЕ.ПСЕ.деталей</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-010-vedomost-tipovyh-naimenovaniy-sepsedetaley.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-010-vedomost-tipovyh-naimenovaniy-sepsedetaley.pdf"></a>
                              </object>
  
                          <h2 id="tablica-kodov-operaciy">&nbsp;</h2>
                          <h2 >Таблица кодов операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-011-tablica-kodov-operaciy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-011-tablica-kodov-operaciy.pdf"></a>
                              </object>
  
                          <h2 id="mp-po-kd-s-raznorodnymi-materialami">&nbsp;</h2>
                          <h2 >МП по КД с разнородными материалами</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-012-mp-po-kd-s-raznorodnymi-materialami.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-012-mp-po-kd-s-raznorodnymi-materialami.pdf"></a>
                          </object>
                          <h2 id="algoritm-raboty-s-shablonami">&nbsp;</h2>
                          <h2 >Алгоритм работы с шаблонами</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-015-algoritm-po-rabote-s-shablonami-titul.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-015-algoritm-po-rabote-s-shablonami-titul.pdf"></a>
                              </object>
                              <object data="./dist/files/5000404-01-015-algoritm-po-rabote-s-shablonami.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-015-algoritm-po-rabote-s-shablonami.pdf"></a>
                              </object>
  
                          <h2 id="algoritm-raboty-s-informaciey-o-smezhnyh-organizaciyah">&nbsp;</h2>
                          <h2 >Алгоритм по работе с поступающей от Заказчика информацией о смежных организациях</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-017-algoritm-po-rabote-s-postupayushchey-ot-zakazchika-informaciey-o-smezhnyh-organizaciyah.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-017-algoritm-po-rabote-s-postupayushchey-ot-zakazchika-informaciey-o-smezhnyh-organizaciyah.pdf"></a>
                              </object>
  
                          <h2 id="otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti">&nbsp;</h2>
                          <h2 >Алгоритм согласования с заказчиком отступлений от требований эргономики и безопасности</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-018-algoritm-soglasovaniya-s-zakazchikom-otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-018-algoritm-soglasovaniya-s-zakazchikom-otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti.pdf"></a>
                          </object>
                          <h2 id="shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se">&nbsp;</h2>
                          <h2 >Схема расчета габаритов стекла и зеркала в составе СЕ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-050-shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-050-shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se.pdf"></a>
                              </object>
  
                          <h2 id="ierarhicheskaya-struktura-katalogov-proekt-i-zakaz">&nbsp;</h2>
                          <h2 >Иерархическая структура каталогов ПРОЕКТ и ЗАКАЗ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-075-ierarhicheskaya-struktura-katalogov-proekt-i-zakaz-chast1.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-075-ierarhicheskaya-struktura-katalogov-proekt-i-zakaz-chast1.pdf"></a>
                              </object>
                              <object data="./dist/files/5000404-01-075-ierarhicheskaya-struktura-katalogov-proekt-i-zakaz-chast2.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-075-ierarhicheskaya-struktura-katalogov-proekt-i-zakaz-chast2.pdf"></a>
                              </object>
  
                          <h2 id="ierarhicheskaya-struktura-kataloga-500stp">&nbsp;</h2>
                          <h2 >Иерархическая структура каталога 500.СТП</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-01-500-ierarhicheskaya-struktura-kataloga-500stp.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-01-500-ierarhicheskaya-struktura-kataloga-500stp.pdf"></a>
                          </object>
                          
                        </section>
                      </article>

                      <article itemscope="" itemtype="http://schema.org/Article">
                        <section itemprop="articleBody" >
                          <div class="page-header">
                            <h1 itemprop="name" id="obrazcy-zapolneniya-dokumentov">ОБРАЗЦЫ ЗАПОЛНЕНИЯ ДОКУМЕНТОВ</h1>
                          </div>                         
  
  
                          <h2 id="obrazec-zapolneniya-dok-vedomost-furnitury">&nbsp;</h2>
                          <h2 >Образец заполнения док. ВЕДОМОСТЬ ФУРНИТУРЫ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-005-obrazec-zapolneniya-dok-5000304-01-001-vedomost-furnitury.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-005-obrazec-zapolneniya-dok-5000304-01-001-vedomost-furnitury.pdf"></a>
                              </object>
  
                          <h2  id="obrazec-zapolneniya-dok-vedomost-stekol-i-zerkal">&nbsp;</h2>
                          <h2>Образец заполнения док. ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-006-obrazec-zapolneniya-dok-5000304-02-001-vedomost-stekol-i-zerkal.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-006-obrazec-zapolneniya-dok-5000304-02-001-vedomost-stekol-i-zerkal.pdf"></a>
                              </object>
  
                          <h2 id="obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya">&nbsp;</h2>
                          <h2 >Образец указания на чертеже параметров шпонирования</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-007-obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-007-obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya.pdf"></a>
                          </object>
                          <h2 id="obrazec-ukazaniya-na-chertezhe-obrazcov-cveta">&nbsp;</h2>
                          <h2 >Образец указания на чертеже образцов цвета</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-008-obrazec-ukazaniya-na-chertezhe-obrazcov-cveta.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-008-obrazec-ukazaniya-na-chertezhe-obrazcov-cveta.pdf"></a>
                              </object>
  
                          <h2 id="obrazec-ukazaniya-na-chertezhe-parametrov-stekla">&nbsp;</h2>
                          <h2 >Образец указания на чертеже параметров стекла</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-009-obrazec-ukazaniya-na-chertezhe-parametrov-stekla.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-009-obrazec-ukazaniya-na-chertezhe-parametrov-stekla.pdf"></a>
                              </object>
  
                          <h2 id="obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy">&nbsp;</h2>
                          <h2 >Образец указания в КД кодов сборочно-отделочных операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-011-obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-011-obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy.pdf"></a>
                          </object>
                          <h2 id="plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-smo">&nbsp;</h2>
                          <h2 >План по карнизу с обозначением римскими цифрами сборочно-монтажных операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-015-plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-015-plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf"></a>
                              </object>
  
                          <h2 id="plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-smo">&nbsp;</h2>
                          <h2 >План по молдингу с обозначением римскими цифрами сборочно-монтажных операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-016-plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-016-plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf"></a>
                              </object>
  
                          <h2 id="plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-smo">&nbsp;</h2>
                          <h2 >План по плинтусу с обозначением римскими цифрами сборочно-монтажных операций</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-017-plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-017-plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-sm-operaciy.pdf"></a>
                          </object>
                          <h2 id="obrazec-ukazaniya-na-chertezhe-kolichestva-detaley">&nbsp;</h2>
                          <h2 >Образец указания на чертеже количества деталей</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-025-obrazec-ukazaniya-na-chertezhe-kolichestva-detaley.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-025-obrazec-ukazaniya-na-chertezhe-kolichestva-detaley.pdf"></a>
                              </object>
  
                          <h2 id="obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy">&nbsp;</h2>
                          <h2 >Образец указания на чертеже номеров повторных приложений</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-027-obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-027-obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy.pdf"></a>
                              </object>
  
                          <h2 id="obrazec-tz-stroitelyam-zakazchika">&nbsp;</h2>
                          <h2 >Образец ТЗ строителям Заказчика</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-030-obrazec-tz-stroitelyam-zakazchika.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-030-obrazec-tz-stroitelyam-zakazchika.pdf"></a>
                          </object>
                          <h2 id="kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom">&nbsp;</h2>
                          <h2 >КД на ДБ с распашным одностворчатым глухим полотном</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam optio, placeat ipsam ut dolorum accusantium inventore eligendi esse cum mollitia fugiat quasi deleniti laudantium perspiciatis fugit modi explicabo non officiis.</p>
                          <object data="./dist/files/5000404-02-101-kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom.pdf" type="application/pdf" width="100%" height="720px">
                              alt: <a href="./dist/files/5000404-02-101-kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom.pdf"></a>
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
                                    <li><a href="#list-titulnyy">&#9999;&nbsp;Лист титульный</a>
                                    </li>
                                    <li><a href="#sostav-proekta">&#9999;&nbsp;Состав проекта</a>
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
                                    <li><a href="#plany-poetazhnye">&#9999;&nbsp;Планы поэтажные</a>
                                    </li>
                                    <li><a href="#plan-pomeshcheniya-obmerochnyy">&#9999;&nbsp;План помещения обмерочный</a>
                                    </li>
                                    <li><a href="#razvertka-pomeshcheniya-po-stenam-obmerochnaya">&#9999;&nbsp;Развертка помещения по стенам обмерочная</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#dizayn-proekt-inzhenerno-graficheskaya-chast">ДИЗАЙН-ПРОЕКТ (ИНЖЕНЕРНО-ГРАФИЧЕСКАЯ ЧАСТЬ)</a>
                                <ul class="nav">
                                    <li><a href="#plan-poetazhnyy-s-ukazaniem-nomerov-izdeliy">&#9999;&nbsp;План поэтажный с указанием номеров изделий</a>
                                    </li>
                                    <li><a href="#plan-pomeshcheniya-s-ukazaniem-nomerov-izdeliy">&#9999;&nbsp;План помещения с указанием номеров изделий</a>
                                    </li>
                                    <li><a href="#razvertka-pomeshcheniya-po-stenam-s-ustanovlennymi-izdeliyami">&#9999;&nbsp;Развертка помещения по стенам с установленными изделиями</a>                                        
                                     </li>
                                    <li><a href="#tablica-rezbovyh-elementov-svodnaya-dok-36501">&#9999;&nbsp;Таблица резьбовых элементов сводная, док. №365.01</a>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#albom-obrazcov-cveta-i-formy">АЛЬБОМ ОБРАЗЦОВ ЦВЕТА И ФОРМЫ</a>
                                <ul class="nav">
                                    <li><a href="#svodnaya-tablica-soglasovannyh-obrazcov-prilozhenie-2">&#9999;&nbsp;Сводная таблица согласованных образцов («приложение №2»)</a>
                                    </li>
                                    <li><a href="#foto-soglasovannyh-obrazcov-cveta-i-formy">&#9999;&nbsp;Фото согласованных образцов цвета и формы</a>
                                    </li>
                                    <li><a href="#chertezhi-soglasovannyh-obrazcov-cveta-i-formy">&#9999;&nbsp;Чертежи согласованных образцов цвета и формы</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika">ТЕХНИЧЕСКОЕ ЗАДАНИЕ ДЛЯ ЗАКАЗЧИКА</a>
                                <ul class="nav">
                                    <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika-tipovoe">&#9999;&nbsp;Техническое задание для заказчика типовое</a>
                                    </li>
                                    <li><a href="#tehnicheskoe-zadanie-dlya-zakazchika-netipovoe">&#9999;&nbsp;Техническое задание для заказчика нетиповое</a>
                                    </li>
                                    <li><a href="#informacionnyy-list-o-smezhnyh-organizaciyah">&#9999;&nbsp;Информационный лист о смежных организациях</a>
                                  </li>
                                </ul>
                            </li>
                            <li><a href="#obshchie-trebovaniya-po-proektirovaniyu">ОБЩИЕ ТРЕБОВАНИЯ ПО ПРОЕКТИРОВАНИЮ</a>
                                <ul class="nav">
                                    <li><a href="#shema-etapov-proetirovaniya-izdeliya">&#9999;&nbsp;Схема этапов проетирования изделия</a>
                                    </li>
                                    <li><a href="#sostav-komplekta-tipovogo-dp">&#9999;&nbsp;Состав комплекта типового ДП</a>
                                    </li>
                                    <li><a href="#sostav-komplekta-tipovoy-kd">&#9999;&nbsp;Состав комплекта типовой КД</a>
                                    </li>                                    
                                    <li><a href="#ierarhicheskaya-struktura-izdeliy">&#9999;&nbsp;Иерархическая структура изделий</a>
                                    </li>
                                    <li><a href="#tablica-tipovyh-tolshchin-plitnyh-materialov">&#9999;&nbsp;Таблица типовых толщин плитных материалов</a>
                                    </li>
                                    <li><a href="#poryadok-prisvoeniya-nomerov-detalyam">&#9999;&nbsp;Порядок присвоения номеров деталям</a>
                                    </li>
                                    <li><a href="#vedomost-tipovyh-naimenovaniy-sepsedetaley">&#9999;&nbsp;Ведомость типовых наименований СЕ.ПСЕ.деталей</a>
                                    </li>
                                    <li><a href="#tablica-kodov-operaciy">&#9999;&nbsp;Таблица кодов операций</a>
                                    </li>
                                    <li><a href="#mp-po-kd-s-raznorodnymi-materialami">&#9999;&nbsp;МП по КД с разнородными материалами</a>
                                    </li>
                                    <li><a href="#algoritm-raboty-s-shablonami">&#9999;&nbsp;Алгоритм работы с шаблонами</a>
                                    </li>
                                    <li><a href="#algoritm-raboty-s-informaciey-o-smezhnyh-organizaciyah">&#9999;&nbsp;Алгоритм работы с информацией о смежных организациях</a>
                                    </li>
                                    <li><a href="#otstupleniy-ot-trebovaniy-ergonomiki-i-bezopasnosti">&#9999;&nbsp;Отступлений от требований эргономики и безопасности</a>
                                    </li>
                                    <li><a href="#shema-rascheta-gabaritov-stekla-i-zerkala-v-sostave-se">&#9999;&nbsp;Схема расчета габаритов стекла и зеркала в составе СЕ</a>
                                    </li>
                                    <li><a href="#ierarhicheskaya-struktura-katalogov-proekt-i-zakaz">&#9999;&nbsp;Иерархическая структура каталогов ПРОЕКТ и ЗАКАЗ</a>
                                    </li>
                                    <li><a href="#ierarhicheskaya-struktura-kataloga-500stp">&#9999;&nbsp;Иерархическая структура каталога 500.СТП</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#obrazcy-zapolneniya-dokumentov">ОБРАЗЦЫ ЗАПОЛНЕНИЯ ДОКУМЕНТОВ</a>
                                <ul class="nav">
                                    <li><a href="#obrazec-zapolneniya-dok-vedomost-furnitury">&#9999;&nbsp;Образец заполнения док. ВЕДОМОСТЬ ФУРНИТУРЫ</a>
                                    </li>
                                    <li><a href="#obrazec-zapolneniya-dok-vedomost-stekol-i-zerkal">&#9999;&nbsp;Образец заполнения док. ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-parametrov-shponirovaniya">&#9999;&nbsp;Образец указания на чертеже параметров шпонирования</a>
                                    </li>                                    
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-obrazcov-cveta">&#9999;&nbsp;Образец указания на чертеже образцов цвета</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-parametrov-stekla">&#9999;&nbsp;Образец указания на чертеже параметров стекла</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-v-kd-kodov-sborochno-otdelochnyh-operaciy">&#9999;&nbsp;Образец указания в КД кодов сборочно-отделочных операций</a>
                                    </li>
                                    <li><a href="#plan-po-karnizu-s-oboznacheniem-rimskimi-ciframi-smo">&#9999;&nbsp;План по карнизу с обозначением римскими цифрами сборочно-монтажных операций</a>
                                    </li>
                                    <li><a href="#plan-po-moldingu-s-oboznacheniem-rimskimi-ciframi-smo">&#9999;&nbsp;План по молдингу с обозначением римскими цифрами сборочно-монтажных операций</a>
                                    </li>
                                    <li><a href="#plan-po-plintusu-s-oboznacheniem-rimskimi-ciframi-smo">&#9999;&nbsp;План по плинтусу с обозначением римскими цифрами сборочно-монтажных операций</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-kolichestva-detaley">&#9999;&nbsp;Образец указания на чертеже количества деталей</a>
                                    </li>
                                    <li><a href="#obrazec-ukazaniya-na-chertezhe-nomerov-povtornyh-prilozheniy">&#9999;&nbsp;Образец указания на чертеже номеров повторных приложений</a>
                                    </li>
                                    <li><a href="#obrazec-tz-stroitelyam-zakazchika">&#9999;&nbsp;Образец ТЗ строителям Заказчика</a>
                                    </li>
                                    <li><a href="#kd-na-db-s-raspashnym-odnostvorchatym-gluhim-polotnom">&#9999;&nbsp;КД на ДБ с распашным одностворчатым глухим полотном</a>
                                    </li>
                                    
                                </ul>
                            </li>
                                                   
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc-footer.php'; ?>