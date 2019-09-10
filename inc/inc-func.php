<?php 
// inc-func.php
function SideMenu($arr,$curr) //правое меню группа
{
 echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        echo '<li><a href="'.$arr[0]['id'].'">span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '.$arr[0]['def'].'</a>';
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
<!-- боковое меню конец -->  
    ';
}

//////////////////////////////////////////

function SideMenuList($arrlist) // правое меню список групп
{
echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        foreach ($arrlist as $arr) {          
            echo '<li><a href="'.$arr[0]['id'].'"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '.$arr[0]['def'].'</a>';
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
    <!-- боковое меню конец --> 
    ';
}

///////////////////////////////////////

function LeftSideMenu($arr)// левое меню -> замена <li class="menu2"> ->   ';LeftSideMenu($styazhka); echo'
{
    echo'
    <li class="menu2">
        <a class="list-group-item sub" href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'</a>
        <ul class="list-group sub_menu2">
    ';
        for ($i=1; $i < count($arr); $i++) { 
            if(strlen($arr[$i]['def'])>130){ $extClass=" dblstr-lg dblstr-xl   dblstr-md dblstr-sm ";}
            else{ $extClass="";}
            echo '<li><a class="list-group-item sub '.$extClass.'" href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'</a> </li>';            
        }  
        echo'
        </ul>
    </li> 
    ';
}

/////////////////////////////////////

function IndexMenu($arr,$num_footer)// index.php
{
    
    echo'
    <TR>
        <TD  class="hover mapsite" id="footer'.$num_footer.'">
            <p data-img="'.IndexImagesPath($arr[0]['img']).'" id="floating'.($num_footer+1).'" data-href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'<span><br>~'.$arr[0]['tilde'].'</span></p>
        </TD> 
        <TD>
            <TABLE > ';        
            for ($i=1; $i < count($arr); $i++) {                             
       echo '   <TR>
                    <TD class="mapsite" colspan="2" id="'.str_replace("#","flo-",$arr[$i]['id']).'" >
                        <p data-img="'.IndexImagesPath($arr[$i]['img']).'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'<span> <br>~'.$arr[0]['tilde'].'</span></p>
                        <p data-img="'.IndexImagesPath($arr[$i]['img']).'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'" class="KEYWORDS">'.$arr[$i]['keywords'].'<span> <br>~</span></p>
                       
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

////////////////////////////////////////

function IndexImagesPath($valimg)// index.php
{
    if (!$valimg){return "./dist/images/no-foto.png";}
    else{return $valimg;}
}

///////////////////////////////////////

function ContentListGoupMenu($arr) //правое меню группа
{
    echo ' 
<article  >
    <section  >
        <div class="page-header" >                                              
        <h2 id="'.trim($arr[0]['id'], '#').'">&nbsp;</h2>
        <h1 itemprop="name" >'.$arr[0]['def'].'</h1>
        </div> 
        ';                                     
        for ($i=1; $i < count($arr); $i++)
        {                                                               
        echo '
        <h2 id="'.trim($arr[$i]['id'], '#').'">&nbsp;</h2>
            <div class="bs-callout bs-callout-warning cont" ><h4>'.$arr[$i]['def'].'</h4>
        ';    
            // навигация по content
                
                $content=$arr[$i]['content'][0];
                $filename=$content["path"].$content["id-name"].$content["version"].'.png';
                $size = getimagesize($filename);
                // "Ширина: " . $size[0] ." Высота: " . $size[1]
                if($size[0]>$size[1]){$orient="img-album";}else{$orient="img-book"; }               
                
                if($content['overlay']){echo '   <div class="overlay"></div>' ; }
                if($content['no-b-lazy']){$img ='<img src="'.$filename.'" class="center-block img-rounded img-thumbnail"' ; }
                else{$img ='<img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==    data-src="'. $filename.'" 
                    class="center-block img-rounded img-thumbnail b-lazy '.$orient.'"' ;}

                echo '
                <p>
                    <a>            
                        '.$img.'
                        data-toggle="modal"
                        data-target="#myModal"                                            
                        alt="'.$content['alt'].'"
                        data-xls="'.$content['xls'].'"
                        data-pdf="'.$content['pdf'].'"
                        data-prnt="'.$content['prnt'].'"
                        data-spng="'.$content['spng'].'">
                    </a>
                </p>
                '; 
            // навигация по content end


            for ($j=1; $j < count($arr[$i]['content']); $j++)
            {
               
                 $content=$arr[$i]['content'][$j];
                 $filename=$content["path"].$content["id-name"].$content["version"].'.png';
                 $size = getimagesize($filename);
                 // "Ширина: " . $size[0] ." Высота: " . $size[1]
                 if($size[0]>$size[1]){$orient="img-album";}else{$orient="img-book"; }     
                if($content['overlay']){echo '   <div class="overlay"></div>' ; }
                if($content['no-b-lazy']){$img ='<img src="'.$filename.'" class="center-block img-rounded img-thumbnail"' ; }
                else{$img ='<img  src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==    data-src="'. $filename.'" 
                    class="center-block img-rounded img-thumbnail b-lazy '.$orient.'"' ;}
                echo '
                <p>
                    <a>            
                       '.$img.'
                        data-toggle="modal"
                        data-target="#myModal"                                            
                        alt="'.$content['alt'].'"
                        data-xls="'.$content['xls'].'"
                        data-pdf="'.$content['pdf'].'"
                        data-prnt="'.$content['prnt'].'"
                        data-spng="'.$content['spng'].'">
                    </a>
                </p>
                '; 

            }//$arr[$i]['content']  
    echo '</div>  
    ';           
    }//count($arr)  

    echo '
    </section>
</article> 
    ';    
}

///////////////////////////////

function ContentListGoupMenuVideo($arr) //правое меню группа
{
    echo ' 
<article  >
    <section  >
        <div class="page-header" > 
             <h2 itemprop="name" id="'.trim($arr[0]['id'], '#').'" >'.$arr[0]['def'].'</h2>
        </div> 
        ';  

        for ($i=1; $i < count($arr); $i++)
        {                                                               
        echo '

        <h6 id="'.trim($arr[$i]['id'], '#').'" >&nbsp;</h6>
            <div class="bs-callout bs-callout-warning cont" ><h4>'.$arr[$i]['def'].'</h4>
        
            
                <div class="main-box-body clearfix" >
                    <div class="embed-responsive embed-responsive-16by9">
                        <video preload="auto" autoplay="true" loop="true" muted="muted" controls class="embed-responsive-item">
                            <source src="'.$arr[$i]['video'].'" type="video/mp4">
                        </video>
                    </div>                                            
                </div> 
            </div> 
        ';       
           
    }//count($arr)  

    echo '
    </section>
</article> 
    ';    
}

///////////////////////////////





                