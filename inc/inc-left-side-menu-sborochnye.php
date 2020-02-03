<?php
// inc/inc-left-side-menu-sborochnye.php
// подключение inc-файлов массивами данных 
foreach (glob("inc/goup/inc-goup-menu-sborochnye*.php") as $filename) { include $filename ;}
?>
<article itemscope="" itemtype="http://schema.org/WebPage">   
    <div class="container bs-docs-container" >
        <div class="row">
            <!-- левое боковое меню начало -->
            <div class="col-md-2">
                <div class="list-group  bs-sidebar hidden-print affix vertical-menu nav bs-sidenav " id="navsub">
                    <ul class="list-group">
                    <!-- menu -->
                    <li class="menu">                                
                        <a href="detali-gallery-profili.php" class="list-group-item <?php echo $item_assembly_karnizy_Class;?>">Карнизы</a>
                        
                    </li>
                        <!-- menu -->
                        <li class="menu  disabled">                                
                            <a href="detali-profili.php" class="list-group-item   <?php echo $item_assembly_plintusy_Class;?>">Плинтусы</a>
                           
                        </li>
                       
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-profili-reznye.php" class="list-group-item <?php echo $item_assembly_nalichniki_Class;?>">Наличники</a>
                            
                        </li>                       
                        <!-- menu -->
                        <li class="menu disabled">
                            <a href="detali-profili-reznye.php" class="list-group-item <?php echo $item_assembly_poluperila_Class;?>">Полуперила</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-konstrukcii">КОНСТРУКЦИИ МЕБЕЛИ КОРПУСНОЙ ТИПОВОЙ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                      
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady">ШКАФЫ С РАСПАШНЫМИ ФАСАДАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-nakladnye" >Накладные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-vkladnye">Вкладные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-raspashnye-fasady-otkidnye">Откидные (секретерные)</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady">ШКАФЫ С РАЗДВИЖНЫМИ ФАСАДАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady-kupe">Фасады купе</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-shkafy-razdvizhnye-fasady-komplanarnye">Фасады компланарные</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stellazhi">ШКАФЫ БЕЗ ФАСАДОВ (СТЕЛЛАЖИ)</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stoly">СТОЛЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#sborochnye-shemy-mebel-korpusnaya">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                         
                                    </ul>
                                </li>                                   
                            </ul>
                        </li>                       
                                                
                    </ul>
                </div>
            </div>                
            <!-- левое боковое меню конец -->             