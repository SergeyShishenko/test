<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>new products</title> 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
</head>
<body>
<?php
include ("func.inc");

$bd_new_product=db_select_new_products(); 


 
$sum=$_POST['pages'];
$foto=8;
$total_page=sizeof($bd_new_product) - floor(sizeof($bd_new_product) / $foto)*$foto;
if ($total_page > 0)
 {$total_page=floor(sizeof($bd_new_product) / $foto)+1;}
 else{$total_page=floor(sizeof($bd_new_product) / $foto);} 
 $bd_sizeof = sizeof($bd_new_product)-1;
if  ($_POST['hidl'] == "+")
{$pg=$_POST['pages'] + 1;
$num=-8;
for ($i=0; $i<$pg;$i++)
	 { $num = $num+8;}
            cellA ($num,$bd_new_product,$name_cells,0,100,0);			
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,1,100,293);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,2,100,586);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,3,100,879);
			
			
			$num++;			
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,4,402,0);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,5,402,293);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,6,402,586);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,7,402,879);
}
else if  ($_POST['hidl'] == "-")
{$pg=$_POST['pages'] - 1;
$num=-8;
for ($i=0; $i<$pg;$i++)
	 { $num = $num+8;}
            cellA ($num,$bd_new_product,$name_cells,0,100,0);			
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,1,100,293);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,2,100,586);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,3,100,879);
			
			$num++;			
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,4,402,0);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,5,402,293);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,6,402,586);
			$num++;
			if ($num > $bd_sizeof){$num=0;}
			cellA ($num,$bd_new_product,$name_cells,7,402,879);

}
     ;
echo '<div id="pages">'.$_POST['hidl'].'</div><br>'  ;
//echo $sum .'<br>'      ;
 //sleep(5);
echo '<div id="curr_page">'.$pg.'</div><br>'  ;	
echo '<div id="total">'.$total_page.'</div><br>'  ;				
?>
</body>
</html>