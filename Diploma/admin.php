<?php
session_start();
//if ($_SESSION['setvar']==NULL){$_SESSION['setvar']=1;}

$background=1085;
$menu=995;
$adminL=921;
$outadmin=957;
if ($_GET['admin']=='logout')
    {
    unset($_SESSION['admin']);//выход]
    echo "<html><head>
	<meta http-equiv='Refresh' content='0; URL=\"SuperS.php\"'>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheetadmin.css\" />
    </head></html>";	
    exit();	
    }
//echo "<script>alert(\"".$_GET['n']."\");</script>";
 //
if ($_SESSION['admin']== NULL)
    {
    echo "<html><head>
    <meta http-equiv='Refresh' content='0; URL=\"SuperS.php\"'>
    </head></html>";
    exit();
    }
include ("func.inc");

 $a=get_category();// вся таблица
     if (sizeof($a)!==0){
         foreach($a as $kk=>$vv)
        {
	    $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   $bd_category_name[]=$bd;
        }
     }
	//echo $bd_category_name[1]['id_category'];
	//exit(0);
	if ($_GET['n']== 0){$_GET['n']=$bd_category_name[0]['id_category'];}
	
     //echo $_GET['n'];
     //exit(0);
     $_SESSION['n']=$_GET['n'];
//if (db_select_category_name($_GET['n'])!=""){
     $category_current=db_select_category_name($_GET['n']);
//echo $category_current;
//}

function get_customer($email)
    {
    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    pg_set_client_encoding($dbconn, "KOI8");
    $str="select * from customers_table where email = '".$email."';";
    $qresult=pg_query($dbconn,$str);
    $c=pg_fetch_all($qresult);
    //$GLOBALS['somename1']['name1']="";
    foreach($c as $kk=>$vv)
    { 
      $_POST['login']=$vv['name'];
      $_POST['phone']=$vv['phone'];
      
      //id_city
      $str="select * from cities_table where id_city = '".$vv['id_city']."';";
    $qresult=pg_query($dbconn,$str);
    $c=pg_fetch_all($qresult);
    foreach($c as $kk=>$ww)
    {   
    $_POST['city']=$ww['name'];
    } 
      $_POST['street']=$vv['street'];
      $_POST['house']=$vv['house'];
      $_POST['apartment']=$vv['apartment'];
      $_POST['password']=$vv['password'];
      $_POST['repeatpassword']=$_POST['password']; 
    }
    pg_close($dbconn);
    //return $b; 
    }
      
    if (isset($_GET['DEL']))
    {db_delete_user($_GET['DEL']);$_GET['sub']='users'; }
  
switch ($_GET['sub'])
   {
case 'order':
        //db_clear_temp_img();// clear очистка таблицы
	$_SESSION['add_category']=0;
	$_SESSION['add']=0;
	$_SESSION['del_category']=0;
        if ($_GET['into'] == 0)
	{
	    $text_head='ЗАКАЗЫ';
            $orders=get_orders_table();
	    $siz=sizeof($orders);
	    if ($siz>14)
	    {
	    $addtop=($siz-14)*58;	
	    $background=$background+$addtop;
            $menu=$menu+$addtop;
            $adminL=$adminL+$addtop;
            $outadmin=$outadmin+$addtop;	
	    }
	}
	if ($_GET['into'] == 2)// cancel goods
	{
//			echo $_GET['id_goods'];
//	    echo $_GET['name_variation'];
//	    exit(0); 
	 del_goods_from_order($_GET['id_goods'],$_GET['name_variation']);	
	 $ord=get_orders_table();
	 $_GET['status']=$ord[0]['status'];
         $_GET['into']=1; 
	}	
	if ($_GET['into'] == 1){$text_head='ЗАКАЗ';}
	
        break;
case 'users':
        //db_clear_temp_img();// clear очистка таблицы
	$_SESSION['add_category']=0;
	$_SESSION['add']=0;
	$_SESSION['del_category']=0;
        if ($_GET['into'] == 0)
	{$text_head='ПОЛЬЗОВАТЕЛИ';$bd_users=get_users();}
	else if ($_GET['into'] == 1)
	{
	    $text_head='ПРОСМОТР ПОЛЬЗОВАТЕЛЯ';
	    get_customer($_GET['email']);			

	    }
        break;
case 'products':
            //    db_clear_temp_img();// clear очистка таблицы




	if ($_GET['into']!=7)
	{
	    db_clear_temp_img();// clear очистка таблицы
	    $_SESSION['add']=0;
	}
	     if (isset($_GET['id_goods'])&&(isset($_SESSION['id_product'])))
	      {
		  $currdir="GDS/".strtoupper(translateLatin($_GET['curr_category']))."/";  
		  // удаление изображений
		$img=db_select_img($_GET['id_goods']);
		if (sizeof($img)!=0)
		{
                  foreach($img as $kk=>$vv)
		  {
		 if (file_exists ( $currdir.$vv['name_file'])){unlink($currdir.$vv['name_file']);} 
		 
		  }
		}				
		db_delete_goods($_GET['id_goods'],$_GET['curr_category']);				
		unset($_SESSION['id_product']);
	      }
        $_SESSION['add_category']=0;
        $_SESSION['del_category']=0;
          if (($_GET['into'] == 5)&&(isset($_GET['old_name'])))	
	      {
	    // переименовать категорию
	    db_update_category($_GET['category_rename'],$_GET['old_name']);
	    $_GET['category_current']=$_GET['category_rename'];$_GET['into'] = 0;
	    $category_current=$_GET['category_rename'];
	    // переименовать директорию
	    if (is_dir("GDS/".strtoupper(translateLatin($_GET['old_name'])))){
	    rename("GDS/".strtoupper(translateLatin($_GET['old_name'])),"GDS/".strtoupper(translateLatin($_GET['category_rename'])));
	    unset($_GET['old_name']);
	    }
	   }         
	 $_SESSION['n']=$_GET['n'];
	$bd_category=get_products_category($_GET['n']);			 
        
	 if ($_GET['into'] == 0)		 
	{
        $text_head='ТОВАРЫ';		
	   $siz=sizeof($bd_category);
	    if ($siz>14){$siz=14;}
	    $add_top=$siz*57+225;				
	}
        if ($_GET['into'] == 7)
	{
//	echo "!!!".$_GET['add_product'];
	if((isset($_GET['add_product']))&&($_SESSION['add']!= 1))
		{
		    //echo'Новый'.$_GET['into']."-".$_SESSION["add"];
		    $id_new=db_add_new_product($_GET['add_product']);
		    $_SESSION['id_product']=$id_new;
		    $_SESSION['add']=1;
		    $bd_product['checked']='checked';
		} 
                    $v_1="checked";
                    $text_head='ПРОСМОТР ТОВАРА';							

		    $p_1="";
		    $p_2="";
		    $p_3="";
		    $p_4="";
		    switch ($bd_product[4]) 
		    {
			case 'sale':
			 $p_4="checked";
			break;
			case 'hot':
			 $p_3="checked";
			break;
			case 'new':
			 $p_2="checked";
			break;
			default:
			 $p_1="checked";		    
		    }
          $_SESSION['name_product']='Goods'.$_SESSION['id_product'];					
	}      	
	if ($_GET['into'] == 1)
	    {
 //  	echo "!!!".$_GET['category_current'];
    //      exit();
      $category_current=$_GET['category_current'];
		    //$v_1="checked";	          				
		    $text_head='ПРОСМОТР ТОВАРА';

		    $bd_product=get_product($_GET['num']);					
		    $_SESSION['name_product']=$bd_product['name'];				
                    $_SESSION['id_product']=$bd_product['id_product'];
//echo $bd_product['name'];
//exit();						
		    //echo "<script>alert(\"".$bd_product['quantity']."\");</script>";				
		    $p_1="";
		    $p_2="";
		    $p_3="";
		    $p_4="";
		    switch ($bd_product['badge']) 
		    {
			case 'sale':
			 $p_4="checked";
			break;
			case 'hot':
			 $p_3="checked";
			break;
			case 'new':
			 $p_2="checked";
			break;
			default:
			 $p_1="checked";		    
		    }						
	    }		
        break;		
case 'categories':	
         //db_clear_temp_img();// clear очистка таблицы
         $_SESSION['add']=0;		 
	if(($_GET['into'] == "1")&&($_SESSION['del_category']!= 1))
	{
	    //удаление	
//echo "Удаление!"."GDS/".strtoupper(translateLatin($_GET['name']));
     $stt=db_delete_categury($_GET['name']);  
//echo "!!!". $stt;exit(0);       
	 removeDirectory("GDS/".strtoupper(translateLatin($_GET['name'])));
	 unset($bd_category_name);
	 $_SESSION['del_category']=1;
	}
	else if($_GET['into'] == "2")
	    {
              if($_GET['category_add']!=" ")
              {
    		//добавление  			
		if($_SESSION['add_category']==0)
		{ 
		$_GET['siz']=$_GET['siz']+1;
		$dir = scandir("GDS");
	//	echo translateLatin($_GET['category_add']);
            //    exit(0);
		if (in_array($_GET['category_add'], $dir)==false)//проверка на существование
		    {            
		    mkdir("GDS/".strtoupper(translateLatin($_GET['category_add'])));
		    db_add_categuryN($_GET['siz'],$_GET['category_add'],0);
		    unset( $_GET['category_add'] );
		    $_SESSION['add_category']=1;
		    }          		
		}
              }
	    }		
	$a=get_category();// вся таблица
        //echo sizeof($a);
     if (sizeof($a)!==0){		
        foreach($a as $kk=>$vv)
        {$bd_category_name[$kk]=$vv['name'];
$bd_category_ID[$kk]=$vv['id_category'];
$bd_category_name_quantity[$kk]=get_category_count_id($vv['id_category']);
	

	}
        }		
	$products_height=sizeof($bd_category_name)*57+76;
	$category_addd=$products_height+125;		
	$text_head='КАТЕГОРИИ';			
        break;
   } 
  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>admin</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetadmin.css" /> 
 <link rel="stylesheet" type="text/css" href="style.css" /> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
 <script src="JS/admin.js"></script>
   <script>
    function borderOver(element){ Over(element,\''.$_GET['sub'].'\') }
    function borderOut(element){ Out(element,\''.$_GET['sub'].'\') }	
    function uploaded()
    {var $p=1;
    var computedStyle1 = getComputedStyle(document.getElementById(\'var1\'));
    var computedStyle2 = getComputedStyle(document.getElementById(\'var2\'));
    var computedStyle3 = getComputedStyle(document.getElementById(\'var3\'));
    if ((document.getElementById(\'inp_3\').value=="")&&(computedStyle3.display==\'block\'))
    {document.getElementById(\'inp_3\').placeholder="Введите название!";    
     document.getElementById(\'inp_3\').className += " formInvalid";
     $p=0;}
    if ((document.getElementById(\'inp_2\').value=="")&&(computedStyle2.display==\'block\'))
    {document.getElementById(\'inp_2\').placeholder="Введите название!";
     document.getElementById(\'inp_2\').className += " formInvalid";
     $p=0;}
    if ((document.getElementById(\'inp_1\').value=="")&&(computedStyle1.display==\'block\'))
    {document.getElementById(\'inp_1\').placeholder="Введите название!";

    document.getElementById(\'inp_1\').className += " formInvalid";
    $p=0;}	
    if ($p==1)
    {document.getElementById(\'add_foto_uploaded\').submit();alert(\'Saved!\');	}
    }
    function delgoods()
    { 
      if (confirm(\'Удалить товар?\'))
      {
      document.getElementById(\'del_goods\').submit(); 
      }
    }
     var $setvar=1;
     var leftt=0;
  </script>

  
 </head>
 <body onLoad=borderclass(\''.$_GET['sub'].'\');> 
 <div id="wrapper" class=background style="height:'.$background.'px;">
 <div  class=menu style="height:'.$menu.'px;">
 <a href="admin.php?sub=order" style="text-decoration:none;">
 <div id="order" class=sub_menu 
 onMouseOver="borderOver(this);"
 onMouseOut="borderOut(this);"
 ><img id="order_img"  src="images/Shape19_1.png" style="top:10px;left:9px;position:absolute;" 
 >ЗАКАЗЫ</div>
 </a> 
 <a href="admin.php?sub=users" style="text-decoration:none;">
 <div id="users" class=sub_menu
 onMouseOver="borderOver(this);"
 onMouseOut="borderOut(this);"
 style="top:87px;"><img id="users_img"  src="images/Shape20_1.png" style="top:11px;left:15px;position:absolute;">ПОЛЬЗОВАТЕЛИ</div>
 </a> 
 <a href="admin.php?sub=products&n='.$_SESSION['n'].'" style="text-decoration:none;">
 <div id="products" class=sub_menu
 onMouseOver="borderOver(this);"
 onMouseOut="borderOut(this);"
 style="top:153px;"><img id="products_img"  src="images/Shape21_1.png" style="top:10px;left:15px;position:absolute;">ТОВАРЫ</div>
 </a> 
  <a href="admin.php?sub=categories" style="text-decoration:none;">
 <div id="categories" class=sub_menu
 onMouseOver="borderOver(this);"
 onMouseOut="borderOut(this);"
 style="top:219px;"><img id="categories_img"  src="images/Shape22_1.png" style="top:11px;left:16px;position:absolute;">КАТЕГОРИИ</div>
 </a>
 <div class="outadmin admin" style="top:'.$adminL.'px;"><p>'.$_SESSION['admin'].'</p></div>
<a href="admin.php?admin=logout" class="outadmin" style="top:'.$outadmin.'px;">выйти</a>
 </div>
 <a href="SuperS.php" style="text-decoration:none;"><div id="header_logo" class=logo border=0><div id="Supershop_logo" class=Supershop_logo border=0>SUPER<div id="Supershop_logo2"class=Supershop_logo2 border=0>SHOP</div></div></div></a>
';			  
     switch ($text_head) 
     {
    case 'ПРОСМОТР ТОВАРА':
//echo $category_current;
//exit(0);
$category_curr=translateLatin($category_current);

//echo $GET['category_current'];
//exit(0);
db_clear_temp_img();// clear очистка таблицы
// очистка images_tmp
clear_dir("images_tmp/");
// копирование данных из основной таблицы во временную
// копирование уже сохраненных картинок в папку images_tmp
//echo '!!!!!!!!!!!!!!!!!!!!!!'.$_SESSION['id_product'];
$img=db_copy_img_in_tmp($_SESSION['id_product'],$category_curr);
// присвоение src пути к картинкам!!!
$img_path1="images/not_loaded.png";
		    $display_none_1="display:none";
		    $display_block_1="display:block";
		    $img_path2="images/not_loaded.png";
		    $display_none_2="display:none";
		    $display_block_2="display:block";
		    $img_path3="images/not_loaded.png";
		    $display_none_3="display:none";
		    $display_block_3="display:block";
		    $img_path4="images/not_loaded.png";
		    $display_none_4="display:none";
		    $display_block_4="display:block";
		    $img_path5="images/not_loaded.png";
		    $display_none_5="display:none";
		    $display_block_5="display:block";
		    $img_path6="images/not_loaded.png";
		    $display_none_6="display:none";
		    $display_block_6="display:block";
		    $img_path7="images/not_loaded.png";
		    $display_none_7="display:none";
		    $display_block_7="display:block";
		    $img_path8="images/not_loaded.png";
		    $display_none_8="display:none";
		    $display_block_8="display:block";
		    $img_path9="images/not_loaded.png";
		    $display_none_9="display:none";
		    $display_block_9="display:block";
		    $img_path10="images/not_loaded.png";
		    $display_none_10="display:none";
		    $display_block_10="display:block";
		    $img_path11="images/not_loaded.png";
		    $display_none_11="display:none";
		    $display_block_11="display:block";
		    $img_path12="images/not_loaded.png";
		    $display_none_12="display:none";
		    $display_block_12="display:block";
		    $img_path13="images/not_loaded.png";
		    $display_none_13="display:none";
		    $display_block_13="display:block";
		    $img_path14="images/not_loaded.png";
		    $display_none_14="display:none";
		    $display_block_14="display:block";
		    $img_path15="images/not_loaded.png";
		    $display_none_15="display:none";
		    $display_block_15="display:block";
		    $img_path16="images/not_loaded.png";
		    $display_none_16="display:none";
		    $display_block_16="display:block";
		    $img_path17="images/not_loaded.png";
		    $display_none_17="display:none";
		    $display_block_17="display:block";
		    $img_path18="images/not_loaded.png";
		    $display_none_18="display:none";
		    $display_block_18="display:block";

//$currdir="GDS/".strtoupper($category_curr)."/";  
if (sizeof($img)!=0){
foreach($img as $kk=>$vv)
{
    $d['name_file']=$vv['name_file'];
switch (substr($vv['name_file'], 1, strpos($vv['name_file'],'_')-1)) 
			{
			    case 1:
			     $img_path1="images_tmp/".$d['name_file'];
			     $display_block_1="display:none";
			     $display_none_1="display:block";
			    break;
			    case 2:
			     $img_path2="images_tmp/".$d['name_file'];
			     $display_block_2="display:none";
			     $display_none_2="display:block";
			    break;
			    case 3:
			     $img_path3="images_tmp/".$d['name_file'];
			     $display_block_3="display:none";
			     $display_none_3="display:block";
			    break;
			    case 4:
			     $img_path4="images_tmp/".$d['name_file'];
			     $display_block_4="display:none";
			     $display_none_4="display:block";
			    break;
			    case 5:
			     $img_path5="images_tmp/".$d['name_file'];
			     $display_block_5="display:none";
			     $display_none_5="display:block";
			    break;
			    case 6:
			     $img_path6="images_tmp/".$d['name_file'];
			     $display_block_6="display:none";
			     $display_none_6="display:block";
			    break;
			    case 7:
			     $img_path7="images_tmp/".$d['name_file'];
			     $display_block_7="display:none";
			     $display_none_7="display:block";
			    break;
			    case 8:
			     $img_path8="images_tmp/".$d['name_file'];
			     $display_block_8="display:none";
			     $display_none_8="display:block";
			    break;
			    case 9:
			     $img_path9="images_tmp/".$d['name_file'];
			     $display_block_9="display:none";
			     $display_none_9="display:block";
			    break;
			    case 10:
			     $img_path10="images_tmp/".$d['name_file'];
			     $display_block_10="display:none";
			     $display_none_10="display:block";
			    break;
			    case 11:
			     $img_path11="images_tmp/".$d['name_file'];
			     $display_block_11="display:none";
			     $display_none_11="display:block";
			    break;
			    case 12:
			     $img_path12="images_tmp/".$d['name_file'];
			     $display_block_12="display:none";
			     $display_none_12="display:block";
			    break;
			    case 13:
			     $img_path13="images_tmp/".$d['name_file'];
			     $display_block_13="display:none";
			     $display_none_13="display:block";
			    break;
			    case 14:
			     $img_path14="images_tmp/".$d['name_file'];
			     $display_block_14="display:none";
			     $display_none_14="display:block";
			    break;
			    case 15:
			     $img_path15="images_tmp/".$d['name_file'];
			     $display_block_15="display:none";
			     $display_none_15="display:block";
			    break;
			    case 16:
			     $img_path16="images_tmp/".$d['name_file'];
			     $display_block_16="display:none";
			     $display_none_16="display:block";
			    break;
			    case 17:
			     $img_path17="images_tmp/".$d['name_file'];
			     $display_block_17="display:none";
			     $display_none_17="display:block";
			    break;
			    case 18:
			     $img_path18="images_tmp/".$d['name_file'];
			     $display_block_18="display:none";
			     $display_none_18="display:block";
			    break;									    
			}
}
}

       echo '
        <div  class=text_head >'.$text_head.'</div>
	<div style="position:absolute;top:388px;left:880px;z-index: 3;">
	     <input type="image"class=nobutton  src="images/PreviousButtonNon.png" alt="Previous" id=PreviousButton disabled="disabled" onclick="toleft();">
	     <input type="image" class=button src="images/NextButton.png" alt="Next" id=NextButton onclick="toright();">
	     </div>	
	     <div class="badge_product" style="position:absolute;top:728px;left:677px;z-index: 3;"><input type="checkbox" name="checked" value="checked" form=add_foto_uploaded '.$bd_product['checked'].'>Категория &#171;Новые товары&#187;</div>
	     
	<div id=info class=blank>
		<div id=info_caption class=caption >ИНФОРМАЦИЯ О ТОВАРЕ <span> текущая категория &#171; '.$category_current.' &#187;   _ID'.$_SESSION['id_product'].' <span></div>
		<div class=txt>Название товара:</div>		
		<input class=info_txt type=text name=name_product style="text-indent:3px;"placeholder="Название товара" value="'.$bd_product['name'].'" form=add_foto_uploaded>
		<div class=txt style="top:132px;">Описание товара:</div>
		<textarea class=info_txt  name=text_product style="height:86px;top:150px;text-indent:3px;resize: none;"placeholder="Текст описания товара" form=add_foto_uploaded>'.$bd_product['description'].'</textarea>		
		<div class=txt style="left:409px;">Бейджик:</div>
			<div class="badge_product" style="left:409px;">				
			<div style="position: absolute;top:0px;">
			<input   class="r_button" type="radio" name="badge" id="p_1" '.$p_1.' value="none" form=add_foto_uploaded>
			<label style="display: inline-block;"for="p_1">Отсутствует</label>
			</div>				
			<div style="position: absolute;top:29px;">
			<input  class="r_button" type="radio" name="badge" id="p_2" '.$p_2.' value="new" form=add_foto_uploaded>
			<label style="display: inline-block;"for="p_2">NEW</label>
			</div>				
			<div style="position: absolute;top:58px;">				
			<input   class="r_button" type="radio" name="badge" id="p_3" '.$p_3.' value="hot" form=add_foto_uploaded>
			<label style="display: inline-block;"for="p_3">HOT</label>
			</div>				
			<div style="position: absolute;top:87px;">				
			<input   class="r_button" type="radio" name="badge" id="p_4" '.$p_4.' value="sale" form=add_foto_uploaded>
			<label style="display: inline-block;"for="p_4">SALE</label>
			</div>				
			</div>
			<input type=hidden name="save" value="save" form=add_foto_uploaded> 
			<input type=hidden name="id_product" value="'.$_SESSION['id_product'].'" form=add_foto_uploaded>
			<input type=hidden name="into" value=1 form=add_foto_uploaded>
<div class=txt style="left:562px;">Стоимость товара:</div>		
    <input class=info_txt type=text name=price_product style="text-indent:3px;left:562px;width:150px;" value="'.$bd_product['price'].'" form=add_foto_uploaded onkeydown = "javascript: return ((event.keyCode==9)||(event.keyCode==8)||((event.keyCode>=96)&&(event.keyCode<106))||((event.keyCode>=48)&&(event.keyCode<=57)))">
<div class=txt style="left:562px;top:122px;">Старая стоимость:</div>		
    <input class=info_txt type=text name=old_price style="text-indent:3px;left:562px;width:150px;top:141px;" value="'.$bd_product['oldprice'].'" form=add_foto_uploaded onkeydown = "javascript: return ((event.keyCode==9)||(event.keyCode==8)||((event.keyCode>=96)&&(event.keyCode<106))||((event.keyCode>=48)&&(event.keyCode<=57)))">
<div class=txt style="left:562px;top:176px;">Количество:</div>		
    <input class=info_txt type="text" name=quantity   id=quantity  style="text-indent:3px;left:562px;width:150px;top:195px;"value="'.$bd_product['quantity'].'" form=add_foto_uploaded onkeydown = "javascript: return ((event.keyCode==9)||(event.keyCode==8)||((event.keyCode>=96)&&(event.keyCode<106))||((event.keyCode>=48)&&(event.keyCode<=57)))">						
	</div>
	<div id=foto_caption class="caption"style="position:absolute;top:371px;width:738px;left:200px;height:46px;z-index: 2;" >ФОТОГРАФИИ ТОВАРА	</div>	
	
<div class="blank"style="top:371px;height:279px;">

	    
<div id="container1"  class="wrap"style="display:block;">	
<ul>
  <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class="foto_product"><img src="'.$img_path1.'" id="foto1_product" style="height:150px;" ></div>	
	<label id="cv_1" for="download_1" class="submit_foto plus"style="'.$display_none_1.';">Изменить</label>		
	<form id="add_foto1" target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id="download_1" type = "file" name = "somename" onchange="document.getElementById(\'add_foto1\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id="uv_1" for="download_1" class="submit_foto plus"style="color:#ad0000;'.$display_block_1.';">Загрузить</label>
	<input type="hidden" name="nn" value="1">
	<input type="hidden" name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type="hidden" name="setvar" id="setvar1" value="1">	
        </form>	
	<form id="formdelfile1" name="formdelfile" target="ifrmdel" action = "delete_file.php" method = "post">
	<input type="hidden" name="file_num" value="1">
        </form>	
	<div id="dv_1" class="submit_foto del_foto plus"style="'.$display_none_1.';"onclick="delfile(this);">Удалить</div>
    </div>
</li>

 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path2.'" id=foto2_product style="height:150px;" ></div>	
	<label id=cv_2 for="download_2" class="submit_foto plus"style="'.$display_none_2.';">Изменить</label>		
	<form id=add_foto2 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_2 type = "file" name = "somename" onchange="document.getElementById(\'add_foto2\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_2 for="download_2" class="submit_foto plus"style="color:#ad0000;'.$display_block_2.';">Загрузить</label>
	<input type=hidden name="nn" value="2">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar2" value="1">	
        </form>	
	<form id=formdelfile2 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="2">
        </form>	
	<div id=dv_2 class="submit_foto del_foto plus"style="'.$display_none_2.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
<li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path3.'" id=foto3_product style="height:150px;" ></div>	
	<label id=cv_3 for="download_3" class="submit_foto plus"style="'.$display_none_3.';">Изменить</label>		
	<form id=add_foto3 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_3 type = "file" name = "somename" onchange="document.getElementById(\'add_foto3\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_3 for="download_3" class="submit_foto plus"style="color:#ad0000;'.$display_block_3.';">Загрузить</label>
	<input type=hidden name="nn" value="3">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar3" value="1">	
        </form>	
	<form id=formdelfile3 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="3">
        </form>	
	<div id=dv_3 class="submit_foto del_foto plus"style="'.$display_none_3.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path4.'" id=foto4_product style="height:150px;" ></div>	
	<label id=cv_4 for="download_4" class="submit_foto plus"style="'.$display_none_4.';">Изменить</label>		
	<form id=add_foto4 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_4 type = "file" name = "somename" onchange="document.getElementById(\'add_foto4\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_4 for="download_4" class="submit_foto plus"style="color:#ad0000;'.$display_block_4.';">Загрузить</label>
	<input type=hidden name="nn" value="4">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar4" value="1">	
        </form>	
	<form id=formdelfile4 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="4">
	<input type=hidden name="setvar4" value="1">	
        </form>	
	<div id=dv_4 class="submit_foto del_foto plus"style="'.$display_none_4.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path5.'" id=foto5_product style="height:150px;" ></div>	
	<label id=cv_5 for="download_5" class="submit_foto plus"style="'.$display_none_5.';">Изменить</label>		
	<form id=add_foto5 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_5 type = "file" name = "somename" onchange="document.getElementById(\'add_foto5\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_5 for="download_5" class="submit_foto plus"style="color:#ad0000;'.$display_block_5.';">Загрузить</label>
	<input type=hidden name="nn" value="5">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar5" value="1">	
        </form>	
	<form id=formdelfile5 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="5">
        </form>	
	<div id=dv_5 class="submit_foto del_foto plus"style="'.$display_none_5.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path6.'" id=foto6_product style="height:150px;" ></div>	
	<label id=cv_6 for="download_6" class="submit_foto plus"style="'.$display_none_6.';">Изменить</label>		
	<form id=add_foto6 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_6 type = "file" name = "somename" onchange="document.getElementById(\'add_foto6\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_6 for="download_6" class="submit_foto plus"style="color:#ad0000;'.$display_block_6.';">Загрузить</label>
	<input type=hidden name="nn" value="6">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar6" value="1">	
        </form>	
	<form id=formdelfile6 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="6">
        </form>	
	<div id=dv_6 class="submit_foto del_foto plus"style="'.$display_none_6.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>

</ul>

</div>
<!-- container1 -->	

<div id="container2"  class="wrap"style="display: none;">	
<ul>
  <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path7.'" id=foto7_product style="height:150px;" ></div>	
	<label id=cv_7 for="download_7" class="submit_foto plus"style="'.$display_none_7.';">Изменить</label>		
	<form id=add_foto7 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_7 type = "file" name = "somename" onchange="document.getElementById(\'add_foto7\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_7 for="download_7" class="submit_foto plus"style="color:#ad0000;'.$display_block_7.';">Загрузить</label>
	<input type=hidden name="nn" value="7">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar" id="setvar7" value="1">	
        </form>	
	<form id=formdelfile7 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="7">
        </form>	
	<div id=dv_7 class="submit_foto del_foto plus"style="'.$display_none_7.';"onclick="delfile(this);">Удалить</div>
    </div>
</li>

 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path8.'" id=foto8_product style="height:150px;" ></div>	
	<label id=cv_8 for="download_8" class="submit_foto plus"style="'.$display_none_8.';">Изменить</label>		
	<form id=add_foto8 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_8 type = "file" name = "somename" onchange="document.getElementById(\'add_foto8\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_8 for="download_8" class="submit_foto plus"style="color:#ad0000;'.$display_block_8.';">Загрузить</label>
	<input type=hidden name="nn" value="8">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar8" value="1">	
        </form>	
	<form id=formdelfile8 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="8">
        </form>	
	<div id=dv_8 class="submit_foto del_foto plus"style="'.$display_none_8.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
<li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path9.'" id=foto9_product style="height:150px;" ></div>	
	<label id=cv_9 for="download_9" class="submit_foto plus"style="'.$display_none_9.';">Изменить</label>		
	<form id=add_foto9 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_9 type = "file" name = "somename" onchange="document.getElementById(\'add_foto9\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_9 for="download_9" class="submit_foto plus"style="color:#ad0000;'.$display_block_9.';">Загрузить</label>
	<input type=hidden name="nn" value="9">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar9" value="1">	
        </form>	
	<form id=formdelfile9 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="9">
        </form>	
	<div id=dv_9 class="submit_foto del_foto plus"style="'.$display_none_9.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path10.'" id=foto10_product style="height:150px;" ></div>	
	<label id=cv_10 for="download_10" class="submit_foto plus"style="'.$display_none_10.';">Изменить</label>		
	<form id=add_foto10 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_10 type = "file" name = "somename" onchange="document.getElementById(\'add_foto10\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_10 for="download_10" class="submit_foto plus"style="color:#ad0000;'.$display_block_10.';">Загрузить</label>
	<input type=hidden name="nn" value="10">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar10" value="1">	
        </form>	
	<form id=formdelfile10 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="10">
	
        </form>	
	<div id=dv_10 class="submit_foto del_foto plus"style="'.$display_none_10.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path11.'" id=foto11_product style="height:150px;" ></div>	
	<label id=cv_11 for="download_11" class="submit_foto plus"style="'.$display_none_11.';">Изменить</label>		
	<form id=add_foto11 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_11 type = "file" name = "somename" onchange="document.getElementById(\'add_foto11\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_11 for="download_11" class="submit_foto plus"style="color:#ad0000;'.$display_block_11.';">Загрузить</label>
	<input type=hidden name="nn" value="11">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar11" value="1">	
        </form>	
	<form id=formdelfile11 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="11">
        </form>	
	<div id=dv_11 class="submit_foto del_foto plus"style="'.$display_none_11.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path12.'" id=foto12_product style="height:150px;" ></div>	
	<label id=cv_12 for="download_12" class="submit_foto plus"style="'.$display_none_12.';">Изменить</label>		
	<form id=add_foto12 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_12 type = "file" name = "somename" onchange="document.getElementById(\'add_foto12\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_12 for="download_12" class="submit_foto plus"style="color:#ad0000;'.$display_block_12.';">Загрузить</label>
	<input type=hidden name="nn" value="12">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar12" value="1">	
        </form>	
	<form id=formdelfile12 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="12">
        </form>	
	<div id=dv_12 class="submit_foto del_foto plus"style="'.$display_none_12.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
</ul>

</div>
<!-- container2 -->	

<div id="container3"  class="wrap"style="display: none;">	
<ul>
  <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path13.'" id=foto13_product style="height:150px;" ></div>	
	<label id=cv_13 for="download_13" class="submit_foto plus"style="'.$display_none_13.';">Изменить</label>		
	<form id=add_foto13 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_13 type = "file" name = "somename" onchange="document.getElementById(\'add_foto13\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_13 for="download_13" class="submit_foto plus"style="color:#ad0000;'.$display_block_13.';">Загрузить</label>
	<input type=hidden name="nn" value="13">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar" id="setvar13" value="1">	
        </form>	
	<form id=formdelfile13 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="13">
        </form>	
	<div id=dv_13 class="submit_foto del_foto plus"style="'.$display_none_13.';"onclick="delfile(this);">Удалить</div>
    </div>
</li>

 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path14.'" id=foto14_product style="height:150px;" ></div>	
	<label id=cv_14 for="download_14" class="submit_foto plus"style="'.$display_none_14.';">Изменить</label>		
	<form id=add_foto14 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_14 type = "file" name = "somename" onchange="document.getElementById(\'add_foto14\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_14 for="download_14" class="submit_foto plus"style="color:#ad0000;'.$display_block_14.';">Загрузить</label>
	<input type=hidden name="nn" value="14">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar14" value="1">	
        </form>	
	<form id=formdelfile14 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="14">
        </form>	
	<div id=dv_14 class="submit_foto del_foto plus"style="'.$display_none_14.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
<li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path15.'" id=foto15_product style="height:150px;" ></div>	
	<label id=cv_15 for="download_15" class="submit_foto plus"style="'.$display_none_15.';">Изменить</label>		
	<form id=add_foto15 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_15 type = "file" name = "somename" onchange="document.getElementById(\'add_foto15\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_15 for="download_15" class="submit_foto plus"style="color:#ad0000;'.$display_block_15.';">Загрузить</label>
	<input type=hidden name="nn" value="15">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar15" value="1">	
        </form>	
	<form id=formdelfile15 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="15">
        </form>	
	<div id=dv_15 class="submit_foto del_foto plus"style="'.$display_none_15.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path16.'" id=foto16_product style="height:150px;" ></div>	
	<label id=cv_16 for="download_16" class="submit_foto plus"style="'.$display_none_16.';">Изменить</label>		
	<form id=add_foto16 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_16 type = "file" name = "somename" onchange="document.getElementById(\'add_foto16\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_16 for="download_16" class="submit_foto plus"style="color:#ad0000;'.$display_block_16.';">Загрузить</label>
	<input type=hidden name="nn" value="16">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar16" value="1">	
        </form>	
	<form id=formdelfile16 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="16">
	</form>	
	<div id=dv_16 class="submit_foto del_foto plus"style="'.$display_none_16.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path17.'" id=foto17_product style="height:150px;" ></div>	
	<label id=cv_17 for="download_17" class="submit_foto plus"style="'.$display_none_17.';">Изменить</label>		
	<form id=add_foto17 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_17 type = "file" name = "somename" onchange="document.getElementById(\'add_foto17\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_17 for="download_17" class="submit_foto plus"style="color:#ad0000;'.$display_block_17.';">Загрузить</label>
	<input type=hidden name="nn" value="17">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar17" value="1">	
        </form>	
	<form id=formdelfile17 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="17">
        </form>	
	<div id=dv_17 class="submit_foto del_foto plus"style="'.$display_none_17.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>
 
 <li>
    <div style="height:215px;width:151px;top:62px;">	
       <div  class=foto_product><img src="'.$img_path18.'" id=foto18_product style="height:150px;" ></div>	
	<label id=cv_18 for="download_18" class="submit_foto plus"style="'.$display_none_18.';">Изменить</label>		
	<form id=add_foto18 target="ifrm_1f" action = "loading.php" method = "post" enctype = \'multipart/form-data\'>
        <input  id=download_18 type = "file" name = "somename" onchange="document.getElementById(\'add_foto18\').submit(); show(this);return false;" class="submit_foto"style="position:absolute;top:0px;left:200px;visibility:hidden;"/>   
	<label id=uv_18 for="download_18" class="submit_foto plus"style="color:#ad0000;'.$display_block_18.';">Загрузить</label>
	<input type=hidden name="nn" value="18">
	<input type=hidden name="category_current" value="'.$category_curr.'"><input type=hidden name="category" value='.$_GET['n'].'>
	<input type=hidden name="setvar"id="setvar18" value="1">	
        </form>	
	<form id=formdelfile18 name=formdelfile target="ifrmdel" action = "delete_file.php" method = "post">
	<input type=hidden name="file_num" value="18">
        </form>	
	<div id=dv_18 class="submit_foto del_foto plus"style="'.$display_none_18.';" onclick="delfile(this);">Удалить</div>
    </div>
 </li>

</ul>

</div>
<!-- container3 -->	

</div>
	 
<div id=variant class=blank style="top:667px;height:184px;">		
<div id=variant_caption class=caption >ВАРИАЦИИ ТОВАРА</div>
<div class="variation_product">	
';
$disdis=0;
if ($bd_product['name_variation1']== "")
{$bd_product['name_variation1']="";$dis1="display:none;";$disdis=$disdis+1;}
else{$v_1="checked";$checked=1;}
echo '			
     <div class=vardisplay id=var1 style="height:35px;width:450px;'.$dis1.'">
    <input   class="r_button" type="radio" name="variation" id="v_1" '.$v_1.' value=1 form=add_foto_uploaded>
    <label id=l_1 class=varlabel for="v_1"onclick="setvar(this);">.</label>
    <input id=inp_1 class="varinput"type=text name="name1" placeholder="Вариация 1" value="'.$bd_product['name_variation1'].'" form=add_foto_uploaded >
    <div id=d_1 class="submit_add vardel"onclick="delvar(this);">Удалить</div>
    </div>
    
';

if ($bd_product['name_variation2']== "")
{$bd_product['name_variation2']="";$dis2="display:none;";$disdis=$disdis+1;}
else if($v_1 !="checked"){$v_2="checked";$checked=2;}
echo '	
    
       <div class=vardisplay id=var2 style="height:35px;width:450px;'.$dis2.'">
    <input   class="r_button" type="radio" name="variation" id="v_2" '.$v_2.' value=2 form=add_foto_uploaded>
    <label id=l_2 class=varlabel for="v_2"onclick="setvar(this);">.</label>
    <input id=inp_2 class="varinput"type=text name="name2" placeholder="Вариация 2" value="'.$bd_product['name_variation2'].'" form=add_foto_uploaded >
    <div id=d_2 class="submit_add vardel"onclick="delvar(this);">Удалить</div>
    </div>
    
    ';
 if ($bd_product['name_variation3']== "")
{$bd_product['name_variation3']="";$dis3="display:none;";$disdis=$disdis+1;}
else if (($v_1!="checked")&&($v_2!="checked")){$v_3="checked";$checked=3;}
echo '	
    
      <div class=vardisplay id=var3 style="height:35px;width:450px;'.$dis3.'">
    <input   class="r_button" type="radio" name="variation" id="v_3" '.$v_3.' value=3 form=add_foto_uploaded>
    <label id=l_3 class=varlabel for="v_3"onclick="setvar(this);">.</label>
    <input id=inp_3 class="varinput"type=text name="name3" placeholder="Вариация 3" value="'.$bd_product['name_variation3'].'" form=add_foto_uploaded >
    <div  id=d_3 class="submit_add vardel" onclick="delvar(this);">Удалить</div>
    </div>

';

     if ($disdis==0){$disadd="display:none;";}else{$disadd="display:block;";}
echo '	

    <div  id=addvar class="submit_add vardel"style="left:260px;width:200px;top:0px;color:#02873a;'.$disadd.'"onclick="addvar1();">Добавить вариацию</div>
    
';
echo '	
</div>			
       <form name=add_foto_uploaded  id=add_foto_uploaded target="ifrm4" action = "loading_uploaded.php" method = "post">
       <div  class="save_all"
       onclick="uploaded();">Сохранить изменения</div>
       <input type=hidden name="f_1" value="1_1.jpg"> 
       <input type=hidden name="curr_category" value="'.translateLatin($category_current).'">
       <input type=hidden name="id_product" value="'.$_SESSION['id_product'].'">
       <input type=hidden name="category" value='.$_GET['n'].'>          
	</form> 
	
	<form id=del_goods name=del_goods  action ="" method = "get">
	<input type=hidden name="id_goods" value='.$_SESSION['id_product'].'>
        <input type=hidden name="sub" value=products>
	<input type=hidden name="n" value='.$_SESSION['n'].'>
	<input type=hidden name="curr_category" value="'.$category_current.'">
	<div class="submit_foto del_foto plus"style="left:0px;position:absolute;top:215px;display:inline-block;font-size:14px;"
	onclick="delgoods();">Удалить товар</div>
	</form>	
	<script type="text/javascript">setvar2('.$checked.');</script>
       ';
        break;
    case 'ТОВАРЫ':
//$category_current=$_GET['category_current'];
    echo '
        <div  class=text_head >'.$text_head.'</div>
	
	<form action="" method=GET id="rename">
	<div class=category_add style="left:200px;top:91px;">Текущая категория: <input id="category_rename" type=text name=category_rename style="border:1px solid #dee1e2;height:30px;width:238px;" value="'.$category_current.'">
	
	<a href="" onclick="document.getElementById(\'rename\').submit(); return false;"class="submit_add rename">переименовать</a>
	</div>		
        <input type=hidden name="into" value="5"> 
	<input type=hidden name="old_name" value="'.$category_current.'">
	<input type=hidden name="sub" value="products">
	<input type=hidden name="n" value='.$_GET['n'].'>
	
	</form>
	
        <div class=list_title style="width:738px;left:200px;top:145px;background-color:#ffffff;border:1px solid #dee1e2;z-index: 1;">НАЗВАНИЕ ТОВАРА<div class="list_title tt"style="left:303px;">СТОИМОСТЬ
	<span style="position:relative;left:55px;">ID</span>
	<span style="position:relative;left:105px;">Новые</span>
	</div></div>
	<div  class=list  style="width:740px;top:193px;height:811px;overflow-y: auto;overflow-x:hidden;background-color:#ecf0f1;border:none;">
		
	';
	    $n=-58;
	    for ($i=0; $i<sizeof($bd_category);$i++)
            {$n=$n+58;

	 //  echo "<script>alert(\"".$bd_category[$i]['name']."\");</script>";
	    if ($bd_category[$i]['checked']=='checked'){$newcheck = '&#10004';}else{$newcheck = '';}
	    if (strlen($bd_category[$i]['name'])<=40){$t=17;}
	    else if (strlen($bd_category[$i]['name'])<=50){$t=9;}
	    else{$t=0;}
	    $b2=number_format($bd_category[$i]['price'], 0, ',', ' ');
	     //$sum=$sum+$c;
	     echo '			 
	    <div class=category_title style="top:'.$n.'px;">
	    <p class=imgdirectoryname style="top:'.$t.'px;left:25px;">'.$bd_category[$i]['name'].'</p><div class=lborder></div>
	    <!-- <div class=imgdirectory></div> -->
	    <div class="number">'.$b2.'руб.</div>
	    <div class="number" style="position:absolute;left:400px;">_ID'.$bd_category[$i]['id_product'].'</div>
	    <div class="number" style="position:absolute;left:490px;">'.$newcheck.'</div>
	    ';							
	    echo'
	    <a href="admin.php?sub=products&into=1&category_current='.translateLatin($category_current).'&n='.$_GET['n'].'&num='.$bd_category[$i]['id_product'].'">
<div class=view style="left:618px;text-decoration:none;">просмотр</div><a>
	    </div>			
	     ';
	     }			 
	echo'		
	</div>
	
       <form id=add_product action = "" method =GET>
       <div  class="save_all" style="top:'.$add_top.'px;left:800px;font-size:15px;font-weight: 400;" onclick="document.getElementById(\'add_product\').submit(); return false;">Добавить товар</div>
       <input type=hidden name="sub" value=products> 
       <input type=hidden name="add_product" value="'.$category_current.'"> 
       <input type=hidden name="n" value='.$_GET['n'].'> 
       <input type=hidden name="into" value=7> 
       </form> 
	
	';	
     break;	
      case 'ЗАКАЗЫ':
    echo '
        <div  class=text_head >'.$text_head.'</div>
	
        <div class=list_title style="width:738px;left:200px;top:91px;background-color:#ffffff;border:1px solid #dee1e2;z-index:1;">НОМЕР ЗАКАЗА
	<div class="list_title tt"style="left:230px;">СТАТУС</div>
	<div class="list_title tt"style="left:330px;">СУММА</div>
	<div class="list_title tt"style="left:455px;">ВРЕМЯ ЗАКАЗА</div>
	</div>
    <!--	<div style="width:738px;top:197px;height:232px;"></div>-->
	<div  class=list  style="width:738px;top:139px;height:406px;">		        		
	';
	    //$orders=get_orders_table();
	    $n=-58;
	    $i=0;
	    foreach($orders as $kk=>$vv)
            {$n=$n+58;
	    $users['id_order']=$vv['id_order'];
	    $users['email']=$vv['email'];
	    $users['status']=$vv['status'];
	    $users['sum_price']=$vv['sum_price'];
            $users['sdate']=$vv['sdate'];
            $users['shipping']=$vv['shipping'];
            $users['shipping_comment']=$vv['shipping_comment']; 
            $a = strtotime($users['sdate']);
            $year= strftime('%Y',$a);
	    $day=strftime('%d',$a);
	    $month=strftime('%m',$a);
	    $hour=strftime('%H',$a);
	    $minute=strftime('%M',$a);			
            //$t=19;
           // $users['id_order']=4830;			
	    if (strlen($users['email'])<=17)
	    {$t=19;}
	    else {$t=8;}
	     echo '			 
	    <div class="category_title user"style="top:'.$n.'px;z-index:0px;">
	    <p class="imgdirectoryname numorder" style="left:28px;top:'.$t.'px;width:250px;">№<span id=st_'.$i.'>'.$users['id_order'].'</span><span style="color:#7f8c8d;">&nbsp;&nbsp;от&nbsp;&nbsp;</span><span style="color:#333366;">'.$users['email'].'</span></p>
	    <div class=lborder></div>			

	    <div class="number_h"style="left:342px;width:100px;">'.number_format($users['sum_price'], 0, ',', ' ').'руб.</div>
	    <div class="number_d"style="left:460px;color:#9c9c9c;">'.$day.'.'.$month.'.'.$year.' в '.$hour.':'.$minute.'</div>
	    ';						
	    echo'
	    <a id="ashow_'.$i.'" href="admin.php?sub=order&into=1&id_order='.$users['id_order'].'&status='.$users['status'].'"><div class=view style="left:618px;">просмотр</div><a>
	    </div>				
	     ';
	     $i=$i+1;
	     }
///
$n=(sizeof($orders)-1)*58-4;

for ($i=(sizeof($orders)-1); $i>=0;$i--)
            {
$color_status0="#0a8eaf";$name_status0="принят";
$color_status1="#1ba254";$name_status1="отгружен";
$color_status2="#ad5a00";$name_status2="у курьера";
$color_status3="#a01ba2";$name_status3="доставлен";
$color_status4="#6c6c6c";$name_status4="отмена";				
		
		      switch ($orders[$i]['status']) 
		    {
			case 'принят':
			 $color_status="#0a8eaf";
			break;
			case 'отгружен':
			 $color_status="#1ba254";
			 $color_status0="#1ba254";$name_status0="отгружен";
			 $color_status1="#0a8eaf";$name_status1="принят";
			break;
			case 'у курьера':
			 $color_status="#ad5a00";
			 $color_status0="#ad5a00";$name_status0="у курьера";
			 $color_status2="#0a8eaf";$name_status2="принят";						 
			break;
			case 'доставлен':
			 $color_status="#a01ba2";
			 $color_status0="#a01ba2";$name_status0="доставлен";
			 $color_status3="#0a8eaf";$name_status3="принят";						 
			break;
			case 'отмена':
			 $color_status="#6c6c6c";
			 $color_status0="#6c6c6c";$name_status0="отмена";
			 $color_status4="#0a8eaf";$name_status4="принят";
			break;
			//default:
			// $color_status="#0a8eaf";		    
		    }
		
		
	echo '	
	    <div class="number_u"style="left:254px;text-align:left;top:'.$n.'px;">
	    
    <ul class="dropdown">
	<li class="dropdown_top">
	    <span class="dropdown_top" style="color:'.$color_status.';border-bottom: 1px dashed '.$color_status.';background-color:transparent;" id=a1_'.$i.'>'.$orders[$i]['status'].'</span>
	    <ul class="dropdown_inside">
	        <li><span  id=l0_'.$i.' style="color:'.$color_status0.';"onclick="li_click(this);">'.$name_status0.'</span></li>
		<li><span  id=l1_'.$i.' style="color:'.$color_status1.';"onclick="li_click(this);">'.$name_status1.'</span></li>
		<li><span  id=l2_'.$i.' style="color:'.$color_status2.';"onclick="li_click(this);">'.$name_status2.'</span></li>
		<li><span  id=l3_'.$i.' style="color:'.$color_status3.';"onclick="li_click(this);">'.$name_status3.'</span></li>
		<li><span  id=l4_'.$i.' style="color:'.$color_status4.';"onclick="li_click(this);">'.$name_status4.'</span></li>				
	    </ul>
	</li>		
    </ul>
	    </div>
	    ';
	    $n=$n-58;
	    }
/// 	
	     
	echo'		
	</div>			
       <form name=ststus_ch  id=ststus_ch target="ifrmstatus" action = "status_ch.php" method = "post">
       <input type=hidden name="status" id="satusform" value="принят"> 
       <input type=hidden name="id_order"id="id_orderform" value="1"> 
       </form> 		
	';	
     break;	
          case 'ЗАКАЗ': 
	  
	  switch ($_GET['status']) 
		    {
			case 'принят':
			 $color_status="#0a8eaf";
			break;
			case 'отгружен':
			 $color_status="#1ba254";
			break;
			case 'у курьера':
			 $color_status="#ad5a00";
			break;
			case 'доставлен':
			 $color_status="#a01ba2";
			break;
			case 'отмена':
			 $color_status="#6c6c6c";
			break;
			default:
			 $color_status="#0a8eaf";		    
		    }
	  
	  
    echo '
        <div  class=text_head >'.$text_head.'<span style="color:#3498db;"> №'.$_GET['id_order'].' </span><span id="chcolor" style="font-size:26px;text-transform:uppercase;color:'.$color_status.';"> (<span id="chstatus" style="border-bottom-width:1px;border-bottom-style:dashed;">'.$_GET['status'].'</span>)</span></div>	
	
	 <div class=list_title style="width:738px;left:200px;top:91px;background-color:#ffffff;border:1px solid #dee1e2;z-index: 1	;">СОДЕРЖИМОЕ ЗАКАЗА</div>
	 
	<div  class=list  style="width:740px;top:139px;height:175px;overflow-y: auto;
	 overflow-x:hidden;background-color:#ecf0f1;border:none;">
	    	    
	';		
	       $g=get_orders_id($_GET['id_order']);
	       //echo $g[0]['shipping_comment'];
	       //exit(0);
	       
	       
	  switch ($g[0]['shipping']) 
		    {
			case '1':
			 $shipping="Курьерская доставка<br>с оплатой при получении";
			break;
			case '2':
			 $shipping="Почта России<br>с наложенным платежом";
			break;
			case '3':
			 $shipping="Доставка через терминалы<br>QIWI Post";
			break;					
			default:
			 $shipping="Курьерская доставка<br>с оплатой при получении";		    
		    }			   
	       
	       $bd_users=get_user_email($g[0]['email']);
	       foreach($bd_users as $kk=>$vv)
              {
	       $users['login']=$vv['login'];			   
	       $users['email']=$vv['email'];
	       $users['phone']=$vv['phone'];
	       $users['street']=$vv['street'];
               $users['house']=$vv['house'];
               $users['apartment']=$vv['apartment'];
	       $users['city']=$vv['city'];
	      }
	      //echo $users['name'];
	       //exit(0);
               $b=get_orders_all_goods_id($_GET['id_order']);
	       
	       $siz=sizeof($b);
	       
	       if ($siz>3){$siz=3;}
	       $sum_top=$siz*57+140;	
	       //$del_top=$sum_top+78;				
	       $summ=0;
	       $n=-58;	
	for ($i=0; $i<sizeof($b);$i++)            
            {$n=$n+58;						
	     
	     if (strlen($b[$i]['name'])<=20)
	    {$t=19;}
	    else if (strlen($b[$i]['name'])<=47){$t=7;}
	    else {$t=2;}
	     
	     //$t=19;
	     $summ=$summ+$b[$i]['price'];
	     $sump=$b[$i]['price']*$b[$i]['scount'];
	    //exit(0);
	     echo '			 
	    <div class=category_title id=namegoods_'.$i.' style="top:'.$n.'px;display:block;"><div class="clumnp"><p class="imgdirectoryname numorder" style="left:28px;top:'.$t.'px;width:180px;">'.$b[$i]['name'].'</p></div><div class=lborder></div>
	    <div class="number_h"style="left:215px;">'.number_format($b[$i]['price'], 0, ',', ' ').' руб.</div>
	    <input type=text style="border:1px solid #dee1e2;top:13px;text-indent:2px;width:34px;height:27px;left:373px;background-color:transparent;" name=scount  class="info_txt_count number_h"  value="'.$b[$i]['scount'].'"readonly>
	    <div class="number_h"style="left:430px;">'.number_format($sump, 0, ',', ' ').' руб.</div>			
	    ';	

	
	    echo'
	    <form id=cancelgoods action = "" method =GET>
	    <div class=view style="left:590px;color:#c73b3b;cursor:pointer;"id="delgoods_'.$i.'"onclick="document.getElementById(\'cancelgoods\').submit(); return false;">убрать из заказа</div>
	    <input type=hidden name="sub" value="order">
	    <input type=hidden name="id_order" value='.$_GET['id_order'].'>
	    <input type=hidden name="into" value=2>
	    <input type=hidden name="id_goods" value='.$b[$i]['id_goods'].'>
	    <input type=hidden name="name_variation" value="'.$b[$i]['name_variation'].'">
	    </form>
	     ';			
	    echo'		
	    </div>			
	     ';	
	     }			 
	echo'		
	</div>	
     <table  class=sum_title_h style="top:'.$sum_top.'px;width:740px;"cellspacing="0" cellpadding="0">	
     <tr>	 
     <td  align="right"> ИТОГОВАЯ<br>СУММА</td>
     <td   class="sum_title_v" align="left"style="padding-top:7px;">'.number_format($summ, 0, ',', ' ').'<span> руб.</span></td>
     </tr>
     </table>	 
     
	<form name="ststus_ch"  id="ststus_ch" target="ifrmstatus" action = "status_ch.php" method = "post">
       <div  class="save_all" style="color:#ad0000;top:805px;left:790px;" onclick="document.getElementById(\'ststus_ch\').submit();cancel_click();">Отменить заказ</div>
       <input type=hidden name="id_order" value='.$_GET['id_order'].'>
       <input type=hidden name="status" id="statusform" value="отмена">	   
	</form> 		
	
	    <div class=list_title style="width:738px;left:200px;top:398px;background-color:#ffffff;border:1px solid #dee1e2;">ИНФОРМАЦИЯ О ЗАКАЗЕ</div>
	    <div  class=list  style="width:738px;height:331px;top:446px;">
	
	<div class=txt   style="top:19px;left:21px;">Контактное лицо(ФИО):</div>
	<input type=text style="top:37px;text-indent:3px;width:259px;left:18px;" name=login  class=info_txt  value="'.$users['login'].'"readonly>
	<div class=txt   style="top:19px;left:306px;">Город:</div>
	<input type=text style="top:37px;text-indent:3px;width:185px;left:302px;" name=city  class=info_txt  value="'.$users['city'].'"readonly>
	
	<div class="txt" style="top:19px;left:527px;">Способ доставки:</div>
	<div class="txttxt" style="position:absolute;left:527px;top:23px;"><p>'.$shipping.'</p></div>
	
	
	<div class=txt   style="top:81px;left:21px;">Контактный телефон:</div>
	<input type=text style="top:99px;text-indent:3px;width:259px;left:18px;" name=phone  class=info_txt  value="'.$users['phone'].'"readonly>
	<div class=txt   style="top:81px;left:306px;">Улица:</div>
	<input type=text style="top:99px;text-indent:3px;width:185px;left:302px;" name=street  class=info_txt  value="'.$users['street'].'"readonly>
	
	<div class=txt   style="top:145px;left:21px;">E-mail:</div>
	<input type=text style="top:163px;text-indent:3px;width:259px;left:18px;" name=email  class=info_txt  value="'.$g[0]['email'].'"readonly>
	
	<div class=txt   style="top:145px;left:306px;">Дом:</div>
	<input type=text style="top:163px;text-indent:3px;width:47px;left:302px;" name=house  class=info_txt  value="'.$users['house'].'"readonly>
	<div class=txt   style="top:145px;left:386px;">Квартира:</div>
	<input type=text style="top:163px;text-indent:3px;width:47px;left:382px;" name=apartment  class=info_txt  value="'.$users['apartment'].'"readonly>
	
	<div class=txt  style="left:21px;top:210px;">Коментарий к заказу:</div>				
	<textarea  class="txttxt info_txt" type="text"  name="shipping_comment" style="left:21px;top:229px;width:462px;height:72px;resize: none;"value="" readonly>'.$g[0]['shipping_comment'].'</textarea>
	
	</div>				
	';	
     break;	
      case 'ПОЛЬЗОВАТЕЛИ':
    echo '
        <div  class=text_head >'.$text_head.'</div>	
	
        <div class=list_title style="width:738px;left:200px;top:91px;background-color:#ffffff;border:1px solid #dee1e2;z-index:1;">ИМЯ<div class="list_title tt"style="left:225px;">E-MAIL</div><div class="list_title tt"style="left:425px;">ТЕЛЕФОН</div></div>
	<div style="width:738px;top:197px;height:232px;"></div>
	<div  class=list  style="width:738px;top:139px;height:406px;overflow-y: auto;overflow-x:hidden;">		        		
	';
	    $n=-58;
	    foreach($bd_users as $kk=>$vv)
            {$n=$n+58;
	    $users['name']=$vv['name'];
	    $users['email']=$vv['email'];
	    $users['phone']=$vv['phone'];			
	    if (strlen($users['name'])<=40)
	    {$t=19;}
	    else if (strlen($users['name'])<=50){$t=8;}
	    else {$t=0;}
	     echo '			 
	    <div class="category_title user"style="top:'.$n.'px;"><p class=imgdirectoryname style="left:28px;top:'.$t.'px;width:180px;">'.$users['name'].'</p><div class=lborder></div> <div class="number_u"style="left:218px;top:19px;">'.$users['email'].'</div><div class="number_u"style="left:418px;top:19px;">'.$users['phone'].'</div>
	    ';						
	    echo'
	    <a href="admin.php?sub=users&into=1&email='.$users['email'].'"><div class=view style="left:618px;">просмотр</div><a>
	    </div>			
	     ';
	     }			 
	echo'		
	</div>		
	';	
     break;	
      case 'ПРОСМОТР ПОЛЬЗОВАТЕЛЯ':

    echo '
        <div  class=text_head >'.$text_head.'</div>		
	<div class=list_title style="width:738px;left:200px;top:91px;background-color:#ffffff;border:1px solid #dee1e2;">ИНФОРМАЦИЯ О ПОЛЬЗОВАТЕЛЕ</div>
	<div  class=list  style="width:738px;top:139px;height:217px;">
	
	<div class=txt   style="top:19px;left:21px;">Контактное лицо(ФИО):</div>
	<input type=text style="top:37px;text-indent:3px;width:259px;left:18px;" name=login  class=info_txt  value="'.$_POST['login'].'"readonly>
	<div class=txt   style="top:19px;left:306px;">Город:</div>
	<input type=text style="top:37px;text-indent:3px;width:259px;left:302px;" name=city  class=info_txt  value="'.$_POST['city'].'"readonly>
	
	<div class=txt   style="top:81px;left:21px;">Контактный телефон:</div>
	<input type=text style="top:99px;text-indent:3px;width:259px;left:18px;" name=phone  class=info_txt  value="'.$_POST['phone'].'"readonly>
	<div class=txt   style="top:81px;left:306px;">Улица:</div>
	<input type=text style="top:99px;text-indent:3px;width:259px;left:302px;" name=street  class=info_txt  value="'.$_POST['street'].'"readonly>
	
	<div class=txt   style="top:145px;left:21px;">E-mail:</div>
	<input type=text style="top:163px;text-indent:3px;width:259px;left:18px;" name=email  class=info_txt  value="'.$_GET['email'].'"readonly>
	
	<div class=txt   style="top:145px;left:306px;">Дом:</div>
	<input type=text style="top:163px;text-indent:3px;width:47px;left:302px;" name=house  class=info_txt  value="'.$_POST['house'].'"readonly>
	<div class=txt   style="top:145px;left:386px;">Квартира:</div>
	<input type=text style="top:163px;text-indent:3px;width:47px;left:382px;" name=apartment  class=info_txt  value="'.$_POST['apartment'].'"readonly>
	
	</div>		
	
	 <div class=list_title style="width:738px;left:200px;top:374px;background-color:#ffffff;border:1px solid #dee1e2;z-index: 1	;">ИСТОРИЯ ЗАКАЗОВ</div>
	 
	<div  class=list  style="width:740px;top:422px;height:175px;overflow-y: auto;
	 overflow-x:hidden;background-color:#ecf0f1;border:none;">
	    	    
	';		
	       $b=get_orders($_GET['email']);				
	       $siz=sizeof($b);
	       if ($siz>3){$siz=3;}
	       $sum_top=$siz*57+422;	
	       $del_top=$sum_top+78;				
	       $summ=0;
	       $n=-58;	
	for ($i=0; $i<sizeof($b);$i++)            
            {$n=$n+58;						
	     $a = strtotime($b[$i]['sdate']);
             $year= strftime('%Y',$a);
	     $day=strftime('%d',$a);
	     $month=strftime('%m',$a);
	     $hour=strftime('%H',$a);
	     $minute=strftime('%M',$a);
	     $t=19;
	     $summ=$summ+$b[$i]['sum_price'];
	
	     echo '			 
	    <div class=category_title style="top:'.$n.'px;"><p class="imgdirectoryname numorder" style="left:28px;top:'.$t.'px;width:180px;">№'.$b[$i]['id_order'].'</p><div class=lborder></div> <div class="number_h"style="left:234px;">'.number_format($b[$i]['sum_price'], 0, ',', ' ').' руб.</div><div class="number_d"style="left:550px;">'.$day.'.'.$month.'.'.$year.' в '.$hour.':'.$minute.'</div>
	    ';						
	    echo'		
	    </div>			
	     ';	
	     }			 
	echo'		
	</div>	
     <table  class=sum_title_h style="top:'.$sum_top.'px;width:740px;"cellspacing="0" cellpadding="0">	
     <tr>	 
     <td  align="right"> ИТОГОВАЯ<br>СУММА ЗАКАЗОВ</td>
     <td   class=sum_title_v align="left">'.number_format($summ, 0, ',', ' ').'<span> руб.</span></td>
     </tr>
     </table>
	    <form id=delete_user action = "" method =GET>
       <div  class="save_all" style="color:#ad0000;top:'.$del_top.'px;left:740px;" onclick="document.getElementById(\'delete_user\').submit(); return false;">Удалить пользователя</div>
       <input type=hidden name="DEL" value='.$_GET['email'].'> 
	</form> 
	';
     break;	
     
     
          case 'КАТЕГОРИИ':
    echo '
        <div  class=text_head >'.$text_head.'</div>
	<div  class=list  style="height:'.$products_height.'px;">
	<div class=list_title >НАЗВАНИЕ КАТЕГОРИИ<div class="list_title tt">КОЛИЧЕСТВО ТОВАРОВ</div></div>		
	';
	    $n=-10;
	    for ($i=0; $i<sizeof($bd_category_name);$i++)
            {$n=$n+58;
	     $ii=$i+1;		     
	     echo '			 
            <div class=category_title style="top:'.$n.'px;border:0px;border-bottom:1px solid #dee1e2;"><p class=imgdirectoryname style="top:17px;">'.$bd_category_name[$i].'</p><div class=lborder></div><div class=imgdirectory></div><div class="number">'.$bd_category_name_quantity[$i].'</div>
	    ';			
	//     if (($i==sizeof($bd_category_name)-1)&&($i>0))
	//     {
	    echo' 
	    <a href="admin.php?sub=categories&into=1&name='.$bd_category_name[$i].'" onclick="return confirm(\'Удалить категорию со всеми товарами?\')"><div class=del>удалить</div><a>
	    ';
	//     }			
	    echo'
	    <a href="admin.php?sub=products&category_current='.translateLatin($bd_category_name[$i]).'&n='.$bd_category_ID[$i].'"><div class=view>просмотр</div><a>
	    </div>			
	     ';
	     }			 
	echo'		
	</div>
	';
	$siz=sizeof($bd_category_name);
	if ($siz<6)
	{
	echo'
	<form action="" method=GET id="add">
	<div class=category_add style="top:'.$category_addd.'px;">Добавить категорию:  <input id="category_add" type=text name=category_add style="border:1px solid #dee1e2;height:30px;width:249px;" placeholder="название категории">
	
	<a href="" onclick="document.getElementById(\'add\').submit(); return false;"class=submit_add>добавить категорию</a>
	</div>		
        <input type=hidden name="into" value="2"> 
	<input type=hidden name="sub" value="categories">
	<input type=hidden name="siz" value="'.$siz.'">
	</form>		
	';	
	}
     break;	
     }			
echo ' 
 <iframe name=ifrm_1f id=ifrm_1f height="500" width="500"style="top:500px;position:absolute; border: 1px solid red;display:none;"onLoad=addimg_n();></iframe>
 <iframe name=ifrm4 id=ifrm4 height="500" width="500"style="top:1000px;position:absolute; border: 1px solid red;display:none;"></iframe>
 <iframe name=ifrmdel id=ifrmdel height="500" width="500"style="top:1500px;position:absolute; border: 1px solid red;display:none;"></iframe>
 <iframe name=ifrmstatus id=ifrmstatus height="500" width="500"style="top:2000px;position:absolute; border: 1px solid red;display:none;"></iframe>

 </body>
</html>	
';
?>
