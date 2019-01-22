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
<?php
include 'inc-goup-menu.php';//$styazhka=[]
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
                            <a href="shablony-dokumentov-albom-obrazcov.php" class="list-group-item  '.$item_albom_obrazcov_Class.'">Альбом образцов &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
                             <ul class="list-group sub_menu">
                             ';
                                LeftSideMenu($albomobrazcov);// ШАБЛОН АЛЬБОМА ОБРАЗЦОВ
                                LeftSideMenu($list_dvizheniya_obrazcov);//ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ
                                LeftSideMenu($obrazec_albom_oobrazcov);//ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ
                         echo'                                  
                            </ul> 
                        </li>                     
                      
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-dp.php" class="list-group-item  '.$item_list_titulnyy_dp_Class.'">ДИЗАЙН - ПРОЕКТ</a>
                            <ul class="list-group sub_menu">
                            ';                            
                            // $arrlist = [$shablon_alboma_dp,$list_titulnyy_vpi,$vedomost_furnitury,$vedomost_stekol_zerkal,$materialy_prochie];
                                LeftSideMenu($shablon_alboma_dp);// АЛЬБОМ ДИЗАЙН-ПРОЕКТА

                                LeftSideMenu($list_titulnyy_vpi);//ЛИСТ ТИТУЛЬНЫЙ ВПИ

                                LeftSideMenu($vedomost_furnitury);//ВЕДОМОСТЬ ФУРНИТУРЫ

                                LeftSideMenu($vedomost_stekol_zerkal);//ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ

                                LeftSideMenu($materialy_prochie);//ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ

                                LeftSideMenu($list_titulnyy_TZ);//ЛИСТ ТИТУЛЬНЫЙ ТЗ для строителей заказчика
                        echo'                        
                            </ul>
                        </li>
                        <!-- menu -->
                        <li class="menu">
                            <a href="shablony-dokumentov-titulnyy-kd.php" class="list-group-item  '.$item_list_titulnyy_kd_Class.' dblstr-lg dblstr-xl  dblstr-md dblstr-sm">КОНСТРУКТОРСКАЯ ДОКУМЕНТАЦИЯ</a>
                            <ul class="list-group sub_menu">
                            '; 
                            
                                LeftSideMenu($konstr_dok); // ЛИСТЫ ТИТУЛЬНЫЕ КОНСТРУКТОРСКОЙ ДОКУМЕНТАЦИИ                                                       
                                    
                                LeftSideMenu($spec_konst);// СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ</a>                             
        
                                LeftSideMenu($list_titulnyy_vpi_kd);// ЛИСТ ТИТУЛЬНЫЙ ВПИ</a>                             
                                
                                LeftSideMenu($dok_vpi_kd);// ВЕДОМОСТЬ ФУРНИТУРЫ</a>                             
                                
                                LeftSideMenu($dok_vsz);// ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ</a>                             
                                    
                                LeftSideMenu($dok_v_materialy_prochie);// ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ</a>                             
                                    
                                LeftSideMenu($spec_tehnolog);// СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ</a>                             
                                    
                                LeftSideMenu($vedomost_detaley_3d);// ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D</a>                             
                                echo'  

                            </ul>
                        </li>
                       
                                                                                                                 
                    </ul>
                </div>
            </div>
            <!-- левое боковое меню конец -->
';?>
              