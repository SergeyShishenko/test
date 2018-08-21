<?php
session_start();
include ("func.inc");
 function db_delete_num($file_num)
{

$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_set_client_encoding($dbconn, "KOI8");

$query = "delete from temp_img_table where number_img = '".$file_num."'";  

$result = pg_query($dbconn, $query);	

pg_close($dbconn);

}

//удаление из временной таблицы
db_delete_num($_POST['file_num']);

  echo '
<!DOCTYPE html>
<html>
 <head>
  <title>DEL</title>
 </head>
 <body>
<div>file_num: '.$_POST['file_num'].'<br></div>';
echo"images_uploaded/".$_POST['file_name'];
//c4_v1_id96_Gornyj-velosiped.jpg
  //if(@unlink("images_uploaded/c4_v1_id96_Gornyj-velosiped.jpg"))
	  if(@unlink("images_uploaded//".trim($_POST['file_name'])))
	  {echo 'File deleted!'; } 
echo'
 </body>
</html>
';
?>
