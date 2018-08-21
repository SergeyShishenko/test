<?php
session_start();
include ("func.inc");

    $a=get_category();// вся таблица		
        foreach($a as $kk=>$vv)
        {
	    $bd['name']=$vv['name'];
	   $bd['id_category']=$vv['id_category'];
	   $bd_category_name[]=$bd;
      }
    
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
    //echo $_POST['into'];
    //проверка ВХОД
    if (($_GET['into']==4)&&($_POST['into']!="2"))
    {
	$_POST['into']=1;
	$_POST['email']=$_GET['email'];
	get_customer($_GET['email']);
    }
    //echo $_POST['into'];
   $placeholder_default = array("Сергей", "mail@company.ru", "•••••••","•••••••","+7 916 000-00-00","Москва","Название улицы","10","150");
  //проверка валидации формы регестрация
  if (($_POST['into']==1)&&($_GET['into']!="4"))
  {  
      $str=strip_data($_POST['login']);
      //$stremail=is_email($_POST['email']);
      if ((trim($_POST['login'])=="")||trim($_POST['login'])!==$str)
	  { 		 
	  $placeholder_default[0] = "Введите Ваше имя!";
	  $_POST['login']="";
	  $_POST['into']=0; 
          }
	  //echo is_email($_POST['email']);
	if  (is_email($_POST['email'])=="false")
	{
	    $placeholder_default[1] = "Неверный адрес!";
	    $_POST['email']="";
	    $_POST['into']=0;
	}
	if ($_POST['password']=="")
	{
	    $placeholder_default[2] = "Ведите пароль!";
	    $_POST['password']="";
	    $_POST['into']=0;
	}
	//echo $_POST['password'];
	 if (($_POST['password']!=="")&&(trim($_POST['repeatpassword'])!== trim($_POST['password'])))
	{
	    $placeholder_default[3] = "Пароли не совпадают!";
	    $_POST['repeatpassword']="";
	    $_POST['into']=0;
	}
       if ($_POST['into']==1)
       {
       // проверка на существование	    
	 
	 if (db_compare($_POST['email'],"email","customers_table")==true)
	{
	    $placeholder_default[1] = "Пользователь с таким адресом уже зарегистрирован!";
	    $_POST['email']="";
	$_POST['into']=0;		    
	}
       }	
   }  
 //echo $_POST['email'];
   //проверка валидации формы личный кабинет
  if ($_POST['into']==2)
  {  
//$_POST['email']=$reg_mail;
//echo $_POST['into'];
      $str=strip_data($_POST['login']);
      //$stremail=is_email($_POST['email']);
      if ((trim($_POST['login'])=="")||trim($_POST['login'])!==$str)
	  { 		 
	  $placeholder_default[0] = "Введите Ваше имя!";
	  $_POST['login']="";
	  $_POST['into']=1; 
          }
	  //echo is_email($_POST['email']);
	if  (is_email($_POST['email'])=="false")
	{
	    $placeholder_default[1] = "Неверный адрес!";
	    $_POST['email']="";
	    $_POST['into']=1;
	}
    
	 if (($_POST['password']!=="")&&(trim($_POST['repeatpassword'])!== trim($_POST['password'])))
	{
	    $placeholder_default[3] = "Пароли не совпадают!";
	    $_POST['repeatpassword']="";
	    $_POST['into']=1;
	}
	
        if ($_POST['phone']=="")
	{
	    $placeholder_default[4] = "Ведите номер телефона!";
	    $_POST['phone']="";
	    $_POST['into']=1;
	}
	if ($_POST['city']=="")
	{
	    $placeholder_default[5] = "Ведите название города!";
	    $_POST['city']="";
	    $_POST['into']=1;
	}
	if ($_POST['street']=="")
	{
	    $placeholder_default[6] = "Ведите название улицы!";
	    $_POST['street']="";
	    $_POST['into']=1;
	}
	if ($_POST['house']=="")
	{
	    $placeholder_default[7] = "Ведите номер дома!";
	    $_POST['house']="";
	    $_POST['into']=1;
	}
	if ($_POST['apartment']=="")
	{
	    $placeholder_default[8] = "Ведите номер квартиры!";
	    $_POST['apartment']="";
	    $_POST['into']=1;
	}
	//echo $_POST['into'];
	if ($_POST['into']==2)
	{
	    //сохранение в базу
	    $trans_login =$_POST['login'];
	    $trans_city =$_POST['city'];
	    $trans_street =$_POST['street'];
	    
	    //проверка city
	    $int_city=db_add_exists($trans_city);
	    //echo $int_city;
	     if (db_compare($_POST['email'],"email","customers_table")==true)
		 // запись есть, обновляем
	     {db_update(
		$trans_login,
		$_POST['phone'],
		$_POST['email'],
		$int_city,
		$trans_street,
		$_POST['house'],
		$_POST['apartment'],
		$_POST['password']); 
	     }
	     else
	     {
	    //новая запись
	    db_store (
	    $trans_login,
	    $_POST['phone'],
	    $_POST['email'],
	    $int_city,
	    $trans_street,
	    $_POST['house'],
	    $_POST['apartment'],
	    $_POST['password']);
	     }			
	    $_POST['into']=1;
	}
  }    
   switch ($_POST['into']) {
    case 1:
    $_GET['into']="";
  $background_width=1400;
  $background_height=1525;
  $products_height=984;
  $Bg_top=$background_height-236; 
  $reg_mail=$_POST['email'];
  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>account</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetlogin.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css"/> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
 <script type="text/javascript" src="JS/jquery.js"></script>
 <script type="text/javascript" src="JS/jquery.maskedinput-1.2.2.js"></script> 
  <script src="JS/account.js"></script>  
 </head>
 <body> 
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;"> 
 <div  class=login >ЛИЧНЫЙ КАБИНЕТ</div> 
 <div id=new_products class=new_products border=0 style="position:absolute;top:272px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">		   		 
		<div style="position: absolute;top:0px;left:584px;z-index:1;">
	     <img src="images/login_line.png"  >
	     </div>				 
		<div class=user >Ваши данные</div>					
	        <form action="" method=post>
		<div class=usertxt style="top:65px;">Контактное лицо (ФИО):</div>
		<input class=inputxtxt type="text" placeholder="Сергей" name=login style="top:94px;"required value="'.$_POST['login'].'">
		
		<div class=usertxt style="top:151px;">Контактный телефон:</div>	
		<input id="phone" class=inputxtxt type="text" placeholder="'.$placeholder_default[4].'" name=phone style="top:178px;"  value="'.$_POST['phone'].'">
		<div class=usertxt style="top:239px;">Email адрес:</div>
		<input class=inputxtxt style="top:265px;"type="email" placeholder="'.$placeholder_default[1].'" name=email required value="'.$_POST['email'].'"
		onfocus = " this.disabled = true "  onblur = "this.disabled = false">
		
		<div class=user style="top:350px;">Адрес доставки</div>
		
		<div class=usertxt style="top:384px;">Город:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[5].'" name=city style="top:410px;" required  value="'.$_POST['city'].'">
		<div class=usertxt style="top:467px;">Улица:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[6].'" name=street style="top:494px;" required  value="'.$_POST['street'].'">
		<div class=usertxt style="top:550px;">Дом:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[7].'" name=house style="top:577px;width:237px;" required  value="'.$_POST['house'].'">
		<div class=usertxt style="top:550px;left:315px;">Квартира:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[8].'" name=apartment style="top:577px;width:237px;left:315px;" required  value="'.$_POST['apartment'].'">
		
		<div class=user style="top:671px;">Изменение пароля</div>
		<div class=usertxt style="top:706px;">Введите новый пароль:</div>
		<input class=inputxtxt type="password" placeholder="'.$placeholder_default[2].'" name=password style="top:732px;"required value="'.$_POST['password'].'">
		<div class=usertxt style="top:789px;">Повторите новый пароль:</div>
		<input class=inputxtxt type="password" placeholder="'.$placeholder_default[3].'" name=repeatpassword style="top:815px;"required value="'.$_POST['repeatpassword'].'">
		<input id="into2" type=hidden name="into" value=2> 
		<input type="submit" style="position: absolute;top:884px;left:30px;width:134px;height:47px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" value="Сохранить">				
		</form> 
		<div class=user style="left:616px;">Ваши заказы</div> 
		<div class=order_scroll >
		';
		$b=get_orders($_POST['email']);
		//$a = strtotime($b[0]['sdate']);
       
	for ($i=0; $i<sizeof($b);$i++)
            
            {$n=$i*140;
	    
	     $a = strtotime($b[$i]['sdate']);
             $year= strftime('%Y',$a);
	     $day=strftime('%d',$a);
	     $month=strftime('%m',$a);
	     $hour=strftime('%H',$a);
	     $minute=strftime('%M',$a);

	    // $status=ucfirst_utf8($b[$i]['status']);
  $status=ucfirst($b[$i]['status']);
	     //echo $status;
	     echo '			 
	     <table class="show_order" style="left:0px;top:'.$n.'px;">
	     <tr>
	     <td  style="width:115px;"valign="top">
	     <span class=order1>№'.$b[$i]['id_order'].'<br></span>
	     <span class=order2val>('.number_format($b[$i]['sum_price'], 0, ',', ' ').'руб.)<br></span>
	     <span class=order3data>'.$day.'.'.$month.'.'.$year.' в '.$hour.':'.$minute.'<br></span>
	     </td>
	     <td class=extradition valign="top" align="left">'.$status.'</td>
	     </tr>
	     </table>			 
	     ';
	     }
	echo'
	</div>				           	 
             </div>				 
	    <!-- меню --> 	 ';	
	header_logo();
	echo '			 
	     <div class="menu_top">
	';
	menutop_personal_account($bd_category_name,$_POST['email']);
	//menutop($bd_category_name);
	echo '			 
	     
	  <!-- /меню -->
	    ';			
	bg ($Bg_top);
	echo '
	     </div>
 </body>
</html>	
';        
        break;
	case 0:		
  //$category_name=$category1_txt;
  $background_width=1400;
  $background_height=1073;  
  $products_height=382;    
  $Bg_top=$background_height-381;
  $Popular_products_top=$products_height+38; 
  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>register</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetlogin.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css"/> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
 <script src="JS/account.js"></script>
 </head>
 <body>
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;"> 
 <div  class=login >РЕГИСТРАЦИЯ</div> 
 <div id=new_products class=new_products border=0 style="position:absolute;top:272px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">		     			
             <div class=usertxt style="top:23px;">Контактное лицо [ФИО]:</div>
             <div class=usertxt style="top:118px;">E-mail адрес:</div>
             <div class=usertxt style="top:23px;left:614px;">Пароль:</div>
             <div class=usertxt style="top:118px;left:614px;">Повторите пароль:</div>				
	    <form name="contact_form" action="" method=POST>
	    <input class=inputxtxt type="text" placeholder="'.$placeholder_default[0].'" name=login style="top:57px;"required value="'.$_POST['login'].'">
	    <input class=inputxtxt type="email" placeholder="'.$placeholder_default[1].'" name=email style="top:150px;"required value="'.$_POST['email'].'">				
	    <input class=inputxtxt type="password" placeholder="'.$placeholder_default[2].'" name=password style="top:57px;left:614px;"required value="'.$_POST['password'].'">
	    <input class=inputxtxt type="password" placeholder="'.$placeholder_default[3].'" name=repeatpassword style="top:150px;left:614px;"required value="'.$_POST['repeatpassword'].'">				
	    <input type="submit" style="position: absolute;top:215px;left:30px;width:220px;height:47px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" name="send" value="Зарегистрироваться">				
	    <input id="into1" type=hidden name="into" value=1>                 
	    </form>	            	 
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
 </body>
</html>	
';
break;
   }
?>




