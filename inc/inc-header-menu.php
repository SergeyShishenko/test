<?php echo'
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">            
            <div class="navbar navbar-inverse " role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">500.СТП</a >                    
                </div>                
                <div class="navbar-collapse collapse top-menu">
                    <ul class="nav navbar-nav navbar-link " id="navmain">
                        <li '.$detaliClass.'>
                            <a href="detali-gallery-profili.php">ДЕТАЛИ</a>
                        </li>
                        <li '.$izdeliyaClass.'>
                            <a href="izdeliya-bloki-dvernye.php">ИЗДЕЛИЯ</a>
                        </li>
                        <li '.$shablonyClass.'>
                            <a href="shablony-dokumentov-titulnyy-kd.php" class="dblstr-menu">ШАБЛОНЫ <br>ДОКУМЕНТОВ</a>
                        </li>
                        <li '.$yrishablonyClass.'>                            
                            <a href="yuridicheskie-dokumenty.php" class="dblstr-menu">ЮРИДИЧЕСКИЕ <br>ДОКУМЕНТЫ</a >                           
                        </li>
                        <li '.$ustanovochnyeClass.' class=" disabled">                            
                            <a href="#" class="dblstr-menu">УСТАНОВОЧНЫЕ <br>ДОКУМЕНТЫ</a >                           
                        </li>
                        <li '.$metodichkiClass.'>
                            <a href="metodichki-SofiaPro3.php">МЕТОДИЧКИ</a>
                        </li>
                        <li '.$furnituraClass.'>
                            <a href="furnitura-dlya-dvernyh-blokov.php">ФУРНИТУРА</a>
                        </li>
                        <li '.$materialyClass.'>
                            <a href="materialy-steklo-zerkalo-vitrazh.php">МАТЕРИАЛЫ</a>
                        </li>
                        <li '.$literaturaClass.' class=" disabled">
                        <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                        </li>
                        
                        <!--<li  id="other">
                            <a href="#" title="ЕЩЁ">&#10010;</a >
                          
                             <span class="caret3"></span> 
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li '.$literaturaClass.' class=" disabled">
                                <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                                </li>
                                <li><a href="furnitura-video.php" >Видео</a>
                                </li> 
                                                                                                                                                     
                            </ul> 
                        </li>-->
                    </ul>  
                </div>
                <div class="navbar-form navbar-right " id="search">
                    <div class="form-group">                                
                        
                        <input type="text" class="form-control who zbz-input-clearable" placeholder="Поиск">   
                         <span class="glyphicon glyphicon-search zbz" style="visibility: visible;margin-right: 20px;margin-left: -25px;"></span>                           
                    </div>                            
                    <ul class="search_result" style="display: none;"></ul>
                </div>            
            </div>
        </div>
    </header>
    <!-- .modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  style="margin-top: -2px !important;">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                
            </div>
            <div class="modal-body full-screen">
                    <!-- <p id="content"></p> -->
                <div id="im" data-dismiss="modal">
                    <!-- <img src="./dist/images/mdf-nakladka-051-dsh.png" alt=""class="img-thumbnail " > -->
                </div>
            </div>
            <!-- <div class="modal-footer">-->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->
                <!-- <a href="img.jpg" type="button" class="btn btn-primary"download="img.jpg">Save</a> -->
                <!-- </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal --> 
';
include 'inc/inc-personal-profile.php';
include 'inc/inc-header-send-modal.php';
include 'inc/inc-func.php';
?>

