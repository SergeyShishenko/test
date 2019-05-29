<?php
include 'inc/inc-session-start.php';
include 'inc/inc-menu-value.php';
include 'inc/inc-menu-value-metodichki.php';
$metodichkiClass = 'class="active"';
$item_basis_Class = 'active';
include 'inc/inc-head.php';
include 'inc/inc-header-menu.php';
include 'inc/inc-left-side-menu-metodichki.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">

                    <article >
                      <section  >
                        <div class="page-header">
                          <h1 itemprop="name" id="SCRIPTS">СКРИПТЫ</h1>
                        </div>
                       
                     
                        <div class="bs-callout bs-callout-warning cont" >
                            <p> 
                                <h2 itemprop="name" id="AddOrderProdudtCE-v1">Добавить свойства: Заказ/ Изделие/ СЕ </h2>
                                <a href="./dist/files/js/AddOrderProductCE-v1.js" type="button" class="btn btn-primary"  download="AddOrderProductCE-v1.js">Скачать - AddOrderProductCE-v1.js</a>
                            </p>

                            <p >&nbsp;</p> 
                            <div class="main-box-body clearfix">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video preload="auto" autoplay="true" loop="true" muted="muted" controls class="embed-responsive-item">
                                                <source src="./dist/video/basis/2019-02-25 at 08-17-55.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <p >Создан: 25/02/2019г.</p>      
                                        <p >Обновлен: 28/02/2019г.</p>      
                            </div> 
                        </div>
                        <div class="bs-callout bs-callout-warning cont" >
                            <p> 
                                <h2 itemprop="name" id="AddOrderProdudtCE-v3">Добавить свойства: Заказ/ Изделие/ СЕ </h2>
                                <p >Версия 2 - Добавлена проверка на наличие номера перед названием блока сборочной единицы. </p>
                                <p >Версия 3 - Исправленна ошибка выбора элементов. </p>
                                <a href="./dist/files/js/AddOrderProductCE-v3.js" type="button" class="btn btn-primary"  download="AddOrderProductCE-v3.js">Скачать - AddOrderProductCE-v3.js</a>
                            </p>

                            <p >&nbsp;</p> 
                            <div class="main-box-body clearfix">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video preload="auto" autoplay="true" loop="true" muted="muted" controls class="embed-responsive-item">
                                                <source src="./dist/video/basis/2019-03-07 at 08-05-27.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <p >Создан: 07/03/2019г.</p>
                                        <p >Обновлен: 29/05/2019г.</p>       
                                             
                            </div> 
                            
                         </div>
                     
                      </section>
                    </article>
                    
               


               
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >
                        <ul class="nav bs-sidenav">
                            <li><a href="#SCRIPTS">СКРИПТЫ</a>
                            <ul class="nav">
                                    <li><a href="#AddOrderProdudtCE-v1">Добавить свойства: Заказ/ Изделие/ СЕ (AddOrderProdudtCE-v1)</a>
                                    </li>
                                    <li><a href="#AddOrderProdudtCE-v3">Добавить свойства: Заказ/ Изделие/ СЕ (AddOrderProdudtCE-v3)</a>
                                    </li>
                                                                      
                                </ul>
                            </li>                            
                                          
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->
<?php include 'inc/inc-footer.php'; ?>