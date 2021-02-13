<?php 
include "classes_cnc/class_ReadingCNCfiles.php";
include "classes_cnc/class_CNC.php";
// $cncsess= new class_ReadingCNCfiles('uploads/'.$rand_folder.'/');
$cncsess= new class_ReadingCNCfiles('files/1');
return $cncsess->specificationAllCNC();
?>