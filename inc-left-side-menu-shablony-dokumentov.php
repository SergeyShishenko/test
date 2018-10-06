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
                                   
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#list-dvizheniya-obrazcov">ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ</a>
                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-albom-obrazcov.php#obrazec-zapolneniya-albomo-obrazcov">ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ</a>
                             
                                </li>
                                                                 
                            </ul> 
                        </li>                     
                      
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-dp.php" class="list-group-item  '.$item_list_titulnyy_dp_Class.'">ДИЗАЙН - ПРОЕКТ</a>
                            <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablon-alboma-dp">АЛЬБОМ ДИЗАЙН-ПРОЕКТА</a>                             
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-titulnyy-dp.php#shablony-dokumentov-list-titulnyy-vpi">ЛИСТ ТИТУЛЬНЫЙ ВПИ</a>                             
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
                       
                                                                                                                 
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              