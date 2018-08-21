<?php
session_start();
include ("func.inc");
function db_add_tmp($id_product,$id_category,$name_file,$number_img)
{
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_set_client_encoding($dbconn, "KOI8");
$query = "insert into temp_img_table(id_product,id_category,name_file,number_img)
 values ('".$id_product."','".$id_category."','".$name_file."','".$number_img."')";  
  
$result = pg_query($dbconn, $query);	

pg_close($dbconn);

}

  $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
  foreach ($blacklist as $item)
    if(preg_match("/$item\$/i", $_FILES['somename']['name'])) exit;
  $type = $_FILES['somename']['type'];
  $size = $_FILES['somename']['size'];
  if (($type != "image/jpg") && ($type != "image/jpeg")&& ($type != "image/png")) exit;
  //if ($size > 102400) exit;
  $product=str_replace(" ", "-", $_POST['category_current']);
  
  // $tmp=$_POST['category']."_n".$_POST['nn']."_v".$_POST['setvar']."_id".$_SESSION['id_product']."_".$product;
 //$w=translateLatin("Кириллица");
  echo $w;
   $tmp="n".$_POST['nn']."_id".$_SESSION['id_product']."_".$product;
   $tmp_name=$tmp.substr(strrchr($_FILES['somename']['name'], '.'), 0);   
   $uploadfile = "images_tmp/".$tmp_name;
   if(move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile))
   {
	     // запись в таблицу
   db_add_tmp($_SESSION['id_product'],$_POST['category'],$tmp_name,$_POST['nn']);

  } 
  
  //<div id=nn>'.$_POST['nn'].'<br></div>
  //<div id=setvar>'.$_POST['setvar'].'<br></div>
  //<div id=id_product>'.$_SESSION['id_product'].'<br></div>
echo '
  
  <div id=fales_name1>'.$tmp_name.'</div>
 
  <div id=img1><img id=foto1 src='.$uploadfile.'></div>
        
  ';
?>
