<?php
session_start();
//$_SERVER['HTTP_REFERER']

 include ("func.inc");

$a=get_category();// вся таблица		
        foreach($a as $kk=>$vv)
        {
	    $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   $bd_category_name[]=$bd;
      }

  $background_width=1400;
  $background_height=1411;

  $products_height=660;
  $Bg_top=$background_height-453;
  $Popular_products_top=$products_height+38;

if (isset($_POST['product_del']))
{
    del_exists_shopping_cart(trim($_COOKIE['userid']),$_POST['id_product'],$_POST['bb_cart_del']);
    unset($_POST['product_del']);
}
  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>shopping cart</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetlogin.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css"/>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
  <script src="JS/shopping_cart.js"></script>
 <style>
 td {
    width: 170px;
    height: 134px;
    max-width: 170px;
    max-height: 134px;
}
td img {
    max-width: 100%;
    max-height: 100%;
}
 </style>
 </head>
 <body>
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;">
 
 <div  class=login >КОРЗИНА</div>
 
 <div id=new_products class=new_products border=0 style="position:absolute;top:272px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">

 <div  style="position:absolute;top:0px;left:0px;width:1170px;height:77px;border-bottom:3px solid #f6f6f6;z-index: 1;margin: 0px 0px;">
 <div  class=titletxt >
 <span style="position:absolute;left:30px">Товар</span>
 <span style="position:absolute;left:484px";>Доступность</span>
 <span style="position:absolute;left:641px">Стоимость</span>
 <span style="position:absolute;left:795px">Количество</span>
 <span style="position:absolute;left:1000px">Итого</span></div>
 </div>
 <!-- <div  style="position:absolute;top:509px;left:0px;width:1170px;height:7px;border-top:2px solid #f6f6f6;z-index: 3;"></div> -->
 
	     <div class=products_scroll style="height:433px;">';
	     $b=get_shopping_cart($_COOKIE["userid"]);
	     
	     $summ=0;
	for ($i=0; $i<sizeof($b);$i++)
            {$n=$i*139;

	     $db_product=get_product($b[$i]['id_product']);
	     $b3=number_format($b[$i]['price'], 0, ',', ' ');
	     
	     $c=$b[$i]['price']*$b[$i]['scount'];
	     $summ=$summ+$c;
	     $b4=number_format($c, 0, ',', ' ');
	     echo '			 
	     <table class="show_product" style="left:0px;top:'.$n.'px;border-bottom-color: #f6f6f6;border-bottom-style:2px;border-top: 2px solid #f6f6f6;border-bottom: 2px solid #f6f6f6;"><tr>
	     <td class=foto_s style="text-align: center;"><div class=new_foto style="margin:-83px 0px;"><p><img  class=foto src='.$b[$i]['name_file_img'].'></p></div></td>
	     <td class=foto_s_title><p>'.$b[$i]['name'].'</p></td>
	     <td class=foto_s_access>
	     ';
	     if ($db_product['quantity']>0)
	     {echo 'Есть в наличии';}
	     else{echo 'Нет в наличии';}
	     echo '				 
	     </td>
	     <td  class=foto_s_value style="text-align: center;width:133px;"><span id=s_value_'.$i.'>'.$b3.'</span><span>руб.</span></td>
	     <td class=foto_s_access style="width:198px;">
	     <div class=foto_s_amount><div id=minuscount_'.$i.' class=foto_s_amount1 onClick="minus(this);"><p>-</p></div><div  class=foto_s_amount2><p id=count_'.$i.' >'.$b[$i]['scount'].'</p></div><div id=plusscoun_'.$i.' class=foto_s_amount3 onClick="plus(this);"><p>+</p></div></div>
	     </td>
	     <td  class=foto_s_sum style="text-align: center;width:140px;"><span id=s_sum_'.$i.'>'.$b4.'</span><span>руб.</span></td>
	     <td style="text-align:left;width:65px;cursor:pointer;"id=del_'.$i.' onClick="del(this);"><img src=images/X.png></td>
	     </tr></table>
              <form name=shopping_cart_add_'.$i.'   id=shopping_cart_add_'.$i.'  target="ifrm8" action = "shopping_cart_add.php" method = "post">
	      <input type=hidden name="id_product" value="'.$b[$i]['id_product'].'"> 
	      <input type=hidden name="case_'.$i.'" id=case_'.$i.' value=1>
	      <input type=hidden name="bb_cart_'.$i.'" id=bb_cart_'.$i.' value='.$b[$i]['name_file_img'].'>
	      <input type=hidden name="num" id=num value='.$i.'>
              </form>
               <form name=shopping_cart_del_'.$i.'   id=shopping_cart_del_'.$i.'  action = "" method = "post">
	      <input type=hidden name="id_product" value="'.$b[$i]['id_product'].'">			  
	      <input type=hidden name="product_del"  value='.$i.'>
	      <input type=hidden name="bb_cart_del" id=bb_cart_del value='.$b[$i]['name_file_img'].'>
              </form>			  
	     ';
	     }
	     $summ=number_format($summ, 0, ',', ' ');
	echo'	 
	     </div>
     
	        <form action="checkout.php" method=POST>
		<input type="submit" style="position: absolute;top:568px;left:829px;width:292px;height:49px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg bb" name="send" value="Оформить заказ">
		 <input id="stage" type=hidden name="stage" value=1>				                
		<form>
	    
	   
        	<a href="'.$_SESSION['product'].'" style="text-decoration:none;"id=referer><div style="position: absolute;top:581px;left:31px;width:190px;height:44px;background-color:#000000;display: inline-block;margin: auto auto;"><p class=back_to_catalog>Вернуться к покупкам</p></div></a> 
		
		<div class=in_total>Итого: <span id=sum class="in_total_r">'.$summ.'</span><span class="in_total_s">руб.</span></div>
		
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
<iframe name=ifrm8 id=ifrm8 height="1000" width="1000"style=" border: 1px solid red;display:none;"onLoad=cart_add2();></iframe>	
 </body>
</html>	
';
?>
