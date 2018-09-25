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
                             <ul class="list-group sub_menu">
                                <li class="menu2">
                                    <a  class="list-group-item sub"  href="shablony-dokumentov-albom-obrazcov.php#shablon-alboma-obrazcov">ШАБЛОН АЛЬБОМА ОБРАЗЦОВ</a>
                                    <!-- <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#list-titulnyy-dp">5000301_01_001 лист титульный ДП</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#pasport-izdeliy-zakaza-dp">паспорт изделий заказа ДП</a>                                        
                                        </li>                                                                             
                                    </ul> -->
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#list-dvizheniya-obrazcov">ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ</a>
                                <!-- <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#list-titulnyy-kd">5000301_02_000 лист титульный КД</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#pasport-izdeliy-zakaza-kd">паспорт изделий заказа КД</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#reestr-razdelov-kd">реестр разделов КД</a>
                                        </li>                                         
                                    </ul> -->
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#obrazec-zapolneniya-albomo-obrazcov">ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ</a>
                                <!-- <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#list-titulnyy-kd">5000301_02_000 лист титульный КД</a>
                                        </li>
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#pasport-izdeliy-zakaza-kd">паспорт изделий заказа КД</a>
                                        </li> 
                                        <li><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#reestr-razdelov-kd">реестр разделов КД</a>
                                        </li>                                         
                                    </ul> -->
                                </li>
                                                                 
                            </ul> 
                        </li>                     
                      
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-dp.php" class="list-group-item  '.$item_list_titulnyy_dp_Class.'">ДИЗАЙН - ПРОЕКТ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablon-alboma-dp">АЛЬБОМ ДИЗАЙН-ПРОЕКТА</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablony-dokumentov-vedomost-furnitury">ВЕДОМОСТЬ ФУРНИТУРЫ </a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablony-dokumentov-vedomost-stekol-i-zerkal">ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablony-dokumentov-vedomost-materialy-prochie">ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</a>                             
                                </li>                   
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-kd.php" class="list-group-item  '.$item_list_titulnyy_kd_Class.' dblstr-lg dblstr-xl  dblstr-md dblstr-sm">КОНСТРУКТОРСКАЯ ДОКУМЕНТАЦИЯ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#listy-titulnye-konstruktorskoy-dokumentacii">ЛИСТЫ ТИТУЛЬНЫЕ КОНСТРУКТОРСКОЙ ДОКУМЕНТАЦИИ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#specifikaciya-konstruktorskaya">СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#shablony-dokumentov-list-titulnyy-vpi">ЛИСТ ТИТУЛЬНЫЙ ВПИ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#shablony-dokumentov-vedomost-furnitury">ВЕДОМОСТЬ ФУРНИТУРЫ</a>                             
                                </li> 
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#shablony-dokumentov-vedomost-stekol-i-zerkal">ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#shablony-dokumentov-vedomost-materialy-prochie">ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#specifikaciya-tehnologichesaya">СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-kd.php#vedomost-detaley-uchastka-3d">ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D</a>                             
                                </li>                   
                            </ul>
                        </li>
                        <!--<li class="menu">
                            <a href="shablony-dokumentov-specifikacii.php" class="list-group-item  '.$item_specifikacii_Class.'">Спецификации</a>
                              <ul class="list-group sub_menu">
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
                            </ul>
                        </li> -->
                        <!-- menu -->
                        <!--  <li class="menu">
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
                        </li>  -->                                                                                                 
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              