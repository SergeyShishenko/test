<?php
// переменные на странице 
// $item_bloki_dvernye_Class = 'active';
// $item_mebel_korpusnaya_Class = '';
// $item_paneli_stenovye_Class = '';
// $item_karnizy_i_frizy_Class = '';
// $item_plintusy_i_moldingi_Class = '';
// $item_ekrany_Class = '';
// $item_pilyastry_Class = '';
// $item_potolki_Class = '';
// $item_lestnicy_Class = '';
// $item_standartnye_uzly_Class = '';


?>
<?php echo'
<article itemscope="" itemtype="http://schema.org/WebPage">   
<div class="container bs-docs-container" >
    <div class="row">                
         <!-- левое боковое меню начало -->
         <div class="col-md-2">
            <div class="list-group  bs-sidebar hidden-print affix vertical-menu nav bs-sidenav " id="navsub">
                <ul class="list-group">
                    <!-- menu -->
                    <li class="menu">                                
                        <a href="izdeliya-bloki-dvernye.php" class="list-group-item '.$item_bloki_dvernye_Class.'">БЛОКИ ДВЕРНЫЕ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2">
                                <a  class="list-group-item sub"  href="izdeliya-bloki-dvernye.php#dveri-konstrukcii">КОНСТРУКЦИЯ ДВЕРНЫХ БЛОКОВ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#polotno-bloka-dvernogo-gluhoe-pco" >Полотно блока дверного глухое ПЦО</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#polotno-bloka-dvernogo-so-steklom-pco" >Полотно блока дверного со стеклом ПЦО</a>
                                    </li>  
                                    <li><a class="list-group-item sub" href="#polotno-bloka-dvernogo-so-steklomfacet-pco" >Полотно блока дверного со стеклом(фацет) ПЦО</a>
                                    </li> 
                                    <li><a class="list-group-item sub" href="#polotno-bloka-dvernogo-s-zerkalom-pco" >Полотно блока дверного с зеркалом ПЦО</a>
                                    </li> 
                                    <li><a class="list-group-item sub" href="#polotno-bloka-dvernogo-s-zerkalomfacet-pco" >Полотно блока дверного с зеркалом(фацет) ПЦО</a>
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
                        <a href="izdeliya-mebel-korpusnaya.php" class="list-group-item '.$item_mebel_korpusnaya_Class.'">МЕБЕЛЬ КОРПУСНАЯ</a>
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
                        <a href="izdeliya-paneli-stenovye.php" class="list-group-item '.$item_paneli_stenovye_Class.'">ПАНЕЛИ СТЕНОВЫЕ</a>
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
                    <!-- menu -->
                    <li class="menu">
                        <a href="izdeliya-karnizy-i-frizy.php" class="list-group-item '.$item_karnizy_i_frizy_Class.'">КАРНИЗЫ И ФРИЗЫ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-karnizy-i-frizy.php#izdeliya-karnizy-i-frizy-konstrukcii">КОНСТРУКЦИИ КАРНИЗОВ И ФРИЗОВ ТИПОВЫХ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                         
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-karnizy-i-frizy.php#sborochnye-shemy-karnizy-i-frizy">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
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
                        <a href="izdeliya-plintusy-i-moldingi.php" class="list-group-item '.$item_plintusy_i_moldingi_Class.'">ПЛИНТУСЫ И МОЛДИНГИ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-plintusy-i-moldingi.php#plintusy-i-moldingi-konstrukcii">КОНСТРУКЦИИ ПЛИНТУСОВ И МОЛДИНГОВ ТИПОВЫХ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                        
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-plintusy-i-moldingi.php#sborochnye-shemy-plintusy-i-moldingi">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
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
                        <a href="izdeliya-ekrany-radiatorov.php" class="list-group-item  '.$item_ekrany_Class.'">ЭКРАНЫ РАДИАТОРОВ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-ekrany-radiatorov.php#ekrany-radiatorov-konstrukcii">КОНСТРУКЦИИ ЭКРАНОВ РАДИАТОРОВ ТИПОВЫХ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                       
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-ekrany-radiatorov.php#sborochnye-shemy-ekrany-radiatorov">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
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
                        <a href="izdeliya-pilyastry.php" class="list-group-item '.$item_pilyastry_Class.'">ПИЛЯСТРЫ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-pilyastry.php#pilyastry-konstrukcii">КОНСТРУКЦИИ ПИЛЯСТР ТИПОВЫХ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                           
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-pilyastry.php#sborochnye-shemy-pilyastry">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
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
                        <a href="izdeliya-potolki.php" class="list-group-item  '.$item_potolki_Class.'">ПОТОЛКИ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-potolki.php#potolki-kessonirovannye">ПОТОЛКИ КЕССОНИРОВАННЫЕ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                            
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-potolki.php#sborochnye-shemy-potolki">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub"href="#"> ...</a>
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
                        <a href="izdeliya-lestnicy.php" class="list-group-item  '.$item_lestnicy_Class.'">ЛЕСТНИЦЫ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-lestnicy.php#">КОНСТРУКЦИИ ЛЕСТНИЦ ТИПОВЫХ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="#">...</a>
                                    </li>                                            
                                </ul>
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-lestnicy.php#">СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ</a>
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub"href="#"> ...</a>
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
                        <a href="izdeliya-standartnye-uzly.php" class="list-group-item  '.$item_standartnye_uzly_Class.'">СТАНДАРТНЫЕ УЗЛЫ</a>
                        <ul class="list-group sub_menu">
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-ekrany" >УЗЛЫ ЭКРАНЫ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-700">Узел № Э1/700</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-600">Узел № Э1/600</a>
                                    </li>                                                                               
                                </ul>                             
                            </li>
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-pilyastry" >УЗЛЫ ПИЛЯСТРЫ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-1-h1">Узел № Пл1/1/Х_1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-1-h2">Узел № Пл1/1/Х_2</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-1-h3">Узел № Пл1/1/Х_3</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-1-h4">Узел № Пл1/1/Х_4</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-2-h1">Узел № Пл1/2/Х_1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-2-h2">Узел № Пл1/2/Х_2</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-2-h3">Узел № Пл1/2/Х_3</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl1-2-h4">Узел № Пл1/2/Х_4</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl2-h">Узел № Пл2/Х</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl3-1-1">Узел № Пл3/1_1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl3-1-2">Узел № Пл3/1_2</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl3-2-1">Узел № Пл3/2_1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl3-2-2">Узел № Пл3/2_2</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl4-1">Узел № Пл4_1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pl4-2">Узел № Пл4_2</a>
                                    </li>
                                                                                                                   
                                </ul>                             
                            </li> 
                            
                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-shponki" >УЗЛЫ ШПОНКИ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--shp1-10-16-24">Узел № Шп1/24</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--shp1-10-16-24">Узел № Шп1/16</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--shp1-10-16-24">Узел № Шп1/10</a>
                                    </li>                                                                         
                                </ul>                             
                            </li>

                            <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-polki" >УЗЛЫ ПОЛКИ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8">Узел № П/4</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8">Узел № П/6</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8">Узел № П/8</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8perf">Узел № П/4/перф.</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8perf">Узел № П/6/перф.</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--p-4-6-8perf">Узел № П/8/перф.</a>
                                    </li>                                                                          
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-shtangoderzhateli" >УЗЛЫ ШТАНГОДЕРЖАТЕЛИ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--shd1-shd2">Узел № ШД1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--shd1-shd2">Узел № ШД2</a>
                                    </li>                                                                                                            
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-ekscentrikovye-styazhki-evrovinty" >УЗЛЫ ЭКСЦЕНТРИКОВЫЕ СТЯЖКИ, ЕВРОВИНТЫ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел № Э1/16</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел № Э1/24</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел № Э2/16</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел № Э2/24</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел №Евр/16</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--e1-evr">Узел №Евр/24</a>
                                    </li>                                                                          
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#paneli-poyasa" >ПАНЕЛИ ПОЯСА</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--polup-15-30gr">Узел № Полуп/15*30гр</a>
                                    </li>
                                                                                                             
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-ustanovki-ruchki" >УЗЛЫ УСТАНОВКИ РУЧКИ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--ruch-1">Узел № Руч/1</a>
                                    </li>
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--ruch-2">Узел № Руч/2</a>
                                    </li>
                                                                                                             
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzly-podlozhka-montazhnaya" >УЗЛЫ ПОДЛОЖКА МОНТАЖНАЯ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pm-1">Узел № ПМ/1</a>
                                    </li>
                                                                                                            
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel-po-prisadke-paneli-poyasa-pod-samorez" >УЗЕЛ ПО ПРИСАДКЕ ПАНЕЛИ ПОЯСА ПОД САМОРЕЗ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--ppp-1">Узел № ППП/1</a>
                                    </li>
                                                                                                             
                                </ul>                             
                           </li>

                           <li class="menu2"><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#paz-nizhniy-razdvizhnaya-dver" >ПАЗ НИЖНИЙ РАЗДВИЖНАЯ ДВЕРЬ</a>  
                                <ul class="list-group sub_menu2">
                                    <li><a class="list-group-item sub" href="izdeliya-standartnye-uzly.php#uzel--pnrd-1">Узел № ПНРД/1</a>
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
              