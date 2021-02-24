<?php
 include "classes_stl/class_ReadSTL.php"; 
//  $stl= new class_ReadSTL("box.STL");
 $stl= new class_ReadSTL("box1000.STL");
//  $stl= new class_ReadSTL("blob.STL");
//  $stl= new class_ReadSTL("arca.STL");
//  echo "<br> Всего треугольников: " . $stl->getCountTriangles() . "<br>";
//  echo "<script>alert('S-Solid = " . ($stl->getTotalSum() / 1000000) ." м&sup2;.');</script>";
//  $stl->getTriangles();
 return $stl->getData();

?>