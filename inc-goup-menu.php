<?php 
// inc-goup-menu.php
$styazhka=[];
$styazhka[0]=['path'=>"furnitura-dlya-mebeli-styazhka16.php",
                'id'=>"#styazhka",
                'def'=>"СТЯЖКИ"];

$styazhka[1]=['path'=>"furnitura-dlya-mebeli-styazhka16.php",
                'id'=> "#styazhka",
                'def'=>"Стяжка эксцентриковая односторонняя для плит 16 мм"];

$styazhka[2]=['path'=>"furnitura-dlya-mebeli-styazhka16-dvustoronnyaya.php",
                'id'=> "#styazhka16-dvustoronnyaya",
                'def'=>"Стяжка эксцентриковая двухсторонняя для плит 16 мм"];
               
$styazhka[3]=['path'=>"furnitura-dlya-mebeli-styazhka24.php",
                'id'=> "#styazhka24",
                'def'=>"Стяжка эксцентриковая односторонняя для плит 24 мм"];
               
$styazhka[4]=['path'=>"furnitura-dlya-mebeli-styazhka24-dvustoronnyaya.php",
                'id'=> "#styazhka24-dvustoronnyaya",
                'def'=>"Стяжка эксцентриковая двухсторонняя для плит 24 мм"];
                
$styazhka[5]=['path'=>"furnitura-dlya-mebeli-styazhka-rafix.php",
                'id'=> "#rafix",
                'def'=>"Стяжка эксцентриковая усиленная &Oslash;20 для 16 мм"];
                
$styazhka[6]=['path'=>"furnitura-dlya-mebeli-konfirmat.php",
                'id'=> "#konfirmat",
                'def'=>"Конфирматы 7.0х50 и 7.0х70"];


function SideMenu($arr,$curr)
{
 echo'
    <!-- боковое меню блоки дверные начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
            echo'  <ul class="nav bs-sidenav"> ';                                  
                    for ($i=0; $i < count($arr); $i++) {                                        
                    if ($i==0) { //группа
                        echo '<li><a href="'.$arr[$i]['id'].'">'.$arr[$i]['def'].'</a>';
                        echo '<ul class="nav">';                                           
                    } else{
                        if($i==$curr){$path="";}else{$path=$arr[$i]['path'];}                                                
                        echo '<li><a href="'.$path.$arr[$i]['id'].'">&#9999;&nbsp;'.$arr[$i]['def'].'</a> </li>';
                        } 
                        }  
                        echo'
                    </ul>
                </li>                           
            </ul>
        </div>                  
    </div>
    <!-- боковое меню блоки дверные конец -->  .
    ';

}

                