<?php
// переменные на странице 
// $item_profili_Class = 'active';
// $item_reznye_Class = '';
// $item_kamni_Class = '';
// $item_rezby_Class = '';
// $item_tokarka_Class = '';
// $item_frezy_Class = '';
// $item_pazy_Class = '';
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
                            <a href="detali-profili.php" class="list-group-item '.$item_profili_Class.'">Профили гладкие</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="#profili-nakladki">Накладки</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#profili-nakladki-50" >МДФ накладка №050/ДШ</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#profili-nakladki-51" >МДФ накладка №051/ДШ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="#profili-nakladki-52" >МДФ накладка №052/ДШ</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="#profili-nakladki-53" >МДФ накладка №053/ДШ</a>
                                        </li>                                                                                
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#shtapiki">Штапики</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#polotna-bez-falca">Полотна без фальца</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#polotna-s-falcem" >Полотна с фальцем</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#dlya-karnizov" >Для карнизов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#razdvizhnye-polotna-po-stene" >Полотна без складывания — раздвижение по стене</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#razdvizhnye-polotna-v-penal">Полотна без складывания — раздвижение в пенал</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#razdvizhnye-polotna-v-proeme">Полотна без складывания — раздвижение в проеме</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#dlya-obramleniya" >Для обрамления</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#pilyastry" >Пилястры</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>                                           
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#dvernye-korobki">Дверные коробки</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#plintusy">Плинтусы</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#drugie">Другие</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#poruchni-lestnicy">Поручни, лестницы</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#pod-rotangovuyu-setku">Под ротанговую сетку</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#raskladki">Раскладки</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#dlya-karkasov">Для каркасов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#dlya-stolov">Для столов</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#" >...</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="#">...</a>
                                        </li>                                        
                                    </ul>
                                </li>
                                                                    
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="detali-profili-reznye.php" class="list-group-item '.$item_reznye_Class.'">Профили резные</a>
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
                            <a href="detali-kamni.php" class="list-group-item '.$item_kamni_Class.'">Камни</a>
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
                                <a href="detali-rezby.php" class="list-group-item '.$item_rezby_Class.'">Резьбы</a>
                                <ul class="list-group sub_menu">
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#rozetka">Розетка</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>                                          
                                        </ul>
                                    </li>
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#kapitel">Капитель</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>                                       
                                        </ul>
                                    </li>
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#konsol">Консоль</a>
                                        <ul class="list-group sub_menu2">
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>
                                            <li><a class="list-group-item sub" href="#">...</a>
                                            </li>                                       
                                        </ul>
                                    </li>  
                                    <li class="menu2"><a class="list-group-item sub" href="detali-rezby.php#barelef">Барельеф</a>
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
                            <a href="detali-tokarka.php" class="list-group-item '.$item_tokarka_Class.'">Токарка</a>
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
                            <a href="detali-frezy.php" class="list-group-item '.$item_frezy_Class.'">Фрезы</a>
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
                            <a href="detali-pazy.php" class="list-group-item '.$item_pazy_Class.'">Пазы</a>
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
                                                
                    </ul>
                </div>
            </div>                
            <!-- левое боковое меню конец -->
';?>
              