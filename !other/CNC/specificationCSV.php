<?php 
include "classes_cnc/class_CSVspecification.php";
$scsv= new class_CSVspecification($pathFile);
return $scsv->getSpecification();
?>