<?php
// переменные на странице 
// $item_albom_obrazcov_Class = '';
// $item_list_dvizh_obrazcov_Class = '';
// $item_list_titulnyy_dp_Class = '';
// $item_list_titulnyy_kd_Class = 'active';
// $item_vpi_Class = '';
// $item_dogovor_Class = '';
// $item_akty_Class = '';
// $item_pisma_klientu_Class = '';
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
                            <a href="shablony-dokumentov-albom-obrazcov.php" class="list-group-item  '.$item_albom_obrazcov_Class.'">Альбом образцов &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
                            <!--   <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="shablony-dokumentov-titulniki.php#listy-titulnye-dizayn-proekta">Листы титульные дизайн-проекта</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#list-titulnyy-dp">5000301_01_001 лист титульный ДП</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-titulniki.php#pasport-izdeliy-zakaza-dp">паспорт изделий заказа ДП</a>                                        
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
                                                                 
                            </ul> -->
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-list-dvizh-obrazcov.php" class="list-group-item  '.$item_list_dvizh_obrazcov_Class.'">Лист движ. образцов</a>
                            <!--  <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php#shtampy-chertezhey-arhitekturnogo-byuro">ШТАМПЫ ЧЕРТЕЖЕЙ АРХИТЕКТУРНОГО БЮРО</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php#Stamp_Sofia">Stamp_Sofia</a>
                                        </li>                                                                            
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php#shtam-osnovnoy-nadpisi-chertezhey-kd">ШТАМПЫ ЧЕРТЕЖЕЙ КОНСТРУКТОРСКОГО БЮРО</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-shtampy-chertezhey.php#5000302-02-001-shtam-osnovnoy-nadpisi-chertezhey-kd" >5000302-02-001 штамп основной надписи чертежей КД </a>
                                        </li>                                                                                                                      
                                    </ul>
                                </li>                                                                
                            </ul> -->
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-dp.php" class="list-group-item  '.$item_list_titulnyy_dp_Class.'">Лист титульный ДП</a>
                            <!--   <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#specifikaciya-konstruktorskaya">СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-01-001-specifikaciya-konstruktorskaya">5000303-01-001 спецификация конструкторская</a>
                                        </li>                                                                                
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#specifikaciya-tehnologichesaya">СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-02-001-specifikaciya">5000303-02-001 спецификация</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-02-002-specifikaciya-dlya-korrekcii">5000303-02-002 спецификация для коррекции </a>
                                        </li>                                                                               
                                    </ul>
                                </li>                    
                            </ul>-->
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-kd.php" class="list-group-item  '.$item_list_titulnyy_kd_Class.'">Лист титульный КД</a>
                            <!--   <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#specifikaciya-konstruktorskaya">СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-01-001-specifikaciya-konstruktorskaya">5000303-01-001 спецификация конструкторская</a>
                                        </li>                                                                                
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#specifikaciya-tehnologichesaya">СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-02-001-specifikaciya">5000303-02-001 спецификация</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-specifikacii.php#5000303-02-002-specifikaciya-dlya-korrekcii">5000303-02-002 спецификация для коррекции </a>
                                        </li>                                                                               
                                    </ul>
                                </li>                    
                            </ul>-->
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-pokupnye-izdeliya.php" class="list-group-item  '.$item_vpi_Class.'"> ВПИ ПОКУПНЫЕ ИЗДЕЛИЯ</a>
                             <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#shablony-dokumentov-list-titulnyy-vpi">ЛИСТ ТИТУЛЬНЫЙ ВПИ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#list-titulnyy-vpi">5000304_01_000 лист титульный ВПИ</a>
                                        </li>                                                                          
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#shablony-dokumentov-vedomost-furnitury">ВЕДОМОСТЬ ФУРНИТУРЫ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#vedomost-furnitury">5000304-01-001 ведомость фурнитуры </a>
                                        </li>                                                                         
                                    </ul>
                                </li> 
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#shablony-dokumentov-vedomost-stekol-i-zerkal">ВЕДОМОСТЬ СТЕКОЛ И ЗЕРКАЛ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#vedomost-stekol-i-zerkal">5000304-02-001 ведомость стекол и зеркал </a>
                                        </li>                                                                         
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#shablony-dokumentov-vedomost-materialy-prochie">ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</a>
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-pokupnye-izdeliya.php#vedomost-materialy-prochie">5000304-03-001 ведомость материалы прочие </a>
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
              