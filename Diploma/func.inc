<?php
//dbconnect()
//removeDirectory($dir)
//my_file($fnam)
//my_fopen($fnam,$fmod)
//cellA ($num_in_bd,$bd_file,$name_cells,$A,$ft,$fl) 
//menutop($bd_category_name)
//bg ($Bg_top)
//header_logo()
//get_category()
//get_shopping_cart_price_total()
//get_shopping_cart_count()
//get_shopping_cart($uid)
//get_orders($email)
//get_orders_id($id_order)
//get_orders_all_goods_id($id_order)
//db_add_shopping_cart($name,$description,$id_category,$id_product,$userid,$price,$name_variation,$name_file_img,$sdate,$scount)
//get_product($id_product)
//get_products_category($n)
//get_products_img($img)
//get_exists_shopping_cart($userid,$id_product)
//del_exists_shopping_cart($uid,$id_product)
//del_goods_from_order($id_goods,$name_variation)
//db_select_all_img($id_product)
//get_users()
//get_user_email($email)
//get_orders_table()
//db_add_categuryN($n,$name,$quantity)
//db_add_categury($name,$quantity)
//db_add_new_product($category_current)
//db_select_category_name($id_category)
//db_delete_categury($name)
//db_select_img($id_product)
//db_select_new_products()
//db_select_popular_products()
//db_delete_goods($id_product,$curr_category)
//db_delete_user($email)
//strip_data($text)
//is_email($email)
//db_store($login,$phone,$email,$city,$street,$house,$apartment,$password)
//db_update($login,$phone,$email,$city,$street,$house,$apartment,$password)
//db_update_ch($login,$phone,$email,$city,$street,$house,$apartment)
//db_update_status($id_order,$status)
//db_update_category($new_name,$old_name)
//db_compare($email,$field,$table)
//db_compare2($email,$password,$table)
//db_add_exists($name)
//db_add_exists_popular_product($id_product)
//generate_password($number)
//db_clear_temp_img()
//myscandir($dir)
//clear_dir($dir)
//db_copy_img_in_tmp($id_product,$curr_category)
//getNumEnding($number)
//db_add_order($email,$status,$sum_price,$sdate,$shipping,$shipping_comment)
//db_add_orders_all_goods($name,$id_product,$id_category,$id_order,$email,$price,$name_variation,$name_file_img,$scount)
//ucfirst_utf8($stri)
//translateLatin($str)
//translateKirillica($str)
function dbconnect()
    {
    // $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117");
    $dbconn=mysql_connect("localhost", "postgres", "330117");
    return $dbconn; 
    }

function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }  
function my_file($fnam)
    {
     $a=file($fnam);
     if ($a===false)
     {
      echo "Unable to read file ".$fnam."!<br>";
      exit(0);
     }
     return $a;
    }    
function my_fopen($fnam,$fmod)
    {
     $f=fopen($fnam,$fmod);
     if ($f===false)
     {
      echo "Unable to open file ".$fnam." <br>";
      exit(0);
     }
     return $f;
    }
    
    
    
    
    
 //goods/Roller_Skates/2_1.jpg;САМОКАТ TOWN 7 ХРОМ OXELO;2;10500;sale;2
 //          0                          1                 2   3    4  5
function cellA ($num_in_bd,$bd_file,$name_cells,$A,$ft,$fl) 
      {
	 
	  $tt=$ft+224;
     // $b=explode(";",$bd_file[$num_in_bd]);
      
      $q=$bd_file[$num_in_bd];
      if ($q !="")
      {
     // echo $q['id_category']; exit(0);
      $name_category=db_select_category_name($q['id_category']);
    // echo $name_category; exit(0);	  
      $b=db_select_img($q['id_product']);
     // echo $q['id_product']; exit(0);
      $dir="GDS/".strtoupper(translateLatin($name_category))."/".$b[0]['name_file'];
      //echo $dir; exit(0);
    $b[3]=$q['oldprice'];
    $b[4]=$q['badge'];
    $b[2]=$q['price'];
    $b[1]=$q['name'];
    $b[5]=$q['id_category'];
      if ($dir !=="")
      {
	$GLOBALS[$count]=$GLOBALS[$count]+1;  
      if ($b[3] !=0)
      {$n8="&nbsp;руб.";$b3=number_format($b[3], 0, ',', ' '); } 
       else {$b3="";} 
       
      if   (trim($b[4]) =="new")
	   {$n6="images/badge_new_category.png";$b4="<div id=_".$A."_img ><img  class=badge_img src=".$n6."></div>";
	   $n7="<span id=badge_".$A."_txt class=badge_".trim($b[4]).">NEW</span>";$r="руб.";}
	   else 
	       if(trim($b[4]) =="hot")
	       {$n6="images/badge_hot_category.png";$b4="<div id=_".$A."_img><img  class=badge_img src=".$n6."></div>";
	       $n7="<span id=badge_".$A."_txt class=badge_".trim($b[4]).">HOT</span>";$r="руб.";}
	   else 
	       if(trim($b[4]) =="sale")
	       {$n6="images/badge_sale.png";$b4="<div id=_".$A."_img><img  class=badge_img src=".$n6."></div>";
	       $n7="<span id=badge_".$A."_txt class=badge_".trim($b[4]).">SALE</span>";$r="руб.";}
	   else
	       if(trim($b[4]) =="none")			  
		  {$n6="images/badge_none.png";$b4="<div id=_".$A."_img><img  class=badge_img_none src=".$n6."></div>";
		   $n7="<span id=badge_".$A."_txt class=badge_none>NONE</span>";$r="руб.";}
	   
	   if ($b[2] !== ""){$b2=number_format($b[2], 0, ',', ' ');}else {$b2="";$r="";}
	   
	   $pp=$tt+37;
	   $ppfl=$fl+150;
	   echo '
	   <a id=a_'.$A.'_path href="product.php?path='.$dir.'&n='.$b[5].'"style="text-decoration: none;">		   
	   <div id=new_'.$A.'_foto class=new_foto style="top:'.$ft.'px; left:'.$fl.'px;background-color:#ffffff;">
	   <p id=_'.$A.'_foto ><img  class=foto src='.$dir.'>'.$b4.'</p>
	   <div>'.$n7.'</div>		   
	   </div>
	   
	   <div id=new_'.$A.'_val class=new_val style="top:'.$pp.'px;left:'.$ppfl.'px ">'.$b2.'<span class=rub >'.$r.'</span><br><span id=new_'.$A.'_old class=new_val_old >'.$b3.$n8.'</span> </div>	
	   
	   <div id=new_'.$A.'_title class=new_title style="top:'.$tt.'px;left:'.$fl.'px "><p id=new_'.$A.'_text class="text animated rubberBand">'.$b[1].'</p></div></a>	
			  
		'; 
      }	
    else
    {
	 echo '	   
		 
		 <div id=_'.$A.'_foto ></div>
		
			  
		'; 
    }
      }
else
    {
	 echo '	   
		 
		 <div id=_'.$A.'_foto ></div>
		
			  
		'; 
    }	  
      
      }  
      
  
 






 
function menutop($bd_category_name)
     {
	 $total=get_shopping_cart_price_total($_COOKIE["userid"]);
	 if ($total==""){$total=0;}
	 $total=number_format($total, 0, ',', ' ');
	 $count=get_shopping_cart_count($_COOKIE["userid"]);
	 $piece=getNumEnding($count);
     echo '<table border="0" padding="0"  ><tr>';
      for ($i=0; $i< sizeof($bd_category_name);$i++)
     {$n=$i+1;
     echo '
     <td valign="center" class="menu category" style="cursor: pointer;" id="m'.$i.'" 
     onclick="window.location.href=\'category.php?n='.$bd_category_name[$i]['id_category'].'\'">
     '.$bd_category_name[$i]['name'].'
     </td>
     ';
     }
	 echo '
	 </tr>
	 </table >
	 </div>
	 <div class="menu_top2">
	 <a href="login.php" style="text-decoration: none;"><div><img src="images/log.png"><div class="log">&nbsp;&nbsp;Bойти<br>&nbsp;
	 <img src="images/line1.jpg"></div></a>
	 <a href="register.php" text-decoration="none"><div class="reg">Регистрация<br><img src="images/line2.jpg"></div></a></div>
	 </div>
	 <a href="shopping_cart.php" style="text-decoration: none;"><div class="menu_basket">
	 <div class="basket-text1">
	 ';	 
	 echo '	 
	 <span id=totall>'.$total.'</span>
	  ';	 
	 echo '	
	 <p class="basket-text1-2">руб.</p></div><div class="basket-text2">
	
	 ';	 
	 echo '	 
	 <span id=count_piecel>'.$count." ".$piece.'</span>
	  ';	 
	 echo '			 	 
	 </div >
	 <img src="images/basket.png" class="basket-img"></div></a>
	 ';
     }
 
 function menutop_personal_account($bd_category_name,$email)
     {
	 $total=get_shopping_cart_price_total($_COOKIE["userid"]);
	 if ($total==""){$total=0;}
	 $total=number_format($total, 0, ',', ' ');
	 $count=get_shopping_cart_count($_COOKIE["userid"]);
	 $piece=getNumEnding($count);
     echo '<table border="0" padding="0"  ><tr>';
      for ($i=0; $i< sizeof($bd_category_name);$i++)
     {$n=$i+1;
     echo '
     <td valign="center" class="menu category" style="cursor: pointer;" id="m'.$i.'" onclick="window.location.href=\'category.php?n='.$bd_category_name[$i]['id_category'].'\'">
     '.$bd_category_name[$i]['name'].'
     </td>
     ';
     }
	 echo '
	 </tr>
	 </table >
	 </div>
	 <div class="menu_top2">
	 <div ><img src="images/log.png" style="position:absolute;top:22px;">&nbsp;<div class="log"style="position:absolute;text-decoration:underline;left:20px;">&nbsp;'.$email.'</div></div></div>
	 
	 <a href="shopping_cart.php" style="text-decoration: none;"><div class="menu_basket">
	 <div class="basket-text1">
	 ';	 
	 echo '	 
	 <span id=totall>'.$total.'</span>
	  ';	 
	 echo '	
	 <p class="basket-text1-2">руб.</p></div><div class="basket-text2">
	
	 ';	 
	 echo '	 
	 <span id=count_piecel>'.$count." ".$piece.'</span>
	  ';	 
	 echo '			 	 
	 </div >
	 <img src="images/basket.png" class="basket-img"></div></a>
	 ';
     }
     
function bg ($Bg_top)
     {
     echo '
     <div id=Bg class=Bg border=0 style="position: absolute;z-index:1;top:'.$Bg_top.'px;left:115px;width:1170px;height:59px;background-color: #01104c;">
     <div id=bg-text class=bg-text><p>Шаблон для экзаменационного задания.<br>
     Разработан специально для «Bсероссийской Школы Программирования»<br><a href="http://bedev.ru/" style="color:#999999;text-decoration: none;">httр://bedev.ru/</a></p></div>
     <div onclick="up();"class=up_text1 ><div id=up_text1 >Наверх&nbsp;&nbsp;<img src="images/Up.png"></div></div></div>
     ';
     }
function header_logo()
     {
     echo '
     <a href="SuperS.php" style="text-decoration: none;"><div id="header_logo" class=logo border=0><div id="Supershop_logo" class=Supershop_logo border=0>SUPER<div id="Supershop_logo2"class=Supershop_logo2 border=0>SHOP</div></div></div></a>
     ';
     } 

function get_category_count_id($bd_category_id)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select count(id_product) from (select id_product from goods_table where id_category = ".$bd_category_id.") as sub;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c=pg_fetch_result($qresult,0,0);
    mysql_close($dbconn);
    return $c; 
    }



function get_category0()
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from categories_table ;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo sizeof($c)."<br>";
     if ($c!==false){
    foreach($c as $kk=>$vv)
    {
      $d['id_category']=$vv['id_category'];
      $d['name']=$vv['name'];
      $d['quantity']=$vv['quantity'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    }
    mysql_close($dbconn);
    return $b; 
    }
    function get_category()
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    // //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from categories_table ;";
    //echo $str."<br>";
    $qresult=mysql_query($str);
    $c= mysql_fetch_array($qresult);
    //echo sizeof($с)."<br>";
     if ($c!==false){
    foreach($c as $kk=>$vv)
    {
      $d['id_category']=$vv['id'];
      $d['name']=$vv['name'];
      $d['quantity']=$vv['quantity'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    }
    mysql_close($dbconn);
    return $b; 
    }

function get_shopping_cart_price_total($uid)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //echo $uid."<br>";
    $s=0;
    $str="select * from shopping_cart ;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo $c."<br>";
    //	if ($c!="")
    //{
    foreach($c as $kk=>$vv)
    {  if (trim($vv['userid'])==$uid)
	{
	$s=$s+($vv['price']*$vv['scount']);	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
        }
    }
    //}
    mysql_close($dbconn);
    
    return $s; 
    }
    
function get_shopping_cart_count($uid)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //echo $uid."<br>";
    $s=0;
    //where userid='".$uid."' 
    //where userid=' "." ".$uid."'
    $str="select * from shopping_cart ;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo sizeof($c)."<br>";
    //if ($c!="")
    //{
    foreach($c as $kk=>$vv)
    {  if (trim($vv['userid'])==$uid)
	{
	$s++;	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
        }
    }
	
    //echo sizeof($c)."<br>";
    
    //}
    mysql_close($dbconn);
    return $s; 
    } 	
    
function db_add_shopping_cart($name,$description,$id_category,$id_product,$uid,$price,$name_variation,$name_file_img,$sdate,$scount)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //$today = date("M.d.y H:i"); 
    

    $str="insert into  shopping_cart (name,description,id_category,id_product,userid,price,name_variation,name_file_img,sdate,scount)
    values ('
    ".$name."','	
    ".$description."','
    ".$id_category."','
    ".$id_product."','
    ".$uid."','
    ".$price."','
    ".$name_variation."','
    ".$name_file_img."','".$sdate."','".$scount."	
    ')";
    $result = mysql_query($dbconn, $str);
     
    mysql_close($dbconn);
    }
function get_shopping_cart($uid)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //echo $uid."<br>";
    $str="select * from shopping_cart;";
    //$str="select * from shopping_cart where userid='".$uid."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    
    foreach($c as $kk=>$vv)
    {  if (trim($vv['userid'])==$uid)
	{
	//$s++;	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
      $d['id_cart']=$vv['id_cart'];	  
      $d['name']=$vv['name'];	  
      $d['description']=$vv['description'];	  
      $d['id_category']=$vv['id_category'];
      $d['id_product']=$vv['id_product'];
      $d['userid']=$vv['userid'];
      $d['price']=$vv['price'];
      $d['name_variation']=$vv['name_variation']; 
      $d['name_file_img']=$vv['name_file_img'];	  
      $d['scount']=$vv['scount']; 
      $b[]=$d;
        }
    }		 
    mysql_close($dbconn);
    return $b; 
    }

function get_orders($email)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //echo $uid."<br>";
    $str="select * from orders_table where email='".$email."';";
    //$str="select * from shopping_cart where userid='".$uid."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    
    foreach($c as $kk=>$vv)
    { 
//	if (trim($vv['userid'])==$uid)
	//{
	//$s++;	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
      $d['id_order']=$vv['id_order'];	  
      $d['email']=$vv['email'];	  
      $d['status']=$vv['status'];	  
      $d['sum_price']=$vv['sum_price'];
      $d['sdate']=$vv['sdate'];
      $d['shipping']=$vv['shipping'];	   
      $d['shipping_comment']=$vv['shipping_comment']; 
      $b[]=$d;
       // }
    }		 
    mysql_close($dbconn);
    return $b; 
    }
function get_orders_id($id_order)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //echo $uid."<br>";
    $str="select * from orders_table where id_order='".$id_order."';";
    //$str="select * from shopping_cart where userid='".$uid."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    
    foreach($c as $kk=>$vv)
    { 
//	if (trim($vv['userid'])==$uid)
	//{
	//$s++;	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
      $d['id_order']=$vv['id_order'];	  
      $d['email']=$vv['email'];	  
      $d['status']=$vv['status'];	  
      $d['sum_price']=$vv['sum_price'];
      $d['sdate']=$vv['sdate'];
      $d['shipping']=$vv['shipping'];	   
      $d['shipping_comment']=$vv['shipping_comment']; 
      $b[]=$d;
       // }
    }

    mysql_close($dbconn);
    return $b; 
    }

function get_orders_all_goods_id($id_order)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

//все товары

$str="select * from orders_all_goods where id_order='".$id_order."';";
    //$str="select * from shopping_cart where userid='".$uid."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    
    foreach($c as $kk=>$vv)
    { 
//	if (trim($vv['userid'])==$uid)
	//{
	//$s++;	
	//echo '$kk'.$kk.$vv['userid'].'<br>';
      $d['id_goods']=$vv['id_goods'];
      $d['name']=$vv['name'];
      $d['id_product']=$vv['id_product'];
      $d['id_category']=$vv['id_category'];
      $d['id_order']=$vv['id_order'];	  
      $d['email']=$vv['email'];	  
      $d['price']=$vv['price'];	  
      $d['name_variation']=$vv['name_variation'];
      $d['name_file_img']=$vv['name_file_img'];
      $d['scount']=$vv['scount'];	   
      $b[]=$d;
       // }
    }
    
    mysql_close($dbconn);
    return $b; 
    }	
    
    
    
    //$query = "update categories_table set name='".$new_name."'  where name = '".$old_name."';";  
function db_update_shopping_cart($uid,$id_product,$case)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    
    if ($case==1)
    {$str="update shopping_cart set scount=scount+1 where userid = '".$uid."';";}
    else{$str="update shopping_cart set scount=scount-1 where userid = '".$uid."';";}	
    $result = mysql_query($dbconn, $str);
     
    mysql_close($dbconn);
    }

function get_exists_shopping_cart($uid,$id_product,$case,$img)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    
   // $str="select * from shopping_cart  where userid = '".$userid."';";
    $str="select * from shopping_cart  where id_product = '".$id_product."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    //print_r($c);
    $d=true;
    //$case=1;
    if ($c!="")
    {
      foreach($c as $kk=>$vv)	  
      { if ((trim($vv['userid'])==$uid)&&(trim($vv['name_file_img'])==$img))
	  {
	       $d=false; 
	       
	      if ($case==1)
    {$str="update shopping_cart set scount=scount+1 where userid = '".$vv['userid']."' and id_product = '".$id_product."'and name_file_img = '".$vv['name_file_img']."' ;";}
    else{$str="update shopping_cart set scount=scount-1 where userid = '".$vv['userid']."' and id_product = '".$id_product."'and name_file_img = '".$vv['name_file_img']."'  ;";}	
    $result = mysql_query($dbconn, $str); 
	       
	//echo $vv['userid'].'<br>';
	  }		  
      }//foreach
    }//if
    mysql_close($dbconn);
    return $d; 
    }
    
function del_exists_shopping_cart($uid,$id_product,$img)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    
   // $str="select * from shopping_cart  where userid = '".$userid."';";
    $str="select * from shopping_cart  where id_product = '".$id_product."';";
    
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    //print_r($c);
    $d=true;
    //$case=1;
    if ($c!="")
    {
      foreach($c as $kk=>$vv)	  
       { if ((trim($vv['userid'])==$uid)&&(trim($vv['name_file_img'])==$img))
	  {			 
    
    $query = "delete from shopping_cart where id_product = '".$vv['id_product']."'and name_file_img = '".$vv['name_file_img']."' ;";
    
    $result = mysql_query($dbconn, $query); 
	       
	//echo $vv['userid'].'<br>';
	  }		  
      }
    } 
    mysql_close($dbconn);
    //return $d; 
    }	
    
function del_goods_from_order($id_goods,$name_variation)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");   	 
    
    $query = "delete from orders_all_goods where id_goods = '".$id_goods."' and name_variation = '".$name_variation."' ;";
    /* echo $query;
    exit(0);  */
    $result = mysql_query($dbconn, $query); 
    
    mysql_close($dbconn);
     
    }	
    
function get_product($id_product)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from goods_table where id_product = '".$id_product."'"; 
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo $c."<br>";
    foreach($c as $kk=>$vv)
    { $d['id_product']=$vv['id_product'];	  
      $d['name']=$vv['name'];	  
      $d['description']=$vv['description'];
      $d['id_category']=$vv['id_category'];
      $d['price']=$vv['price']; 
      $d['oldprice']=$vv['oldprice']; 
      $d['badge']=$vv['badge']; 
      $d['name_variation1']=$vv['name_variation1'];
      $d['name_variation2']=$vv['name_variation2'];
      $d['name_variation3']=$vv['name_variation3'];
      $d['checked']=$vv['checked'];                                          
      $d['quantity']=$vv['quantity']; 	  
    }
    mysql_close($dbconn);
    return $d; 
    }


//goods_table
function get_products_category($n)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from goods_table where id_category = '".$n."'"; 
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo $c."<br>";
    if ($c!==false){
    foreach($c as $kk=>$vv)
    { $d['id_category']=$vv['id_category'];
      $d['id_product']=$vv['id_product'];
      $d['name']=$vv['name'];
      $d['description']=$vv['description'];
      $d['price']=$vv['price']; 
      $d['oldprice']=$vv['oldprice']; 
      $d['badge']=$vv['badge']; 
      $d['name_variation1']=$vv['name_variation1'];
      $d['name_variation2']=$vv['name_variation2'];
      $d['name_variation3']=$vv['name_variation3']; 
      $d['checked']=$vv['checked'];                                        
      $d['quantity']=$vv['quantity'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    }
    mysql_close($dbconn);
    return $b; 
    }
    
    //goods_table
function get_products_img($img)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    
    //goods_all_img_table
    
    $str="select * from goods_all_img_table where name_file = '".$img."'"; 
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo $c."<br>";
    if ($c!==false){
    foreach($c as $kk=>$vv)
    { $q['id_product']=$vv['id_product'];
      $q['id_category']=$vv['id_category'];
     // echo $q['id_category'];
      //$b[]=$q;
      }	
    }
	
    mysql_close($dbconn);
    return $q; 
    }
//вся таблица
function get_users()
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from customers_table ;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    //echo $c."<br>";
    foreach($c as $kk=>$vv)
    {
      $d['name']=$vv['name'];
      $d['phone']=$vv['phone'];  
      $d['email']=$vv['email'];   
	//id_city
      $str="select * from cities_table where id_city = '".$vv['id_city']."';";
      $qresult=mysql_query($dbconn,$str);
      $c= mysql_fetch_array($qresult);
      foreach($c as $kk=>$ww)
      {   
      $d['city']=$ww['name'];
      }   
      $d['street']=$vv['street'];
      $d['house']=$vv['house'];
      $d['apartment']=$vv['apartment'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    mysql_close($dbconn);
    return $b; 
    } 
function get_user_email($email)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from customers_table where email = '".$email."';";
     
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    foreach($c as $kk=>$vv)
    { 
      $d['login']=$vv['name'];
      $d['phone']=$vv['phone'];
     //echo $str;
	     //  exit(0);
           //id_city
	     $str="select * from cities_table where id_city = '".$vv['id_city']."';";
	    $qresult=mysql_query($dbconn,$str);
	    $c= mysql_fetch_array($qresult);
	    foreach($c as $kk=>$ww)
	    {   
	    $d['city']=$ww['name'];
	    } 
      $d['street']=$vv['street'];
      $d['house']=$vv['house'];
      $d['apartment']=$vv['apartment'];
      $d['password']=$vv['password'];
      $d['repeatpassword']=$_POST['password']; 
      $b[]=$d;
    }	
    mysql_close($dbconn);	
    return $b; 
    }
    
function get_orders_table()
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from orders_table ;";
    //echo $str."<br>";
    $qresult=mysql_query($dbconn,$str);
    $c= mysql_fetch_array($qresult);
    if ($c!="")
    {
    foreach($c as $kk=>$vv)
    {
      $d['id_order']=$vv['id_order'];
      $d['email']=$vv['email'];  
      $d['status']=$vv['status']; 	   
      $d['sum_price']=$vv['sum_price'];
      $d['sdate']=$vv['sdate'];
      $d['shipping']=$vv['shipping'];
      $d['shipping_comment']=$vv['shipping_comment'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    }
    mysql_close($dbconn);
    return $b; 
    } 

function db_add_categuryN($n,$name,$quantity)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }//pg_set_client_encoding($dbconn, "KOI8");

    $query = "insert into categories_table(id_category,name,quantity) values ('".$n."','".$name."','".$quantity."')";  

    $result = mysql_query($dbconn, $query);	

    mysql_close($dbconn);

    }
function db_add_categury($name,$quantity)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "insert into categories_table(name,quantity) values ('".$name."','".$quantity."')";  

    $result = mysql_query($dbconn, $query);	

    mysql_close($dbconn);

    }
function db_add_new_product($category_current)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "insert into goods_table(name,description,id_category,price,oldprice,badge,name_variation1,name_variation2,name_variation3,checked,quantity)
			       values ('new_product','text','1','0','0','hot','','','','checked','0')";
    $result = mysql_query($dbconn, $query);
	
    $str="select id_product from goods_table where name = 'new_product';";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    foreach($c as $kk=>$vv)
    {
      $w['id_product']=$vv['id_product'];  
    }

    //update table set quantity=quantity+1 where field=$1 and field2=$2;

    $query = "update categories_table set quantity=quantity+1  where name = '".$category_current."';"; 
    $result = mysql_query($dbconn, $query);  
    mysql_close($dbconn);

    return $w['id_product']; 

    }


function db_select_category_name($id_category)
    {
//if($id_category !="")
//{
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $str="select * from categories_table where id = '".$id_category."';";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    if ($c!==false){
    foreach($c as $kk=>$vv)
    {
      $d['name']=$vv['name']; 
    }
    }
    mysql_close($dbconn);
    return $d['name'];
//	}
    }



function db_delete_categury($name)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

 $str="select * from categories_table where name = '".$name."';";
//    $str="select * from categories_table;";
//echo $str;
	 //echo $str;
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);

    foreach($c as $kk=>$vv)
    { 
      if( trim($vv['name'])==trim($name))
      {
      $d['id_category']=$vv['id']; 
      }
    }

    $query1 = "delete from goods_table where id_category = '".$d['id_category']."';";
//echo $query;exit(0);
    $result = mysql_query($dbconn, $query1);

    $query2 = "delete from categories_table where name = '".$name."';";
    $result = mysql_query($dbconn, $query2);


    $query3 = "delete from goods_all_img_table where id_category = '".$d['id_category']."';";
    $result = mysql_query($dbconn, $query3);	

    mysql_close($dbconn);
//  return     $query1;
  return     $str;
    }

function db_select_img($id_product)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $str="select * from goods_all_img_table where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    if ($c!==false){
    foreach($c as $kk=>$vv)
    {
      $d['name_file']=$vv['name_file']; 
      $d['id_category']=$vv['id_category'];
      $d['number_img']=$vv['number_img'];
      $b[]=$d; 
    }
    }
    mysql_close($dbconn);
    return $b;
    }

function db_select_all_img($id_product)
    { 
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $str="select * from goods_all_img_table where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    
    foreach($c as $kk=>$vv)
    {
      $d['name_file']=$vv['name_file'];
     // $d['id_category']=$vv['id_category'];
      // echo $d['name_file'].'<br>';	  
      
      $b[]=$d; 
    
    }
 
    mysql_close($dbconn);
    return $b;
    }
    



function db_select_new_products()
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $query = "delete from goods_table where name = 'new_product';";
    $result = mysql_query($dbconn, $query);

    $str="select * from goods_table where checked = 'checked'  order by goods_table desc limit 40;";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    if ($c!==false){
    foreach($c as $kk=>$vv)
    {
      $d['id_product']=$vv['id_product'];
      $d['name']=$vv['name'];
      $d['description']=$vv['description'];	
      $d['id_category']=$vv['id_category'];
      $d['price']=$vv['price']; 
      $d['oldprice']=$vv['oldprice']; 
      $d['badge']=$vv['badge']; 
      $d['name_variation1']=$vv['name_variation1'];
      $d['name_variation2']=$vv['name_variation2'];
      $d['name_variation3']=$vv['name_variation3']; 
      $d['checked']=$vv['checked'];                                        
      $d['quantity']=$vv['quantity'];  
      $b[]=$d;
      //echo $b."<br>";
    }
    }
    mysql_close($dbconn);
    return $b;
    }
    
function db_select_popular_products()
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    //popular_product_table
    //SELEСT * FROM table_name ORDER BY id DESC LIMIT 10 
    $strp="select * from popular_product_table order by id_popular desc limit 40;";
    $qresult = mysql_query($dbconn, $strp);
    $cp= mysql_fetch_array($qresult);
     foreach($cp as $mm=>$qq)
     {
    
	    $str="select * from goods_table where id_product = '".$qq['id_product']."';";
	    $result = mysql_query($dbconn, $str);
	    $c= mysql_fetch_array($result);
	    if ($c!==false)
	    {
		foreach($c as $kk=>$vv)
		{
		  $d['id_product']=$vv['id_product'];
		  $d['name']=$vv['name'];
		  $d['description']=$vv['description'];	
		  $d['id_category']=$vv['id_category'];
		  $d['price']=$vv['price']; 
		  $d['oldprice']=$vv['oldprice']; 
		  $d['badge']=$vv['badge']; 
		  $d['name_variation1']=$vv['name_variation1'];
		  $d['name_variation2']=$vv['name_variation2'];
		  $d['name_variation3']=$vv['name_variation3']; 
		  $d['checked']=$vv['checked'];                                        
		  $d['quantity']=$vv['quantity'];  
		  
		  //echo $b."<br>";
		}
	    }
	    $b[]=$d;
     }	
	    
    mysql_close($dbconn);
    return $b;
    }


function db_delete_goods($id_product,$curr_category)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $query = "delete from goods_all_img_table where id_product  = '".$id_product."';";
    $result = mysql_query($dbconn, $query);

    $query = "update categories_table set quantity=quantity-1  where name = '".$curr_category."';"; 
    $result = mysql_query($dbconn, $query);

    $query = "delete from goods_table where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from shopping_cart where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from popular_product_table where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $query);
    
    
    mysql_close($dbconn);

    }
function clear_all_table()
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $query = "delete from cities_table;";
    $result = mysql_query($dbconn, $query);	
    
    $query = "delete from categories_table;";
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from customers_table;";
    $result = mysql_query($dbconn, $query);	
    
    $query = "delete from goods_all_img_table;";
    $result = mysql_query($dbconn, $query);	

    $query = "delete from orders_all_goods ;";	
    $result = mysql_query($dbconn, $query);

    $query = "delete from orders_table ;";	
    $result = mysql_query($dbconn, $query);

    
    $query = "delete from goods_table ;";	
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from shopping_cart ;";
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from temp_img_table ;";
    $result = mysql_query($dbconn, $query);
    
    $query = "delete from popular_product_table ;";
    $result = mysql_query($dbconn, $query);
    
    
    mysql_close($dbconn);

    }	
    
    
    


function db_delete_user($email)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $query = "delete from customers_table where email = '".$email."'";  

    $result = mysql_query($dbconn, $query);	

    mysql_close($dbconn);

    }
//*****


function strip_data($text)
    {
    $quotes = array ("\x27", "\x22", "\x60", "\t", "\n", "\r", "*", "%", "<", ">", "?", "!","\\","/");
    $goodquotes = array ("-", "+", "#" );
    $repquotes = array ("\-", "\+", "\#" );
    $text = trim( strip_tags( $text ) );
    $text = str_replace( $quotes, '', $text );
    $text = str_replace( $goodquotes, $repquotes, $text );
    //$text = ereg_replace(" +", " ", $text);
            
    return $text;
   }
function is_email($email)
   {
    // список доменов верхнего уровня, в которых больше двух символов
    $d = 'biz|com|edu|gov|info|int|mil|name|net|org|aero|asia|cat|coop|jobs|mobi|museum|pro|tel|travel|arpa|eco|xxx';
    return preg_match(
        '/^[a-z0-9][a-z0-9\-._]*[a-z0-9]@[a-z0-9][a-z0-9\-.]*[a-z0-9]\.('.$d.'|[a-z]{2})$/i',
        $email
    );
    }
function db_store($login,$phone,$email,$city,$street,$house,$apartment,$password)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "insert into customers_table(name,phone,email,id_city,street,house,apartment,password)
							      values ('".$login."','".$phone."','".$email."','".$city."','".$street."','".$house."','".$apartment."','".$password."')";  

    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
function db_update($login,$phone,$email,$city,$street,$house,$apartment,$password)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "update customers_table set name='".$login."' ,
					 phone='".$phone."',							 
					 id_city='".$city."',
					 street='".$street."',
					 house='".$house."',
					 apartment='".$apartment."',
					 password='".$password."'
					 where email = '".$email."';";  

    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
function db_update_ch($login,$phone,$email,$city,$street,$house,$apartment)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "update customers_table set name='".$login."' ,
					 phone='".$phone."',							 
					 id_city='".$city."',
					 street='".$street."',
					 house='".$house."',
					 apartment='".$apartment."'										 
					 where email = '".$email."';";  

    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
    //
function db_update_status($id_order,$status)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "update orders_table set status='".$status."'  where id_order = '".$id_order."';";  

    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
function db_update_category($new_name,$old_name)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "update categories_table set name='".$new_name."'  where name = '".$old_name."';";  

    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
    //
function db_compare($email,$field,$table)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select ".$field." from ".$table." where ".$field." = '".$email."';";
    //echo $str;
    $qresult=mysql_query($dbconn,$str);
    mysql_close($dbconn);
     if (pg_num_rows($qresult)==0){$q= false;}// есть совпадение
     else {$q= true;}// нет совпадения 
     return $q;
    }
function db_compare2($email,$password,$table)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from ".$table." where email = '".$email."' and  password = '".$password."';";
    //echo $str;
    $qresult=mysql_query($dbconn,$str);
    mysql_close($dbconn);
     if (pg_num_rows($qresult)==0){$q= false;}// есть совпадение
     else {$q= true;}// нет совпадения 
     return $q;
    }
function db_add_exists($name)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
	$query = "insert into cities_table (name) select '".$name."' where not exists (select id_city, '".$name."' from cities_table  where name = '".$name."'  );";    
	 $result = mysql_query($dbconn, $query);
	 
	 $str="select * from cities_table where name = '".$name."';";
	 $result = mysql_query($dbconn, $str);
	 $c= mysql_fetch_array($result);

     foreach($c as $kk=>$vv)
    {
      $d['id_city']=$vv['id_city'];
    }   

    mysql_close($dbconn);

    return $d['id_city'];
    }
function db_add_exists_popular_product($id_product)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

//	$query = "delete from popular_product_table ;";
//        $result = mysql_query($dbconn, $query);

	$query = "insert into popular_product_table (id_product) select '".$id_product."'
	where not exists (select id_product from popular_product_table  where id_product = '".$id_product."');";    
	 $result = mysql_query($dbconn, $query);

    mysql_close($dbconn);

    }

function generate_password($number)
  {
    $arr = array('a','b','c','d','e','f',
                 'g','h','i','j','k','l',
                 'm','n','o','p','r','s',
                 't','u','v','x','y','z',
                 'A','B','C','D','E','F',
                 'G','H','I','J','K','L',
                 'M','N','O','P','R','S',
                 'T','U','V','X','Y','Z',
                 '1','2','3','4','5','6',
                 '7','8','9','0'
		// ,'.',',',
                // '(',')','[',']','!','?',
                // '&','^','%','@','*','$',
                // '<','>','/','|','+','-',
                // '{','}','`','~'
		 );
    // Генерируем пароль
    $pass = "";
    for($i = 0; $i < $number; $i++)
    {
      // Вычисляем случайный индекс массива
      $index = rand(0, count($arr) - 1);
      $pass .= $arr[$index];
    }
    return $pass;
  }
  
function db_clear_temp_img(){
    
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    
    $str="delete from temp_img_table ;";
    $result = mysql_query($dbconn, $str);

    mysql_close($dbconn);
    } 
function myscandir($dir)
    {
	$list = scandir($dir);
	unset($list[0],$list[1]);
	return array_values($list);
    } 
// функция очищения папки
function clear_dir($dir)
    {
	$list = myscandir($dir);
	
	foreach ($list as $file)
	{
	    if (is_dir($dir.$file))
	    {
		clear_dir($dir.$file.'/');
		rmdir($dir.$file);
	    }
	    else
	    {
		unlink($dir.$file);
	    }
	}
    }

function db_copy_img_in_tmp($id_product,$curr_category)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");

    $dir="GDS/".strtoupper($curr_category)."/";  	
	
    $str="select * from goods_all_img_table where id_product = '".$id_product."';";
    $result = mysql_query($dbconn, $str);
    $c= mysql_fetch_array($result);
    if ($c !== false){
    foreach($c as $kk=>$vv)
    {
      $d['name_file']=$vv['name_file']; 
      $d['id_category']=$vv['id_category'];
      $d['number_img']=$vv['number_img'];
      $b[]=$d; 
    $str="insert into  temp_img_table (id_product,id_category,name_file,number_img) values ('".$id_product."','".$vv['id_category']."','".$vv['name_file']."','".$vv['number_img']."')";
    $result = mysql_query($dbconn, $str);

    $uploadfile = $dir.$vv['name_file'];

    @copy($uploadfile,"images_tmp/".$vv['name_file']);
    }
    }  
    mysql_close($dbconn);
    return $b; 

    }

/**
 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
 * param  $number Integer Число на основе которого нужно сформировать окончание
 * param  $endingsArray  Array Массив слов или окончаний для чисел (1, 4, 5),
 *         например array('предмет', 'предмета', 'предметов')
 * return String
 */
function getNumEnding($number)
{
    $number = $number % 100;
    if ($number>=11 && $number<=19) {
        $ending='предметов';
    }
    else {
        $i = $number % 10;
        switch ($i)
        {
            case (1): $ending = 'товар'; break;
            case (2):
            case (3):
            case (4): $ending = 'товара'; break;
            default: $ending='товаров';
        }
    }
    return $ending;
}
 
///////
//email,status,sum_price,sdate,shipping,shipping_comment
function db_add_order($email,$status,$sum_price,$sdate,$shipping,$shipping_comment)
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "insert into orders_table(email,status,sum_price,sdate,shipping,shipping_comment)
    values ('".$email."','".$status."','".$sum_price."','".$sdate."','".$shipping."','".$shipping_comment."')"; 
    $result = mysql_query($dbconn, $query);
    
    //$str="select currval(pg_get_serial_sequence('orders_table','id_order')) as last_insert_id;";
    
    
    $str="select max(id_order) from orders_table ;";
    $result=mysql_query($dbconn,$str);
    $id=pg_fetch_result($result,0,0);
    //select currval(pg_get_serial_sequence('tblname','colname')) as last_insert_id;	
    mysql_close($dbconn);
    return $id;
    }
 
//name,id_product,id_category,id_order,email,price,name_variation,name_file_img,scount
 function db_add_orders_all_goods($name,$id_product,$id_category,$id_order,$email,$price,$name_variation,$name_file_img,$scount)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    //pg_set_client_encoding($dbconn, "KOI8");
    $query = "insert into orders_all_goods(name,id_product,id_category,id_order,email,price,name_variation,name_file_img,scount)
    values ('".$name."','".$id_product."','".$id_category."','".$id_order."','".$email."','".$price."','".$name_variation."','".$name_file_img."','".$scount."')"; 
    $result = mysql_query($dbconn, $query);
    mysql_close($dbconn);
    }
    
    
    
/* 	function ucfirst_utf8($stri){
    if($stri{0}>="\xc3")
      return (($stri{1}>="\xa0")?
      ($stri{0}.chr(ord($stri{1})-32)):
      ($stri{0}.$stri{1})).substr($stri,2);
    else return ucfirst($stri);
} */
    function ucfirst_utf8($stri){
    if($stri{0}>="\xc3")
      return (($stri{0}>="\xa0")?
      (chr(ord($stri{0})-32)):
      ($stri{0}.$stri{0})).substr($stri,1);
    else return ucfirst($stri);
}
/////////////////////////////////////////////////// 
function translateLatin($str)
{
$mm=strlen($str);
for ($i=0;$i<=$mm;$i++)
{
$ss=$str[$i];
switch ($ss) 
{   

 case " ":
        $b=$b. "-";
        break; 
default:
        $b=$b. $ss;
  }
  
}
//echo $b;
return $b;
}

?>
