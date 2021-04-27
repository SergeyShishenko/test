<?php 
include_once dirname(__DIR__ ). '/Classes/Logger.php';
Logger::$PATH = dirname(__FILE__)."/LOGS";
include "classes_cnc/class_CSVspecification.php";
if (file_exists($pathFile)) {
    $scsv= new class_CSVspecification($pathFile);
    return array ($scsv->getSpecification(),$scsv->getName());
}else{
    return false;
}

?>