<?php 
// CNC\checkCPU.php
include_once dirname(__DIR__ ). '/Classes/Logger.php';
// Logger::$PATH = dirname(__FILE__)."/LOGS";
include "classes_cnc/class_ReadingCNCfiles.php";
include "classes_cnc/class_CNC.php";

$cncsess= new class_ReadingCNCfiles('uploads/'.$folder_current);

// Logger::getLogger('log_class_CNC')->log("return CNC\checkCPU.php ");
return $cncsess->checkAllCNC();
// Logger::getLogger('log_class_CNC')->log("***");
?>