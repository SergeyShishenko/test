<?php 
// вызов из CNC\check_specification_CSV.php
include "classes_cnc/class_ReadingCNCfiles.php";
include "classes_cnc/class_CNC.php";
$cncsess= new class_ReadingCNCfiles($pathFile);
return $cncsess->specificationAllCNC();
?>