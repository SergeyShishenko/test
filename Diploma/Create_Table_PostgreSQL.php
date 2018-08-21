<!DOCTYPE html>
<html>
 <head>
  <title>Create table PostgreSQL</title>
 
<?php
//include ("func.inc");
function dbconnect()
    {
    $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117");
    return $dbconn; 
    }


 function get_customer_id($f,$i,$o)
{
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
$str="select * from sshishenko_table2 where f = '".$f."';";
//$str="select * from sshishenko_table2 where f == ".$f." and i == ".$i." and o == ".$o.";";
//$str="select id from sshishenko_table2 where f == '".$f."'";
echo $str."<br>";
$qresult=pg_query($dbconn,$str);
$c=pg_fetch_all($qresult);
//echo $c."<br>";
//echo $c[0]."<br>";
//echo $c[1]."<br>";
foreach($c as $kk=>$vv)
{   $d['id']=$vv['id'];
echo $vv['id']."<br>";
echo $vv['f']."<br>";
echo $vv['i']."<br>";
   $d['f']=$vv['f'];
  $d['i']=$vv['i'];
  $d['o']=$vv['o'];
  $d['age']=$vv['age'];
  $d['salary']=$vv['salary'];
  $b[]=$d; 
//echo $b."<br>";
}
pg_close($dbconn);
//return $b; 
} 


 function get_customer($f)
{
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
$str="select * from customers_table where name = '".$f."';";
$qresult=pg_query($dbconn,$str);
$c=pg_fetch_all($qresult);
//echo $c."<br>";
//echo $c[0]."<br>";
//echo $c[1]."<br>";
foreach($c as $kk=>$vv)
{   //$d['id']=$vv['id'];
//echo $vv['id']."<br>";
echo $vv['phone']."<br>";
//echo $vv['i']."<br>";
   $d['f']=$vv['f'];
  $d['i']=$vv['i'];
  $d['o']=$vv['o'];
  $d['age']=$vv['age'];
  $d['salary']=$vv['salary'];
  $b[]=$d; 
//echo $b."<br>";
}
pg_close($dbconn);
//return $b; 
} 

 function get_category()
{

$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
$str="select * from categories_table ;";
//echo $str."<br>";
$qresult=pg_query($dbconn,$str);
$c=pg_fetch_all($qresult);
//echo $c."<br>";

foreach($c as $kk=>$vv)
{
  $d['id_category']=$vv['id_category'];
  $d['name']=$vv['name'];
  $d['quantity']=$vv['quantity'];  
  $b[]=$d;
echo $b."<br>";
}
pg_close($dbconn);


return $b; 
} 

 function db_add_exists($name)
{	
	
//INSERT INTO test (a) VALUES (50) RETURNING *;
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
	$query = "insert into cities_table (name) select '".$name."' where not exists (select id_city, '".$name."' from cities_table  where name = '".$name."'  );";    
	 $result = pg_query($dbconn, $query);
	 
	 $str="select * from cities_table where name = '".$name."';";
	 $result = pg_query($dbconn, $str);
	 $c=pg_fetch_all($result);
 
 foreach($c as $kk=>$vv)
{
  $d['id_city']=$vv['id_city'];
}   

pg_close($dbconn);

return $d['id_city'];
} 
?>
 </head>
 <body>

<form  action="" method=POST>
F: <input type=text name=f><br>
I: <input type=text name=i><br>
O: <input type=text name=o><br>
Age: <input type=text name=age><br>
Salary: <input type=text name=salary><br>
<input type=submit value="Store"><br>
<input type=hidden name=tp value="store">
</form>
<hr>

<form action="" method=POST>
Min age: <input type=text name=minage><br>
Max age: <input type=text name=maxage><br>
Min salary: <input type=text name=minsalary><br>
Max salary: <input type=text name=maxsalary><br>
<input type=submit value="Search"><br>
<input type=hidden name=tp value="search">
</form>
<hr>
<form action="" method=POST>
F: <input type=text name=f><br>
I: <input type=text name=i><br>
O: <input type=text name=o><br>

<input type=submit value="ID"><br>
<input type=hidden name=tp value="id">
</form>
<hr>
<form action="" method=POST>
<input type=submit value="category"><br>
<input type=hidden name=tp value="category">
</form>
<hr>
<form action="" method=POST>
<input type=text name=name><br>
<input type=submit value="exists"><br>
<input type=hidden name=tp value="exists">
</form>
<?php

///////////////////////////////create tables////////////////////////////////////////////////


$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table cities_table(id_city serial PRIMARY KEY,name varchar);");
pg_close($dbconn);
 




$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_set_client_encoding($dbconn, "KOI8");
pg_query($dbconn,"create table customers_table(
id_customer serial PRIMARY KEY,
name varchar,
phone varchar,
email varchar,
id_city serial REFERENCES cities_table,
street varchar,
house integer,
apartment integer,
password varchar
);");
pg_close($dbconn);




$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table categories_table(id serial,id_category integer,name varchar,quantity integer);");
pg_close($dbconn); 

 
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table goods_table(
id_product serial  PRIMARY KEY,
name varchar,
description varchar,
id_category integer,
price integer,
oldprice integer,
badge varchar,
name_variation1 varchar,
name_variation2 varchar,
name_variation3 varchar,
checked varchar,
quantity integer
);");
pg_close($dbconn);




 
   $dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table goods_all_img_table(
id_img serial  PRIMARY KEY,
id_product integer,
id_category integer,
name_file varchar,
number_img integer
);");
pg_close($dbconn);
 

   $dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table temp_img_table(
id_img serial  PRIMARY KEY,
id_product integer,
id_category integer,
name_file varchar,
number_img integer
);");
pg_close($dbconn);

 
 

 
 

$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table shopping_cart(
id_cart serial  PRIMARY KEY,
name varchar,
description varchar,
id_category integer,
id_product integer,
userid varchar,
price integer,
name_variation varchar,
name_file_img varchar,
sdate timestamptz,
scount integer
);");
pg_close($dbconn);


 
 

$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table orders_all_goods(
id_goods serial  PRIMARY KEY,
name varchar,
id_product integer,
id_category integer,
id_order integer,
email varchar,
price integer,
name_variation varchar,
name_file_img varchar,
scount integer
);");
pg_close($dbconn);

 
 
    
$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table orders_table(
id_order serial  PRIMARY KEY,
email varchar,
status varchar,
sum_price integer,
sdate timestamptz,
shipping integer,
shipping_comment varchar
);");
pg_close($dbconn);


$dbconn=dbconnect();
if($dbconn===false)
{
echo "Error opening DB!<br>";
exit(0);
}
pg_query($dbconn,"create table popular_product_table(
id_popular serial  PRIMARY KEY,
id_product integer
);");
pg_close($dbconn);

/////////////////////////////////////////////////////////////////////////////////////// 
 
//$encoding = pg_client_encoding($dbconn);


//db_store("Petrov","Sergey","Olegovich",22,33000);

if($_POST['tp']=="store")
{
 db_store($_POST['f'],$_POST['i'],$_POST['o'],$_POST['age'],$_POST['salary']);
}
else if ($_POST['tp']=="search")
{
$b=db_search($_POST['minage'],$_POST['maxage'],$_POST['minsalary'],$_POST['maxsalary']);
echo "<br><hr><br>";
echo "!".$b."<br>";
foreach($b as $kk=>$vv)
{
echo $kk.": ".$vv['f']." ".$vv['i']." ".$vv['age']."/".$vv['salary']."<br>";
}
}
else if ($_POST['tp']=="id")
{
$b=get_customer($_POST['f']);
//$b=get_customer_id($_POST['f'],$_POST['i'],$_POST['o']);
//echo "<br><hr><br>";
//echo "!!!".$b."<br>";
}
else if ($_POST['tp']=="category")
{
$b=get_category();
foreach($b as $kk=>$vv)
{
	//id_category serial PRIMARY KEY,name varchar,quantity integer
echo $vv['id_category']." ".$vv['name']." ".$vv['quantity']."<br>";
}
}
else if ($_POST['tp']=="exists")
{
echo db_add_exists($_POST['name']);
/* foreach($b as $kk=>$vv)
{
	
echo $vv['id_category']." ".$vv['name']." ".$vv['quantity']."<br>";
} */


}
//INSERT INTO test (a) VALUES (50) RETURNING *;
?>
 </body>
</html>
