<?php
session_start();
?>	
<!DOCTYPE html>
<html>
<head>
<title>shopping cart add</title> 
<!--<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>-->
</head>
<body>

<?php
include ("func.inc");
$today=date('Y-m-d H:i:s'); 
//$name,$description,$id_category,$id_product,$userid,$price,$name_variation,$name_file_img,$sdate,$scount)
// проверка на наличие
//if db_update_shopping_cart($_POST['id_product'],1,1);
//$uid=get_exists_shopping_cart(trim($_COOKIE['userid']),$_POST['id_product']);
if($_POST['case']==1)
{$ncase=1; }
else{$ncase=$_POST['case_'.$_POST['num']];}
if(isset($_POST['bb_cart']))
{$img=$_POST['bb_cart']; }
else{$img=$_POST['bb_cart_'.$_POST['num']];}
if (get_exists_shopping_cart(trim($_COOKIE['userid']),$_POST['id_product'],$ncase,$img))
{
switch ($_POST['variation']) 
{   
case 1:
        $name_variation=$_POST['name_variation1'];
        break;
case 2:
        $name_variation=$_POST['name_variation2'];
        break;
case 3:
        $name_variation=$_POST['name_variation3'];
        break;
default:
        $name_variation="";
}
		
db_add_shopping_cart($_POST['name'],$_POST['description'],$_POST['id_category'],$_POST['id_product'],trim($_COOKIE['userid']),$_POST['price'],$name_variation,$_POST['bb_cart'],$today,1);
}
//else {db_update_shopping_cart($uid['userid'],$_POST['id_product'],1);}

//db_update_shopping_cart($name,$description,$id_category,$id_product,$userid,$price,$name_variation,$name_file_img,$sdate,$scount);

 // $bd_popular_products=get_products_category($_GET['n']);
 //$sum=$_POST['page'];
//$number = 32;
 $total=get_shopping_cart_price_total($_COOKIE["userid"]);
 if ($total==""){$total=0;}
 $count=get_shopping_cart_count($_COOKIE["userid"]);
 $piece=getNumEnding($count);
 //$product=get_shopping_cart($_COOKIE["userid"]);
 echo '$_POST[name] '.$_POST['name'].'<br>'  ;
 echo '$_POST[description] '.$_POST['description'].'<br>'  ;
 echo '$_POST[id_category] '.$_POST['id_category'].'<br>'  ;
 echo '$_POST[id_product] '.$_POST['id_product'].'<br>'  ;
 echo 'trim($_COOKIE[userid]) '.trim($_COOKIE['userid']).'<br>'  ;
 echo '$_POST[price] '.$_POST['price'].'<br>'  ;
 echo '$name_variation '.$name_variation.'<br>'  ;
 echo '$_POST[bb_cart] '.$_POST['bb_cart'].'<br>'  ;
 echo '$today '.$today.'<br>'  ;
 echo '1<br>'  ;
 
 
echo '<span id=totall>'.$total.'</span><br>'  ;
echo '<span id=count_piecel>'.$count." ".$piece.'</span><br>'  ;
echo '<span id=num>'.$_POST['num'].'</span><br>'  ;
echo '<span id=ncase>ncase '.$ncase.'</span><br>'  ;
//echo '<span id=sum>'.number_format($_POST['price']*$product['scount'], 0, ',', ' ').'</span><br>'  ;

echo '<div id="userid">'.$_COOKIE['userid'].'</div><br>'  ;
echo '<div id="id_product">'.$_POST['id_product'].'</div><br>'  ;
echo '<div id="bb_cart">'.$_POST['bb_cart'].'</div><br>'  ;
//echo '<div >'.$number.' :'.getNumEnding($number).'</div><br>'  ;			
?>
</body>
</html>
