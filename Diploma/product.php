<?php
session_start();
$_SESSION['product']="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
include ("func.inc");
if (! isset($_COOKIE['userid'])){
//srand ((double) microtime( ) * 1000000);
//$uniq_id = uniqid(rand());
$uniq_id = uniqid('');
setcookie ('userid', $uniq_id, time( )+2592000);
}
//else{echo $_COOKIE["userid"];}




//echo "<script>alert(\"".$_SESSION['p']."\");</script>";
if($_SESSION['p']==""){$_SESSION['p']=1;}

$a=get_category();// вся таблица		
        foreach($a as $kk=>$vv)
        {
	    $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   $bd_category_name[]=$bd;
      }
    $category_name=db_select_category_name($_GET['n']);	

  $background_width=1400;
  $background_height=1416; 
  $products_height=$background_height-844;
  $Bg_top=$background_height-94;
  $products_top=$background_height-515;

/////////////////////////////////////////// 
  $img=substr(strrchr($_GET['path'], "/"), 1);
  //echo $img; exit(0);
  $bd_c_product=get_products_img($img);
 // echo $bd_curr_product['id_category']; exit(0);
  $bd_products=get_products_category($_GET['n']);
  
  // запись в популЯрные товары
  db_add_exists_popular_product($bd_c_product['id_product']);
  
  $bd_product_img=db_select_all_img($bd_c_product['id_product']);// все имена картинок
  //echo $bd_product['name_file']; exit(0);
 // echo $bd_product_img[4]['name_file'].'<br>';
  //echo strstr($bd_product_img[4]['name_file'], '_', true); exit(0);
  
// echo $bd_product_img['id_category']; exit(0);
//echo $bd_c_product['id_category'];
  $name_category=db_select_category_name($bd_c_product['id_category']);
 // echo $name_category; exit(0);
  $bd_curr_product=get_product($bd_c_product['id_product']);
  $dir="GDS/".strtoupper(translateLatin($name_category))."/";
// $dir="GDS/".strtoupper(translateLatin($name_category['name']))."/";
 // echo sizeof($bd_product_img).'<br>';

  foreach($bd_product_img as $kk=>$vv)
    {   
        //$urlbackgroundnum[$kk]=substr(strrchr(strstr($bd_product_img[$kk]['name_file'], '_', true), "n"), 1);
	$k=substr(strrchr(strstr($bd_product_img[$kk]['name_file'], '_', true), "n"), 1)-1;
//	echo '$k '.$k.'<br>';
	$urlbackground[$k]=$dir.$bd_product_img[$kk]['name_file'];
	$urlbackgroundnum[$k]=substr(strrchr(strstr($bd_product_img[$kk]['name_file'], '_', true), "n"), 1);
	
//    echo $kk.': '.$dir.$bd_product_img[$kk]['name_file'].'<br>';	
//    echo substr(strrchr(strstr($bd_product_img[$kk]['name_file'], '_', true), "n"), 1).'<br>';	
    }
    //echo $urlbackground[12];
    //echo $urlbackgroundnum[12];
    //echo $urlbackground[13];
    //echo $urlbackgroundnum[13];
//exit(0);
///////////////////////////////////	 
 //  echo $dir.$bd_product_img[9]['name_file']; exit(0);
 // echo $dir; exit(0);
  if ($bd_curr_product['oldprice']!=0){$val_old=number_format($bd_curr_product['oldprice'], 0, ',', ' ').'руб';}else{$val_old='';}
  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>product</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetproduct.css" />
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetfoto.css" /> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png"> 
 <script src="JS/product.js"></script>
 <script>
 function scrollWin() {
    window.scrollBy(0, 300);
}
var $setvar=1;
var leftt=0;
//Math.max(window.pageYOffset, documentElement.scrollTop, body.scrollTop)
function currgoods()
    { 
      document.getElementById(\'2hidl_num+\').value='.$_SESSION['p'].';
      document.getElementById(\'2hidl_num-\').value='.$_SESSION['p'].';
      document.getElementById(\'curr\').submit(); 
      
    }
 
</script>
 </head>
 <body>
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;">
 
 <div id=category_name class=category_name >'.$category_name.'</div>
 <a href="category.php?n='.$_GET['n'].'" class=back_to_catalog>ВЕРНУТЬСЯ В КАТАЛОГ</a>
 
 <div id=new_products class=new_products border=0 style="position:absolute;top:305px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">			 
	    
	     
	     <div style="position:absolute;top:34px;left:501px;width:370px;height:203px;display: inline-block;margin:0 auto;"><div id=ProductName class=ProductName>'.$bd_curr_product['name'].'<img style="position:relative;top:-10px;left:0px;"src=images/SeparateLine.png>
	     <div id=description_of_goods class=description_of_goods>'.$bd_curr_product['description'].'<br><br><br>
	    ';
 if (($bd_curr_product['name_variation1']!="")||($bd_curr_product['name_variation2']!="")||($bd_curr_product['name_variation2']!=""))
 {	 
	echo '			
				 <div class=choice_of_a_variant >Выберите вариант:
				     <div style="position:absolute;top:-8.5px;left:137px;width:223px;height:31px;overflow:hidden;">
				
					   <select class=choice_of_a_variant_select name="sel" id=sel onchange="Sel();">
					   ';									   
			if 	($bd_curr_product['name_variation1']!="") {echo '<option value="1">'.$bd_curr_product['name_variation1'].'</option>'; }
			if 	($bd_curr_product['name_variation2']!="") {echo '<option value="2">'.$bd_curr_product['name_variation2'].'</option>'; }
                        if 	($bd_curr_product['name_variation3']!="") {echo '<option value="3">'.$bd_curr_product['name_variation3'].'</option>'; }						
					    
	    echo '				
					   </select>			   
				
				      </div>
				 </div>	
				 
	';
 }	
echo '							 
	     </div>			 
	     </div></div>			 
	     
	     <div style="position:absolute;top:39px;left:900px;width:221px;height:187px;border:1px solid #dbdbdb;margin:0 auto;overflow: hidden;">
	     
	     <div id=val_old class=val_old>'.$val_old.'</div>
	     <div id=val class=val>'.number_format($bd_curr_product['price'], 0, ',', ' ').'руб.</div>
	     
		'; 
		if ($bd_curr_product['quantity']>0)
		{
echo '		 
	     
	     <div id=Available class=Available><img src=images/Available.png><span>есть в наличии</span></div>
		'; 
		}
		else
		{
		    echo '	
		<div id=Available class=Available><span>нет в наличии</span></div>
                    ';				
		}
echo '			 
	     
	     
	     <div style="position:absolute;top:116px;left:-1px;width:222px;height:71px;border:1px solid #dbdbdb;margin:0 auto;"> 
	     <form name=shopping_cart_add  id=shopping_cart_add target="ifrm7" action = "shopping_cart_add.php" method = "post">
	     <input type=hidden name="name" value="'.$bd_curr_product['name'].'">
             <input type=hidden name="price" value="'.$bd_curr_product['price'].'">
	     <input type=hidden name="id_category" value="'.$bd_curr_product['id_category'].'"> 
	     <input type=hidden name="id_product" value="'.$bd_curr_product['id_product'].'"> 
	     <input type=hidden name="variation" id=variation value=0>
	     <input type=hidden name="name_variation1" value="'.$bd_curr_product['name_variation1'].'">
             <input type=hidden name="name_variation2" value="'.$bd_curr_product['name_variation2'].'"> 			 
             <input type=hidden name="name_variation3" value="'.$bd_curr_product['name_variation3'].'"> 			 
	     <input type=hidden name="description" value="'.$bd_curr_product['description'].'"> 			 
	     <input type=hidden name="bb_cart" id=bb_cart value="'.$_GET['path'].'">
	     <input type=hidden name="case" value=1>
	     </form> 
	     
	     <div style="position:absolute;top:18px;left:47px;width:129px;height:39px;background-color:#ed1651;">
	     <div><img style="position:relative;top:9px;left:15px;"src=images/cart_icon.png><div class=cart onclick="document.getElementById(\'shopping_cart_add\').submit();">КУПИТЬ</div></div>
	     </div></div></div>
	     <div style="position:absolute;top:249px;left:900px;width:40px;height:40px;margin:0 auto;">
	     <img style="position:relative;top:0px;left:0px;"src=images/delivery.png><div class=delivery>БЕСПЛАТНАЯ ДОСТАВКА<br><span>по всей России</span></div></div>
	     <div style="position:absolute;top:308px;left:900px;width:40px;height:40px;margin:0 auto;">
	     <img style="position:relative;top:0px;left:0px;"src=images/hotline.png><div class=delivery>ГОРЯЧАЯ ЛИНИЯ<br><span>8 800 000-00-00</span></div></div>
	     <div style="position:absolute;top:365px;left:900px;width:40px;height:40px;margin:0 auto;">
	     <img style="position:relative;top:0px;left:0px;"src=images/present.png><div class=delivery>ПОДАРКИ<br><span>каждому покупателю</span></div></div>
	     
             <div class=selected_product  >
	     <div id=selected_product style="position:relative;top:20px,left:20px;margin:10px 10px;
                width:460px;
                height:460px;
		background: url('.$_GET['path'].')center no-repeat;background-size:contain;"></div>
	     <p><div><img class=badge_img style="top:2px;left:2px;"src=images/badge_'.$bd_curr_product['badge'].'.png><span id=badgetxt class=badge_'.$bd_curr_product['badge'].'>'.strtoupper($bd_curr_product['badge']).'</span></div></p>
	     </div>
	     
	    
	     
             
	     <div id=LeftButton class="nobutton" style="position:absolute;top:515px;left:71px;width:8px;height:13px;background:url(images/arrowleftnon.png);"onclick="toleftt(this);"></div>		 
	     
	     <div id=RightButton class=
	      ';
	     
	     if ($urlbackgroundnum[4]==5)
	     {
	     echo'
	     "button" style="position:absolute;top:515px;left:392px;width:8px;height:13px;background:url(images/arrowright.png);"onclick="torightt(this);"></div>
	      ';			
	     }
	     else
	     {
	     echo'
	     "nobutton" style="position:absolute;top:515px;left:392px;width:8px;height:13px;background:url(images/arrowrightnon.png);"onclick="torightt(this);"></div>
	      ';	 
	     }
	     
	     
	     
	     
	     echo'		 
	     
	    <div id="container1"  class="productwrap" style="display:block;">	
	    <ul>
              <li>
		 <div id=product_detalis1 class="product_detalis
		 "style="top:23.5px;border:2px solid rgb(0,0,0);"
		  onClick="borderClick(this);"
                  onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				  
		 >
	         <div style="background: url('.$_GET['path'].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_1"type=hidden name="bb" value="'.$urlbackground[0].'">
		 </div>
		 
	     </li>
	     ';
	     
	     if (isset($urlbackground[1])&&($urlbackgroundnum[1]==2))
	     {
	     echo'

             <li> 
		 <div id=product_detalis2 class="product_detalis" 
		 onClick="borderClick(this);"	
		 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"		 
		 >
	         <div style="background:url('.$urlbackground[1].')center no-repeat;				
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_2"type=hidden name="bb" value="'.$urlbackground[1].'">
		 </div>
		 
	     </li>
	     ';
	     }
	     
	     if (isset($urlbackground[2])&&($urlbackgroundnum[2]==3))
	     {
	     echo'

             <li> 
		 <div id=product_detalis3 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[2].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_3"type=hidden name="bb" value="'.$urlbackground[2].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[3])&&($urlbackgroundnum[3]==4))
	     {
	     echo'
             <li> 
		 <div id=product_detalis4 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		<div style="background: url('.$urlbackground[3].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_4"type=hidden name="bb" value="'.$urlbackground[3].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[4])&&($urlbackgroundnum[4]==5))
	     {
	     echo'
	     
             <li> 
		 <div id=product_detalis5 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[4].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_5"type=hidden name="bb" value="'.$urlbackground[4].'">
		 <input id="arrow1"type=hidden name="arrow1" value="1">
		 </div>
		 
            </li>
	    ';
	     }
	     else
	     {
		echo'
		<input id="arrow1"type=hidden name="arrow1" value="0">
                ';				
	     }
	     if (isset($urlbackground[5])&&($urlbackgroundnum[5]==6))
	     {
	     echo'
             <li> 
		 <div id=product_detalis6 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[5].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_6"type=hidden name="bb" value="'.$urlbackground[5].'">
		 </div>
		
            </li>
	    ';
	     }
	     
	    
	     echo'

        </ul>				 
		 
	     </div>	
            ';

	     
	      echo'		 
	     
	    <div id="container2"  class="productwrap" style="display: none;">	
	    <ul>
	    ';
	    
	    
	    if (isset($urlbackground[6])&&($urlbackgroundnum[6]==7))
	     {
	     echo'
	    
              <li>
		 <div id=product_detalis7 class="product_detalis"
		 
		  onClick="borderClick(this);"
                  onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				  
		 >
	         <div style="background: url('.$urlbackground[6].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_7"type=hidden name="bb" value="'.$urlbackground[6].'">
		 </div>
		 
	     </li>
	     ';
	     }
	     if (isset($urlbackground[7])&&($urlbackgroundnum[7]==8))
	     {
	     echo'

             <li> 
		 <div id=product_detalis8 class="product_detalis" 
		 onClick="borderClick(this);"	
		 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"		 
		 >
	         <div style="background:url('.$urlbackground[7].')center no-repeat;				
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_8"type=hidden name="bb" value="'.$urlbackground[7].'">
		 </div>
		 
	     </li>
	     ';
	     }
	     
	     if (isset($urlbackground[8])&&($urlbackgroundnum[8]==9))
	     {
	     echo'

             <li> 
		 <div id=product_detalis9 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[8].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_9"type=hidden name="bb" value="'.$urlbackground[8].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[9])&&($urlbackgroundnum[9]==10))
	     {
	     echo'
             <li> 
		 <div id=product_detalis10 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		<div style="background: url('.$urlbackground[9].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_10"type=hidden name="bb" value="'.$urlbackground[9].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[10])&&($urlbackgroundnum[10]==11))
	     {
	     echo'
	     
             <li> 
		 <div id=product_detalis11 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[10].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_11"type=hidden name="bb" value="'.$urlbackground[10].'">
		 <input id="arrow2"type=hidden name="arrow2" value="1">
		 </div>
		 
            </li>
	    ';
	     }
	     else
	     {
		echo'
		<input id="arrow2"type=hidden name="arrow2" value="0">
                ';				
	     }
	     if (isset($urlbackground[11])&&($urlbackgroundnum[11]==12))
	     {
	     echo'
             <li> 
		 <div id=product_detalis12 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[11].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_12"type=hidden name="bb" value="'.$urlbackground[11].'">
		 </div>
		
            </li>
	    ';
	    }
	     
	    
	     echo'

    </ul>				 
		 
	     </div>	
            ';
	    
	    
	      echo'		 
	     
	    <div id="container3"  class="productwrap" style="display: none;">	
	    <ul>
	    ';
	    
	    if (isset($urlbackground[12])&&($urlbackgroundnum[12]==13))
	     {
	     echo'
	    
              <li>
		 <div id=product_detalis13 class="product_detalis"
		 
		  onClick="borderClick(this);"
                  onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				  
		 >
	         <div style="background: url('.$urlbackground[12].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_13"type=hidden name="bb" value="'.$urlbackground[12].'">
		 </div>
		 
	     </li>
	     ';
	     }
	     if (isset($urlbackground[13])&&($urlbackgroundnum[13]==14))
	     {
	     echo'

             <li> 
		 <div id=product_detalis14 class="product_detalis" 
		 onClick="borderClick(this);"	
		 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"		 
		 >
	         <div style="background:url('.$urlbackground[13].')center no-repeat;				
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_14"type=hidden name="bb" value="'.$urlbackground[13].'">
		 </div>
		 
	     </li>
	     ';
	     }
	     
	     if (isset($urlbackground[14])&&($urlbackgroundnum[14]==15))
	     {
	     echo'

             <li> 
		 <div id=product_detalis15 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[14].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_15"type=hidden name="bb" value="'.$urlbackground[14].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[15])&&($urlbackgroundnum[15]==16))
	     {
	     echo'
             <li> 
		 <div id=product_detalis16 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		<div style="background: url('.$urlbackground[15].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_16"type=hidden name="bb" value="'.$urlbackground[15].'">
		 </div>
		 
            </li>
	    ';
	    }
	     
	     if (isset($urlbackground[16])&&($urlbackgroundnum[16]==17))
	     {
	     echo'
	     
             <li> 
		 <div id=product_detalis17 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[16].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_17"type=hidden name="bb" value="'.$urlbackground[16].'">
		 <input id="arrow3"type=hidden name="arrow3" value="1">
		 </div>
		 
            </li>
	    ';
	     }
	     else
	     {
		echo'
		<input id="arrow3"type=hidden name="arrow3" value="0">
                ';				
	     }
	     if (isset($urlbackground[17])&&($urlbackgroundnum[17]==18))
	     {
	     echo'
             <li> 
		 <div id=product_detalis18 class="product_detalis" 
		 onClick="borderClick(this);"	
                 onMouseOut="borderOut(this);"
                 onMouseOver="borderOver(this);"				
		 >
		 <div style="background: url('.$urlbackground[17].')center no-repeat;
		 background-size:contain;width:50px;height:50px;position:relative;margin:3px 3px;"></div>
		 <input id="bb_18" type=hidden name="bb" value="'.$urlbackground[17].'">
		 </div>
		
            </li>
	    ';
	    }
	     
	    
	     echo'

        </ul>				 
		 
	     </div>	
            

 
 
	    
	    
             </div>				  
	       <div id=Popular_products class=Popular_products border=0 
	     style="
	     top:'.$products_top.'px;
	     left:115px;
	     width:1170px;
	     height:400px;	        	 
	     position: absolute;
	     background-color: #ffffff;
	     box-shadow: 1px 0px 3px #a9a492;">	 
	     
	     <div class=product>Другие товары из категории &#171;'.$category_name.'&#187;</div>
	     
	     <div style="position: absolute;top:63px;left:0px;z-index:0;">
	     <img src="images/band_up2.png"  >
	     </div>			
	     
	     <div style="position: absolute;top:76px;left:293px;z-index:1;">
	     <img src="images/band_left2.png"  >
	     </div>
	     
	      <div style="position: absolute;top:76px;left:586px;z-index:1;">
	     <img src="images/band_Vcenter2.png"  >
	     </div>
	     
	      <div style="position: absolute;top:76px;left:879px;z-index:1;">
	     <img src="images/band_right2.png"  >
	     </div>
	     
	      <form action="other_goods.php?n='.$_GET['n'].'" method=POST target="ifrm2" onsubmit="">				 
	     <div id=button_foto style="position: absolute;top:32px;left:1103px;width:13px;height:17px">
	     <div  style="position: absolute;">
	     <input type="image" class=nobutton  src="images/PreviousButtonNon.png" alt="Previous" id=2PreviousButton_new disabled="disabled"></div>
	     <input id="2hidl-"type=hidden name="hidl" value="-">
	     <input id="2hidl_num-" type=hidden name="page" value="1">
	     
	     </form>
	     <form action="other_goods.php?n='.$_GET['n'].'" method=POST target="ifrm2" onsubmit="" id=curr>			  
	     <input id="2hidl+"type=hidden name="hidl" value="+">
	     <input id="2hidl_num+" type=hidden name="page" value="1">			 
	     <div  style="position: absolute;left:24px;">			 
	     <input type="image" class=button src="images/NextButton.png" alt="Next" id=2NextButton_new ></div></div>
	     </form>';			
            cellA (0,$bd_products,$name_cells,8,78,0);
	    cellA (1,$bd_products,$name_cells,9,78,293);
	    cellA (2,$bd_products,$name_cells,10,78,586);
	    cellA (3,$bd_products,$name_cells,11,78,879);
	    echo '
	    </div>	
		 ';	
	header_logo();
	echo ' 
	     <form action="" method=POST>
	     <div class="menu_top">
	';
	menutop($bd_category_name);
	echo '
	     </form>
	     
	     ';	
	     bg ($Bg_top);
	     
       echo '
	     
	     </div>
 <iframe name=ifrm7 id=ifrm7 height="1000" width="1000"style=" border: 1px solid red;display:none;"onLoad=cart_add();></iframe>			 
 <iframe name=ifrm1 id=ifrm1 height="1000" width="1000"style=" border:2px solid rgb(0,0,0);display:none;"onLoad=next();></iframe>
 <iframe name=ifrm2 id=ifrm2 height="1000" width="1000"style=" border: 1px solid red;display:none;"onLoad=next2();></iframe>
 
<!-- <script type="text/javascript">scrollWin();</script> --> 
 ';
 
 if($_SESSION['p']!=0)
 {
echo '		 
 <script type="text/javascript">currgoods();</script>	
 ';
 }
echo '	
 </body> 
</html>	
';

?>
