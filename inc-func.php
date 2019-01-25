<?php 
// inc-func.php
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
            <p data-img="'.IndexImagesPath($arr[0]['img']).'" id="floating'.($num_footer+1).'" data-href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'<span><br></span></p>
        </TD> 
        <TD>
            <TABLE > ';        
            for ($i=1; $i < count($arr); $i++) {                             
       echo '   <TR>
                    <TD class="mapsite" colspan="2" id="'.str_replace("#","flo-",$arr[$i]['id']).'" >
                        <p data-img="'.IndexImagesPath($arr[$i]['img']).'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'<span> <br>~</span></p>
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
function IndexImagesPath($valimg)// index.php
{
    if (!$valimg){return "./dist/images/no-foto.png";}
    else{return $valimg;}
}

// function IndexMenu($arr,$num_footer)// index.php
// {

    
//     echo'
//     <TR>
//         <TD  class="hover mapsite" id="footer'.$num_footer.'">
//             <p data-img="./dist/images/'.$arr[0]['img'].'" id="floating'.($num_footer+1).'" data-href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'<span><br></span></p>
//         </TD> 
//         <TD>
//             <TABLE > ';        
//             for ($i=1; $i < count($arr); $i++) {                             
//        echo '   <TR>
//                     <TD class="mapsite" colspan="2" id="'.str_replace("#","flo-",$arr[$i]['id']).'" >
//                         <p data-img="./dist/images/'.$arr[$i]['img'].'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'<span> <br>~</span></p>
//                     </TD>                                                                         
//                 </TR>  
//                 <TR><TD></TD></TR> <!--end LEVEL4-->';             
//             }              
//     echo'  </TABLE>
//         </TD>
//     </TR> 
//     <tr><TD> &nbsp; </TD><TD></TD></tr> <!--end LEVEL3--> 
//     ';

// }



                