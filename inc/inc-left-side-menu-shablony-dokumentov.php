<?php
include 'inc/goup/inc-goup-menu-shablony-dokumentov.php';//$styazhka=[]
 echo'
    <article itemscope="" itemtype="http://schema.org/WebPage">   
    <div class="container bs-docs-container">
        <div class="row">
             <!-- левое боковое меню начало -->
             <div class="col-md-2">
                <div class="list-group  bs-sidebar hidden-print affix vertical-menu nav bs-sidenav " id="navsub">
                    <ul class="list-group">
                        <!-- menu -->
                        <li class="menu">                                
                            <a href="shablony-dokumentov-albom-obrazcov.php" class="list-group-item  '.$item_albom_obrazcov_Class.'">Образцы &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
                             <ul class="list-group sub_menu">
                             ';
                                leftSdeMenu($albomobrazcov);// ШАБЛОН АЛЬБОМА ОБРАЗЦОВ
                                leftSdeMenu($list_dvizheniya_obrazcov);//ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ
                                leftSdeMenu($obrazec_albom_oobrazcov);//ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ
                         echo'                                  
                            </ul> 
                        </li>                     
                      
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-dp.php" class="list-group-item  '.$item_list_titulnyy_dp_Class.'">ДИЗАЙН - ПРОЕКТ</a>
                            <ul class="list-group sub_menu">
                            ';                            
                            // $arrlist = [$shablon_alboma_dp,$list_titulnyy_vpi,$vedomost_furnitury,$vedomost_stekol_zerkal,$materialy_prochie];
                                leftSdeMenu($shablon_alboma_dp);// АЛЬБОМ ДИЗАЙН-ПРОЕКТА

                                leftSdeMenu($list_titulnyy_vpi);//ЛИСТ ТИТУЛЬНЫЙ ВПИ

                                leftSdeMenu($vedomost_furnitury);//ВЕДОМОСТЬ ФУРНИТУРЫ

                                leftSdeMenu($vedomost_stekol_zerkal);//ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ

                                leftSdeMenu($materialy_prochie);//ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ

                                leftSdeMenu($list_titulnyy_proektirovshchika);//ЛИСТ ТИТУЛЬНЫЙ ТЗ для строителей заказчика

                                leftSdeMenu($list_titulnyy_TZ);//ЛИСТ ТИТУЛЬНЫЙ ТЗ для строителей заказчика

                                leftSdeMenu($sostav_dp);//СОСТАВ ДП
                                
                                leftSdeMenu($info_o_teh);//Техническое Задание на проектирование, предоставляемой Заказчиком
                        echo'                        
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-kd.php" class="list-group-item  '.$item_list_titulnyy_kd_Class.' dblstr-lg dblstr-xl  dblstr-md dblstr-sm">КОНСТРУКТОРСКАЯ ДОКУМЕНТАЦИЯ</a>
                            <ul class="list-group sub_menu">
                            '; 
                            
                                leftSdeMenu($konstr_dok); // ЛИСТЫ ТИТУЛЬНЫЕ КОНСТРУКТОРСКОЙ ДОКУМЕНТАЦИИ                                                       
                                    
                                leftSdeMenu($spec_konst);// СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</a>                             
        
                                leftSdeMenu($list_titulnyy_vpi_kd);// ЛИСТ ТИТУЛЬНЫЙ ВПИ</a>                             
                                
                                leftSdeMenu($dok_vpi_kd);// ВЕДОМОСТЬ ФУРНИТУРЫ</a>                             
                                
                                leftSdeMenu($dok_vsz);// ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>                             
                                    
                                leftSdeMenu($dok_v_materialy_prochie);// ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</a>                             
                                    
                                leftSdeMenu($spec_tehnolog);// СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</a>                             
                                    
                                leftSdeMenu($vedomost_detaley_3d);// ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D</a> 

                                leftSdeMenu($sostav_kd);//СОСТАВ КД                           
                                echo'  

                            </ul>
                        </li>
                        <li class="menu">
                            <a href="#" class="list-group-item  dblstr-lg dblstr-xl  dblstr-md dblstr-sm creat" data-toggle="modal" data-target="#GENModal">Создать комплект документов</a>
                            
                        </li>
                       
                                                                                                                 
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              