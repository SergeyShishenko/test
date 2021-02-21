<?php
 include "classes_stl/class_ReadSTL.php"; 
 $stl= new class_ReadSTL("box.STL");
//  echo "<br> Всего треугольников: " . $stl->getCountTriangles() . "<br>";
//  echo "<script>alert('S-Solid = " . ($stl->getTotalSum() / 1000000) ." м.кв.');</script>";
//  $stl->getTriangles();
 return $stl->getData();

?>