<?php 
// inc-func.php
function SideMenu($arr,$curr) //правое меню группа
{
 echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        echo '<li><a href="'.$arr[0]['id'].'"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '.$arr[0]['def'].'</a>';
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
function ListGallery($directory,$scale=2,$titleGallery)// левое меню -> замена <li class="menu2"> ->   ';LeftSideMenu($styazhka); echo'
{
    //$directory = './dist/images/GALLERY/SHTAPIKI/Thumbnail';
                                // $scanned_directory = array_diff(scandir($directory.'/Thumbnail'), array('..', '.'));
    $scanned_directory = scandir($directory.'/Thumbnail');
    
        for ($i=2; $i < count($scanned_directory); $i++) { 
            $file=$directory.'/Thumbnail/'.$scanned_directory[$i];
            $exif = exif_read_data($file, 0, true);
            if ($exif) {
                $title=$exif['IFD0']['ImageDescription'];
                $Comments=ucs2html($exif['IFD0']['Comments']);
                $Keywords=ucs2html($exif['IFD0']['Keywords']);
            }
            if (!$title){$title=$titleGallery;}
        
echo '
                                <div class="col-xs-'.$scale.' col-sm-'.$scale.' col-md-'.$scale.' col-lg-'.$scale.' thumb">
                                   <h5 class="sizeH" title="'.$title.'">'.$title.'</h5>
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"   data-title="'.$title.'" data-image="'.$directory.'/Original/'.$scanned_directory[$i].'"
                                        data-target="#image-gallery" data-directory="'.$directory.'">
                                        <img src="'.$directory.'/Thumbnail/'.$scanned_directory[$i].'" alt="'.explode(".", $scanned_directory[$i])[0].'">
                                    </a> 
                                </div>                
';     
        }      
}

/////////////////////////////////////
function ucs2html($str) {
    $str=trim($str); // if you are reading from file
    $len=strlen($str);
    $html='';
    for($i=0;$i<$len;$i+=2)
        $html.='&#'.hexdec(dechex(ord($str[$i+1])).
                   sprintf("%02s",dechex(ord($str[$i])))).';';
    return($html);
}
//////////////////////////////////////
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
                            <source src="'.(file_exists($arr[$i]['video']) ? $arr[$i]['video'] : './dist/video/non.mp4') .'" type="video/mp4">
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

/////////////////////////////// ФУРНИТУРА START
function TabContent($arr,$curr_page) //
{
echo ' 
<div class="row" style="margin-right: -15px;">
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div style="background: #fff;
            border: 1px solid rgb(221, 221, 221);
            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
            border-radius: 4px;
            padding: 15px;
            height: 747px;
                ">
            <ul id="myTab" class="nav nav-tabs" style="margin-bottom: 15px;">
                <li ><a href="#harakteristiki" data-toggle="tab">Характеристики</a></li>
                <li  class="active"><a href="#instrukciya" data-toggle="tab">Инструкция</a></li> 
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade " id="harakteristiki">
                '; echo $arr[$curr_page]['harakteristiki_def'];echo'
                </div>
                <div class="tab-pane fade in active" id="instrukciya">
                    <!-- часть1 -->
                    ';  echo $arr[$curr_page]['instrukciya_def'];echo' 
                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                            <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                <div class="carousel-inner">
                                ';                                                        
                                    for ($i=0; $i < count($arr[$curr_page]['instrukciya_carousel']); $i++) {  
                                    echo'
                                        <div class="item ';echo ($i==0 ? 'active' : '');echo'">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="';echo $arr[$curr_page]['instrukciya_carousel'][$i]['title'];echo'" 
                                            data-image="';echo $arr[$curr_page]['instrukciya_carousel'][$i]['img'];echo'" data-target="#image-gallery">
                                                <img  
                                                    src="';echo $arr[$curr_page]['instrukciya_carousel'][$i]['img'];echo'"
                                                    data-src="';echo $arr[$curr_page]['instrukciya_carousel'][$i]['img'];echo'"
                                                    class="center-block   img-rounded    bar "
                                                    data-toggle="modal"                                                                                                                    
                                                    alt="';echo $arr[$curr_page]['instrukciya_carousel'][$i]['title'];echo'"                                                                                                                         
                                                >
                                            </a>
                                        </div>
                                        ';
                                    }
                             echo '
                                </div>
                                <!-- Элементы управления -->
                                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Предыдущий</span>
                                </a>
                                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Следующий</span>
                                </a>
                            </div>
                        </div> 

                    <!-- /часть1 -->  
                </div>
            </div>
        </div>
    </div>
</div>   


 '; 
}

///////////////////////////////

function VPI($arr,$curr_page) //
{
    for ($j=0; $j < count($arr[$curr_page]['composition_article']); $j++) { 
        $a=$arr[$curr_page]['composition_article'][$j];
        echo '    
        <div class="row" style="margin-bottom: 15px; margin-left: 15px; padding-top: 15px;">
            <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                        border: 1px solid rgb(221, 221, 221);
                        box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                        border-radius: 4px;
                        padding: 15px;
                        ">

                <div class="row col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">                                                           
                    <div class="row">                                                
                        <h3 class="blum">';echo $a[0]['articul_500STP'];echo'</h3>
                        <h3 class="blum">';echo $a[0]['def'];echo'</h3>
                        <!-- <p> <a href="furnitura-dlya-mebeli-petlya-clip-top-TL-vkladnaya.php#petlya-vkladnaya-TL" >
                            <b>БЕЗ ПРУЖИНЫ</b> &nbsp;<i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i></a>
                        </p>   -->
                        <h4 style=" margin-left: 0px !important;">Состав артикула:</h4>            
                        <table class="table table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Список</th>
                                    <th>К&nbsp;&#8209;&nbsp;во</th>
                                    <th>Артикул</th>
                                    <th>Цвет&nbsp;/&nbsp;материал</th>
                                    <th>Описание</th>
                                    <!-- <th class="quantity">                                                            
                                        <div class="form-group" style="margin-bottom: 0;width: 112px;">				
                                            <input id="add_vpi_count-1"  class="form-control" type="number" value="1" min="1" max="999" >
                                        </div>
                                        
                                    </th> -->
                                    <th class="quantity"> 
                                    <!-- счетчик VPI -->
                                        <div class="input-group spinner"> 	
                                            <div class="input-group-btn-vertical">                                                                        
                                                <button class="btn btn-default" type="button">&ndash;</button>
                                                <input  id="add_vpi_count-1" type="text" class="form-control form-c" value="1" min="1" >
                                                <button class="btn btn-default" type="button">+</button>
                                            </div>
                                        </div>  
                                    </th> 
                                    <th class="">
                                    <!-- кнопка VPI -->
                                        <button type="button" id="addvpi" class="btn btn-primary" style="margin-left: 10px;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button> 
                                        
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="calcresult">
                                
                                ';
                            
                                for ($i=1; $i < count($a); $i++) {   
                            echo'
                                <tr>
                                    <td><img src="';echo $a[$i]['img'];echo'"  alt="';echo $a[$i]['def'];echo'" ></td>
                                    <td>';echo $a[$i]['count'];echo'</td>
                                    <td   ';
                                    echo ($a[$i]['id_table']!=="00") ? 'class="animated" data-objfurnid="'.$a[$i]['id_table']."\">" : '>';
                                    //echo 'data-objfurnid="'.$a[$i]['id_table'];

                                    echo'<a href="';echo $a[$i]['href_articul'];echo'" target="_blank">';echo $a[$i]['supplier_articul'];echo'</a></td>
                                    <td>';echo $a[$i]['color_material'];echo'</td> 
                                    <td colspan="3">';echo $a[$i]['def'];echo'</td>
                                </tr>
                            ';
                                }
                                echo'  
                                </tbody>
                            </table>
                    </div>                              
                </div>
            </div>
        </div>
        ';
    }
    echo' 

    <!-- следущая таблица комплект ВПИ -->
    <!-- ВПИ -->
            <div class="row" style="margin-bottom: 15px; margin-left: 15px;">
                <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                            border: 1px solid rgb(221, 221, 221);
                            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                            border-radius: 4px;
                            padding: 15px;
                            ">
                <h4 >Винты самонарезающие для дерева</h4>                                  
            
                <ul class="stat" style="margin: 0px;">
                    <li><b>Потайная головка</b></li>
                    <li><b>Крестовой шлиц PZ</b></li> 
                    <li><b>Неполная резьба,</b></li>                                                                            
                </ul>
            
                    <div class="row col-xs-12 col-sm-12 col-md-12" >                                                           
                        <div class="row"> 
                            <div class="row"  style="height:120px;  display: inline-flex;"> 
                                <div class="col-xs-6 col-sm-6 col-md-6" ><img src="./dist/filesdb/images/samorez-nepolnaya-rezba_sch1.png" width="100%" height="100%" class="" alt="Саморез" title=""></div>                                             
                                <div class="col-xs-6 col-sm-6 col-md-6"><img src="./dist/filesdb/images/samorez-nepolnaya-rezba.png"  width="100%" height="100%" class="" alt="чертёж" title=""></div>
                            </div>                                             
                            <!-- <h3 class="blum">5000502-07-750 Конфирмат 7,0Х50</h3>
                            <h3 class="blum">5000502-07-752 Конфирмат 7,0Х70</h3> -->
                            <!--  -->
                            <!-- <p><a href="https://www.mdm-complect.ru/catalog/konfirmat-styazhka-evrovint/59936/"  target="_blank" title="МДМ-КОМПЛЕКТ" >Артикулы поставщика:</a></p>             -->
                            <table class="table table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th title="Резьба ,(мм)">Резьба<i><br>&empty;&nbsp;d,&nbsp;(мм)</i></th>
                                    <th title="Длина общая ,(мм)">Длина&nbsp;общая<i><br>l,&nbsp;(мм)</i></th>                                                            
                                    <th title="Длина резьбы ,(мм)">Длина&nbsp;резьбы <i><br>b,&nbsp;(мм)</i></th>
                                    <!-- <th title="Pozidriv (PZ)">Шлиц </th>                                                           -->
                                    <th>Описание</th>                                                           
                                    <th> <button type="button" id="each_addvpi_1" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button></th>
                                </tr>
                                </thead>
                                <tbody id="calcresult"> 

                                        <!-- 4.0 -->                                                    
                                    <tr> 
                                        <td  class="boldstyle" rowspan="7">4.0</td>
                                        <td class="animated boldstyle" data-objfurnid="80">30</td> 
                                        <td >18</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x30</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    
                                    <tr> 
                                        
                                        <td class="animated boldstyle" data-objfurnid="81">35</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x35</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        
                                        <td class="animated boldstyle" data-objfurnid="82">40</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x40</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr>                                                            
                                        <td class="animated boldstyle" data-objfurnid="83">45</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x45</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="84">50</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x50</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="85">55</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x55</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="86">60</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,0x60</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                
                                
                                        <!-- 4.5 -->                                                    
                                    <tr> 
                                        <td  class="boldstyle" rowspan="7">4.5</td>
                                        <td class="animated boldstyle" data-objfurnid="87">35</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x35</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        
                                        <td class="animated boldstyle" data-objfurnid="88">40</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x40</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        
                                        <td class="animated boldstyle" data-objfurnid="89">45</td> 
                                        <td >27</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x45</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="90">50</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x50</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="91">60</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x60</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="92">70</td> 
                                        <td >42</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x70</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="93">80</td> 
                                        <td >50</td>
                                        
                                        <td >Саморез <span class="boldstyle">4,5x80</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>

                                        <!-- 5.0 -->                                                          
                                        <tr > 
                                        <td  class="boldstyle" rowspan="11">5.0</td>                                      
                                    
                                        <td class="animated boldstyle" data-objfurnid="94">40</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x40</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="95">45</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x45</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr> 
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="96">50</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x50</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="97">55</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x55</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr>  
                                        <td class="animated boldstyle" data-objfurnid="98">60</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x60</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="99">70</td> 
                                        <td >42</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x70</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="100">80</td> 
                                        <td >50</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x80</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr>
                                        <td class="animated boldstyle" data-objfurnid="101">90</td> 
                                        <td >60</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x90</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="102">100</td> 
                                        <td >60</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x100</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>                                                     
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="103">110</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x110</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="104">120</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">5,0x120</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                        <!-- 6.0 -->                                                          
                                    <tr> 
                                        <td  class="boldstyle" rowspan="15">6.0</td>                                      
                                    
                                        <td class="animated boldstyle" data-objfurnid="105">40</td> 
                                        <td >24</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x40</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>                                                   
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="106">50</td> 
                                        <td >30</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x50</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>                                                      
                                    <tr>  
                                        <td class="animated boldstyle" data-objfurnid="107">60</td> 
                                        <td >36</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x60</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="108">70</td> 
                                        <td >42</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x70</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="109">80</td> 
                                        <td >50</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x80</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr>
                                        <td class="animated boldstyle" data-objfurnid="110">90</td> 
                                        <td >60</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x90</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="111">100</td> 
                                        <td >60</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x100</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>                                                     
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="112">110</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x110</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="113">120</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x120</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="114">140</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x140</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="115">160</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x160</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="116">180</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x180</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="117">200</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x200</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="118">220</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x220</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    <tr> 
                                        <td class="animated boldstyle" data-objfurnid="119">240</td> 
                                        <td >70</td>
                                        
                                        <td >Саморез <span class="boldstyle">6,0x240</span> PZ для дерева, неполная резьба, потай, оцинкованный</td>
                                        <td class="quantity"> 
                                            <div class="input-group spinner"> 	
                                                <div class="input-group-btn-vertical">                                                                        
                                                    <button class="btn btn-default" type="button">&ndash;</button>
                                                    <input type="text" class="form-control form-c" value="0" data-step="10" >
                                                    <button class="btn btn-default" type="button">+</button>
                                                </div>
                                            </div> 
                                        </td>                                                            
                                    </tr>
                                    
                                
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>                              
                    </div>
                </div>
            </div>
    <!--/ ВПИ -->


    ';                      
}

///////////////////////////////

function VPI2($arr,$curr_page) //
{
    for ($j=0; $j < count($arr[$curr_page]['composition_article']); $j++) { 
        $a=$arr[$curr_page]['composition_article'][$j];
        echo '    
        <div class="row" style="margin-bottom: 15px; margin-left: 15px; padding-top: 15px;">
            <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
                        border: 1px solid rgb(221, 221, 221);
                        box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
                        border-radius: 4px;
                        padding: 15px;
                        ">

                <div class="row col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">                                                           
                    <div class="row">                                                
                        <h3 class="blum">';echo $a[0]['articul_500STP'];echo'</h3>
                        <h3 class="blum">';echo $a[0]['def'];echo'</h3>
                        <!-- <p> <a href="furnitura-dlya-mebeli-petlya-clip-top-TL-vkladnaya.php#petlya-vkladnaya-TL" >
                            <b>БЕЗ ПРУЖИНЫ</b> &nbsp;<i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i></a>
                        </p>   -->
                        <h4 style=" margin-left: 0px !important;">Состав артикула:</h4>            
                        <table class="table table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Список</th>                               
                                    <th>Артикул</th>
                                    <th>Цвет&nbsp;/&nbsp;материал</th>
                                    <th>Описание</th> 
                                    <th class="">
                                    <!-- кнопка VPI -->
                                        <button type="button" id="each_addvpi_1" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button>                                         
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="calcresult">
                                
                                ';
                            
                                for ($i=1; $i < count($a); $i++) {   
                            echo'
                                <tr>
                                    <td><img src="';echo $a[$i]['img'];echo'"  alt="';echo $a[$i]['def'];echo'" ></td>                                   
                                    <td   ';
                                    echo ($a[$i]['id_table']!=="00") ? 'class="animated" data-objfurnid="'.$a[$i]['id_table']."\">" : '>';
                                    //echo 'data-objfurnid="'.$a[$i]['id_table'];

                                    echo'<a href="';echo $a[$i]['href_articul'];echo'" target="_blank">';echo $a[$i]['supplier_articul'];echo'</a></td>
                                    <td>';echo $a[$i]['color_material'];echo'</td> 
                                    <td >';echo $a[$i]['def'];echo'</td>
                                    <td class="quantity"> 
                                    <div class="input-group spinner"> 	
                                        <div class="input-group-btn-vertical">                                                                        
                                            <button class="btn btn-default" type="button">&ndash;</button>
                                            <input type="text" class="form-control form-c" value="0" data-step="1" >
                                            <button class="btn btn-default" type="button">+</button>
                                        </div>
                                    </div> 
                                </td> 
                                </tr>
                            ';
                                }
                                echo'  
                                </tbody>
                            </table>
                    </div>                              
                </div>
            </div>
        </div>
        ';
    }
    echo' 

    <!-- следущая таблица комплект ВПИ -->
  


    ';                      
}

///////////////////////////////

function ContentPage($arr,$curr_page,$article_id) //
{
echo' 
    <!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page"> 
        <article  id="';echo $article_id.'">
            <section >
                <div class="page-header"     >
                    <h1 itemprop="name">'; echo $arr[0]['def'];echo'</h1>
                </div>                   
                <div class="bs-callout bs-callout-warning cont" id="';echo str_replace("#","",$arr[$curr_page]['id']);echo'"> ';                   
                    VPI2($arr,$curr_page);//ВПИ                   
                    TabContent($arr,$curr_page);
                echo'
                </div> <!--/bs-callout bs-callout-warning cont/-->
            </section> 
        </article>                     
    </div>
<!-- /main  -->
';
SideMenu($arr,$curr_page);
}

/////////////////////////////// ФУРНИТУРА END



                