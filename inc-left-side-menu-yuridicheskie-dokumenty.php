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
                            <a href="yuridicheskie-dokumenty.php" class="list-group-item  '.$item_dogovor_Class.'">Договор</a>
                            <!-- <ul class="list-group sub_menu">
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
                            </ul>-->
                        </li>
                        <li class="menu  disabled">
                            <a href="shablony-dokumentov-akty.php" class="list-group-item  '.$item_akty_Class.'">Акты</a>
                            <!-- <ul class="list-group sub_menu">
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
                            </ul>-->
                        </li>
                        <li class="menu">
                            <a href="shablony-dokumentov-pisma-klientu.php" class="list-group-item  '.$item_pisma_klientu_Class.'">Письма клиенту</a>
                             <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pisma-klientu.php#shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru">Шаблон ЖЕСТКАЯ Письма о предоставлении инф. по Дог.</a>                                
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="shablony-dokumentov-pisma-klientu-2.php#shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca">Шаблон ЖЕСТКАЯ Письма о предос. согл. ДП_КДЗ_Обр</a>                                
                                </li>                              
                            </ul>
                        </li>                                                                            
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              