<?php 
// inc-goup-menu.php
function SideMenu($arr,$curr) //правое меню группа
{
 echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        echo '<li><a href="'.$arr[0]['id'].'">'.$arr[0]['def'].'</a>';
            echo '<ul class="nav">';                                 
                    for ($i=1; $i < count($arr); $i++) { 
                        if($i==$curr){$path="";}else{$path=$arr[$i]['path'];}                                                
              echo '<li><a href="'.$path.$arr[$i]['id'].'">&#9999;&nbsp;'.$arr[$i]['def'].'</a> </li>'; 
                }
         echo'  </ul>
            </li>                           
        </ul>
    </div>                  
</div>
<!-- боковое меню конец -->  .
    ';
}
function SideMenuList($arrlist) // правое меню список групп
{
echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        foreach ($arrlist as $arr) {          
            echo '<li><a href="'.$arr[0]['id'].'">'.$arr[0]['def'].'</a>';
                echo '<ul class="nav">'; 
                for ($i=1; $i < count($arr); $i++) { 
                            // if($i==$curr){$path="";}else{$path=$arr[$i]['path'];}                                                
                echo '<li><a href="'.$arr[$i]['id'].'">&#9999;&nbsp;'.$arr[$i]['def'].'</a> </li>'; 
                    }                    
            echo'  </ul>
                </li> '; 
        }//foreach $arrlist
    echo'   </ul>
        </div>                  
    </div>
    <!-- боковое меню конец -->  .
    ';
}

function LeftSideMenu($arr)// левое меню -> замена <li class="menu2"> ->   ';LeftSideMenu($styazhka); echo'
{
    echo'
    <li class="menu2">
        <a class="list-group-item sub" href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'</a>
        <ul class="list-group sub_menu2">
    ';
        for ($i=1; $i < count($arr); $i++) { 
            echo '<li><a class="list-group-item sub" href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'</a> </li>';            
        }  
        echo'
        </ul>
    </li> 
    ';
}

function IndexMenu($arr,$num_footer)// index.php
{

    
    echo'
    <TR>
        <TD  class="hover mapsite" id="footer'.$num_footer.'">
            <p data-img="./dist/images/'.$arr[0]['img'].'" id="floating'.($num_footer+1).'" data-href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'<span><br></span></p>
        </TD> 
        <TD>
            <TABLE > ';        
            for ($i=1; $i < count($arr); $i++) {                             
       echo '   <TR>
                    <TD class="mapsite" colspan="2" id="'.str_replace("#","flo-",$arr[$i]['id']).'" >
                        <p data-img="./dist/images/'.$arr[$i]['img'].'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'<span> <br>~</span></p>
                    </TD>                                                                         
                </TR>  
                <TR><TD></TD></TR> <!--end LEVEL4-->';             
            }              
    echo'  </TABLE>
        </TD>
    </TR> 
    <tr><TD> &nbsp; </TD><TD></TD></tr> <!--end LEVEL3--> 
    ';

}


/////////////////////////////////////
    $styazhka=[];
    $styazhka[0]=['path'=>"furnitura-dlya-mebeli-styazhka16.php",
                    'id'=>"#styazhka",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"СТЯЖКИ"];

    $styazhka[1]=['path'=>"furnitura-dlya-mebeli-styazhka16.php",
                    'id'=> "#styazhka",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка эксцентриковая односторонняя для плит 16 мм"];

    $styazhka[2]=['path'=>"furnitura-dlya-mebeli-styazhka16-dvustoronnyaya.php",
                    'id'=> "#styazhka16-dvustoronnyaya",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка эксцентриковая двухсторонняя для плит 16 мм"];
                
    $styazhka[3]=['path'=>"furnitura-dlya-mebeli-styazhka24.php",
                    'id'=> "#styazhka24",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка эксцентриковая односторонняя для плит 24 мм"];
                
    $styazhka[4]=['path'=>"furnitura-dlya-mebeli-styazhka24-dvustoronnyaya.php",
                    'id'=> "#styazhka24-dvustoronnyaya",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка эксцентриковая двухсторонняя для плит 24 мм"];
                    
    $styazhka[5]=['path'=>"furnitura-dlya-mebeli-styazhka-rafix.php",
                    'id'=> "#rafix",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка эксцентриковая усиленная &Oslash;20 для 16 мм"];
                    
    $styazhka[6]=['path'=>"furnitura-dlya-mebeli-konfirmat.php",
                    'id'=> "#konfirmat",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Конфирматы 7.0х50 и 7.0х70"];
    $styazhka[7]=['path'=>"furnitura-dlya-mebeli-styazhka-konicheskaya-d10-t25.php",
                    'id'=> "#konicheskaya-d10",
                    'img'=>"no-foto.png",
                    'keywords'=>"",
                    'def'=>"Стяжка коническая D10 для плит толщиной от 25 мм"];

/////////////////////////////////////

/////////////////////////////////////
//shablony-dokumentov-albom-obrazcov.php 
    // $arrlist = [$albomobrazcov,$list_dvizheniya_obrazcov,$obrazec_albom_oobrazcov];
    // SideMenuList($arrlist)

        $albomobrazcov=[];
        $albomobrazcov[0]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                        'id'=>"#shablon-alboma-obrazcov",
                        'def'=>"ШАБЛОН АЛЬБОМА ОБРАЗЦОВ"];

        $albomobrazcov[1]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                        'id'=> "#shablon-alboma-obrazcov_1",
                        'def'=>"Лист титульный"];

        $albomobrazcov[2]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                        'id'=> "#shablon-alboma-obrazcov_2",
                        'def'=>"Состав альбома образцов"];
                    
        $albomobrazcov[3]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                        'id'=> "#shablon-alboma-obrazcov_3",
                        'def'=>"Размещение изделий на плане"];
                    
        $albomobrazcov[4]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                        'id'=> "#shablon-alboma-obrazcov_4",
                        'def'=>"Образец №"];
                        
    /////////////////////////////////////

    /////////////////////////////////////
    $list_dvizheniya_obrazcov=[];
    $list_dvizheniya_obrazcov[0]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                    'id'=>"#list-dvizheniya-obrazcov",
                    'def'=>"ЛИСТ ДВИЖЕНИЯ ОБРАЗЦОВ"];

    $list_dvizheniya_obrazcov[1]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                    'id'=> "#dok--385",
                    'def'=>"Док. № 385"];
                    
    /////////////////////////////////////

    /////////////////////////////////////
    $obrazec_albom_oobrazcov=[];
    $obrazec_albom_oobrazcov[0]=['path'=>"shablony-dokumentov-albom-obrazcov.php",
                    'id'=>"#obrazec-zapolneniya-albomo-obrazcov",
                    'def'=>"ОБРАЗЕЦ ЗАПОЛНЕНИЯ АЛЬБОМА ОБРАЗЦОВ"];
//shablony-dokumentov-albom-obrazcov.php                
/////////////////////////////////////

/////////////////////////////////////
//shablony-dokumentov-titulnyy-dp.php
    // $arrlist = [shablon_alboma_dp,$list_titulnyy_vpi,$vedomost_furnitury,$vedomost_stekol_zerkal,$materialy_prochie];
    // SideMenuList($arrlist)

    $shablon_alboma_dp=[];
    $shablon_alboma_dp[0]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=>"#shablon-alboma-dp",
                    'def'=>"АЛЬБОМ ДИЗАЙН-ПРОЕКТА"];

    $shablon_alboma_dp[1]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#list-titulnyy-dp_1",
                    'def'=>"Лист титульный ДП"];

    $shablon_alboma_dp[2]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#shablon-alboma-dp_2",
                    'def'=>"Состав проекта"];
                
    $shablon_alboma_dp[3]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#shablon-alboma-dp_3",
                    'def'=>"Ситуационный план"];
                
    $shablon_alboma_dp[4]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#shablon-alboma-dp_4",
                    'def'=>"Обмерный план"];

    /////////////////////////////////////

    /////////////////////////////////////

    $list_titulnyy_vpi=[];
    $list_titulnyy_vpi[0]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=>"#shablony-dokumentov-list-titulnyy-vpi",
                    'def'=>"ЛИСТ ТИТУЛЬНЫЙ ВПИ"];

    $list_titulnyy_vpi[1]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#list-titulnyy-vpi",
                    'def'=>"5000304-01-000 лист титульный ВПИ"];

    /////////////////////////////////////

    /////////////////////////////////////

    $vedomost_furnitury=[];
    $vedomost_furnitury[0]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=>"#shablony-dokumentov-vedomost-furnitury",
                    'def'=>"ВЕДОМОСТЬ ФУРНИТУРЫ"];

    $vedomost_furnitury[1]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#vedomost-furnitury",
                    'def'=>"5000304-01-001 ведомость фурнитуры"];

    /////////////////////////////////////
    
    /////////////////////////////////////

    $vedomost_stekol_zerkal=[];
    $vedomost_stekol_zerkal[0]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=>"#shablony-dokumentov-vedomost-stekol-i-zerkal",
                    'def'=>"ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ"];

    $vedomost_stekol_zerkal[1]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#vedomost-stekol-i-zerkal",
                    'def'=>"5000304-02-001 ведомость стекол и зеркал"];

    /////////////////////////////////////

    /////////////////////////////////////

    $materialy_prochie=[];
    $materialy_prochie[0]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=>"#shablony-dokumentov-vedomost-materialy-prochie",
                    'def'=>"ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ"];

    $materialy_prochie[1]=['path'=>"shablony-dokumentov-titulnyy-dp.php",
                    'id'=> "#vedomost-materialy-prochie",
                    'def'=>"5000304-03-001 ведомость материалы прочие"];

    /////////////////////////////////////
//shablony-dokumentov-titulnyy-dp.php
/////////////////////////////////////  


///////////////////////////////////// 
//shablony-dokumentov-titulnyy-kd.php  
    // $arrlist = [$konstr_dok,$spec_konst,$list_titulnyy_vpi_kd,$dok_vsz,$dok_v_materialy_prochie,$spec_tehnolog,$vedomost_detaley_3d];
    // SideMenuList($arrlist)
    $konstr_dok=[];//ЛИСТЫ ТИТУЛЬНЫЕ КОНСТРУКТОРСКОЙ ДОКУМЕНТАЦИИ
    $konstr_dok[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#listy-titulnye-konstruktorskoy-dokumentacii",
                    'def'=>"ЛИСТЫ ТИТУЛЬНЫЕ КОНСТРУКТОРСКОЙ ДОКУМЕНТАЦИИ"];

    $konstr_dok[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#list-titulnyy-kd",
                    'def'=>"5000301-02-000 лист титульный КД"];

    $konstr_dok[2]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#pasport-izdeliy-zakaza-kd",
                    'def'=>"паспорт изделий заказа КД"];

    $konstr_dok[3]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#reestr-razdelov-kd",
                    'def'=>"реестр разделов КД"];


    $spec_konst=[];//СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ
    $spec_konst[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#specifikaciya-konstruktorskaya",
                    'def'=>"СПЕЦИФИКАЦИЯ КОНСТРУКТОРСКАЯ"];

    $spec_konst[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#specifikaciya-konstruktorskaya",
                    'def'=>"cпецификация конструкторская"];


    $list_titulnyy_vpi_kd=[];//ЛИСТ ТИТУЛЬНЫЙ ВПИ
    $list_titulnyy_vpi_kd[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#shablony-dokumentov-list-titulnyy-vpi",
                    'def'=>"ЛИСТ ТИТУЛЬНЫЙ ВПИ"];

    $list_titulnyy_vpi_kd[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#list-titulnyy-vpi",
                    'def'=>"5000304-01-000 лист титульный ВПИ"];

    $dok_vpi_kd=[];//ВЕДОМОСТЬ ФУРНИТУРЫ
    $dok_vpi_kd[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#shablony-dokumentov-vedomost-furnitury",
                    'def'=>"ВЕДОМОСТЬ ФУРНИТУРЫ"];

    $dok_vpi_kd[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#vedomost-furnitury",
                    'def'=>"5000304-01-001 ведомость фурнитуры"];

    $dok_vsz=[];//ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ
    $dok_vsz[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#shablony-dokumentov-vedomost-stekol-i-zerkal",
                    'def'=>"ВЕДОМОСТЬ СТЕКОЛ и ЗЕРКАЛ"];

    $dok_vsz[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#vedomost-stekol-i-zerkal",
                    'def'=>"5000304-02-001 ведомость стекол и зеркал"];

    $dok_v_materialy_prochie=[];//ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ
    $dok_v_materialy_prochie[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#shablony-dokumentov-vedomost-materialy-prochie",
                    'def'=>"ВЕДОМОСТЬ МАТЕРИАЛЫ ПРОЧИЕ"];

    $dok_v_materialy_prochie[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#vedomost-materialy-prochie",
                    'def'=>"5000304-03-001 ведомость материалы прочие"];

    $spec_tehnolog=[];//СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ
    $spec_tehnolog[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#specifikaciya-tehnologichesaya",
                    'def'=>"СПЕЦИФИКАЦИЯ ТЕХНОЛОГИЧЕСКАЯ"];

    $spec_tehnolog[1]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=> "#5000303-02-001-specifikaciya",
                    'def'=>"5000303-02-001 спецификация"];

    $vedomost_detaley_3d=[];//ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D
    $vedomost_detaley_3d[0]=['path'=>"shablony-dokumentov-titulnyy-kd.php",
                    'id'=>"#vedomost-detaley-uchastka-3d",
                    'def'=>"ВЕДОМОСТЬ ДЕТАЛЕЙ УЧАСТКА 3D"];

 
//shablony-dokumentov-titulnyy-kd.php                                
/////////////////////////////////////
    
                    



// index.php

// <TR>
//     <TD data-tooltip="СТЯЖКИ" class="hover mapsite" id="footer143">
//         <p data-img="./dist/images/no-foto.png" id="floating144" data-href="furnitura-dlya-mebeli-styazhka16.php#styazhka">СТЯЖКИ<span><br></span></p>
//     </TD> 
//     <TD>
//         <TABLE >                                                                                          
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm">5000502-07-701 стяжка эксцентриковая односторонняя MINIFIX, толщина плиты 16 мм<span> <br>~-5000502-07-701-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-16-mm</span></p>
// !!!!!!!!!!!!!!!!!!  <p data-img="./dist/images/SUPERLIFT.jpg"    data-href="furnitura-dlya-mebeli-pantograf1.php#SUPERLIFT" class="KEYWORDS">Mебельный лифт SUPERLIFT </p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4-->
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm">5000502-07-702 стяжка эксцентриковая двухсторонняя MINIFIX, толщина плиты 16 мм<span> <br>~5000502-07-702-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-16-mm</span></p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4--> 
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm">5000502-07-703 стяжка эксцентриковая односторонняя MINIFIX, толщина плиты 24 мм<span> <br>~5000502-07-703-styazhka-ekscentrikovaya-odnostoronnyaya-minifix-tolshchina-plity-24-mm</span></p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4--> 
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm">5000502-07-704 стяжка эксцентриковая двухсторонняя MINIFIX, толщина плиты 24 мм<span> <br>~5000502-07-704-styazhka-ekscentrikovaya-dvuhstoronnyaya-minifix-tolshchina-plity-24-mm</span></p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4--> 
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm">5000502-07-707 стяжка эксцентриковая усиленная RAFIX, толщина плиты 16 мм<span> <br>~5000502-07-707-styazhka-ekscentrikovaya-usilennaya-rafix-tolshchina-plity-16-mm</span></p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4--> 
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-750-konfirmat-70h50" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-750-konfirmat-70h50">5000502-07-750 конфирмат 7.0Х50<span> <br>~5000502-07-750-konfirmat-70h50</span></p>
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4--> 
//             <TR>
//                 <TD class="mapsite" colspan="2" id="flo-5000502-07-752-konfirmat-70h70" >
//                     <p data-img="./dist/images/no-foto.png" data-href="furnitura-dlya-mebeli.php#5000502-07-752-konfirmat-70h70">5000502-07-752 конфирмат 7.0Х70<span> <br>~5000502-07-752-konfirmat-70h70</span></p>
                    
//                 </TD>                                                                         
//             </TR>  
//             <TR><TD></TD></TR> <!--end LEVEL4-->  
                        
//         </TABLE>
//     </TD>
// </TR> 

                