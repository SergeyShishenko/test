<?php
// переменные на странице 
// $item_titulniki_Class = '';
// $item_shtampy_chertezhey_Class = '';
// $item_specifikacii_Class = '';
// $item_pokupnye_izdeliya_Class = 'active';
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
                            <a href="shablony-dokumentov-titulniki.php" class="list-group-item  '.$item_titulniki_Class.'">ЛИСТЫ ТИТУЛЬНЫЕ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
                            <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="shablony-dokumentov-titulniki.php#listy-titulnye-dizayn-proekta">Листы титульные дизайн-проекта</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#list-titulnyy-dp">5000301_01_001 лист титульный ДП</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#pasport-izdeliy-zakaza-dp">паспорт изделий заказа ДП</a>                                        
                                        </li> 
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#reestr-razdelov-dp">реестр разделов ДП</a>                                        
                                        </li>                                      
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#listy-titulnye-konstruktorskoy-dokumentacii">Листы титульные конструкторской документации</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#list-titulnyy-kd">5000301_02_000 лист титульный КД</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#pasport-izdeliy-zakaza-kd">паспорт изделий заказа КД</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#reestr-razdelov-kd">реестр разделов КД</a>
                                        </li>                                         
                                    </ul>
                                </li>
                                                                 
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-shtampy-chertezhey.php" class="list-group-item  '.$item_shtampy_chertezhey_Class.'">ШТАМПЫ ЧЕРТЕЖЕЙ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php#net-informacii-1">Нет информации</a>
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
                            <a href="shablony-dokumentov-specifikacii.php" class="list-group-item  '.$item_specifikacii_Class.'">СПЕЦИФИКАЦИИ</a>
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
                            <a href="shablony-dokumentov-pokupnye-izdeliya.php" class="list-group-item  '.$item_pokupnye_izdeliya_Class.'">ПОКУПНЫЕ ИЗДЕЛИЯ</a>
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
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              