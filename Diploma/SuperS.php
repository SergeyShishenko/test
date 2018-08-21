<?php
session_start();
$_SESSION['product']="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
include ("func.inc");
//$uniq_id = generate_password(13);
//$uniq_id = uniqid('');
//setcookie ('userid',$uniq_id, time( )+2592000);

if (! isset($_COOKIE['userid'])){
//srand ((double) microtime( ) * 1000000);

$uniq_id = generate_password(13);
//$uniq_id = uniqid('');
setcookie ('userid', $uniq_id, time( )+2592000);
}
//generate_password(13)
//else{echo $_COOKIE['userid'];}
?>
<!DOCTYPE html>
<html >
 <head>
  <title>Super shop</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheet.css" />
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css" />
<link rel="stylesheet" type="text/css" href="stylesheetfoto.css" /> 
<link rel="stylesheet" type="text/css" href="stylemodal-banner.css" />
<link rel="shortcut icon" href="images/favicon.png" type="image/png">  
 <script src="JS/slider1.js"></script>
 </head>
 <body>

<?php

$_SESSION['p']=0;

$a=get_category();// вся таблица

//print_r $a;exit(0);		
        foreach($a as $kk=>$vv)
        {  $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   $bd_category_name[]=$bd;
    //    echo  $bd['name'].'<br>';
    //     echo  $bd['id_category'].'<br>';
	}
 
  
  $background_width=1400;
  $background_height=2588;
  $Bg_top=$background_height-121;
  $Banner2_top=$background_height-455;
  $Popular_products_top=$background_height-878;
  $promo_baner_top=1379;
  $promo_header1="ЗАГОЛОВОК";
  $promo_header1_title="ПРОМО-ТОВАРА";
  $promo_header2="ЗАГОЛОВОК";
  $promo_header2_title="ПРОМО-ТОВАРА";
  $promo_header3="ЗАГОЛОВОК";
  $promo_header3_title="ПРОМО-ТОВАРА";
  $header_logo_promo="НАЗВАНИЕ";
  $header_logo_promo_title="ПРОМО-ТОВАРА";
  $specification_promo="Описание промо-товара";
  $Supershop_border="SUPER&nbsp;SHOP";
  $banner1="banner1.jpg";
  $promo_banner1="promo_banner1.jpg";
  $promo_banner2="promo_banner2.jpg";
  $promo_banner3="promo_banner3.jpg";
  
  $pages=1;
  
  //                 0+8      1        2        3           4         
 // $name_cells=array('A','A_title','A_val','A_val_old','A_val_old');
 $bd_new_product=db_select_new_products(); 
 $bd_popular_products=db_select_popular_products();
 
//echo sizeof($bd_new_product);  
echo '

		 <!-- modal-->
				<a href="#x" class="overlay" id="win4"></a>		
				<div class="popup">            
					<img class="is-image" src="images/'.$banner1.'" alt="banner" />
					<a class="close" title="Закрыть" href="#close"></a>
				</div>
		<!-- modal end -->
        <div id="wrapper" class=background style=" position: relative; 
		width:'.$background_width.'px;
		height:'.$background_height.'px;
		background-color: #e4e0d6;
		margin: auto auto;
		z-index: 0;
        overflow: hidden;">


		 <div id=new_products class=new_products border=0
			 style="position:absolute;top:633px;left:115px;width:1170px;height:726px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">
			 
		     <div class=product >Новые товары</div>
			 
			 <div style="position: absolute;top:63px;left:0px;z-index:0;">
			 <img src="images/band_up1.png"  >
			 </div>
			 
			 <div style="position: absolute;top:387px;left:0px;z-index:0;">
			 <img src="images/band_Hcenter1.png"  >
			 </div>
			 
			 <div style="position: absolute;top:76px;left:293px;z-index:1;">
			 <img src="images/band_left1.png"  >
			 </div>
			 
			  <div style="position: absolute;top:76px;left:586px;z-index:1;">
			 <img src="images/band_Vcenter1.png"  >
			 </div>
			 
			  <div style="position: absolute;top:76px;left:879px;z-index:3;">
			 <img src="images/band_right1.png"  >
			 </div>
			 
			 <form action="new_products.php?n='.$_GET['n'].'" method=POST target="ifrm1">				 
			 <div id=button_foto style="position: absolute;top:32px;left:1103px;width:13px;height:17px">
			 <div  style="position: absolute;">
			 <input type="image" class=nobutton  src="images/PreviousButtonNon.png" alt="Previous" id=PreviousButton_new disabled="disabled"></div>
			 <input id="hidl-"type=hidden name="hidl" value="-">
			 <input id="hidl_num-" type=hidden name="pages" value="1">
			 
			 </form>
			 <form action="new_products.php?n='.$_GET['n'].'" method=POST target="ifrm1" >			  
			 <input id="hidl+"type=hidden name="hidl" value="+">
			 <input id="hidl_num+" type=hidden name="pages" value="1">			 
			 <div  style="position: absolute;left:24px;">			 
			 <input type="image" class=button src="images/NextButton.png" alt="Next" id=NextButton_new ></div></div>
			 </form>			 
			'; 			
            cellA (0,$bd_new_product,$name_cells,0,78,0);
			cellA (1,$bd_new_product,$name_cells,1,78,293);
			cellA (2,$bd_new_product,$name_cells,2,78,586);
			cellA (3,$bd_new_product,$name_cells,3,78,879);
			
			cellA (4,$bd_new_product,$name_cells,4,402,0);
			cellA (5,$bd_new_product,$name_cells,5,402,293);
			cellA (6,$bd_new_product,$name_cells,6,402,586);
			cellA (7,$bd_new_product,$name_cells,7,402,879);


			
	echo '		 
		 </div>
		
		 <div id="home_banner" class="home_banner"><img src="images/'.$banner1.'"></div>
	
	<div text-decoration="none"><div id="Supershop" class=Supershop border=0>'.$Supershop_border.'</div><div>
		 ';	
		header_logo();
		echo '	
		<div id="header_logo_promo" class=header_logo_promo>
			<div id=logo_promo1-text1 class=logo_promo1-text1 >'.$header_logo_promo.'</div>
			<div id=logo_promo1-text2 class=logo_promo1-text2 >'.$header_logo_promo_title.'</div> 
			<div id=logo_promo1-text3 class=logo_promo1-text3 border=0>'.$specification_promo.'</div>	
		</div>
		<div class="menu_top">';
		menutop($bd_category_name);
		echo '
		
	 <a href="#win4" id=outline class="outline" style="text-decoration: none;"><p style="position:relative;top:-5px;z-index:3;">Посмотреть&nbsp&nbsp+</p></a>	
	  

	  
		 <table id=promo_baner  style="
		 top:'.$promo_baner_top.'px;
		 left:115px;		 
		 height:311px;
         width:1170;		 
		 position: absolute;
		 background-color: #ffffff;
		 z-index: 0;
		 box-shadow: 1px 0px 3px #a9a492;">
			  
			   <td id=td1>
				   <img src="images/'.$promo_banner1.'" style="position: absolute;top:0px;left:0px;width:290px; height:311px;" > 
				    <span id=Promo1-text1 class=Promo1-text1  style="left:25px;width:280px;
					">'.$promo_header1.'<br><span id=Promo1-text2 class=Promo1-text2>'.$promo_header1_title.'</span> 
					</span>
			   </td>
				<td id=td2>  
				   <img src="images/'.$promo_banner2.'"style="position: absolute;top:0px;left:290px;width:290px; height:311px;" >
                    <span id=Promo1-text1 class=Promo1-text1  style="left:285px;width:280px;text-align:right;
					">'.$promo_header2.'<br><span id=Promo1-text2 class=Promo1-text2>'.$promo_header2_title.'</span> 
					</span>				   
			   </td>
			   <td id=td3 >
				   <img src="images/'.$promo_banner3.'" style="position: absolute;top:0px;left:580px;width:590px; height:311px;" >                   	
                    <span id=Promo1-text1 class=Promo1-text1  style="color:white;width:280px;left:615px;
					">'.$promo_header3.'<br><span id=Promo1-text2 class=Promo1-text2>'.$promo_header3_title.'</span> 
					</span>
			   </td>
			 
			 </table>
			 
			 <div id=Popular_products class=Popular_products border=0 
			 style="
			 top:'.$Popular_products_top.'px;
			 left:115px;
			 width:1170px;
			 height:400px;	        	 
			 position: absolute;
			 background-color: #ffffff;
			 box-shadow: 1px 0px 3px #a9a492;">	 
			 
			 <div class=product style="position: absolute;">Популярные товары</div>
			 
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
			 
			  <form action="popular_products.php" method=POST target="ifrm2" onsubmit="">				 
			 <div id=button_foto style="position: absolute;top:32px;left:1103px;width:13px;height:17px">
			 <div  style="position: absolute;">
			 <input type="image" class=nobutton  src="images/PreviousButtonNon.png" alt="Previous" id=2PreviousButton_new disabled="disabled"></div>
			 <input id="2hidl-"type=hidden name="hidl" value="-">
			 <input id="2hidl_num-" type=hidden name="pages" value="1">			 
			 </form>
			 
			 <form action="popular_products.php" method=POST target="ifrm2" onsubmit="">			  
			 <input id="2hidl+"type=hidden name="hidl" value="+">
			 <input id="2hidl_num+" type=hidden name="pages" value="1">			 
			 <div  style="position: absolute;left:24px;">			 
			 <input type="image" class=button src="images/NextButton.png" alt="Next" id=2NextButton_new ></div></div>
			 </form>				 
			  			'; 	
         	if ($bd_popular_products[0]!=""){cellA (0,$bd_popular_products ,$name_cells,8,78,0);}             
			if ($bd_popular_products[1]!=""){cellA (1,$bd_popular_products ,$name_cells,9,78,293);}
			if ($bd_popular_products[2]!=""){cellA (2,$bd_popular_products ,$name_cells,10,78,586);}
			if ($bd_popular_products[3]!=""){cellA (3,$bd_popular_products ,$name_cells,11,78,879);}
			echo '
			</div>
			<div id=Banner2 class=Banner2 border=0 style="position: absolute;top:'.$Banner2_top.'px;left:115px;width:1397px;height:713px;">
			<img src="images/banner2.jpg" style="box-shadow: 1px 0px 3px #a9a492;">
			<div class=Baner2-text1>О магазине<div class=Baner2-text2><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo<br>ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis<br>parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,<br>pellentesque eu, pretium quis, sem.<br><br>
			Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,<br>vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,<br>justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapi</p></div></div>		
			</div>

			 ';	
			 bg ($Bg_top);
			 echo '
			 </div>
			
			';			
?>	
<iframe name=ifrm1 id=ifrm1 height="1000" width="1000"style="position:absolute;top:1000px; border: 1px solid red;display:none;"onLoad=next();></iframe>
<iframe name=ifrm2 id=ifrm2 height="1000" width="1000"style=" border: 1px solid red;display:none;"onLoad=next2();></iframe>
 </body>
</html>
