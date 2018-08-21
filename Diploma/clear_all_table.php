<!DOCTYPE html>
<html>
 <head>
  <title>Clear all tableCreate table</title>
 
<?php

function dbconnect()
    {
    $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117");
    return $dbconn; 
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

function clear_all_table()
    {

    $dbconn=dbconnect();
    if($dbconn===false)
    {
    echo "Error opening DB!<br>";
    exit(0);
    }
    pg_set_client_encoding($dbconn, "KOI8");

    $query = "delete from cities_table;";
    $result = pg_query($dbconn, $query);	
    
    $query = "delete from categories_table;";
    $result = pg_query($dbconn, $query);
    
    $query = "delete from customers_table;";
    $result = pg_query($dbconn, $query);	
    
    $query = "delete from goods_all_img_table;";
    $result = pg_query($dbconn, $query);	

    $query = "delete from orders_all_goods ;";	
    $result = pg_query($dbconn, $query);

    $query = "delete from orders_table ;";	
    $result = pg_query($dbconn, $query);

    
    $query = "delete from goods_table ;";	
    $result = pg_query($dbconn, $query);
    
    $query = "delete from shopping_cart ;";
    $result = pg_query($dbconn, $query);
    
    $query = "delete from temp_img_table ;";
    $result = pg_query($dbconn, $query);
    
    $query = "delete from popular_product_table ;";
    $result = pg_query($dbconn, $query);
    
echo 'Таблицы очищены!';    
    pg_close($dbconn);

    }

if($_POST['tp']=="del")
{
clear_all_table();
}
if($_POST['tp']=="GDS")
{
clear_dir("GDS/");
clear_dir("GDS//");
}

?>
 </head>
 <body>

<form action="" method=POST>
<input type=submit value="Clear all table!!!"><br>
<input type=hidden name=tp value="del">
</form>


<form action="" method=POST>
<input type=submit value="Clear GDS!!!"><br>
<input type=hidden name=tp value="GDS">
</form>

 </body>
</html>
