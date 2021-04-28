<?php
// вызов из CNC\check_specification_CSV.php
include_once dirname(__DIR__ ). '/Classes/Logger.php';
Logger::$PATH = dirname(__FILE__)."/LOGS";
include "classes_cnc/class_CSVspecification.php";
if (file_exists($pathFile)) {
    $scsv= new class_CSVspecification($pathFile);
    
    // Logger::getLogger('log_class_CNC')->log("scsv->getSpecification() ".$scsv->getSpecification()[0]);
    // Logger::getLogger('log_class_CNC')->log("scsv->getName() ".$scsv->getName());

    return array ($scsv->getSpecification(),$scsv->getName());
}else{
    return false;
}

?>