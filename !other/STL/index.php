<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="shortcut icon" href="stl.png" type="image/x-icon"> 
    <title>Чтение STL</title>
</head>
<body>
 <?php  
 include "classes_stl/class_ReadSTL.php"; 
 $stl= new class_ReadSTL("box.STL");
 echo "<br> Всего треугольников: " . $stl->getCountTriangles() . "<br>";
 echo "<script>alert('S-Solid = " . ($stl->getTotalSum() / 1000000) ." м.кв.');</script>";
 ?>   
</body>
</html>
