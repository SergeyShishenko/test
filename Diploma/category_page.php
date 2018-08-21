<?php
session_start();
?>	
<!DOCTYPE html>
<html>
<head>
<title>category page</title>

</head>
<body>

<?php
include ("func.inc");
$_SESSION['p']=0;
/* $fname="bd_category".$_POST['category'].".txt";
$a=my_file($fname);
 foreach($a as $kk=>$vv)
 {$bd_category[$kk]=$vv;}   */
$bd_category=get_products_category($_POST['category']);  
$GLOBALS[$count]=0;
$GLOBALS[$num]=0; 
$page=$_POST['page'];  
$bd_sizeof = sizeof($bd_category)-1;
$num=-17;
for ($i=0; $i<$page;$i++)
	 { $num = $num+17;}

             cellA ($num,$bd_category,$name_cells,0,78,879);
			 
			 $num++;
			 cellA ($num,$bd_category,$name_cells,1,402,0);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,2,402,293);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,3,402,586);
			 $num++;			 
			 cellA ($num,$bd_category,$name_cells,4,402,879);
			 
			 $num++;
			 cellA ($num,$bd_category,$name_cells,5,726,0);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,6,726,293);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,7,726,586);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,8,726,879);
			 $num++;
			 
			 cellA ($num,$bd_category,$name_cells,9,1050,0);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,10,1050,293);
			 $num++;
						
			 cellA ($num,$bd_category,$name_cells,11,1374,0);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,12,1374,293);	
             $num++;			 
			 
			 cellA ($num,$bd_category,$name_cells,13,1698,0);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,14,1698,293);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,15,1698,586);
			 $num++;
			 cellA ($num,$bd_category,$name_cells,16,1698,879); 
	
$from=17*($_POST['page']-1)+1;	
$to = $from + $GLOBALS[$count]-1;
echo '<div>page&nbsp;</div>';

echo '<div id="page">'.$_POST['page'].'</div><br> '  ;
echo  '<div>count&nbsp;</div>'   ;
echo  '<div id="count">'.$GLOBALS[$count].'</div><br>'   ;
echo '<div id="shows">'.$from.'-'.$to.'</div><br> '  ;
echo '<div id="bd_sizeof">'.sizeof($bd_category).'</div><br> '  ;
?>

</body>
</html>