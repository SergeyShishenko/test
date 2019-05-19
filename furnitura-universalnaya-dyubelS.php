<?php
include 'inc-session-start.php';
include 'inc-menu-value.php';
include 'inc-menu-value-furnitura.php';
$furnituraClass = 'class="active"';
$item_universalnaya_Class = 'active';
include 'inc-head2.php';
include 'inc-header-menu3.php';
include 'inc-left-side-menu-furnitura.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                   

                <article    id="krepezh-i-metizy">
                    <section >
                        <div class="page-header"  >
                            <h1 itemprop="name" id="dyubelS">КРЕПЕЖ И МЕТИЗЫ</h1>
                            <h2 >Дюбель S</h2>                        
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
                                        <h4 >Удобный в установке нейлоновый дюбель с распором в 2 стороны</h4>                                 
                               
                                      
                                
                                        <div class="row col-xs-12 col-sm-12 col-md-12" >                                                           
                                            <div class="row"> 
                                                                                          
                                                <div class="row"  style="height:200px;  margin-bottom: 20px;"> 
                                                    <div class="col-xs-6 col-sm-6 col-md-6" ><img src="./dist/filesdb/images/S.png" width="100%" height="100%" class="" alt="S" title=""></div>                                             
                                                    <div class="col-xs-6 col-sm-6 col-md-6"><img src="./dist/filesdb/images/S_sch1.png"  width="100%" height="100%" class="" alt="S_sch1" title=""></div>
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
                                                            <!-- <th title="Макс. толщина закрепляемого материала,(мм)" class="t-alg-center">Макс.<br>толщина закрепляемого материала <i><br>t<sub>fix</sub>&nbsp;(мм)</i></th>                                                                                                                   -->
                                                            <th title="Шурупы по дереву и ДСП ,(мм)" class="t-alg-center">Шурупы<br>по дереву<br>и для ДСП <i><br>d<sub>s</sub> &nbsp;или d<sub>s</sub>&nbsp;x&nbsp;l<sub>s</sub>&nbsp;(&empty;&nbsp;мм)</i></th>                                                           
                                                            <th> <button type="button" id="each_addvpi_1" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="calcresult">                                                            
                                                        <tr> 
                                                            <td class="boldstyle" >S&nbsp;4&nbsp;x&nbsp;20</td>
                                                            <td class="t-alg-center" >050104</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="125">4</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">25</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">20</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                           <!--  <td class="t-alg-center">10</td>--> <!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">2 - 3</td><!-- Шурупы по дереву и ДСП  --> 
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
                                                            <td class="boldstyle" >S&nbsp;5&nbsp;x&nbsp;25</td>
                                                            <td class="t-alg-center" >050105</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="126">5</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">35</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">25</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                           <!--   <td class="t-alg-center">&mdash;</td>--><!-- Макс. толщина закрепляемого материала -->
                                                            <td class="t-alg-center">3 - 4</td><!-- Шурупы по дереву и ДСП  --> 
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
                                                            <td class="boldstyle" >S&nbsp;6&nbsp;x&nbsp;30</td>
                                                            <td class="t-alg-center" >050106</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="127">6</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">40</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">30</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <!--  <td class="t-alg-center">&mdash;</td>--><!-- Макс. толщина закрепляемого материала -->
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
                                                            <td class="boldstyle" >S&nbsp;8&nbsp;x&nbsp;40</td>
                                                            <td class="t-alg-center" >050108</td>                                                            
                                                            <td class="animated boldstyle t-alg-center" data-objfurnid="128">8</td> <!-- Диаметр сверления -->
                                                            <td class="t-alg-center">55</td><!-- Мин.глубина сверления -->
                                                            <td class="t-alg-center boldstyle">40</td><!-- Длина дюбеля = мин.глубина анкеровки -->
                                                            <!--  <td class="t-alg-center">20</td>--><!-- Макс. толщина закрепляемого материала -->
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
                                                <!-- <p>* без кромки</p> -->
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
                                                            <li>Предназначен для использования вместе с <b>шурупами по дереву, шурупами для ДСП и самонарезающими шурупами</b> </li> 
                                                            
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
                                                                <source src="./dist/video/krepezh/fischer-neylonovyy-dyubel-S.mp4" type="video/mp4">
                                                            </video>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="tab-pane fade " id="preimushchestva">
                                                    <!-- часть1 -->
                                                        
                                                        <ul class="stat" style="margin-top: 0px;">
                                                                                                                          
                                                             <li>Специальный стопорный элемент предохраняет дюбель от проворачивания в просверленном отверстии.
                                                            </li>
                                                            <li> Давление распора, создаваемое в отверстии, а не на шейке дюбеля, предохраняет штукатурку и плитку от повреждения.
                                                            </li>
                                                            <li> Температурный диапазон эксплуатации от –40 до +80С.
                                                            </li>
                                                            <li> Можно использовать в комбинации с шурупами для дерева и шурупами для ДСП диаметром от 2 и 16 мм.
                                                            </li>
                                                            <li> Расстояние от края стены (<b>краевое расстояние ar</b>) должно быть не меньше длины одного дюбеля.
                                                                В случае установки вблизи от края стены мы рекомендуем устанавливать дюбель таким образом, 
                                                                чтобы распор действовал в направлении <b>параллельно краю</b>.
                                                            </li>
                                                            
                                                        </ul>
                                        
                                                    <!-- /часть1 -->

                                                    <!-- часть2 -->
                                                        <h2 ></h2>                         

                                                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                                                            <div id="carousel2" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                                                <div class="carousel-inner">

                                                                    <div class="item active">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Применение" 
                                                                        data-image="./dist/filesdb/images/S_sch9.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/S_sch9.png"
                                                                                data-src="./dist/filesdb/images/S_sch9.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Применение"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Минимальный зазор" 
                                                                        data-image="./dist/filesdb/images/S_sch10.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/S_sch10.png"
                                                                                data-src="./dist/filesdb/images/S_sch10.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Минимальный зазор"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>
                                                                    <div class="item">
                                                                        <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Регулировка" 
                                                                        data-image="./dist/filesdb/images/S_sch11.png" data-target="#image-gallery">
                                                                            <img  
                                                                                src="./dist/filesdb/images/S_sch11.png"
                                                                                data-src="./dist/filesdb/images/S_sch11.png"
                                                                                class="center-block   img-rounded    bar "
                                                                                data-toggle="modal"                                                                                                                    
                                                                                alt="Регулировка"
                                                                                data-pdf=""                                                    
                                                                            >
                                                                        </a>
                                                                    </div>                                                           
                                                            
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
                                                    <ul class="stat" style="margin-top: 0px;">
                                                        <li> Бетон</li>
                                                        <li> Полнотелый силикатный кирпич</li>
                                                        <li> Строительный камень плотной структуры</li>
                                                        <li> Полнотелые блоки, выполненные из легкого бетона</li>
                                                        <li> Полнотелый кирпич</li>
                                                        
                                                    </ul>                                                      
                                                    <!-- /часть1 -->
                                                </div>
                                                <div class="tab-pane fade" id="primenenie">
                                                    <ul class="stat" style="margin-top: 0px;">
                                                        <li>Картины</li>
                                                        <li>Светильники</li>
                                                        <li>Плинтуса</li>
                                                        <li>Полки</li>
                                                        <li>Зеркальные шкафы</li>
                                                        <li>Почтовые ящики</li>
                                                        <li>Датчики движения</li>
                                                        <li>Информационные доски</li>
                                                        <li>Карнизы для штор</li>
                                                        <li>Электромонтаж</li>
                                                    </ul> 
                                                    <!-- часть2 -->
                                                    <h2 ></h2>
                                                    <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                                                        <div id="carousel3" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                                            <div class="carousel-inner">

                                                                <div class="item active">
                                                                    <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Карнизы" 
                                                                    data-image="./dist/filesdb/images/S_sch2.jpg" data-target="#image-gallery">
                                                                        <img  
                                                                            src="./dist/filesdb/images/S_sch2.jpg"
                                                                            data-src="./dist/filesdb/images/S_sch2.jpg"
                                                                            class="center-block   img-rounded    bar "
                                                                            data-toggle="modal"                                                                                                                    
                                                                            alt="Карнизы"
                                                                            data-pdf=""                                                    
                                                                        >
                                                                    </a>
                                                                </div>
                                                                <div class="item">
                                                                    <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Настенные консольные кронштейны" 
                                                                    data-image="./dist/filesdb/images/S_sch3.jpg" data-target="#image-gallery">
                                                                        <img  
                                                                            src="./dist/filesdb/images/S_sch3.jpg"
                                                                            data-src="./dist/filesdb/images/S_sch3.jpg"
                                                                            class="center-block   img-rounded    bar "
                                                                            data-toggle="modal"                                                                                                                    
                                                                            alt="Настенные консольные кронштейны"
                                                                            data-pdf=""                                                    
                                                                        >
                                                                    </a>
                                                                </div>
                                                                <!-- <div class="item">
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
                                                                </div> -->
                                                            
                                                        
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
                                                            <li>Дюбель S пригоден для предварительного монтажа и сквозного монтажа</li>
                                                            <li>При вворачивании шурупа дюбель S расширяется в двух направлениях, обеспечивая надежную анкеровку в строительном материале.</li>
                                                            <li><b>Требуемая длина шурупа определяется следующим образом: длина дюбеля + толщина штукатурки и/или изоляционного материала + закрепляемого элемента + 1 диаметр шурупа.</b></li> 
                                                            <li>Пригоден для шурупов по дереву и для ДСП.</li>
                                                            <li>Расстояние от края должно быть не менее одной длины дюбеля.</li>                                                                                                                                 
                                                            <li>В случае установки близко к краю поверните дюбель так, чтобы силы распора действовали параллельно краю материала.</li>                                                                                                                                 
                                                                                                                                                                                          
                                                        </ul>
                                                    </p>
                                                    <div class="row"  style="  margin-bottom: 20px;"> 
                                                    <div class="col-xs-6 col-sm-1-5  col-md-1-5  col-lg-1-5" ><img src="./dist/filesdb/images/S_sch4.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                    <div class="col-xs-6 col-sm-1-5  col-md-1-5  col-lg-1-5" ><img src="./dist/filesdb/images/S_sch5.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                    <div class="col-xs-6 col-sm-1-5  col-md-1-5  col-lg-1-5" ><img src="./dist/filesdb/images/S_sch6.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                    <div class="col-xs-6 col-sm-1-5  col-md-1-5  col-lg-1-5" ><img src="./dist/filesdb/images/S_sch7.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                    <div class="col-xs-6 col-sm-1-5  col-md-1-5  col-lg-1-5" ><img src="./dist/filesdb/images/S_sch8.jpg" width="100%" height="100%" class="" alt="Предварительный монтаж" title=""></div>                                             
                                                                                              
                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12"><b>Сквозной монтаж</b><img src="./dist/filesdb/images/fischer_fix_014_5.jpg"  width="100%" height="100%" class="" alt="Сквозной монтаж" title=""></div> -->
                                                </div>

                                                </div>
                                                <div class="tab-pane fade" id="osnovy-tehnologii-krepleniya"> 
                                                    <?php include 'inc-osnovy-tehnologii-krepleniya.php'; ?>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            <!--/row-->
                            <?php include 'inc-vybor-dyubelya-pod-samorez.php'; ?> 
                           

                        </div> <!--/bs-callout bs-callout-warning cont/-->
                    </section> 
                </article>   
                </div> <!-- main  -->
                <?php
                //  include 'inc-goup-menu.php';//$styazhka=[]
                SideMenu($universalnaya,4);
                ?> 
    
<?php include 'inc-footer2.php'; ?>