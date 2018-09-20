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

// dblstr-sm dblstr-md dblstr-lg dblstr-xl 
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
                                <li class="menu2"><a class="list-group-item sub " href="#">Шаблон договора + приложения</a>                                
                                    <ul class="list-group sub_menu2">
                                        <li><a class="list-group-item sub" href="#osn-soglashenie-o-vnesenii-izmeneniy-v-stoimost-dogovora">Соглашение о внесении изменений в СТОИМОСТЬ Договора</a>
                                        </li>  
                                        <li><a class="list-group-item sub" href="#osn-soglashenie-o-vnesenii-izmeneniy-v-sroki-po-dogovoru">Соглашение о внесении изменений в СРОКИ по Договору</a>
                                        </li>                                                                        
                                    </ul>
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#yuri-dizayn-proekt">Дизайн - проект</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="#akt-priema-peredachi-dp-na-soglasovanie">Акт приема-передачи ДП на согласование</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#akt-soglasovaniya-dp">Акт согласования ДП</a>                                    
                                        </li> 
                                        <li ><a class="list-group-item sub dblstr-lg" href="#soglashenie-o-vnesenii-izmeneniy-v-stoimost-dogovora">Письмо – запрос о предоставлении информации для создания ДП</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub " href="#pismo--zapros-o-predostavlenii-informacii-dlya-sozdaniya-dp">Письмо – запрос о уточнении согласования переданного ДП</a>                                    
                                        </li>
                                        <li ><a class="list-group-item sub  dblstr-lg dblstr-xl  " href="#pismo--zapros-o-neobhodimosti-vneseniya-izmeneniy-v-soglasovannyy-dp-v-svyazi-s-utochneniyami-ot-predstavitelya-zakazchika">Письмо – запрос о необходимости внесения изменений в согласованный ДП, в связи с уточнениями от представителя Заказчика</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#dp-protokol-vstrechi-soglashenie-o-dodelkah">Протокол встречи (соглашение о доделках)</a>                                    
                                        </li>                                                                         
                                    </ul>                                    
                                </li>
                                <li class="menu2"><a class="list-group-item sub" href="#yuri-dizayn-proekt">Образец изделия</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="#akt-priema-peredachi-obrazca-na-soglasovanie">Акт приема-передачи Образца на согласование</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#akt-soglasovaniya-obrazca">Акт согласования Образца</a>                                    
                                        </li> 
                                        <li ><a class="list-group-item sub dblstr-lg" href="#pismo--zapros-o-predostavlenii-informacii-dlya-sozdaniya-obrazca">Письмо – запрос о предоставлении информации для создания Образца</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub dblstr-lg dblstr-xl  " href="#pismo--zapros-o-neobhodimosti-vneseniya-izmeneniy-v-soglasovannyy-obrazec-v-svyazi-s-utochneniyami-ot-predstavitelya-zakazchika">Письмо – запрос о необходимости внесения изменений в согласованный Образец, в связи с уточнениями от представителя Заказчика</a>                                    
                                        </li>
                                        <li ><a class="list-group-item sub  " href="#obr-protokol-vstrechi-soglashenie-o-dodelkah">Протокол встречи (соглашение о доделках)</a>                                
                                        </li>                                                                                                            
                                    </ul>                                    
                                 </li>
                                 <li class="menu2"><a class="list-group-item sub" href="#gotovaya-produkciya">Готовая продукция</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="#pismo--priglashenie-na-priemku-gotovoy-produkcii">Письмо – приглашение на приемку готовой продукции</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#akt-priemki-gotovoy-produkcii">Акт приемки готовой продукции</a>                                    
                                        </li>                                        
                                        <li ><a class="list-group-item sub  " href="#prod-protokol-vstrechi-soglashenie-o-dodelkah">Протокол встречи (соглашение о доделках)</a>                                
                                        </li>                                                                                                            
                                    </ul>                                    
                                 </li>
                                 <li class="menu2"><a class="list-group-item sub" href="#gotovaya-produkciya">Монтаж</a>
                                    <ul class="list-group sub_menu2">
                                        <li ><a class="list-group-item sub" href="#akt-o-negotovnosti-pomeshcheniya-dlya-provedeniya-montazha">Акт о неготовности помещения для проведения монтажа</a>                                
                                        </li>
                                        <li ><a class="list-group-item sub" href="#akt-o-prieme-pomeshcheniya-dlya-nachala-rabot-po-montazhu">Акт о приеме помещения для начала работ по монтажу</a>                                    
                                        </li>                                        
                                        <li ><a class="list-group-item sub  " href="#akt-o-nevozmozhnosti-prodolzheniya-montazha">Акт о невозможности продолжения монтажа </a>                                
                                        </li>
                                        <li ><a class="list-group-item sub  " href="#akt-priema-sdachi-rabot-po-predvaritelnomu-montazhu">Акт приема-сдачи работ по предварительному монтажу</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  " href="#akt-priema-sdachi-rabot-po-montazhu">Акт приема-сдачи работ по монтажу</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  " href="#pismo---priglashenie-na-priemku-rabot-po-montazhu">Письмо - приглашение на приемку работ по монтажу</a>                                
                                        </li>  
                                        <li ><a class="list-group-item sub  dblstr-lg dblstr-xl   " href="#pismo---uvedomlenie-o-nevozmozhnosti-prodolzheniya-rabot-po-montazhu">Письмо - уведомление о невозможности продолжения работ по монтажу  </a>                                
                                        </li>
                                        <li ><a class="list-group-item sub  " href="#mont-protokol-vstrechi-soglashenie-o-dodelkah">Протокол встречи (соглашение о доделках)</a>                                
                                        </li>                                                                                                               
                                    </ul>                                    
                                 </li>                                 
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="dogovor-na-postavku-furnitury.php" class="list-group-item dblstr-lg  dblstr-xl '.$item_dogovor_na_postavku_furnitury_Class.'">ДОГОВОР НА ПОСТАВКУ ФУРНИТУРЫ</a>
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
              