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
$_SESSION['email']=$email;
$_SESSION['phone']=$_POST['phone'];
$_SESSION['name']=$_POST['login'];
//return $b; 
}		
	
	 $placeholder_default = array("mail@company.ru", "•••••••","+7 916 000-00-00","Сергей Сергеевич","mail@company.ru");
////////////////		
  if ($_POST['into']==2) //Быстрый вход
    { // echo is_email($_POST['email']);
         $stage=2;
        if  (is_email($_POST['email'])==0)
	{
	    $placeholder_default[4] = "Неверный адрес!";
	    $_POST['email']="";
	    $stage=1;
	}
	else if (db_compare($_POST['email'],"email","customers_table")==true)
	{
	    //db_compare2($email,$password,$table)
	    if (db_compare2($_POST['email'],$_POST['password'],"customers_table")==true)
	    { 
	     $stage=2;
             get_customer($_POST['email']);	
             $placeholder_default = array("Сергей", "mail@company.ru", "•••••••","•••••••","+7 916 000-00-00","Москва","Название улицы","10","150");
	     //$_SESSION['new_user']="";
	    }
	    else {$placeholder_default[1] = "Неверный пароль!";
	    $_POST['password']="";$stage=1;}
	}
	else {$placeholder_default[4] = "Неверный адрес!";
	      $_POST['email']="";$stage=1;}
    }
//////////////	
 //проверка валидации формы регестрация
  if (($_POST['into']==1)) // Для новых покупателей
  {   $stage=2;
      $str=strip_data($_POST['login']);
      //$stremail=is_email($_POST['email']);
      if ((trim($_POST['login'])=="")||trim($_POST['login'])!==$str)
	  { 		 
	  $placeholder_default[3] = "Введите Ваше имя!";
	  $_POST['login']="";
	  $stage=1; 
          }
	  //echo is_email($_POST['email']);
	if  (is_email($_POST['email_new'])=="false")
	    {
		$placeholder_default[0] = "Неверный адрес!";
		$_POST['email_new']="";
		$stage=1;
	    }
	    else {
		  //$_POST['email']=$_POST['email_new'];
		 // $_SESSION['new_user']=$_POST['login'];
		  $_SESSION['phone']=$_POST['phone'];
		  $_SESSION['email']=$_POST['email_new'];				  
		  //$_SESSION['password']=$_COOKIE['userid'];
		  $_SESSION['name']=$_POST['login'];
	         }
	    
	    
	if ($_POST['phone']=="")
	{
	    $placeholder_default[2] = "Ведите телефон!";
	    $_POST['phone']="";
	    $stage=1;
	}

       if ($stage==2)
       {
	   $placeholder_default = array("Сергей", "mail@company.ru", "•••••••","•••••••","+7 916 000-00-00","Москва","Название улицы","10","150");
       // проверка на существование	    
	 
	 if (db_compare($_POST['email_new'],"email","customers_table")==true)
	{
	    $placeholder_default[0] = "E-mail уже зарегистрирован!";
	    $_POST['email']=$_POST['email_new'];
	    $_POST['email_new']="";			
	 $stage=1;		    
	}
       }	
   } 	
//////////////

   //проверка валидации формы информация о доставке
  if ($_POST['into']==3)
  {  
    $stage=3;	            
     
	if ($_POST['city']=="")
	{
	    $placeholder_default[5] = "Ведите название города!";
	    $_POST['city']="";
	    $stage=2;
	}
	if ($_POST['street']=="")
	{
	    $placeholder_default[6] = "Ведите название улицы!";
	    $_POST['street']="";
	    $stage=2;
	}
	if ($_POST['house']=="")
	{
	    $placeholder_default[7] = "Ведите номер дома!";
	    $_POST['house']="";
	    $stage=2;
	}
	if ($_POST['apartment']=="")
	{
	    $placeholder_default[8] = "Ведите номер квартиры!";
	    $_POST['apartment']="";
	    $stage=2;
	}
	//echo $_POST['into'];
	if ($stage==3)
	{
	    //сохранение в базу
	    //$_SESSION['email']=$_POST['email'];
	    //$_SESSION['phone']=$_POST['phone'];
	    //$_SESSION['name']=$_POST['login'];
	    $_SESSION['city']=$_POST['city'];
	    $_SESSION['street']=$_POST['street'];
	    $_SESSION['house']=$_POST['house'];
	    $_SESSION['apartment']=$_POST['apartment'];
	    $_SESSION['shipping']=$_POST['shipping'];// доставка (номер)			
	    $_SESSION['shipping_comment']=$_POST['shipping_comment'];
	    
	    //проверка city
	    $int_city=db_add_exists($_POST['city']);
	    //echo $int_city;
	    if ($_POST['email']=="")
	    {$_POST['email']=$_SESSION['email'];
	     $_POST['phone']=$_SESSION['phone'];
	     $_POST['login']=$_SESSION['name'];
	     $_POST['password']=$_COOKIE['userid'];
	     }
	     if (db_compare($_POST['email'],"email","customers_table")==true)
		 // запись есть, обновляем
	     {db_update_ch(
		$_POST['login'],
		$_POST['phone'],
		$_POST['email'],
		$int_city,
		$_POST['street'],
		$_POST['house'],
		$_POST['apartment']
		); 
	     }
	     else
	     {
		 
	    //новая запись
	    
	         // $_SESSION['new_user']=$_POST['login'];
		 // $_SESSION['email']=$_POST['email_new'];				  
		 // $_SESSION['password']=$_COOKIE['userid'];
		 // $_SESSION['name']=$_POST['login'];
		 
		 
	    db_store (
	    $_POST['login'],
	    $_POST['phone'],
	    $_POST['email'],
	    $int_city,
	    $_POST['street'],
	    $_POST['house'],
	    $_POST['apartment'],
	    $_COOKIE['userid']);
	     }

	     
	    
	}
  } 
  // запись в таблицу заказы
   if ($_POST['into']==4)
  {  
    $stage=4;
date_default_timezone_set('Europe/Moscow');    
//shopping_cart-> (id_cart serial)name,description,id_category,id_product,userid,price,name_variation,name_file_img,sdate,scount
$today=date('Y-m-d H:i:s'); 		
$id_order=db_add_order($_SESSION['email'],'принят',$_SESSION['summ'],$today,$_SESSION['shipping'],$_SESSION['shipping_comment']);

     $b=get_shopping_cart($_COOKIE["userid"]);
	     
	    
	for ($i=0; $i<sizeof($b);$i++)
	{
	    db_add_orders_all_goods($b[$i]['name'],$b[$i]['id_product'],
	    $b[$i]['id_category'],$id_order,$_SESSION['email'],
	    $b[$i]['price'],$b[$i]['name_variation'],$b[$i]['name_file_img'],$b[$i]['scount']);
	}


  }

/////////////	
    switch ($stage) {
    case 1: // Контактная информация
        $background_height=1063;
	$Bg_top=$background_height-105;
	//$stage=1;
	$products_height=649;
        break;
    case 2: // Информация о доставке
        $background_height=1070;
        $Bg_top=$background_height-94;
	//$stage=2;
	$products_height=649;
        break;
    case 3: // Подтверждение заказа
        $background_height=1280;
        $Bg_top=$background_height-89;
       // $stage=3;
	$products_height=902;
        break;
   case 4: // успешно оформлен
        $background_height=1285;
        $Bg_top=$background_height-661;
       // $stage=4;
	$products_height=332;
        break;
		 default:
		  $background_height=1063;
	         $Bg_top=$background_height-105;
	         $stage=1;
	         $products_height=649;

    }
  
    
  $background_width=1400;
 
 //$products_height=649;
 function db_get_name($email,$pass)
{
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_set_client_encoding($dbconn, "KOI8");	 
     $str="select * from customers_table where email = '".$email."';";
     //echo $str;
     $result = pg_query($dbconn, $str);
     $c=pg_fetch_all($result);
//echo $c;
foreach($c as $kk=>$vv)
{
  $d['name']=$vv['name'];
 //echo $d['name']; 
}
 // Генерируем пароль
    //$pass=generate_password(8);	
    $str="update customers_table set password = '".$pass."' where email = '".$email."';";
     //echo $str;
    $result = pg_query($dbconn, $str);
pg_close($dbconn);
return $d['name'];
}
 // отправка нового пороля
  if (isset($_POST['sendemail']))
{
     // Генерируем пароль
    $pass=generate_password(8);
// Сообщение
//echo $_POST['send_email'];
$user=db_get_name($_POST['send_email'],$pass);
$message = "Здравствуйте, ".$user."!\r\nНовый пароль:\r\n".$pass;
//echo "!!!";
// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Отправляем
mail($_POST['send_email'], 'Пароль изменен', $message);
}


    



  echo '<!DOCTYPE html>
 <html >
 <head>
 <title>checkout</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetcheckout.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css"/> 
 <script type="text/javascript" src="JS/jquery.js"></script>
 <script type="text/javascript" src="JS/jquery.maskedinput-1.2.2.js"></script>  
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="stylemodal.css" /> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
 <script src="JS/account.js"></script>    
 
 </head>
 <body>
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;">

 <div  class=login >ОФОРМЛЕНИЕ ЗАКАЗА</div>
 
 <div id=new_products class=new_products border=0 style="height:'.$products_height.'px;">			 
	    ';
	    
	      switch ($stage) {
              case 1:
              echo'			
	       
		<div class=user><p><span>1. </span>Контактная информация</p></div>
		 <form action="#" method="POST"  onsubmit="this.display=\'none\';">			 
	     <!-- modal-->
	     <a href="#modal" class="button openModal restore_password" style="position:relative;left:622px;top:355px;z-index:5;" >Восстановить пароль</a>			 
	     <div id="modal" class="modal">
	      <div>
	      <div class=modal_title>
                Восстановление пароля<br> 
		<input type ="email" name="send_email" id="sendemail" size="43" placeholder="Введите e-mail, указанный при регистрации">	
                <input type="submit"  name="sendemail" value="Отправить" style="position:relative;">				
                <a href="#close" title="Закрыть">Закрыть</a>
		</div> 
              </div>        
              </div>
	     <!-- /modal-->				
            </form> 
                <div class=contact_info>
		
		<form action="" method=POST>
		<div class=contact_info_title>Для новых покупателей</div>				
		<div class=usertxt style="top:57px;">Контактное лицо (ФИО):</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[3].'" name=login style="top:83px;" value="'.$_POST['login'].'">
		
		<div class=usertxt style="top:140px;">Контактный телефон:</div>	
		<input id="phone" class=inputxtxt type="text" placeholder="'.$placeholder_default[2].'" name=phone style="top:166px;"value="'.$_POST['phone'].'">
		
		<div class=usertxt style="top:223px;">E-mail:</div>
		<input class=inputxtxt style="top:249px;"type="text" placeholder="'.$placeholder_default[0].'" name=email_new value="'.$_POST['email_new'].'">
		
		<input type="submit" style="position: absolute;top:303px;left:30px;width:155px;height:47px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" name="send_new" value="Продолжить">
		 <input  type=hidden name="into" value=1>                
		</form>
		
		<form action="" method=POST>
		<div class=contact_info_title style="left:500px;">Быстрый вход</div>
		
		<div class=usertxt style="top:57px;left:500px;">Ваш e-mail:</div>
		<input class=inputxtxt style="top:83px;left:500px;"type="text" placeholder="'.$placeholder_default[4].'" name=email value="'.$_POST['email'].'">		
		
		
		<div class=usertxt style="top:160px;left:500px;">Пароль:</div>
		<input class=inputxtxt type="password" placeholder="'.$placeholder_default[1].'" name=password style="top:186px;left:500px;"value="'.$_POST['password'].'">
		
		
		
		<input type="submit" style="position: absolute;top:251px;left:500px;width:102px;height:47px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" name="send_login" value="Войти">
		 <input id="sub_menu" type=hidden name="sub" value="products">
		 <input  type=hidden name="into" value=2>                 
		</form>
		
		</div>
		
		<div class="user out" style="top:494px;"><p><span>2. </span>Информация о доставке</p></div>
		<div class="user out"style="top:570px;"><p><span>3. </span>Подтверждение заказа</p></div>				
	';	
        break;
    case 2:      
                  $p_1="";
		  $p_2="";
		  $p_3="";
		    
            if ($_POST['shipping']==""){$p_1="checked";}
    	switch ($_POST['shipping']) 
		    {						
			case 3:
			 $p_3="checked";
			break;
			case 2:
			 $p_2="checked";
			break;
			case 1:
			 $p_1="checked";
			break;
			default:
			 $p_1="checked";		    
		    }
                echo'			
	      
		<div class="user out"><p><span>1. </span>Контактная информация</p></div>
		
		<div class="user" style="top:75px;"><p><span>2. </span>Информация о доставке</p></div>
                <div class=contact_info style="top:154px;">				
		<form action="" method=POST>
		<div class=contact_info_title>Адрес доставки</div>
		
		<div class=usertxt style="top:57px;">Город:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[5].'" name=city style="top:83px;" required  value="'.$_POST['city'].'">
		<div class=usertxt style="top:140px;">Улица:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[6].'" name=street style="top:167px;" required  value="'.$_POST['street'].'">
		<div class=usertxt style="top:223px;">Дом:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[7].'" name=house style="top:251px;width:178px;" required  value="'.$_POST['house'].'">
		<div class=usertxt style="top:223px;left:242px;">Квартира:</div>
		<input class=inputxtxt type="text" placeholder="'.$placeholder_default[8].'" name=apartment style="top:251px;width:178px;left:242px;" required  value="'.$_POST['apartment'].'">
		
		<div class=contact_info_title style="left:478px;">Способ доставки</div>
		
		<div class=delivery>
		
		<div style="position: absolute;top:0px;">
		<input   class="r_button" type="radio" name="shipping" id="r_1" '.$p_1.' value="1" >
                <label style="display: inline-block;left:30px;"for="r_1">Курьерская доcтавка<br>с оплатой при получении</label>
		</div>
		
		<div style="position: absolute;top:55px;">
                <input  class="r_button" type="radio" name="shipping" id="r_2" '.$p_2.' value="2" >
                <label style="display: inline-block;left:30px;"for="r_2">Почта России<br>с наложенным платежом</label>
		</div>
		
		<div style="position: absolute;top:114px;">				
	        <input   class="r_button" type="radio" name="shipping" id="r_3" '.$p_3.'value="3">
                <label style="display: inline-block;left:30px;"for="r_3">Доставка через терминалы<br>QIWI Post</label>
		</div>
		
		</div>					
		
		<div class=contact_info_title style="left:774px;">Коментарий к заказу</div>
		<div class=usertxt style="left:774px;top:57px;">Введите ваш коментарий:</div>
		<textarea  class=inputxtxt type="text" placeholder="Текст комментария" name="shipping_comment" style="left:774px;top:83px;width:348px;height: 189px;resize: none;"value="'.$_POST['shipping_comment'].'"></textarea>
		
		<input type="submit" style="position: absolute;top:337px;left:30px;width:155px;height:47px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" name="send_next" value="Продолжить">
		 <input type=hidden name="into" value=3> 				
		</form>				
		
		</div>				
		
		<div class="user out"style="top:595px;height: 74px;"><p><span>3. </span>Подтверждение заказа</p></div>		
	';	
	
        break;
    case 3:
                    echo'			
	      
		<div class="user out"><p><span>1. </span>Контактная информация</p></div>
			    
		<div class="user out" style="top:75px;"><p><span>2. </span>Информация о доставке</p></div>
		<div class="user"style="top:150px;height: 78px;"><p><span>3. </span>Подтверждение заказа</p></div>
		
                <div class="contact_info" style="top:225px;height:670px;background:#ffffff;">				
		<div class=contact_info_title>Состав заказа</div>
		 <div  class=titletxt >
                <span style="position:absolute;left:30px">Товар</span>  
                <span style="position:absolute;left:604px">Вариация</span> 				
                <span style="position:absolute;left:784px">Стоимость</span>
                <span style="position:absolute;left:895px">Количество</span>
                <span style="position:absolute;left:1045px">Итого</span></div>
                
		
		   <div class=products_scroll >';
	     $b=get_shopping_cart($_COOKIE["userid"]);
	     
	     $summ=0;
	for ($i=0; $i<sizeof($b);$i++)
            {$n=$i*139;
	     //$b=4500;
	     //$numi=$i+1;
	     $db_product=get_product($b[$i]['id_product']);
	     $b3=number_format($b[$i]['price'], 0, ',', ' ');
	     //$a=4500;
	     //$b4=number_format($a, 0, ',', ' ');
	     //$count=2;			 
	     $c=$b[$i]['price']*$b[$i]['scount'];
	     $summ=$summ+$c;
	     $b4=number_format($c, 0, ',', ' ');
	     echo '			 
	     <table class="show_product" style="left:0px;top:'.$n.'px;">
	     <tr>
	     
	     <td class=s_title><p>'.$b[$i]['name'].'</p></td>
	     <td id=s_value_'.$i.' class=s_value style="text-align: center;width:180px;">'.$b[$i]['name_variation'].'</td>
	     <td id=s_value_'.$i.' class=s_value style="text-align: center;width:140px;">'.$b3.'<span>руб.</span></td>
	     <td id=s_count_'.$i.' class=s_value style="text-align: center;width:50px;">'.$b[$i]['scount'].'</td>
	     <td id=s_sum_'.$i.' class=s_sum style="text-align: center;width:180px;">'.$b4.'<span>руб.</span></td>
	     
	     </tr></table>			 
	     ';
	     }
	     $_SESSION['summ']=$summ;
	     $summ=number_format($summ, 0, ',', ' ');
	     
	    //$_SESSION['email']
	    //$_SESSION['phone']
	    //$_SESSION['name']
	    //$_SESSION['city']
	    //$_SESSION['street']
	    //$_SESSION['house']
	    //$_SESSION['apartment']
	    //$_SESSION['shipping']// доставка (номер)			
	    //$_SESSION['shipping_comment']
            switch ($_SESSION['shipping']) 
		    {						
			case 3:
			 $shipping="Доставка через терминалы<br>QIWI Post";
			break;
			case 2:
			 $shipping="Почта России<br>с наложенным платежом";
			break;
			case 1:
			 $shipping="Курьерская доставка<br>с оплатой при получении";
			break;
			default:
			 $shipping="Курьерская доставка<br>с оплатой при получении";		    
		    }			
        		
	     
	echo'	 
	     </div>				
		<div class=in_total>Итого: <span>'.$summ.'руб.</span></div>
		<div class=contact_info_title style="top:348px;">Доставка</div>
		<div class=usertxt style="top:374px;">Контактное лицо (ФИО):</div>
		<div class=intxt style="top:397px;width:250px;"><p>'.$_SESSION['name'].'</p></div>
		<div class=usertxt style="top:438px;">Контактный тедефон:</div>
		<div class=intxt style="top:461px;">'.$_SESSION['phone'].'</div>
		<div class=usertxt style="top:502px;">E-mail:</div>
		<div class=intxt style="top:525px;width:250px;"><p>'.$_SESSION['email'].'</p></div>
		
		<div class=usertxt style="left:296px;top:374px;">Город:</div>
		<div class=intxt style="left:296px;top:397px;">'.$_SESSION['city'].'</div>
		<div class=usertxt style="left:296px;top:438px;">Улица:</div>
		<div class=intxt style="left:296px;top:461px;">'.$_SESSION['street'].'</div>
		<div class=usertxt style="left:296px;top:502px;">Дом:</div>
		<div class=intxt style="left:296px;top:525px;">'.$_SESSION['house'].'</div>
		<div class=usertxt style="left:376px;top:502px;">Квартира:</div>
		<div class=intxt style="left:376px;top:525px;">'.$_SESSION['apartment'].'</div>
		
		
		<div class="usertxt" style="left:627px;top:374px;">Способ доставки:</div>
		<div class="intxt_s pp" style="left:627px;top:382px;"><p>'.$shipping.'</p></div>
		<div class="usertxt" style="left:627px;top:455px;">Комментарий к заказу:</div>
		<div class="intxt_s ppp" style="left:627px;top:463px;"><p>'.$_SESSION['shipping_comment'].'</p></div>
		
		
		<form action="" method=POST>
		<input type="submit" style="position: absolute;top:580px;left:30px;width:263px;height:59px;background-color:#ed1651;border: none;outline: none;cursor: pointer;font-size:22px;"class="userreg" name="send" value="Подтвердить заказ">
		 <input  type=hidden name="into" value=4> 				
		</form>				
		
		</div>				
	';	       
        break;
     case 4:
              echo'	

                <div class=num_order>Заказ № '.$id_order.'<span> успешно оформлен<span></div>
                <div class="intxt two" style="position:absolute;left:34px;top:73px;">Спасибо за Ваш заказ</div>	
                <div class="intxt two" style="position:absolute;left:34px;top:117px;line-height: 21px;	">В ближайшее время с Вами свяжеться орератор<br>для уточнения доставки</div>					
	        <form action="SuperS.php" method=POST>
		<input type="submit" style="position: absolute;top:172px;left:30px;width:232px;height:49px;background-color:#ed1651;border: none;outline: none;cursor: pointer;"class="userreg" name="send" value="Вернуться в магазин">
		 <input id="stage5" type=hidden name="stage" value=5>                
		</form>
		
		    
	';	
        break;		
	}				
echo'			                     	 
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
?>
