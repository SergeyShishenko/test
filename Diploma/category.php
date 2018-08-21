<?php
session_start();
include ("func.inc");

$a=get_category();// –≤—Å—è —Ç–∞–±–ª–∏—Ü–∞		
        foreach($a as $kk=>$vv)
        {
	   $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   //echo $bd['id_category'];
	   $bd_category_name[]=$bd;
       }
    //$category_current=$bd_category_name[$bd_category_name[0]['id_category']];	
 $category_name=db_select_category_name($_GET['n']);



  //$category_name=$category1_txt;
  $background_width=1400;
  $background_height=2523;
  //$background_height=1873;
  $products_height=$background_height-422;
   //$background_height=1523;
  $Bg_top=$background_height-94;
  $description_baner_category="description_category1.jpg";
  $description_text_category="–û–ü–ò–°–ê–ù–ò–ï –ö–ê–¢–ï–ì–û–†–ò–ò";
  $short_description_text_category="–ö—Ä–∞—Ç–∫–∏–π —Ç–µ–∫—Å—Ç –∫–∞—Ç–µ–≥–æ—Ä–∏–∏";
  $promo_baner_category="promo_banner_category1.jpg";
  $header_promo="–ó–ê–ì–û–õ–û–í–û–ö –ü–†–û–ú–û-–¢–ûBA–†A";
  $price_promo=4540;
  //$header_promo_title="";
  $specification_promo="–û–ø–∏—Å–∞–Ω–∏–µ –ø—Ä–æ–º–æ-—Ç–æ–≤–∞—Ä–∞";
  
  $curr_page=1;

////////////////////////////////////////////////////////////////  
  //                 0+8      1        2        3           4         
 // $name_cells=array('A','A_title','A_val','A_val_old','A_val_old');
/*   $fname="bd_category".$_GET['n'].".txt";
  $a=my_file($fname);
  foreach($a as $kk=>$vv)
  {$bd_category[$kk]=$vv;} */
//////////////////////////////////////////////////////////////////  
   $bd_category=get_products_category($_GET['n']);
   $bd_sizeof = sizeof($bd_category);
   if ($bd_sizeof>17){$number_of_visible=17;}
   else{$number_of_visible=$bd_sizeof;}
    //ÍÓÎË˜ÂÒÚ‚Ó ÔÓÒÚÓ‚ Ì‡ ÒÚ‡ÌËˆÂ

   if ($bd_sizeof>1){$numn="1-";}else{$numn="";}

   $total_pages= floor($bd_sizeof / 17); //ÍÓÎË˜ÂÒÚ‚Ó ÒÚ‡ÌËˆ Ò ‡Á·Ë‚ÍÓÈ
   $a=$bd_sizeof - $total_pages * 17; //ÓÒÚ‡ÚÓÍ
   if ($a >0) {$total_pages++;} 




  //$bd_category1=array("goods/Scooters/3_1.jpg;—AÃŒ A“ ƒÀﬂ ‘–»—“A…ÀA FREESTYLE MF ONE  –A—Õ€… OXELO;114500;9900;new"); 

echo '<!DOCTYPE html>
<html >
 <head>
 <title>category</title>
 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetcategory.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheet.css" />
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css" />
 <link rel="stylesheet" type="text/css" href="stylesheetfoto.css" /> 
<link rel="stylesheet" type="text/css" href="stylemodal-banner-category.css" /> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
 <script src="JS/slider_category.js"></script>

 </head>
 <body>
  <!-- modal -->
				<a href="#x" class="overlay" id="win4"></a>		
				<div class="popup">            
					<img class="is-image" src="images/'.$promo_baner_category.'" alt="banner" />
					<a class="close" title="–ó–∞–∫—Ä—ã—Ç—å" href="#close"></a>
				</div>
		<!-- modal end -->
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;">  
			 
 <div id=category_name class=category_name >'.$category_name.'</div>
 
 <div  class=number_of_visible id=visible >–ü–û–ö–ê–ó–ê–ù–û '.$numn.$number_of_visible.' –ò–ó '.$bd_sizeof.' –¢–û–í–ê–†–û–í</div>
 <div id=new_products class=new_products border=0 style="position:absolute;top:305px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">			 
		    
			 
			 <div id=line1_H style="position: absolute;top:63px;left:0px;z-index:0;">
			 <img src="images/band_up1.png"  >
			 </div>
			 
			 <div id=line2_H style="position: absolute;top:387px;left:0px;z-index:5;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div id=line3_H style="position: absolute;top:711px;left:0px;z-index:2;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div id=line4_H style="position: absolute;top:1035px;left:0px;z-index:2;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div id=line5_H style="position: absolute;top:1359px;left:0px;z-index:0;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div id=line6_H style="position: absolute;top:1683px;left:0px;z-index:5;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div id=line7_H style="position: absolute;top:2007px;left:0px;z-index:2;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <!--  -->
			 
			 <div id=line1-1_V style="position: absolute;top:76px;left:879px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->
			 
			 <div id=line1-2_V style="position: absolute;top:402px;left:293px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line2-2_V style="position: absolute;top:402px;left:586px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line3-2_V style="position: absolute;top:402px;left:879px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->
			 <div id=line1-3_V  style="position: absolute;top:726px;left:293px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line2-3_V  style="position: absolute;top:726px;left:586px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line3-3_V  style="position: absolute;top:726px;left:879px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->			 
			 
			 <div id=line1-4_V style="position: absolute;top:1050px;left:293px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->
			 <div id=line1-5_V style="position: absolute;top:1374px;left:293px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->
			 <div id=line1-6_V style="position: absolute;top:1698px;left:293px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line2-6_V style="position: absolute;top:1698px;left:586px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 
			 <div id=line3-6_V style="position: absolute;top:1698px;left:879px;z-index:1;">
			 <img src="images/band_left2.png"  >
			 </div>
			 <!--  -->
			 
			 <!--  -->			 
			 <div id=button_page class=button_div >			 
			 ';			 
			 // —Ú‡ÌËˆ˚ *****
			 $left=1080;
			 for ($i=$total_pages; $i>0;$i--){if ($i==$curr_page){$class_p ="current_page";}
				 else{$class_p ="page_n";}
		    echo '
			 <form action="category_page.php" method=POST target="ifrm1">
			 <div ><input  id=page_'.$i.'  class="'.$class_p.'" style="left:'.$left.'px;" type=submit value="'.$i.'"></div>
			 <input type=hidden name="page" value='.$i.'>
			 <input type=hidden name="category" value='.$_GET['n'].'>
			 </form>			 
			 ';
			 $left=$left-38;
			 }
			 $left=$left-41;
			 echo '
			 <p><span style="left:'.$left.'px;">–°—Ç—Ä–∞–Ω–∏—Ü—ã</span></p>
			 <input type=hidden id=it_was name="it_was" value='.$curr_page.'>			 
			 </div>				 
			  <div id=button_page2 class=button_div2 style="top:'.($products_height - 55).'px;">			 
			 ';			 
			 // —Ú‡ÌËˆ˚ *****
			 $left=1080;
			 for ($i=$total_pages; $i>0;$i--){if ($i==$curr_page){$class_p ="current_page";}
				 else{$class_p ="page_n";}
		     echo '
			 <form action="category_page.php?n='.$_GET['n'].'" method=POST target="ifrm1">
			 <div ><input  id=page2_'.$i.'  class="'.$class_p.'" style="left:'.$left.'px;" type=submit value="'.$i.'"></div>
			 <input type=hidden name="page" value='.$i.'>
			 <input type=hidden name="category" value='.$_GET['n'].'>
			 </form>			 
			 ';
			 $left=$left-38;
			 }
			 $left=$left-41;
			 echo '
			 <p><span style="left:'.$left.'px;z-index: 12;">–°—Ç—Ä–∞–Ω–∏—Ü—ã</span></p>
			 <input type=hidden id=it_was name="it_was" value='.$curr_page.'>			 
			 </div>				 
			 <div id=description_category ><img class=description_category class=description_category src="images/'.$description_baner_category.'">
			
			 <div id=description_text_category class=description_text_category >'.$description_text_category.'</div>
			 <div id=short_description_text_category class=short_description_text_category >'.$short_description_text_category.'</div> 			 		 
			 </div>			 
			 ';
			 cellA (0,$bd_category,$name_cells,0,78,879);
			 
			 cellA (1,$bd_category,$name_cells,1,402,0);
			 cellA (2,$bd_category,$name_cells,2,402,293);
			 cellA (3,$bd_category,$name_cells,3,402,586);
			 cellA (4,$bd_category,$name_cells,4,402,879);
			 
			 cellA (5,$bd_category,$name_cells,5,726,0);
			 cellA (6,$bd_category,$name_cells,6,726,293);
			 cellA (7,$bd_category,$name_cells,7,726,586);
			 cellA (8,$bd_category,$name_cells,8,726,879);
			 
			 cellA (9,$bd_category,$name_cells,9,1050,0);
			 cellA (10,$bd_category,$name_cells,10,1050,293);			 
			  echo '			 
			 <div id=promo_baner_category >
			 <a href="#win4" id=outlinec class="outlinec" style="text-decoration: none;"><p style="position:relative;top:-5px;z-index:3;">–ü–æ—Å–º–æ—Ç—Ä–µ—Ç—å&nbsp&nbsp+</p></a>	
			 <img class=promo_baner_category src="images/'.$promo_baner_category.'">				 
			 <p id=header_promo class=header_promo >'.$header_promo.'</p>			
			 <div id=specification_promo class=specification_promo >'.$specification_promo.'</div>	
             <div id=price_promo class=price_promo >'.number_format($price_promo, 0, ',', ' ').'<span>—Ä—É–±.</span></div>				 
			 
			 </div>				
			 ';				 
			 cellA (11,$bd_category,$name_cells,11,1374,0);
			 cellA (12,$bd_category,$name_cells,12,1374,293);			
			 
			 cellA (13,$bd_category,$name_cells,13,1698,0);
			 cellA (14,$bd_category,$name_cells,14,1698,293);
			 cellA (15,$bd_category,$name_cells,15,1698,586);
			 cellA (16,$bd_category,$name_cells,16,1698,879);
			  echo '</div>
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
 <iframe name=ifrm1 id=ifrm1 height="1000" width="1000"style=" border: 1px solid red;display:none;"onLoad=next();></iframe>
 </body>
</html>	
';
?>
