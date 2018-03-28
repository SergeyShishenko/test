<?php
// переменные на странице 
// $item_steklo_zerkalo_Class = '';
// $item_vitrazh_Class = '';
// $item_metall_Class = '';
// $item_tkan_kozha_Class = 'active';
?>
<?php echo'
    <article itemscope="" itemtype="http://schema.org/WebPage">   
    <div class="container bs-docs-container">
            <div class="row">
            <!-- левое боковое меню начало -->
            <div class="col-md-2">
                <div class="list-group  bs-sidebar hidden-print affix vertical-menu nav bs-sidenav " id="navsub">
                    <ul class="list-group">
                        <!-- menu -->
                        <li class="menu">                                
                            <a href="materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php" class="list-group-item '.$item_steklo_zerkalo_Class.'">СТЕКЛО, ЗЕРКАЛО</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="#vidy-obrabotki-kromki-stekla-zerkala">Виды обработки кромки стекла, зеркала</a>
                                    <!-- <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                       
                                    </ul> -->
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#zerkala-i-stekla-tablica-standartnyh-obrazcov">Зеркала и стекла - таблица стандартных образцов</a>
                                    <!-- <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#polotna-bez-falca">Полотна без фальца</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#polotna-s-falcem" >Полотна с фальцем</a>
                                        </li>                                         
                                    </ul> -->
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna" >ДВЕРНЫЕ БЛОКИ С РАЗДВИЖНЫМИ ПОЛОТНАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-po-stene" >Полотна без складывания — раздвижение по стене</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-v-penal">Полотна без складывания — раздвижение в пенал</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-v-proeme">Полотна без складывания — раздвижение в проеме</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#mayatnikovye-polotna" >ДВЕРНЫЕ БЛОКИ С МАЯТНИКОВЫМИ (БАРНЫМИ) ПОЛОТНАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#portaly">ДВЕРНЫЕ БЛОКИ БЕЗ ПОЛОТНН (ПОРТАЛЫ)</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#sborochnye-shemy-polotna">СБОРОЧНО МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                       
                                    </ul>
                                </li>                                    
                            </ul>
                        </li>                           
                        <!-- menu -->
                        <li class="menu">                                
                            <a href="materialy-ne-derevyannye-vitrazh.php" class="list-group-item '.$item_vitrazh_Class.'">ВИТРАЖ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="izdeliya-bloki-dvernye.php#dveri-konstrukcii">КОНСТРУКЦИЯ ДВЕРНЫХ БЛОКОВ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                       
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#polotna">ДВЕРНЫЕ БЛОКИ С РАСПАШНЫМИ ПОЛОТНАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#polotna-bez-falca">Полотна без фальца</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#polotna-s-falcem" >Полотна с фальцем</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna" >ДВЕРНЫЕ БЛОКИ С РАЗДВИЖНЫМИ ПОЛОТНАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-po-stene" >Полотна без складывания — раздвижение по стене</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-v-penal">Полотна без складывания — раздвижение в пенал</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#razdvizhnye-polotna-v-proeme">Полотна без складывания — раздвижение в проеме</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#mayatnikovye-polotna" >ДВЕРНЫЕ БЛОКИ С МАЯТНИКОВЫМИ (БАРНЫМИ) ПОЛОТНАМИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#portaly">ДВЕРНЫЕ БЛОКИ БЕЗ ПОЛОТНН (ПОРТАЛЫ)</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-bloki-dvernye.php#sborochnye-shemy-polotna">СБОРОЧНО МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                       
                                    </ul>
                                </li>                                    
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="materialy-ne-derevyannye-metall.php" class="list-group-item '.$item_metall_Class.'">МЕТАЛЛ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-konstrukcii">КОНСТРУКЦИИ МЕБЕЛИ КОРПУСНОЙ ТИПОВОЙ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
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
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stellazhi">ШКАФЫ БЕЗ ФАСАДОВ (СТЕЛЛАЖИ)</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#mebel-korpusnaya-stoly">СТОЛЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-mebel-korpusnaya.php#sborochnye-shemy-mebel-korpusnaya">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                         
                                    </ul>
                                </li>                                   
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="materialy-ne-derevyannye-tkan-kozha.php" class="list-group-item '.$item_tkan_kozha_Class.'">ТКАНЬ, КОЖА</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-paneli-stenovye.php#paneli-stenovye-konstrukcii">КОНСТРУКЦИИ ПАНЕЛЕЙ СТЕНОВЫХ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                          
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="izdeliya-paneli-stenovye.php#sborochnye-shemy-paneli-stenovye">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                       
                                    </ul>
                                </li>                    
                            </ul>
                        </li>                                                      
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              