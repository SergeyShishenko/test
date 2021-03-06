<?php 
// inc\inc-func.php
function sideMenu($arr,$curr) //правое меню группа
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

function sideMenuList($arrlist) // правое меню список групп
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
function sideMenuListPages($arrlist) // правое меню список групп
{
echo'
    <!-- боковое меню начало -->
    <div class="col-md-2" id="navmain-izdeliya">                    
        <div class="bs-sidebar hidden-print affix vertical-menu " role="complementary" >';                                  
    echo'  <ul class="nav bs-sidenav"> '; 
        foreach ($arrlist as $arr) {          
            echo '<li><a href="'.$arr[0]['path'].'"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '.$arr[0]['def'].'</a>';
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

function leftSdeMenu($arr)// левое меню -> замена <li class="menu2"> ->   ';leftSdeMenu($styazhka); echo'
{   
   
    echo'
    <li class="menu2">
        <a class="list-group-item sub '.checkForLength($arr[0]['def']).'" href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'</a>
        <ul class="list-group sub_menu2">
    ';
        for ($i=1; $i < count($arr); $i++) { 
            if(strlen($arr[$i]['def'])>60){ $extClass=" dblstr-lg dblstr-xl  dblstr-md dblstr-sm ";}
            else{ $extClass="";}
            echo '<li><a class="list-group-item sub '.$extClass.'" href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'</a> </li>';            
        }  
        echo'
        </ul>
    </li> 
    ';
}

function checkForLength($str)
{
    if(strlen($str)>100){ $extClass=" dblstr-lg dblstr-xl  dblstr-md dblstr-sm ";}
    else{ $extClass="";}
    return $extClass;
}

/////////////////////////////////////
function listGallery($directory,$scale=2,$titleGallery)// левое меню -> замена <li class="menu2"> ->   ';leftSdeMenu($styazhka); echo'
{
    //$directory = './dist/images/GALLERY/SHTAPIKI/Thumbnail';
                                // $scanned_directory = array_diff(scandir($directory.'/Thumbnail'), array('..', '.'));
    $scanned_directory = scandir($directory.'/Thumbnail');
    
        for ($i=2; $i < count($scanned_directory); $i++) { 
            $file=$directory.'/Thumbnail/'.$scanned_directory[$i];
            // file_exists($file)
            if (exif_imagetype($file) == 2) { //JEPEG            

                    $exif = exif_read_data($file, 0, true);                
                    if ($exif) {
                        $title=$exif['IFD0']['ImageDescription'];
                        $Comments=ucs2html($exif['IFD0']['Comments']);
                        $Keywords=ucs2html($exif['IFD0']['Keywords']);
                    }
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
function indexMenu($arr,$num_footer)// index.php
{
    
    echo'
    <TR>
        <TD  class="hover mapsite" id="footer'.$num_footer.'">
            <p data-img="'.indexImagesPath($arr[0]['img']).'" id="floating'.($num_footer+1).'" data-href="'.$arr[0]['path'].$arr[0]['id'].'">'.$arr[0]['def'].'<span><br>~'.$arr[0]['tilde'].'</span></p>
        </TD> 
        <TD>
            <TABLE > ';        
            for ($i=1; $i < count($arr); $i++) {                             
       echo '   <TR>
                    <TD class="mapsite" colspan="2" id="'.str_replace("#","flo-",$arr[$i]['id']).'" >
                        <p data-img="'.indexImagesPath($arr[$i]['img']).'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'">'.$arr[$i]['def'].'<span> <br>~'.$arr[0]['tilde'].'</span></p>
                        <p data-img="'.indexImagesPath($arr[$i]['img']).'" data-href="'.$arr[$i]['path'].$arr[$i]['id'].'" class="KEYWORDS">'.$arr[$i]['keywords'].'<span> <br>~</span></p>
                       
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

function indexImagesPath($valimg)// index.php
{
    if (!$valimg){return "./dist/images/no-foto.png";}
    else{return $valimg;}
}

///////////////////////////////////////

function contentListGoupMenu($arr) //правое меню группа
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

function contentListGoupMenuVideo($arr) //правое меню группа
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
function tabContent($arr,$curr_page,$iterator) //
{
echo ' 
<div class="row" style="margin-right: -15px;">
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div style="background: #fff;
            border: 1px solid rgb(221, 221, 221);
            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
            border-radius: 4px;
            padding: 15px;
            
                ">
            <ul id="myTab'.$iterator.'" class="nav nav-tabs" style="margin-bottom: 15px;">
                <li ><a href="#harakteristiki'.$iterator.'" data-toggle="tab">Характеристики</a></li>
                <li  class="active"><a href="#instrukciya'.$iterator.'" data-toggle="tab">Инструкция</a></li> 
            </ul>
            <div id="myTabContent'.$iterator.'" class="tab-content">
                <div class="tab-pane fade " id="harakteristiki'.$iterator.'">
                '; echo $arr[$curr_page]['harakteristiki_def'];echo'
                </div>
                <div class="tab-pane fade in active" id="instrukciya'.$iterator.'">
                    <!-- часть1 -->
                    ';  echo $arr[$curr_page]['instrukciya_def'];echo' 
                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                            <div id="carousel'.$iterator.'" class="carousel slide" data-ride="carousel" style="display: inline-block;">
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
                                <a class="left carousel-control" href="#carousel'.$iterator.'" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Предыдущий</span>
                                </a>
                                <a class="right carousel-control" href="#carousel'.$iterator.'" role="button" data-slide="next">
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
/////////////////////////////// ФУРНИТУРА START
function tabContent2($arr,$iterator) //
{
echo ' 
<div class="row" style="margin-right: -15px;">
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div style="background: #fff;
            border: 1px solid rgb(221, 221, 221);
            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
            border-radius: 4px;
            padding: 15px;
            
                ">
            <ul id="myTab'.$iterator.'" class="nav nav-tabs" style="margin-bottom: 15px;">
                <li ><a href="#harakteristiki'.$iterator.'" data-toggle="tab">Характеристики</a></li>
                <li  class="active"><a href="#instrukciya'.$iterator.'" data-toggle="tab">Инструкция</a></li> 
            </ul>
            <div id="myTabContent'.$iterator.'" class="tab-content">
                <div class="tab-pane fade " id="harakteristiki'.$iterator.'">
                '; echo $arr['harakteristiki_def'];echo'
                </div>
                <div class="tab-pane fade in active" id="instrukciya'.$iterator.'">
                    <!-- часть1 -->
                    ';  echo $arr['instrukciya_def'];echo' 
                        <div class="row" style="margin-bottom: 15px; margin-left: 15px;">   
                            <div id="carousel'.$iterator.'" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                                <div class="carousel-inner">
                                ';                                                        
                                    for ($i=0; $i < count($arr['instrukciya_carousel']); $i++) {  
                                    echo'
                                        <div class="item ';echo ($i==0 ? 'active' : '');echo'">
                                            <a class="thumbb" href="#" data-image-id="" data-toggle="modal" data-title="';echo $arr['instrukciya_carousel'][$i]['title'];echo'" 
                                            data-image="';echo $arr['instrukciya_carousel'][$i]['img'];echo'" data-target="#image-gallery">
                                                <img  
                                                    src="';echo $arr['instrukciya_carousel'][$i]['img'];echo'"
                                                    data-src="';echo $arr['instrukciya_carousel'][$i]['img'];echo'"
                                                    class="center-block   img-rounded    bar "
                                                    data-toggle="modal"                                                                                                                    
                                                    alt="';echo $arr['instrukciya_carousel'][$i]['title'];echo'"                                                                                                                         
                                                >
                                            </a>
                                        </div>
                                        ';
                                    }
                             echo '
                                </div>
                                <!-- Элементы управления -->
                                <a class="left carousel-control" href="#carousel'.$iterator.'" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Предыдущий</span>
                                </a>
                                <a class="right carousel-control" href="#carousel'.$iterator.'" role="button" data-slide="next">
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



///////////////////////////////

function tblVPI($arr,$curr_page) //
{
    $countarr = count($arr[$curr_page]['composition_article']);
     ($countarr < 2) ? $marginbottom='margin-bottom: 15px;' : $marginbottom='';
   
    for ($j=0; $j < $countarr; $j++) {
        
        
        $a=$arr[$curr_page]['composition_article'][$j];
        if ($a[0]['articul_500STP']=="")// выбор комплектующих
        {
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
                          
                                     
                            <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Список</th>                               
                                        <th>Артикул</th>
                                        <th>Цвет&nbsp;/&nbsp;материал</th>
                                        <th>Описание</th> 
                                        <th class="">
                                        <!-- кнопка VPI -->
                                            <button type="button" id="each_addvpi_'.$j.'" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button>                                         
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
        }else  // выбор артикула 500STP
        {
            echo '    
            <div class="row" style="'; echo $marginbottom ; echo ' margin-left: 15px; padding-top: 15px;">
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
                                        echo ($i==1) ? 'class="animated" data-objfurnid="'.$a[0]['id_table']."\">" : '>';
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
    }//for
    echo' 

   
  


    ';                      
}
function tblVPI2($arr) //
{
    $countarr = count($arr['composition_article']);
     ($countarr < 2) ? $marginbottom='margin-bottom: 15px;' : $marginbottom='';
   
    for ($j=0; $j < $countarr; $j++) {
        
        
        $a=$arr['composition_article'][$j];
        if ($a[0]['articul_500STP']=="")// выбор комплектующих
        {
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
                          
                                     
                            <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Список</th>                               
                                        <th>Артикул</th>
                                        <th>Цвет&nbsp;/&nbsp;материал</th>
                                        <th>Описание</th> 
                                        <th class="">
                                        <!-- кнопка VPI -->
                                            <button type="button" id="each_addvpi_'.$j.'" class="btn btn-primary" style="float:right;"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> ВПИ</button>                                         
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="calcresult">
                                    
                                    ';
                                
                                    for ($i=1; $i < count($a); $i++) {  

                                        if (file_exists($a[$i]['img'])) {
                                            $img=$a[$i]['img'];//Файл существует
                                        } else {
                                            $img ="./dist/filesdb/images/pagevpi/no-foto.png";//Файл  не существует
                                        }

                                echo'
                                    <tr>
                                        <td><img src="';echo $img;echo'"  alt="';echo $a[$i]['def'];echo'" ></td>                                   
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
        }else  // выбор артикула 500STP
        {
            echo '    
            <div class="row" style="'; echo $marginbottom ; echo ' margin-left: 15px; padding-top: 15px;">
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
                                        if (file_exists($a[$i]['img'])) {
                                            $img=$a[$i]['img'];//Файл существует
                                        } else {
                                            $img ="./dist/filesdb/images/pagevpi/no-foto.png";//Файл  не существует
                                        }
                                echo'
                                    <tr>
                                        <td><img src="';echo $img;echo'"  alt="';echo $a[$i]['def'];echo'" ></td>
                                        <td>';echo $a[$i]['count'];echo'</td>
                                        <td   ';
                                        echo ($i==1) ? 'class="animated" data-objfurnid="'.$a[0]['id_table']."\">" : '>';
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
    }//for
    echo' 

   
  


    ';                      
}

///////////////////////////////

function contentPage($arr,$curr_page,$article_id) //
{
echo' 
<!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page"> 
';
for ($i=0; $i < count($arr); $i++) { 
    echo '
        <article  id="';echo str_replace("#","",$arr[$i][0]['id']).'">
            <section >
                <div class="page-header"     >
                    <h1 itemprop="name">'; echo $arr[$i][0]['def'];echo'</h1>
                </div>                   
                <div class="bs-callout bs-callout-warning cont" id="';echo str_replace("#","",$arr[$i][$curr_page]['id']);echo'"> ';                   
                    tblVPI($arr[$i],$curr_page);//ВПИ                   
                    // tblVPI2($arr[$i][$curr_page]);//ВПИ                   
                    tabContent($arr[$i],$curr_page,$i);
                   
                // var_dump($arr[$i][1]['propertiesTable']);
                           
               if (isset($arr[$i][1]['propertiesTable'])){
                   propertiesTableContent($arr[$i][1]['propertiesTable']);
               }
                    
                echo'
                </div> <!--/bs-callout bs-callout-warning cont/-->
            </section> 
        </article> 
    ';    
} 
echo '
    </div>
<!-- /main  -->
';
// sideMenu($arr,$curr_page);
}//contentPage
///////////////////////////////

function contentPage2($arr) //
{
echo' 
<!-- main  -->
    <div class="col-md-8 col-md-8-non" role="main" id="main-page"> 
';
for ($i=0; $i < count($arr); $i++) { 
    echo '
        <article  id="';echo str_replace("#","",$arr[$i][0]['id']).'">
            <section >
                <div class="page-header"     >
                    <h1 itemprop="name">'; echo $arr[$i][0]['def'];echo'</h1>
                </div> ';
                $arr_sub=$arr[$i];
                for ($j=1; $j < count($arr_sub); $j++) { 
                    // var_dump($arr_sub[$j]);
             echo '    
                <div class="bs-callout bs-callout-warning cont" id="';echo str_replace("#","",$arr_sub[$j]['id']);echo'"> ';                   
                    tblVPI2($arr_sub[$j]);//ВПИ  
                                    
                    tabContent2($arr_sub[$j],$j);
                   
                // var_dump($arr[$i][1]['propertiesTable']);
                           
               if (isset($arr_sub[$j]['propertiesTable'])){
                   propertiesTableContent($arr_sub[$j]['propertiesTable']);
               }
                    
                echo'
                </div> <!--/bs-callout bs-callout-warning cont/-->
                ';    
            } 
            echo '

            </section> 
        </article> 
    ';    
} 
echo '
    </div>
<!-- /main  -->
';
// sideMenu($arr,$curr_page);
}//contentPage2

?>  
<?php
// start function
function propertiesTableContent($arr)
{
?>    
   <div class="row" style="margin-top: 15px; margin-left: 15px;">
        <div class="row col-xs-12 col-sm-12 col-md-12" style="background: #fff;
            border: 1px solid rgb(221, 221, 221);
            box-shadow: 0.5em 0.5em 10px rgba(100,100,100,0.3);
            border-radius: 4px;
            padding: 15px;
            ">    
            <div class="row col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">                                                           
                <div class="row">                                                
                    <table class="table table-striped table-responsive">                        
                        <tbody> 
                        <tr>  
                            <?php foreach($arr[0] as $key=>$val) {  ?>    
                                    <th><?= $val?></th>     
                            <?php }?> 
                                </tr>
                                
                             <?php foreach($arr[1] as $key=>$val) {  ?> 
                                <tr>  
                                <?php foreach($val as $a) {  ?> 
                                    <td><?= $a?></td>           
                                <?php }?> 
                                </tr> 
                            
                             <?php }?>  
                        </tbody>
                    </table>
                </div>                              
            </div>
        </div>
   </div>                             

<?php
} // end function
?>
<?php

/////////////////////////////// ФУРНИТУРА END



                