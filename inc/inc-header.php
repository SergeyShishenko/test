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
            <?php $cart ? include 'inc/inc-cart.php' : ''?>                   
            </div>                
            <div class="navbar-collapse collapse top-menu">
                <ul class="nav navbar-nav navbar-link " id="navmain">
                    <li <?php echo $detaliClass;?> >
                        <a href="detali-gallery-profili.php">ДЕТАЛИ</a>
                    </li>

                    <li <?php echo $assemblyUnitClass;?> class=" ">
                    <!-- <li 
                    <?php // echo $assemblyUnitClass;?> class=" disabled"> -->
                    <a href="sborochnye-edinicy.php"  class="dblstr-menu">СБОРОЧНЫЕ <br>ЕДИНИЦЫ</a>
                    </li>
                    
                    <li <?php echo $izdeliyaClass;?> >
                        <a href="izdeliya-bloki-dvernye.php">ИЗДЕЛИЯ</a>
                    </li>
                    <li <?php echo $shablonyClass;?> >
                        <a href="shablony-dokumentov-titulnyy-kd.php" class="dblstr-menu">ШАБЛОНЫ <br>ДОКУМЕНТОВ</a>
                    </li>
                    <li <?php echo $yrishablonyClass;?> >                           
                        <a href="yuridicheskie-dokumenty.php" class="dblstr-menu">ЮРИДИЧЕСКИЕ <br>ДОКУМЕНТЫ</a >                           
                    </li>
                    <li <?php echo $ustanovochnyeClass;?> class=" disabled">                            
                        <a href="#" class="dblstr-menu">УСТАНОВОЧНЫЕ <br>ДОКУМЕНТЫ</a >                           
                    </li>
                    <li <?php echo $metodichkiClass;?>>
                        <a href="metodichki-SofiaPro3.php">МЕТОДИЧКИ</a>
                    </li>
                    <li <?php echo $furnituraClass;?>>
                        <a href="furnitura-dlya-dvernyh-blokov.php">ФУРНИТУРА</a>
                    </li>
                    <li <?php echo $materialyClass;?>>
                        <a href="materialy-steklo-zerkalo-vitrazh.php">МАТЕРИАЛЫ</a>
                    </li>
                    <!-- <li
                     <?php // echo $literaturaClass;?> class=" disabled">
                    <a href="literatura-gost.php">ЛИТЕРАТУРА</a>
                    </li> -->
                    
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
                    
                    <input type="text" class="form-control who zbz-input-clearable"  autocomplete="off" placeholder="Поиск" id="user-search" onfocus="this.removeAttribute('readonly');" readonly >   
                        <span class="glyphicon glyphicon-search zbz" style="visibility: visible;margin-right: 20px;margin-left: -25px;"></span>                           
                </div>                            
                <ul class="search_result" style="display: none;"></ul>
            </div>            
        </div>
    </div>
</header>
