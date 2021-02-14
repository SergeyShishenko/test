<?php 
include "classes_cnc/class_CSVspecification.php";
$scsv= new class_CSVspecification('files/2578_4_SE');
// $scsv->output();
return $scsv->getSpecification();
?>