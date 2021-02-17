<?php 
include "classes_cnc/class_CSVspecification.php";
if (file_exists($pathFile)) {
    $scsv= new class_CSVspecification($pathFile);
    return $scsv->getSpecification();
}else{
    return false;
}

?>