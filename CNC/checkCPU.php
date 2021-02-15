<?php 
include "classes_cnc/class_ReadingCNCfiles.php";
include "classes_cnc/class_CNC.php";
$cncsess= new class_ReadingCNCfiles('uploads/'.$folder_current.'/');
// $cncsess->output();
return $cncsess->checkAllCNC();
?>