<?php
session_start();
include ("func.inc");
$dir="GDS/".$_POST['curr_category']."/";  
echo $dir.'<br>';
if (!(isset($_POST['name1']))||($_POST['name1']=="")){$_POST['name1']="";}else {$_POST['name1']=$_POST['name1'];}
if (!(isset($_POST['name2']))||($_POST['name2']=="")){$_POST['name2']="";}else {$_POST['name2']=$_POST['name2'];}
if (!(isset($_POST['name3']))||($_POST['name3']=="")){$_POST['name3']="";}else {$_POST['name3']=$_POST['name3'];}
if (!(isset($_POST['checked']))||($_POST['checked']=="")){$_POST['checked']="";}else {$_POST['checked']=$_POST['checked'];}
if ($_POST['price_product'] == ""){$_POST['price_product']=0;}
if ($_POST['old_price'] == ""){$_POST['old_price']=0;}
if ($_POST['quantity'] == ""){$_POST['quantity']=0;}
function getExtension4($filename)
	{
	 return substr(strrchr($fileName, '.'), 1);
	}	

	
function db_delete_img($id_product,$dir)
{
	$dbconn=dbconnect();
	if($dbconn===false)
	{
	echo "Error opening DB!<br>";
	exit(0);
	}
	pg_set_client_encoding($dbconn, "KOI8");
  
  
$str="select * from goods_all_img_table where id_product = '".$id_product."' ;";
$result = pg_query($dbconn, $str);
$c=pg_fetch_all($result);

if ($c !== false)
{
foreach($c as $kk=>$vv)
{
 @unlink($dir.$vv['name_file']);    
}
}  
pg_close($dbconn);

}
		
function db_update_goods_table($id_product,$name,$description,$id_category,$price,$oldprice,$badge,$name_variation1,$name_variation2,$name_variation3,$checked,$quantity)
{

$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_set_client_encoding($dbconn, "KOI8");
$query = "update goods_table set name='".$name."' ,
                                     description='".$description."',							 
									 id_category='".$id_category."',
									 price='".$price."',
									 oldprice='".$oldprice."',
									 badge='".$badge."',
									 name_variation1='".$name_variation1."',
									 name_variation2='".$name_variation2."',
									 name_variation3='".$name_variation3."',
									 checked='".$checked."',
									 quantity='".$quantity."'									 
									 where id_product = '".$id_product."';";  

$result = pg_query($dbconn, $query);
pg_close($dbconn);
}  	
function db_add_img($id_product)
	{
	$dbconn=dbconnect();
	if($dbconn===false)
	{
	echo "Error opening DB!<br>";
	exit(0);
	}
	pg_set_client_encoding($dbconn, "KOI8");
	

 
$str="delete from goods_all_img_table where id_product = '".$id_product."' ;";
$result = pg_query($dbconn, $str);


$str="select * from temp_img_table ;";
$result = pg_query($dbconn, $str);
$c=pg_fetch_all($result);
if ($c !== false){
foreach($c as $kk=>$vv)
{
  $d['name_file']=$vv['name_file']; 
  $d['id_category']=$vv['id_category'];
  $d['number_img']=$vv['number_img'];
  
$str="insert into goods_all_img_table (id_product,id_category,name_file,number_img) values ('".$id_product."','".$vv['id_category']."','".$vv['name_file']."','".$vv['number_img']."')";
$result = pg_query($dbconn, $str); 
$b[]=$d;  
}
}  
pg_close($dbconn);
return $b; 

}

db_delete_img($_SESSION['id_product'],$dir);
 if ($_SESSION['id_product'] !== ""){
$g=db_add_img($_SESSION['id_product']);
 }
  echo $_POST['curr_category']; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 /*  echo '<div id=fales_name1>id_product:'.$_SESSION['id_product'].'</div>';
  echo '<div>name_product '.$_POST['name_product'].'<br></div>';
  echo '<div>text_product '.$_POST['text_product'].'<br></div>';
  echo '<div>price '.$_POST['price_product'].'<br></div>';
  $variation='name'.$_POST['variation'];
  //echo '<div>'.$variation.'<br></div>';
  echo '<div>variation '.$_POST[$variation].'<br></div>';
  
  echo '<div>variation '.$_POST['name1'].'<br></div>';
  echo '<div>variation '.$_POST['name2'].'<br></div>';
  echo '<div>variation '.$_POST['name3'].'<br></div>';
  
  echo '<div>old_price '.$_POST['old_price'].'<br></div>';
  echo '<div>quantity '.$_POST['quantity'].'<br></div>';
  echo '<div >badge '.$_POST['badge'].'</div>'; */  

   
 if (sizeof($g) !== 0){
  foreach($g as $kk=>$vv)
{
$uploadfile = $dir.$vv['name_file'];
echo  'uploadfile: "'.$uploadfile.'<br>'; 
echo  'name_file: "'.$uploadfile.'<br>';
@copy("images_tmp/".$vv['name_file'],$uploadfile);
} 
  } 


//$_POST['name_product']=$_POST['name_product'];
//$_POST['text_product']=$_POST['text_product'];
//$_POST['badge']=$_POST['badge'];
//$_POST['category']=$_POST['category']+0;
db_update_goods_table($_SESSION['id_product'],
                      $_POST['name_product'],
					  $_POST['text_product'],
					  $_POST['category'],
					  $_POST['price_product'],
					  $_POST['old_price'],
					  $_POST['badge'],
					  $_POST['name1'],
					  $_POST['name2'],
					  $_POST['name3'],
					  $_POST['checked'],
					  $_POST['quantity']);
?>
