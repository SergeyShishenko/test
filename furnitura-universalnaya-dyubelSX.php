<?php
include 'inc-session-start.php';
$detaliClass = '';
$izdeliyaClass = '';
$shablonyClass = '';
$metodichkiClass = '';
$furnituraClass = 'class="active"';
$materialyClass = '';
$literaturaClass = '';

$item_dlya_dvernyh_blokov_Class = '';
$item_dlya_mebeli_Class = '';
$item_universalnaya_Class = 'active';
$item_katalogi_Class = '';
include 'inc-head2.php';
include 'inc-header-menu3.php';
include 'inc-left-side-menu-furnitura.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                   

                <article    id="krepezh-i-metizy">
                    <section >
                        <div class="page-header"  >
                            <h1 itemprop="name" id="dyubelSX">КРЕПЕЖ И МЕТИЗЫ</h1>
                            <h2 >Дюбель SX</h2>                        
                        </div>
                           
                        <div class="bs-callout bs-callout-warning cont" > 
                            
                            <div class="main-box clearfix"   >   
                                <h2 ></h2>                      
                            </div>
                            <!-- ВПИ -->
                                <div class="row" style="margin-bottom: 15px; margin-left: 15px;">
                                    <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                                                border: 1px solid rgb(221, 221, 221);
                                                box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                                border-radius: 4px;
                                                padding: 15px;
                                                ">
                                        <h4 >Мощный нейлоновый дюбель с 4-х сторонним распором</h4>                                 
                               
                                      
                                
                                        <div class="row col-xs-12 col-sm-12 col-md-12" >                                                           
                                            <div class="row"> 
                                                <div class="row"  style="height:100px;  display: inline-flex; margin-bottom: 20px;"> 
                                                    <div class="col-xs-5 col-sm-5 col-md-5" ><b>Дюбель SX с кромкой</b><img src="./dist/filesdb/images/SX.png" width="100%" height="100%" class="" alt="SX" title=""></div>                                             
                                                    <div class="col-xs-7 col-sm-7 col-md-7"><b>Дюбель SXL - с увеличенной глубиной анкеровки, без кромки</b><img src="./dist/filesdb/images/SX_long.png"  width="100%" height="100%" class="" alt="SX_long" title=""></div>
                                                </div>                                             
                                                <div class="row"  style="height:250px;  margin-bottom: 20px;"> 
                                                    <div class="col-xs-5 col-sm-5 col-md-5" ><img src="./dist/filesdb/images/SX_sch4.png" width="100%" height="100%" class="" alt="SX_sch4" title=""></div>                                             
                                                    <div class="col-xs-7 col-sm-7 col-md-7"><img src="./dist/filesdb/images/SX_sch5.png"  width="100%" height="100%" class="" alt="SX_sch5" title=""></div>
                                                </div>                                             
                                                <!-- <h3 class="blum">5000502-07-750 Конфирмат 7,0Х50</h3>
                                                <h3 class="blum">5000502-07-752 Конфирмат 7,0Х70</h3> -->
                                                <!--  -->
                                                <!-- <p><a href="https://www.mdm-complect.ru/catalog/konfirmat-styazhka-evrovint/59936/"  target="_blank" title="МДМ-КОМПЛЕКТ" >Артикулы поставщика:</a></p>             -->
                                                <table class="table table-striped table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th title="Тип" class="t-alg-center">Тип </th>
                                                            <th title="Артикул" class="t-alg-center">С&nbsp;кромкой Артикул</th>                                                            
                                                            <th title="Диаметр сверления ,(мм)" class="t-alg-center">Диаметр сверления <i><br>d<sub>o</sub>&nbsp;(мм)</i></th>
                                                            <th title="Мин.глубина сверления отверстия ,(мм)" class="t-alg-center">Мин. глубина сверления отверстия <i><br>t&nbsp;(мм)</i></th>
                                                            <th title="Длина дюбеля ,(мм)" class="t-alg-center">Длина дюбеля =&nbsp;мин.глубина анкеровки <i><br>l = h<sub>ef</sub>&nbsp;(мм)</i></th>
                                                            <th title="Макс. толщина закрепляемого материала,(мм)" class="t-alg-center">Макс.<br>толщина закрепляемого материала <i><br>t<sub>fix</sub>&nbsp;(мм)</i></th>                                                                                                                  
                                                            <th title="Шурупы по дереву и ДСП ,(мм)" class="t-alg-center">Шурупы<br>по дереву<br>и для ДСП <i><br>d<sub>s</sub> &nbsp;или d<sub>s</sub>&nbsp;x&nbsp;l<sub>s</sub>&nbsp;(&empty;&nbsp;мм)</i></th>                                                           
                                                            <th> <button type="button" id="each_addvpi_1" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="calcresult">                                                            
                                                        <tr> 
                                                            <td class="boldstyle" >SX&nbsp;6&nbsp;x&nbsp;30</td>
                                                            <td class="t-alg-center" >70006</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="120">6</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">40</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">30</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <td class="t-alg-center">10</td><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">4 - 5</td><!-- Шурупы по дереву и ДСП  --> 
                                                            <td class="quantity"> 
                                                                <div class="input-group spinner"> 	
                                                                    <div class="input-group-btn-vertical">                                                                        
                                                                        <button class="btn btn-default" type="button">&ndash;</button>
                                                                        <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                                        <button class="btn btn-default" type="button">+</button>
                                                                    </div>
                                                                </div> 
                                                            </td>                                                            
                                                        </tr>
                                                        <tr> 
                                                            <td class="boldstyle" >SX&nbsp;6&nbsp;x&nbsp;50&nbsp;R</td>
                                                            <td class="t-alg-center" >078185</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="121">6</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">60</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">50</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <td class="t-alg-center">&mdash;</td><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">4 - 5</td><!-- Шурупы по дереву и ДСП  --> 
                                                            <td class="quantity"> 
                                                                <div class="input-group spinner"> 	
                                                                    <div class="input-group-btn-vertical">                                                                        
                                                                        <button class="btn btn-default" type="button">&ndash;</button>
                                                                        <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                                        <button class="btn btn-default" type="button">+</button>
                                                                    </div>
                                                                </div> 
                                                            </td>                                                            
                                                        </tr>
                                                        <tr> 
                                                            <td class="boldstyle" >SXL&nbsp;6&nbsp;x&nbsp;50*</td>
                                                            <td class="t-alg-center" >024827</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="122">6</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">60</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">50</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <td class="t-alg-center">&mdash;</td><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">4 - 5</td><!-- Шурупы по дереву и ДСП  --> 
                                                            <td class="quantity"> 
                                                                <div class="input-group spinner"> 	
                                                                    <div class="input-group-btn-vertical">                                                                        
                                                                        <button class="btn btn-default" type="button">&ndash;</button>
                                                                        <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                                        <button class="btn btn-default" type="button">+</button>
                                                                    </div>
                                                                </div> 
                                                            </td>                                                            
                                                        </tr>
                                                        <tr> 
                                                            <td class="boldstyle" >SX&nbsp;8&nbsp;x&nbsp;40</td>
                                                            <td class="t-alg-center" >70008/90</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="123">8</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">50</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">40</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <td class="t-alg-center">20</td><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">4,5 - 6</td><!-- Шурупы по дереву и ДСП  --> 
                                                            <td class="quantity"> 
                                                                <div class="input-group spinner"> 	
                                                                    <div class="input-group-btn-vertical">                                                                        
                                                                        <button class="btn btn-default" type="button">&ndash;</button>
                                                                        <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                                        <button class="btn btn-default" type="button">+</button>
                                                                    </div>
                                                                </div> 
                                                            </td>                                                            
                                                        </tr>
                                                        <tr> 
                                                            <td class="boldstyle" >SXL&nbsp;8&nbsp;x&nbsp;65*</td>
                                                            <td class="t-alg-center" >024828</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="124">8</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">75</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">65</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <td class="t-alg-center">&mdash;</td><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">4,5 - 6</td><!-- Шурупы по дереву и ДСП  --> 
                                                            <td class="quantity"> 
                                                                <div class="input-group spinner"> 	
                                                                    <div class="input-group-btn-vertical">                                                                        
                                                                        <button class="btn btn-default" type="button">&ndash;</button>
                                                                        <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                                        <button class="btn btn-default" type="button">+</button>
                                                                    </div>
                                                                </div> 
                                                            </td>                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>* без кромки</p>
                                            </div>                              
                                        </div>
                                    </div>
                                </div>
                            <!--/ ВПИ -->
                       
                            <!--row-->
                                <div class="row" style="margin-bottom: 15px; margin-right: -15px;">
                                    <div class=" col-xs-12 col-sm-12 col-md-12">
                                        <div style="background: #fff;
                                            border: 1px solid rgb(221, 221, 221);
                                            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                            border-radius: 4px;
                                            padding: 15px;
                                            ">
                                            <ul id="myTab" class="nav nav-tabs" style="margin-bottom: 15px;">
                                                <li class="active"><a href="#opisanie" data-toggle="tab">Описание</a></li>
                                                <li  class=""><a href="#preimushchestva" data-toggle="tab">Преимущества</a></li>
                                                <li  class=""><a href="#stroitelnye-materialy" data-toggle="tab">Строительные материалы</a></li>
                                                <li  class=""><a href="#primenenie" data-toggle="tab">Применение</a></li>
                                                <li  class=""><a href="#ustanovka" data-toggle="tab">Монтаж</a></li>
                                                <li  class=""><a href="#osnovy-tehnologii-krepleniya" data-toggle="tab">Основы технологии крепления</a></li>
                                                <!-- <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#dropdown3" data-toggle="tab">@fat</a></li>
                                                        <li><a href="#dropdown4" data-toggle="tab">@mdo</a></li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div class="tab-pane fade in active" id="opisanie">
                                                    <p>
                                                        <ul class="stat" style="margin-top: 0px;">
                                                            <li><b>Нейлоновый распорный дюбель.</b></li>
                                                            <li>Предназначен для использования в качестве крепления вместе с <b>шурупами</b> по <b>дереву</b> и<b> ДСП</b>, 
                                                            с саморезами и шурупами для дистанционного монтажа ASL  
                                                            <a href="http://fischer-market.ru/asl-universalnyy-distantsionnyy-shurup-art-59061" target="_blank">(универсальный дистанционный шуруп)</a>
                                                            </li> 
                                                            <li><b>Удлиненный дюбель SX</b> предназначен для обеспечения максимальной несущей способности в <b>пустотелых строительных материалах, газобетоне и при толстых слоях штукатурки.</b></li>
                                                         <!--   <li>Металлическая петля, никелированная</li>
                                                            <li>Угол открывания 95°</li>
                                                            <li>Регулировка фасада в трех плоскостях</li>
                                                            <li>Удобная регулировка по глубине с помощью механизма шнек</li>
                                                            <li>Дверь устанавливается и снимается с корпуса без инструмента</li> 
                                                             <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                        </ul>
                                                    </p>
                                                    <div class="main-box-body clearfix">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <video preload="auto" autoplay="true" loop="true" muted="muted" controls class="embed-responsive-item">
                                                                <source src="./dist/video/krepezh/fischer-neylonovyy-dyubel-ux-i-sx.mp4" type="video/mp4">
                                                            </video>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="tab-pane fade " id="preimushchestva">
                                                    <!-- часть1 -->
                                                        <!-- <h4 >Проектирование</h3>                         
                                                        <h5>Размеры петли и расчет зазоров при заводской настройке (подъем ответной планки = 0 мм)</h5>                         
                                                        <h5 >Вхождение двери при полном открывании</h5> -->
                                                        <ul class="stat" style="margin-top: 0px;">
                                                          <!--  <li><b>Нейлоновый распорный дюбель.</b></li>
                                                            <li>Предназначен для использования в качестве крепления вместе с <b>шурупами</b> по <b>дереву</b> и<b> ДСП</b></li> 
                                                            <li><b>Удлиненный дюбель SX</b> предназначен для обеспечения максимальной несущей способности в <b>пустотелых строительных материалах, газобетоне и при толстых слоях штукатурки.</b></li>
                                                            <li>Металлическая петля, никелированная</li>
                                                            <li>Угол открывания 95°</li>
                                                            <li>Регулировка фасада в трех плоскостях</li>
                                                            <li>Удобная регулировка по глубине с помощью механизма шнек</li>
                                                            <li>Дверь устанавливается и снимается с корпуса без инструмента</li> 
                                                             <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                             <li>4 - сторонний распор нейлонового дюбеля обеспечивает надежное сцепление с основой.
                                                            </li>
                                                            <li> Специальный стопорный элемент предохраняет дюбель от проворачивания
                                                            </li>
                                                            <li> Давление распора, создаваемое в отверстии, а не на шейке дюбеля, предохраняет штукатурку и плитку от повреждения.
                                                            </li>
                                                            <li> Легкий и быстрый сквозной монтаж сокращает время, требуемое для установки.
                                                            </li>
                                                            <li> Встроенный стопорный элемент от прокручивания – с предварительно установленным шурупом – позволяет осуществлять сквозной монтаж.
                                                            </li>
                                                            <li> Кромка дюбеля не позволяет ему заглубляться в отверстие на большую глубину, чем предусмотрено.
                                                            </li>
                                                            <li> Температурный диапазон применения от –40°+80°С.
                                                            </li>
                                                            <li> Геометрия дюбеля позволяет использовать его в комбинации с шурупами по дереву и шурупами для ДСП диаметром от 2 до 12 мм.
                                                            </li>
                                                        </ul>
                                                       
                                                        <!-- 
                                                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">
                                                            <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                                                                        border: 1px solid rgb(221, 221, 221);
                                                                        box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                                                        border-radius: 4px;
                                                                        padding: 15px;
                                                                        ">

                                                                <div class="row col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">                                                           
                                                                    <div class="row">  
                                                                    <p>Стандартное расстояние от чашки TB</p>                                              
                                                                        <table class="table table-striped table-responsive">                                                    
                                                                            <tbody> 
                                                                                <tr>
                                                                                <th>MD <br>Подъем ответной планки<br>мм</th>
                                                                                <th>TB <br>Расстояние от чашки<br>мм</th>
                                                                                <th>FA <br>Наложение фасада<br>мм</th>                                                       
                                                                                </tr>                            
                                                                                <tr>
                                                                                <td>0</td>
                                                                                <td>5</td>
                                                                                <td>16</td>                                                     
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>                              
                                                                </div>

                                                            </div>
                                                        </div> -->
                                                    <!-- /часть1 -->

                                                    <!-- часть2 -->
                                                        <h2 ></h2>                         

                                                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                                                            <div id="carousel2" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                                                <div class="carousel-inner">

                                                                    <div class="item active">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Применение" 
                                                                        data-image="./dist/filesdb/images/SX_sch1.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch1.png"
                                                                                data-src="./dist/filesdb/images/SX_sch1.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Применение"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Минимальный зазор" 
                                                                        data-image="./dist/filesdb/images/SX_sch2.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch2.png"
                                                                                data-src="./dist/filesdb/images/SX_sch2.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Минимальный зазор"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Регулировка" 
                                                                        data-image="./dist/filesdb/images/SX_sch3.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch3.png"
                                                                                data-src="./dist/filesdb/images/SX_sch3.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Регулировка"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <!-- <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Монтаж на саморезы" 
                                                                        data-image="./dist/filesdb/images/SX_sch4.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch4.png"
                                                                                data-src="./dist/filesdb/images/SX_sch4.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Монтаж на саморезы"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Разметка под футорки" 
                                                                        data-image="./dist/filesdb/images/SX_sch5.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch5.png"
                                                                                data-src="./dist/filesdb/images/SX_sch5.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Разметка под футорки"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Размеры чашки" 
                                                                        data-image="./dist/filesdb/images/SX_sch6.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch6.png"
                                                                                data-src="./dist/filesdb/images/SX_sch6.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Размеры чашки"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Крестообразная ответная планка" 
                                                                        data-image="./dist/filesdb/images/SX_sch7.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/SX_sch7.png"
                                                                                data-src="./dist/filesdb/images/SX_sch7.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Крестообразная ответная планка"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div> -->
                                                            
                                                                </div>
                                                                <!-- Элементы управления -->
                                                                <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                    <span class="sr-only">Предыдущий</span>
                                                                </a>
                                                                <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                    <span class="sr-only">Следующий</span>
                                                                </a>
                                                            </div>
                                                        </div> 

                                                    <!-- /часть2 --> 


                                                </div>
                                                <div class="tab-pane fade" id="stroitelnye-materialy">
                                                   <!-- часть1 -->
                                                        <!-- <h4 >Проектирование</h3>                         
                                                        <h5>Размеры петли и расчет зазоров при заводской настройке (подъем ответной планки = 0 мм)</h5>                         
                                                        <h5 >Вхождение двери при полном открывании</h5> -->
                                                        <ul class="stat" style="margin-top: 0px;">
                                                          <!--  <li><b>Нейлоновый распорный дюбель.</b></li>
                                                            <li>Предназначен для использования в качестве крепления вместе с <b>шурупами</b> по <b>дереву</b> и<b> ДСП</b></li> 
                                                            <li><b>Удлиненный дюбель SX</b> предназначен для обеспечения максимальной несущей способности в <b>пустотелых строительных материалах, газобетоне и при толстых слоях штукатурки.</b></li>
                                                            <li>Металлическая петля, никелированная</li>
                                                            <li>Угол открывания 95°</li>
                                                            <li>Регулировка фасада в трех плоскостях</li>
                                                            <li>Удобная регулировка по глубине с помощью механизма шнек</li>
                                                            <li>Дверь устанавливается и снимается с корпуса без инструмента</li> 
                                                             <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                           
                                                            <li> Бетон</li>
                                                            <li> Кирпич с вертикальными пустотами</li>
                                                            <li> Пустотелые блоки, выполненные из легкого бетона</li>
                                                            <li> Пустотелые плиты перекрытий, выполненные из кирпича, бетона и т.п.</li>
                                                            <li> Перфорированный силикатный кирпич</li>
                                                            <li> Полнотелый силикатный кирпич</li>
                                                            <li> Натуральный камень с плотной структуры</li>
                                                            <li> Газобетон</li>
                                                            <li> Полнотелые гипсовые панели</li>
                                                            <li> Полнотелые блоки, выполненные из легкого бетона</li>
                                                            <li> Полнотелый кирпич</li>
                                                        </ul>                                                      
                                                    <!-- /часть1 -->
                                                </div>
                                                <div class="tab-pane fade" id="primenenie">
                                                    <ul class="stat" style="margin-top: 0px;">
                                                        <!--  <li><b>Нейлоновый распорный дюбель.</b></li>
                                                        <li>Предназначен для использования в качестве крепления вместе с <b>шурупами</b> по <b>дереву</b> и<b> ДСП</b></li> 
                                                        <li><b>Удлиненный дюбель SX</b> предназначен для обеспечения максимальной несущей способности в <b>пустотелых строительных материалах, газобетоне и при толстых слоях штукатурки.</b></li>
                                                        <li>Металлическая петля, никелированная</li>
                                                        <li>Угол открывания 95°</li>
                                                        <li>Регулировка фасада в трех плоскостях</li>
                                                        <li>Удобная регулировка по глубине с помощью механизма шнек</li>
                                                        <li>Дверь устанавливается и снимается с корпуса без инструмента</li> 
                                                            <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                        
                                                            <li> Светильники</li>
                                                            <li>Стенные шкафы</li>
                                                            <li> Гардеробы</li>
                                                            <li>Почтовые ящики</li>
                                                            <li> Кронштейны для телевизоров</li>
                                                            <li> Складные ставни</li>
                                                            <li> Поручни</li>
                                                            <li>Световые шахты</li>
                                                            <li>Монтаж ванн и унитазов</li>
                                                    </ul> 
                                                    <!-- часть2 -->
                                                    <h2 ></h2>                         

                                                    <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                                                        <div id="carousel3" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                                            <div class="carousel-inner">

                                                                <div class="item active">
                                                                    <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Карнизы" 
                                                                    data-image="./dist/filesdb/images/SX_sch6.png" data-target="#image-gallery">
                                                                        <img  
                                                                            src="./dist/filesdb/images/SX_sch6.png"
                                                                            data-src="./dist/filesdb/images/SX_sch6.png"
                                                                            class="center-block   img-rounded    bar "
                                                                            data-toggle="modal"                                                                                                                    
                                                                            alt="Карнизы"
                                                                            data-pdf=""                                                    
                                                                        >
                                                                    </a>
                                                                </div>
                                                                <div class="item">
                                                                    <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Настенные консольные кронштейны" 
                                                                    data-image="./dist/filesdb/images/SX_sch7.png" data-target="#image-gallery">
                                                                        <img  
                                                                            src="./dist/filesdb/images/SX_sch7.png"
                                                                            data-src="./dist/filesdb/images/SX_sch7.png"
                                                                            class="center-block   img-rounded    bar "
                                                                            data-toggle="modal"                                                                                                                    
                                                                            alt="Настенные консольные кронштейны"
                                                                            data-pdf=""                                                    
                                                                        >
                                                                    </a>
                                                                </div>
                                                                <div class="item">
                                                                    <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Кондиционеры" 
                                                                    data-image="./dist/filesdb/images/SX_sch8.png" data-target="#image-gallery">
                                                                        <img  
                                                                            src="./dist/filesdb/images/SX_sch8.png"
                                                                            data-src="./dist/filesdb/images/SX_sch8.png"
                                                                            class="center-block   img-rounded    bar "
                                                                            data-toggle="modal"                                                                                                                    
                                                                            alt="Кондиционеры"
                                                                            data-pdf=""                                                    
                                                                        >
                                                                    </a>
                                                                </div>
                                                            
                                                        
                                                            </div>
                                                            <!-- Элементы управления -->
                                                            <a class="left carousel-control" href="#carousel3" role="button" data-slide="prev">
                                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                <span class="sr-only">Предыдущий</span>
                                                            </a>
                                                            <a class="right carousel-control" href="#carousel3" role="button" data-slide="next">
                                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                <span class="sr-only">Следующий</span>
                                                            </a>
                                                        </div>
                                                    </div> 
                                                    <!-- /часть2 -->   
                                                
                                                </div>
                                                <div class="tab-pane fade" id="ustanovka">
                                                    <p>
                                                        <ul class="stat" style="margin-top: 0px;">                                                            
                                                            <li>Дюбель SX пригоден для предварительного монтажа и сквозного монтажа.</li>
                                                            <li>При сквозном монтаже следует использовать шуруп максимального диаметра</li>
                                                            <li>При вворачивании шурупа дюбель SX расширяется в четырех направлениях, обеспечивая надежную анкеровку в строительном материале.</b></li> 
                                                            <li>Требуемая длина шурупа определяется следующим образом: длина дюбеля + толщина закрепляемого элемента + 1 диаметр шурупа</li>
                                                            <li>Пригоден для шурупов по дереву, для ДСП и для дистанционных шурупов.</li>                                                                                                                                 
                                                            <li>В пустотелом кирпиче и газобетоне сверление отверстия следует производить только в режиме вращения сверла (безударное сверление).</li>                                                                                                                                 
                                                            <li>В целях безопасности <b>не разрешается</b> применять нейлоновые дюбели в конструкциях, находящихся под <b>постоянными растягивающими нагрузками</b>. 
                                                                Поэтому нейлоновый дюбель <b>не может быть использован</b> для крепления подвесных изделий в <b>потолке</b>, например осветительных приборов.</li>                                                                                                                                 
                                                        </ul>
                                                    </p>
                                                    <div class="row"  style="  margin-bottom: 20px;"> 
                                                    <div class="col-xs-12 col-sm-12 col-md-12" ><b>Предварительный монтаж</b><img src="./dist/filesdb/images/fischer_fix_014_4.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                    <div class="col-xs-12 col-sm-12 col-md-12"><b>Сквозной монтаж</b><img src="./dist/filesdb/images/fischer_fix_014_5.jpg"  width="100%" height="100%" class="" alt="Сквозной монтаж" title=""></div>
                                                </div> 
                                                </div>
                                                <div class="tab-pane fade" id="osnovy-tehnologii-krepleniya">
                                                   <!-- часть1 -->
                                                        <!-- <h4 >Проектирование</h3>                         
                                                        <h5>Размеры петли и расчет зазоров при заводской настройке (подъем ответной планки = 0 мм)</h5>                         
                                                        <h5 >Вхождение двери при полном открывании</h5> -->
                                                      
                                                   
                                                    <!-- /часть1 -->
                                                    <!-- часть2 -->
                                                    <!-- http://igelpro.ru/KEW_kat.pdf -->
                                                        <!-- <h2 >Основы технологии крепления</h2> -->
                                                        <hr>                         
                                                                               
                                                        <h3><b>1.1 Бетон и стеновые кладочные материалы (полнотелые кирпичи)</b></h3>                         
                                                        <h3>1.1.1 Бетон </h3> 
                                                        <p>
                                                            Бетон представляет собой смесь связующего материала,
                                                            воды и специальных добавок. В зависимости от конкретного состава, технологии изготовления, 
                                                            обработки или назначения этого материала различают несколько типов бетона. В основном используются 
                                                            нормальные и легкие бетоны. Легкий бетон, в отличие от нормального, содержит такие добавки как 
                                                            пемза или стиропор (пенополистирол). В качестве связующего в обоих типах бетона применяется цемент. 
                                                            Облегчающие добавки, используемые в легких бетонах, имеют более низкие механические характеристики, 
                                                            по сравнению с гравием, входящим в состав нормального бетона. Как правило, это создает худшие 
                                                            предпосылки для крепления дюбелей в легких бетонах.
                                                            Европейские технические допуски в области ответственного крепления зазличают бетоны с тещинами и без трещин.
                                                        </p>                        
                                                         <h3>1.1.2 Стеновые материалы - полнотелый кирпич сплошной структуры</h3>
                                                         <p>К этой группе кирпичей относятся полнотелый керамический (рядовой, облицовочный, клинкерный) и силикатный кирпичи. 
                                                             При закреплении дюбелей в таком кирпиче, как правило, не возникает никаких проблем, благодаря отсутствию в кирпиче внутренних полостей.</p>
                                                         <h3>1.2. Полнотелый блок пористой структуры</h3>
                                                         <p>
                                                            Полнотелые блоки из легкого или ячеистого (пористого) пенобетона или газобетона имеют в своей структуре большое количество пор, 
                                                            что существенно снижает механические характеристики материала. При креплении в таких блоках рекомендуется использование 
                                                            специальных дюбелей с удлиненной распорной зоной или дюбелей, 
                                                            обеспечивающих связывающее, ненапряженное крепление (см. Механизмы крепления).
                                                         </p>
                                                         <h3>1.3 Пустотелые кирпичи и блоки</h3>
                                                         <h3>1.3.1 Пустотелый кирпич сплошной структуры</h3>
                                                         <p>
                                                            Такой кирпич состоит из непористого материала и содержит внутренние полости, расположенные либо
                                                            параллельно, либо перпендикулярно базовой опорной
                                                            плоскости кирпича. Сечение отверстий, как правило, -
                                                            круглое, овальное или прямоугольное, причем суммарная
                                                            площадь поперечного сечения пустот составляет более
                                                            15% от общей площади опорной плоскости кирпича. К
                                                            этой группе относятся керамические и силикатные
                                                            кирпичи с различными геометриями пустот и пустотелые
                                                            бетонные блоки. Для крепления в таких кирпичах
                                                            применяют специальные типы дюбелей, которые
                                                            заполняют пустоты или проходят насквозь через
                                                            несколько стенок полостей, закрепляясь в них.
                                                         </p>
                                                         <h3>1.3.2 Пустотелый блок пористой структуры</h3>
                                                         <p>
                                                            Несущая способность таких блоков еще ниже из-за
                                                            наличия полостей в пористом материале. Проведение
                                                            крепежных работ требует наиболее тщательного выбора
                                                            типа дюбеля. Предпочтительно использование дюбелей с
                                                            удлиненной распорной зоной или дюбелей, реализующих
                                                            геометрический механизм крепления.
                                                         </p>
                                                         <h3>1.4 Плиты / Листы</h3>
                                                         <p>
                                                            К этой группе относятся тонкостенные строительные
                                                            материалы, имеющие достаточно низкие механические
                                                            характеристики, например гипсокартонные, гипсоволоконные, древесностружечные, асбоцементные,
                                                            цементностружечные листы или МДФпанели. Такие листы
                                                            крепятся либо непосредственно на другую строительную
                                                            основу, или же на некотором расстоянии от нее. При
                                                            креплении предметов к листовым материалам
                                                            необходимо использование специальных дюбелей,
                                                            которые образуют геометрическое крепление на задней
                                                            стенке листов. Такие крепежные элементы, как правило,
                                                            имеют название «дюбель для пустотелых конструкций».
                                                         </p>

                                                       <h3><b>2 Сверление отверстия</b></h3>
                                                       <p>При сверлении следите за тем, чтобы сверло было
                                                            направлено по перпендикуляру к стене, и не используйте
                                                            изношенные или не соответствующие конкретному
                                                            строительному материалу сверла. Просверленное
                                                            отверстие следует очистить и удалить из него остатки
                                                            материала. Следите за соответствием диаметра и
                                                            глубины отверстия рекомендациям изготовителя.
                                                            Для листов и плит не применяйте сверла, предназначенные для сверления твердых строительных материалов.
                                                            Тип и приемы сверления определяются видом
                                                            строительной основы:
                                                        </p>
                                                    <h3>2.1 От отверстия к строительному материалу …</h3>
                                                    <p>Очень часто неизвестно, какой строительный материал
                                                            находится под штукатуркой или обоями. Определить тип
                                                            материала помогает пробное сверление сверлом с
                                                            победитовым наконечником на низких скоростях
                                                            вращения и без ударной нагрузки. По усилию
                                                            сопротивления понятно, идет ли речь о мягком или
                                                            твердом и прочном материале. О конкретном типе
                                                            материала можно судить по цвету и консистенции
                                                            сверлильной муки.
                                                            Бетон: светло-серая или белая мука, мелкая, как пыль, не
                                                            слипающаяся.
                                                            Пенобетон: белая крупнозернистая, но легко размягчающаяся мука.
                                                            Кирпич: красная мука, пустотелый кирпич легко
                                                            определить по ступенчатому проникновению сверла в
                                                            материал; в этом случае нельзя применять ударное
                                                            сверление.
                                                            Силикатный кирпич: белая мука, по ощущениям
                                                            похожая на песок.
                                                            Гипсокартон: белая мелкозернистая пыль, прилипающая к сверлу.
                                                            Гипсоволоконный лист: серая мелкозернистая пыль,
                                                            прилипающая к сверлу
                                                    </p>
                                                    <h3>2.2 ...от строительного материала к методу сверления</h3>
                                                    <p><b>Безударное сверление:</b>
                                                            Сверление отверстий без ударной нагрузки; для мягких,
                                                            пористых строительных материалов с низкой несущей
                                                            способностью, например: пористый бетон, пустотелый
                                                            кирпич, во избежание повреждения перегородок и ребер в
                                                            материале.</p>
                                                    <p><b>Ударное сверление:</b>
                                                            сверление отверстий с большим числом оборотов и
                                                            многочисленными слабыми ударами для строительных
                                                            материалов повышенной прочности, напр. для
                                                            кирпичных кладок из сплошного кирпича.</p>
                                                    <p><b>Сверление с перфоратором:</b>
                                                            Сверление отверстий с малым числом оборотов и
                                                            немногочисленными сильными ударами; для сплошных
                                                            материалов повышенной прочности, например для
                                                            бетона.
                                                            </p>   
                                                     <h3><b>3 Монтаж</b></h3> 
                                                     <p><b>Предварительный монтаж:</b>
                                                            При таком монтаже дюбель полностью утапливается в
                                                            основу, диаметр отверстия в основе больше, чем диаметр
                                                            отверстия в монтируемой детали. Сначала сверлится
                                                            отверстие, затем в него монтируется дюбель, и только
                                                            после этого в дюбель при помощи шурупа крепится
                                                            деталь.</p>

                                                            <p>
                                                                <b>Сквозной монтаж:</b>
                                                                При таком монтаже отверстие в основе сверлится
                                                                насквозь через закрепляемую деталь. Диаметры
                                                                отверстия в основе и детали равны диаметру дюбеля.
                                                                Дюбель монтируется насквозь через закрепляемую
                                                                деталь в отверстие в основе и распирается в нем с
                                                                помощью шурупа. Этот вид монтажа отличается
                                                                наименьшей трудоемкостью и высокой точностью за счет
                                                                соосности отверстий в основе и закрепляемой детали.
                                                            </p>


                                                    <!-- /часть2 --> 


                                                </div>
                                                <!--
                                                <div class="tab-pane fade" id="dropdown3">
                                                <p>Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia
                                                    banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.
                                                    Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice
                                                    blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.</p>
                                                </div>
                                                <div class="tab-pane fade" id="dropdown4">
                                                    <p>They sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland
                                                        seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia
                                                        PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                        mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial
                                                        keffiyeh echo park vegan.</p>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            <!--/row-->
                            <!--row-->
                                 <div class="row" style=" margin-left: 15px;">
                                    <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                                                border: 1px solid rgb(221, 221, 221);
                                                box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                                border-radius: 4px;
                                                padding: 15px;
                                                ">
                                        <h4 >Выбор дюбеля под саморез</h4>                                 
                               
                                       
                                            <p class="cont">
                                                После того, как выбор типа самореза и дюбеля для крепления на стене сделан, останется выбрать, воспользовавшись данными, приведенными в таблице ниже типоразмер самореза и соответствующий ему дюбель. 
                                                Определиться с диаметром и глубиной отверстия для установки дюбеля.
</p>       
                                            <p class="cont">
                                                В связи с отсутствием международного стандарта на саморезы и дюбеля, многие производители выпускают по своим внутренним стандартам. Поэтому невозможно точно указать все размеры, 
                                                но в подавляющем числе случаев размеры совпадают с достаточной для практического использования точностью.
</p>                                         
                                            
                                
                                            <div class="row col-xs-12 col-sm-12 col-md-12" > 
                                                <!-- <p><b>Таблица подбора дюбеля для выбранного самореза, размер отверстия для выбранного дюбеля</b> </p>                                                -->
                                                <table class="centered centeredContent table table-striped table-responsive"  cellpadding="2" cellspacing="1">
                                                    <tbody>
                                                    <tr>
                                                    <th colspan="6">Таблица подбора дюбеля для выбранного самореза, размер отверстия для выбранного дюбеля</th>
                                                    </tr>

                                                    <tr>
                                                    <th colspan="2">Саморез</th>
                                                    <th colspan="2">Дюбель</th>
                                                    <th colspan="2">Отверстие под дюбель</th>
                                                    </tr>

                                                    <tr>
                                                    <td class="istyle">Диаметр, мм</td>
                                                    <td class="istyle">Длина, мм</td>
                                                    <td class="istyle">Диаметр, мм</td>
                                                    <td class="istyle">Длина, мм</td>
                                                    <td class="istyle">Диаметр сверла, мм</td>
                                                    <td class="istyle">Глубина сверления, мм</td>
                                                    </tr>

                                                    <tr>
                                                    <td>3</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40</td>
                                                    <td>5</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40</td>
                                                    <td>5</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45</td>
                                                    </tr>

                                                    <tr>
                                                    <td>3,5</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40, 45, 50</td>
                                                    <td>6</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40, 45, 50</td>
                                                    <td>6</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45, 50, 55</td>
                                                    </tr>

                                                    <tr>
                                                    <td>4</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40, 45, 50, 60, 70</td>
                                                    <td>5 или 6</td>
                                                    <td>12, 16, 20, 25, 30, 35, 40, 45, 50, 60, 70</td>
                                                    <td>5 или 6</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45, 50, 55, 65, 75</td>
                                                    </tr>

                                                    <tr>
                                                    <td>4,5</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45, 50, 60, 70, 80</td>
                                                    <td>6 или 8</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45, 50, 60, 70, 80</td>
                                                    <td>6 или 8</td>
                                                    <td>20, 25, 30, 35, 40, 45, 50, 55, 65, 75, 85</td>
                                                    </tr>

                                                    <tr>
                                                    <td>5</td>
                                                    <td>20, 25, 30, 35, 40, 45, 50, 60, 70, 80, 90, 100</td>
                                                    <td>6 или 8</td>
                                                    <td>16, 20, 25, 30, 35, 40, 45, 50, 60, 70, 80, 90, 100</td>
                                                    <td>6 или 8</td>
                                                    <td>20, 25, 30, 35, 40, 45, 50, 55, 65, 75, 85, 95, 105</td>
                                                    </tr>

                                                    <tr>
                                                    <td>6</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200</td>
                                                    <td>8 или 10</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200</td>
                                                    <td>8 или 10</td>
                                                    <td>45, 50, 55, 65, 75, 85, 95, 105, 130, 150, 170, 190, 220</td>
                                                    </tr>

                                                    <tr>
                                                    <td>8</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200</td>
                                                    <td>10 или 12 или 14</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200</td>
                                                    <td>10 или 12 или 14</td>
                                                    <td>45, 50, 55, 65, 75, 85, 95, 105, 130, 150, 170, 190, 220</td>
                                                    </tr>

                                                    <tr>
                                                    <td>10</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200, 220, 240, 260</td>
                                                    <td>12 или 14</td>
                                                    <td>40, 45, 50, 60, 70, 80, 90, 100, 120, 140, 160, 180, 200, 220, 240, 260</td>
                                                    <td>12 или 14</td>
                                                    <td>45, 50, 55, 65, 75, 85, 95, 105, 130, 150, 170, 190, 220, 230, 260, 280</td>
                                                    </tr>

                                                    </tbody>
                                                </table>                                             
                                                
                                            </div>
                                        
                                            <p class="cont">
                                                Пользоваться таблицей нужно следующим образом. Допустим Вам надо повесить книжную полку с максимально возможным весом 100 кг с креплением на двух петлях на кирпичной стене. 
                                                Так как полка будет подвешена на два самореза, то нагрузка на один саморез будет составлять 50 кг. 
                                                Выбираете из таблицы, саморез универсальной резьбой, с полусферической головкой, диаметром 6 мм, длиной не менее 80 мм. Дюбель подойдет стандартный, самый простой.
                                                 Из таблицы видим, такой типоразмер самореза есть, для него подойдет дюбель диаметром 8 или 10 мм длиной 80 мм. 
                                                Так как в наличии есть сверло диаметром 8 мм, то выбираем дюбель тоже диаметром 8 мм. Для его установки нужно просверлить отверстие диаметром 8 мм на глубину 85 мм.
</p>
                                    </div>
                                </div>
                            <!--/row-->
                        </div> <!--/bs-callout bs-callout-warning cont/-->
                    </section> 
                </article>   
                </div> <!-- main  -->
                <?php
                //  include 'inc-goup-menu.php';//$styazhka=[]
                SideMenu($universalnaya,3);
                ?> 
    
<?php include 'inc-footer2.php'; ?>