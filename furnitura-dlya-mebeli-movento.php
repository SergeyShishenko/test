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
$item_dlya_mebeli_Class = 'active';
$item_universalnaya_Class = '';
$item_katalogi_Class = '';
include 'inc-head2.php';
echo '        
        
        
        <style>
          .btn:focus,
        .btn:active,
        button:focus,
        button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 7.5px;
            margin-bottom: 7.5px;
            padding-right: 7.5px;
            padding-left: 7.5px;
            text-align: center;
        }

       
         .modal-dialog {
             width: 1200px;
            
           
        } 

        /* .row .row {
            margin-right: 0;
            margin-left: 0;
        } */

        .thumbnail {
            border: none;
        }
        .modal-header .close {
         margin-top: -20px;
        }
        #image-gallery-image{float:none;}

        .embed-responsive, #carousel{
       
        box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
        border-radius: 4px;
        }
        #carousel{background: #fff;}
        a, a:active, a:focus { outline: none; }

        input, textarea {outline:none;}
        input:active, textarea:active {outline:none;}
        :focus {outline:none;}
        textarea {resize:none;}
        textarea {resize:vertical;}
        textarea {resize:horizontal;}

        #myTab a {
            
            border-left: none;
        }
        #myTab li.active a{
            
            border-left: 1px solid #dddddd;
        }

        .overlay {
            height: 15px;
        }


        .outerP {
            
            text-align: center;
            vertical-align: middle;
            position: relative;
           
        }
        .innerP {
            

            height: 100px;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto 0;
    right:0;
    padding:0 20px 0 20px;
            
        }
        #carousel img{height: 600px;}
        .blum{color: #ff671f;}
    </style>  


    
        
        ';


include 'inc-header-menu2.php';
include 'inc-left-side-menu-furnitura.php';
?> 
                <!-- main  -->
                <div class="col-md-8 col-md-8-non" role="main" id="main-page">
                   

                    <article    id="sistemy-napravlyayushchih-movento">
                      <section >
                        <div class="page-header"     >
                          <h1 itemprop="name">Системы направляющих MOVENTO</h1>
                          <h2 >Монтаж на замки – полное выдвижение</h2>
                        </div>
                        <div class="bs-callout bs-callout-warning cont" > 
                            
                            <div class="main-box clearfix"  id="movento-s-blumotion-760h-766h" >   
                               
                                <h2 >В этом фильме показана регулировка направляющих MOVENTO по высоте, ширине, наклону и глубине. Также представлена корректировка смещения продольной оси ящика на правой направляющей сзади.</h2>                            
                               
                                 
                                <div class="main-box-body clearfix">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video preload="auto" autoplay="true" loop="true" muted="muted" controls class="embed-responsive-item">
                                            <source src="./dist/video/movento/videoplayback.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>                               
                            </div>

                            <h2 > MOVENTO с BLUMOTION – 760H | 766H</h2>
                           

                            <div class="row" style="margin-bottom: 15px; margin-left: 15px;">
                                <div class=" ">
                                   
                                    <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                        <div class="carousel-inner">

                                            <div class="item active">
                                             <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="MOVENTO с BLUMOTION – 760H | 766H" data-image="./dist/images/Movento1.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento1.png"
                                                        data-src="./dist/images/Movento1.png"
                                                        class="center-block   img-rounded    bar "
                                                        data-toggle="modal"                                                                                                                    
                                                        alt="MOVENTO с BLUMOTION – 760H | 766H"
                                                        data-pdf=""                                                    
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Необходимое пространство" data-image="./dist/images/Movento2.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento2.png"
                                                        data-src="./dist/images/Movento2.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                          
                                                        alt="Необходимое пространство"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Информация для заказа" data-image="./dist/images/Movento3.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento3.png"
                                                        data-src="./dist/images/Movento3.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                          
                                                        alt="Информация для заказа"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Проектирование" data-image="./dist/images/Movento4.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento4.png" 
                                                        data-src="./dist/images/Movento4.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Проектирование"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Проектирование" data-image="./dist/images/Movento5.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento5.png" 
                                                        data-src="./dist/images/Movento5.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Проектирование"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Позиции крепления – направляющие к корпусу" data-image="./dist/images/Movento6.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento6.png" 
                                                        data-src="./dist/images/Movento6.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Позиции крепления – направляющие к корпусу"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Позиции крепления – направляющие к корпусу" data-image="./dist/images/Movento7.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento7.png" 
                                                        data-src="./dist/images/Movento7.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Позиции крепления – направляющие к корпусу"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Обработка ящиков" data-image="./dist/images/Movento8.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento8.png" 
                                                        data-src="./dist/images/Movento8.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Обработка ящиков"                                                        
                                                    >
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="Сборка корпуса" data-image="./dist/images/Movento9.png" data-target="#image-gallery">
                                                    <img  
                                                        src="./dist/images/Movento9.png" 
                                                        data-src="./dist/images/Movento9.png"
                                                        class="center-block   img-rounded     bar "
                                                        data-toggle="modal"                                                                                                                         
                                                        alt="Сборка корпуса"                                                        
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Элементы управления -->
                                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Предыдущий</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Следующий</span>
                                        </a>
                                    </div>

                                    
                                </div>
                                                           
                            </div> <!--/row/-->
                            
                          


                            <div class="row" style="margin-right: -15px;">
                                <div class=" col-xs-12 col-sm-12 col-md-12">
                                    <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                                            border: 1px solid rgb(221, 221, 221);
                                            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                                            border-radius: 4px;
                                            padding: 15px;
                                            ">
                                         <ul id="myTab" class="nav nav-tabs" style="margin-bottom: 15px;">
                                            <li class="active"><a href="#articuls" data-toggle="tab">Артикулы</a></li>
                                            <li ><a href="#harakteristiki" data-toggle="tab">Характеристики</a></li>
                                            
                                            <li ><a href="#instrukciya" data-toggle="tab">Инструкция</a></li>
                                            <!-- <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#dropdown3" data-toggle="tab">@fat</a></li>
                                                    <li><a href="#dropdown4" data-toggle="tab">@mdo</a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div class="tab-pane fade in active" id="articuls">
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-101 MOVENTO BLUMOTION S 40 кг 250 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H2500S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=250мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-103 MOVENTO BLUMOTION S 40 кг 300 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H3000S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=300мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-105 MOVENTO BLUMOTION S 40 кг 350 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H3500S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=350мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-107 MOVENTO BLUMOTION S 40 кг 400 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H4000S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=400мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-108 MOVENTO BLUMOTION S 40 кг 450 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H4500S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=450мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-110 MOVENTO BLUMOTION S 40 кг 500 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H5000S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=500мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-113 MOVENTO BLUMOTION S 40 кг 550 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H5500S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=550мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <h3 class="blum">5000502-04-114 MOVENTO BLUMOTION S 40 кг 600 мм</h3>
                                                    <p>Состав артикула:</p>            
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Список</th>
                                                            <th>К&nbsp;&#8209;&nbsp;во</th>
                                                            <th>Артикул</th>
                                                            <th>Цвет&nbsp;/&nbsp;материал</th>
                                                            <th>Описание</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg1.png" class="" alt="Направляющие" title=""></td>
                                                            <td>1</td>
                                                            <td>760H6000S</td>
                                                            <td>Оцинкованный</td>
                                                            <td>MOVENTO с BLUMOTION S, полное выдвижение деревянный ящик, 40 кг, НД=600мм, под замки, левая/правая</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="./dist/images/ArticulImg2.png" class="" alt="Замки" title=""></td>
                                                            <td>1</td>
                                                            <td>T51.7601</td>
                                                            <td>Оранжевый</td>
                                                            <td>Замок, левый/правый</td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="harakteristiki">
                                                <p>
                                                    <ul class="stat" style="margin-top: 0px;">
                                                        <li>Полное выдвижение скрытых направляющих</li>
                                                        <li>Со встроенным <b>BLUMOTION S</b> для мягкого и бесшумного закрывания, который адаптируется под соответствующую технологию движения, возможно использование <b>TIP-ON BLUMOTION</b> или <b>SERVO-DRIVE</b></li> 
                                                        <li>Синхронизированное плавное скольжение</li>
                                                        <li><b>BLUMATIC</b> – механизм самозакрывания</li>
                                                        <li>Регулировка по высоте, ширине и наклону без инструмента</li>
                                                        <li>Дополнительно регулировка по глубине без инструмента</li> 
                                                        <li>Компенсация погрешности по ширине и глубине</li> 
                                                        <!-- <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                    </ul>
                                                 </p>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="instrukciya">
                                                 <p>
                                                    <ul class="stat" style="margin-top: 0px;">
                                                        <li><a href="./dist/files/pdf/mov0001-md-047_md_dok_bau_$sml_$aof_$v1.pdf"  target="_blank"  > MOVENTO – инструкция по монтажу</a></li>
                                                        <li><a href="./dist/files/pdf/mov0002-td-100_td_dok_bau_$sru_$aof_$v1.pdf"  target="_blank"  > Новинка BLUMOTION S 3 в 1</a></li> 
                                                        <li><a href="./dist/files/pdf/mov0039-ma-569-0_ma_dok_bau_$sml_$aof_$v4.pdf"  target="_blank"  > Боковой стабилизатор для MOVENTO</a></li>                                                        
                                                        <!-- <li>При выборе петли <b>INSERTA</b> петля крепится без инструмента</li>     -->                                                                               
                                                    </ul>
                                                 </p>
                                            
                                            
                                            </div>
                                            <!-- <div class="tab-pane fade" id="dropdown3">
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




  
                         
                            
                        </div> <!--/bs-callout bs-callout-warning cont/-->
                    </section> 
                </article>
                    
                    

                    
                </div> <!-- main  -->
                <!-- боковое меню блоки дверные начало -->
                <div class="col-md-2" id="navmain-izdeliya">
                    <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >
                        <ul class="nav bs-sidenav">
                            
                            <li><a href="#sistemy-napravlyayushchih-movento">Системы направляющих MOVENTO</a>
                                <ul class="nav">
                                
                                    <li><a href="#movento-s-blumotion-760h-766h">&#9999;&nbsp;MOVENTO с BLUMOTION – 760H | 766H</a>
                                    </li>
                                     <!-- <li><a href="furnitura-dlya-mebeli-petlya-clip-top-nakladnaya.php#5000502-01-101-petlya-nakladnaya">&#9999;&nbsp;5000502-01-101 петля накладная</a>
                                  </li> -->
                                <!--     <li><a href="#5000502-01-102-petlya-polunakladnaya">&#9999;&nbsp;5000502-01-102 петля полунакладная</a>
                                    </li>
                                     <li><a  href="#5000502-01-103-petlya-vkladnaya-falshfasadnaya">&#9999;&nbsp;5000502-01-103 петля вкладная фальшфасадная</a>
                                    </li>
                                    <li><a  href="#5000502-01-104-petlya-nakladnaya-nulevogo-vhozhdeniya">&#9999;&nbsp;5000502-01-104 петля накладная нулевого вхождения</a>
                                    </li>
                                    <li><a  href="#5000502-01-110-petlya-vkladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-110 петля вкладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-111-petlya-nakladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-111 петля накладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-112-petlya-polunakladnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-112 петля полунакладная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-113-petlya-vkladnaya-falshfasadnaya-bez-pruzhiny">&#9999;&nbsp;5000502-01-113 петля вкладная фальшфасадная без пружины</a>
                                    </li>
                                    <li><a  href="#5000502-01-114-petlya-nakladnaya-nulevogo-vhozhdeniya-bez-pruzhiny">&#9999;&nbsp;5000502-01-114 петля накладная нулевого вхождения без пружины</a>
                                    </li>
                                    <li><a  href="#sistemy-napravlyayushchih-movento-podbor-po-vesu">&#9999;&nbsp;ПЕТЛИ для ФАСАДОВ (подбор по весу)</a>
                                    </li>                                     -->
                                </ul>
                            </li>
                           <!--  <li>
                                <a href="#mehanizmy-razdvizheniya-dlya-fasadov-Cinetto-PS23">МЕХАНИЗМЫ РАЗДВИЖЕНИЯ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-02-110-sistema-razdvizheniya-i-skladyvaniya-fasadov-Cinetto-PS23">&#9999;&nbsp;5000502-02-110 система раздвижения и складывания фасадов Cinetto PS23</a>
                                    </li>                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#mehanizmy-podemnye-dlya-fasadov">МЕХАНИЗМЫ ПОДЪЕМНЫЕ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#mehanizmy-podemny1">&#9999;&nbsp;mehanizmy-podemny1</a>
                                    </li>                                   
                                </ul>
                            </li>
                           
                            <li>
                                <a href="#mekhanizmy-vydvizheniya-dlya-yashchikov">МЕХАНИЗМЫ ВЫДВИЖЕНИЯ для ЯЩИКОВ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-04-101-movento-blumotion-napravlyayushchie-250">&#9999;&nbsp;5000502-04-101 MOVENTO BLUMOTION 40 КГ 250 мм</a>
                                    </li> 
                                    <li><a href="#5000502-04-103-movento-blumotion-napravlyayushchie-300">&#9999;&nbsp;5000502-04-103 MOVENTO BLUMOTION 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-105-movento-blumotion-napravlyayushchie-350">&#9999;&nbsp;5000502-04-105 MOVENTO BLUMOTION 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-107-movento-blumotion-napravlyayushchie-400">&#9999;&nbsp;5000502-04-107 MOVENTO BLUMOTION 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-109-movento-blumotion-napravlyayushchie-450">&#9999;&nbsp;5000502-04-108 MOVENTO BLUMOTION 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-111-movento-blumotion-napravlyayushchie-500">&#9999;&nbsp;5000502-04-110 MOVENTO BLUMOTION 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-113-movento-blumotion-napravlyayushchie-550">&#9999;&nbsp;5000502-04-113 MOVENTO BLUMOTION 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-114-movento-blumotion-napravlyayushchie-600">&#9999;&nbsp;5000502-04-114 MOVENTO BLUMOTION 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-121-movento-tipon-napravlyayushchie-250">&#9999;&nbsp;5000502-04-121 MOVENTO TIPON 40 КГ 250 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-125-movento-tipon-napravlyayushchie-300">&#9999;&nbsp;5000502-04-125 MOVENTO TIPON 40 КГ 300 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-128-movento-tipon-napravlyayushchie-350">&#9999;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 350 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-133-movento-tipon-napravlyayushchie-400">&#9999;&nbsp;5000502-04-128 MOVENTO TIPON 40 КГ 400 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-139-movento-tipon-napravlyayushchie-450">&#9999;&nbsp;5000502-04-139 MOVENTO TIPON 40 КГ 450 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-141-movento-tipon-napravlyayushchie-500">&#9999;&nbsp;5000502-04-141 MOVENTO TIPON 40 КГ 500 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-143-movento-tipon-napravlyayushchie-550">&#9999;&nbsp;5000502-04-143 MOVENTO TIPON 40 КГ 550 мм</a>
                                    </li>
                                    <li><a href="#5000502-04-145-movento-tipon-napravlyayushchie-600">&#9999;&nbsp;5000502-04-145 MOVENTO TIPON 40 КГ 600 мм</a>
                                    </li>
                                    <li><a href="#tekhnicheskaya-informaciya-po-napravlyayushchim">&#9999;&nbsp;Техническая информация по направляющим</a>
                                    </li>                                  
                                </ul>
                            </li>

                             <li>
                                <a href="#opory">ОПОРЫ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-05-501-opora-reguliruemaya-universalnaya">&#9999;&nbsp;5000502-05-501 опора регулируемая универсальная</a>
                                    </li>
                                    <li><a href="#5000502-05-502-opora-reguliruemaya-s-podderzhkoy-bokoviny">&#9999;&nbsp;5000502-05-502 опора регулируемая с поддержкой боковины</a>
                                    </li>
                                    <li><a href="#5000502-05-511-opora-reguliruemaya-malaya">&#9999;&nbsp;5000502-05-511 опора регулируемая малая</a>
                                    </li>
                                    <li><a href="#5000502-05-512-opora-reguliruemaya-malaya-s-cokolnoy-klipsoy">&#9999;&nbsp;5000502-05-512 опора регулируемая малая с цокольной клипсой</a>
                                    </li >                                  
                                </ul>
                            </li>

                            <li>
                                <a href="#zashchelki-mebelnye">ЗАЩЕЛКИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-06-100-zashchelka-tipon" >&#9999;&nbsp;5000502-06-100 защелка - TIPON</a>
                                    </li>                                    
                                    <li><a href="#5000502-06-106-zashchelka-mebelnaya-magnitnaya">&#9999;&nbsp;5000502-06-106 защелка мебельная магнитная</a>
                                    </li>                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#styazhki">СТЯЖКИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-701 стяжка эксцентриковая односторонняя<br>для плит 16 мм</a>
                                    </li>                                    
                                    <li><a href="#5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-702 стяжка эксцентриковая двухсторонняя<br>для плит 16 мм</a>
                                    </li> 
                                    <li><a href="#5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">&#9999;&nbsp;5000502-07-703 стяжка эксцентриковая односторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">&#9999;&nbsp;5000502-07-704 стяжка эксцентриковая двухсторонняя<br>для плит 24 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">&#9999;&nbsp;5000502-07-707 стяжка эксцентриковая в металлическом корпусе<br>для плит 16 мм</a>
                                    </li>
                                    <li><a href="#5000502-07-750-konfirmat-70h50">&#9999;&nbsp;5000502-07-750 конфирмат 7.0Х50</a>
                                    </li>
                                    <li><a href="#5000502-07-752-konfirmat-70h70">&#9999;&nbsp;5000502-07-752 конфирмат 7.0Х70</a>
                                    </li>                                                                   
                                </ul>
                            </li>

                             <li>
                                <a href="#polkoderzhateli">ПОЛКОДЕРЖАТЕЛИ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-08-101-pk2-polkoderzhatel-s-fiksaciey-polki">&#9999;&nbsp;5000502-08-101 PK2 полкодержатель с фиксацией полки</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#shtangi-mebelnye">ШТАНГИ МЕБЕЛЬНЫЕ</a>
                                <ul class="nav">
                                    <li><a href="#5000502-10-300-shtanga-kruglaya-dlya-veshala">&#9999;&nbsp;5000502-10-300 штанга круглая для вешала</a>
                                    </li>
                                    <li><a href="#5000502-10-301-shtanga-kruglaya-s-prohodnym-derzhatelem-dlya-veshala">&#9999;&nbsp;5000502-10-301 штанга круглая с проходным держателем</a>
                                    </li>                                                                 
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="#pantografy"> ПАНТОГРАФЫ</a>
                                <ul class="nav">
                                    <li><a href="#SUPERLIFT">&#9999;&nbsp;Пантограф 75-115 см, регул. нагрузки 14-20 кг</a>
                                    </li>
                                    <li><a href="furnitura-dlya-mebeli-pantograf2.php#LIFT800">&#9999;&nbsp;Пантограф с креплением к стене, 75-115 см, нагр.10 кг</a>
                                    </li>                                                                 
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="#ruchki">РУЧКИ</a>
                                <ul class="nav">
                                    <li><a href="#ruchka1">&#9999;&nbsp;ruchka1</a>
                                    </li>
                                    <li><a href="#ruchka2">&#9999;&nbsp;ruchka2</a>
                                    </li>                                                                 
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-razdvizhnyh-stolov">МЕХАНИЗМЫ для РАЗДВИЖНЫХ СТОЛОВ</a>
                                <ul class="nav">
                                    <li><a href="#mekhanizmy1">&#9999;&nbsp;mekhanizmy1</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                             <li>
                                <a href="#natyazhiteli-dlya-fasadov">НАТЯЖИТЕЛИ для ФАСАДОВ</a>
                                <ul class="nav">
                                    <li><a href="#pivot-tn-103-2329-02">&#9999;&nbsp;Pivot TN 103.2329.02</a>
                                    </li>                                                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#mekhanizmy-dlya-obuvnic">МЕХАНИЗМЫ для ОБУВНИЦ</a>
                                <ul class="nav">
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-560-1000-mm-chernyy-892-11-300">&#9999;&nbsp;Раздвижной держатель для обуви 560-1000 мм черный </a>
                                    </li>
                                    <li><a href="#razdvizhnoy-derzhatel-dlya-obuvi-460-750-mm-stal-hromirovannyy-892-12-906">&#9999;&nbsp;Раздвижной держатель для обуви 460-750 мм хромированный </a>
                                    </li>                                                                 
                                </ul>
                            </li> -->
                                                    
                        </ul>
                    </div>
                </div><!-- боковое меню блоки дверные конец -->

                
              
    
<?php include 'inc-footer2.php'; ?>