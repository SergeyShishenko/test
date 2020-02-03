<?php
// users\moveFileToSE.php
 $m1 =$_POST['img'];
 $m1new = $_SERVER['DOCUMENT_ROOT']."/www".str_replace("GALLERY", "GALLERY/SBOROCHNYE-EDINICY", $m1);
 $m1=$_SERVER['DOCUMENT_ROOT']."/www".$m1;
 $m3 = str_replace("Original", "Thumbnail", $m1);
 $m3new = str_replace("Original", "Thumbnail", $m1new);
//  Thumbnail
 $m2 =$_POST['dwg'];
 $m2new = $_SERVER['DOCUMENT_ROOT']."/www".str_replace("GALLERY", "GALLERY/SBOROCHNYE-EDINICY", $m2);
//  rename( $_SERVER['DOCUMENT_ROOT'].'/archive.zip', $_SERVER['DOCUMENT_ROOT'].'/folder/archive .zip');
 $m2=$_SERVER['DOCUMENT_ROOT']."/www".$m2;
 rename( $m1, $m1new);
 rename( $m2, $m2new);
 rename( $m3, $m3new);
 echo $m3new."\n";
 echo $m2new."\n";
 echo $m1new;
  

?>