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
// $item_dizaynproekt_Class= '';

// dblstr-lg dblstr-xl dblstr-md dblstr-sm
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
                            <a href="yuridicheskie-dokumenty.php" class="list-group-item  '.$item_dogovor_Class.'">Договор основной</a>
                             <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub " href="yuridicheskie-dokumenty.php#shablon-dogovor-osnovnoy-bez-nds-v-21062018">Шаблон договора + приложения</a>                                
                               
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#yuri-dizayn-proekt">Дизайн - проект</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010781-akt-o-soglasovanii-dizayn-proekta">101.078.1. АКТ о согласовании Дизайн-проекта</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010782-akt-priema-peredachi-dizayn-proekta">101.078.2. Акт приема-передачи дизайн-проекта</a>                                    
                                        </li> 
                                        <li ><a class="list-group-item sub dblstr-lg" href="yuridicheskie-dokumenty.php#soglashenie-o-vnesenii-korrektirovok-v-dizayn-proekt">СОГЛАШЕНИЕ О ВНЕСЕНИИ КОРРЕКТИРОВОК В ДИЗАЙН-ПРОЕКТ</a>                                
                                        </li>
                                                                                                               
                                    </ul>                                    
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#obrazec-izdeliya">Образец изделия</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010801-akt-o-soglasovanii-obrazcov">101.080.1. АКТ о согласовании образцов</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010802-akt-priema-peredachi-obrazca">101.080.2. Акт приема-передачи Образца</a>                                    
                                        </li> 
                                                                                                                                                 
                                    </ul>                                    
                                 </li>
                                 <li class="menu2"><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#gotovaya-produkciya">Готовая продукция</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010720-akt-priemki-sdachi-gotovoy-produkcii">101.072. Акт приемки - сдачи готовой продукции</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#soglashenie-o-vnesenii-korrektirovok-v-gotovuyu-produkciyu">СОГЛАШЕНИЕ О ВНЕСЕНИИ КОРРЕКТИРОВОК В ГОТОВУЮ ПРОДУКЦИЮ</a>                                    
                                        </li>                                        
                                                                                                                                                    
                                    </ul>                                    
                                 </li>
                                 <li class="menu2"><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#montazh">Монтаж</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#10107-akt-priemki-sdachi-gp-i-montazhnyh-rabot">101.07. Акт приемки - сдачи ГП и монтажных работ</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="yuridicheskie-dokumenty.php#1010730-akt-priemki-pomeshcheniya-k-montazhu">101.073. Акт приемки помещения к монтажу</a>                                    
                                        </li>                                        
                                        <li ><a class="list-group-item sub  " href="yuridicheskie-dokumenty.php#1010760-akt-priemki-peredachi-izd-v-svyazi-s-priostanovkoy-mont">101.076. Акт приемки-передачи изд. в связи с приостановкой монтажа</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub  " href="yuridicheskie-dokumenty.php#1010890-akt-ocenki-gotovnosti-obj-k-provedeniyu-montazhn-rabot">101.089. Акт оценки готовности объекта к проведению монтажных работ</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  " href="yuridicheskie-dokumenty.php#akt-o-nevozmozhnosti-provedeniya-montazhnyh-rabot">Акт о невозможности проведения монтажных работ</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  " href="yuridicheskie-dokumenty.php#akt-priemki-sdachi-predvaritelnogo-montazha">Акт приемки - сдачи предварительного монтажа</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  dblstr-lg dblstr-xl   dblstr-md dblstr-sm " href="yuridicheskie-dokumenty.php#soglashenie-o-vnesenii-korr-k-v-gprodukciyu-provedenii-montazha">СОГЛАШЕНИЕ О ВНЕСЕНИИ КОРР-К В ГОТОВУЮ ПРОДУКЦИЮ ПРОВЕДЕНИИ МОНТАЖА</a>                                
                                        </li>
                                                                                                                                                       
                                    </ul>                                    
                                 </li>                                 
                            </ul>
                        </li>
                        <li class="menu  disabled">
                            <a href="dogovor-na-postavku-furnitury.php" class="list-group-item dblstr-lg  dblstr-xl  dblstr-md dblstr-sm '.$item_dogovor_na_postavku_furnitury_Class.'">ДОГОВОР НА ПОСТАВКУ ФУРНИТУРЫ</a>
                             <ul class="list-group sub_menu">
                                <li class="menu2"><a class="list-group-item sub" href="#soglashenie-o-vnesenii-izmeneniy-v-stoimost-dogovora">Шаблон договора + приложения</a> 
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#fur-soglashenie-o-vnesenii-izmeneniy-v-stoimost-dogovora">Соглашение о внесении изменений в СТОИМОСТЬ Договора</a>
                                        </li>  
                                        <li><a class="list-group-item sub" href="#fur-soglashenie-o-vnesenii-izmeneniy-v-sroki-po-dogovoru">Соглашение о внесении изменений в СРОКИ по Договору</a>
                                        </li>                                                                                                          
                                    </ul>                                
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#soglashenie-o-vnesenii-izmeneniy-v-sroki-po-dogovoru">Передача изделий</a>
                                 <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="#soglashenie-o-vnesenii-izmeneniy-v-stoimost-dogovora">Акт приема-передачи изделий (для физ.лиц)</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#soglashenie-o-vnesenii-izmeneniy-v-sroki-po-dogovoru">Юр. лица прием через бухгалтерию (ТОРГ-12 или УПД -1)</a>                                    
                                        </li>                                                                                                         
                                    </ul>                                     
                                </li> 
                                                          
                            </ul>
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
                                <li ><a class="list-group-item sub" href="shablony-dokumentov-pisma-klientu.php#shablon-zhestkaya-pisma-o-predostavlenii-informacii-po-dogovoru">Шаблон ЖЕСТКАЯ Письма о предоставлении инф. по Дог.</a>                                
                                </li>
                                <li ><a class="list-group-item sub" href="shablony-dokumentov-pisma-klientu-2.php#shablon-zhestkaya-pisma-o-predostavlenii-soglasovaniya-dp-kdz-obrazca">Шаблон ЖЕСТКАЯ Письма о предос. согл. ДП_КДЗ_Обр</a>                                
                                </li>                              
                            </ul>
                        </li>                                                                            
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              