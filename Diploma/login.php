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

  $background_width=1400;
  $background_height=1073;  
  $products_height=382;
  $Bg_top=$background_height-381;
  $placeholder_default = array("mail@company.ru", "•••••••");
  // вход админа
   if (($_POST['email']=="admin@mail.ru")&&($_POST['password']=="admin"))
   {
       $_SESSION['admin']=$_POST['email'];
      echo "<HTML><HEAD> 
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=admin.php?sub=categories'> 
            </HEAD></HTML>";
    }
    
    if ($_POST['into']==4)
    {
        if  (is_email($_POST['email'])==0)
	{
	    $placeholder_default[0] = "Неверный адрес!";
	    $_POST['email']="";
	    //$_POST['into']=1;
	}
	else if (db_compare($_POST['email'],"email","customers_table")==true)
	{
	    //db_compare2($email,$password,$table)
	    if (db_compare2($_POST['email'],$_POST['password'],"customers_table")==true)
	    { 
	     echo "<HTML><HEAD> 
            <META HTTP-EQUIV='Refresh' CONTENT='0; URL=register.php?into=4&email=".$_POST['email']."'> 
            </HEAD></HTML>";  
	    }
	    else {$placeholder_default[1] = "Неверный пароль!";
	    $_POST['password']="";}
	}
	else {$placeholder_default[0] = "Неверный адрес!";
	      $_POST['email']="";}
    }	
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

	
if (isset($_POST['sendemail']))
{


     // Генерируем пароль
//    $pass=generate_password(8);

$pass=123;

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
 <title>login</title> 
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="stylesheetlogin.css" /> 
 <link rel="stylesheet" type="text/css" href="stylesheetmenutop.css"/>  
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link rel="stylesheet" type="text/css" href="stylemodal.css" /> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">  
 </head>
 <body> 
 <div id="wrapper" class=background style=" position: relative;width:'.$background_width.'px;height:'.$background_height.'px;background-color: #dee1e3;margin: auto auto;z-index: 0;overflow: hidden;"> 
     <form action="#" method="POST"  onsubmit="this.display=\'none\';">			 
	     <!-- modal-->
	     <a href="#modal" class="button openModal forget" style="position:relative;left:272px;top:566px;z-index:5;" >Забыли пароль?</a>			 
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
 <div  class=login >ВХОД</div>
 <div id=new_products class=new_products border=0 style="position:absolute;top:272px;left:115px;width:1170px;height:'.$products_height.'px;background-color:#ffffff;box-shadow: 1px 0px 3px #a9a492;z-index: 2;">		     		 
		<div style="position: absolute;top:0px;left:584px;z-index:1;">
	     <img src="images/login_line.png"  >
	     </div>	 			 
		<div class=user >Зарегистрированный пользователь</div>
                <div class=user style="left:616px;">Новый пользователь</div>
                <a href="register.php" style="text-decoration:none;"><div style="position: absolute;top:69px;left:616px;width:220px;height:47px;background-color:#ed1651;"><p class=userreg>Зарегистрироваться</p></div></a>
                <div class=usertxt style="top:74px;">Email адрес:</div>
                <div class=usertxt style="top:169px;">Пароль:</div>			 
	        <form action="" method=POST >
		<input class=inputxtxt type="email" placeholder="'.$placeholder_default[0].'" name=email style="top:108px;"required value="'.$_POST['email'].'">
		<input class=inputxtxt type="password" placeholder="'.$placeholder_default[1].'" name=password style="top:201px;"required value="'.$_POST['password'].'">				
		<input type="submit" class="sendsubmit" name="send" value="Войти" />
		 <input id="sub_menu" type=hidden name="sub" value="products">
		 <input id="into" type=hidden name="into" value=4>                 
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
?>
