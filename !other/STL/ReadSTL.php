<?php
// !other\STL\ReadSTL.php

// Бинарный формат файла STL
// Если в тесселяции много маленьких треугольников, файл ASCII STL может стать огромным. Вот почему существует более компактная двоичная версия.

// Двоичный файл STL начинается с 80-символьного заголовка. Это обычно игнорируется большинством программ чтения файлов STL, за некоторыми заметными исключениями, о которых мы поговорим позже. После заголовка общее количество треугольников указывается с использованием 4-байтового целого числа без знака.

// UINT8[80] – Заголовок
// UINT32 – Количество треугольников
// Информация о треугольниках последует позже. Файл просто заканчивается после последнего треугольника.

// Каждый треугольник представлен двенадцатью 32-битными числами с плавающей запятой. Как и в файле ASCII STL, 3 числа относятся к трехмерным декартовым координатам нормали к треугольнику. Остальные 9 чисел предназначены для координат вершин (по три в каждой). Вот как это выглядит:

// foreach triangle
// REAL32[2] – Нормальный вектор
// REAL32[2] – Вершина 1
// REAL32[2] – Вершина 2
// REAL32[2] – Вершина 3
// UINT16 – конец подсчета байтов аттрибута
// Обратите внимание, что после каждого треугольника есть 2-байтовая последовательность, называемая «счетчиком байтов атрибута». В большинстве случаев это значение равно нулю и действует как разделитель между двумя треугольниками. Но некоторые программы также используют эти 2 байта для кодирования дополнительной информации о треугольнике. Мы увидим такой пример позже, где эти байты будут использоваться для хранения информации о цвете.
//*
// solid < комментарий >

// facet normal 0.319575 -0.175216 -0.93122
// outer loop
// vertex 2.22934 -0.992723 -0.862826
// vertex 2.41037 -0.777999 -0.841105
// vertex 2.40731 -0.97498 -0.805091
// endloop
// endfacet
// ...
// endsolid
// Бинарный STL-файл условно можно изобразить следующим образом:
// struct facet
// {
//     float normal[2];     // 12 байт
//     float vertex[2][2];  // 36 байт
//     unsigned short attr; // 2 байта
// };

// struct stl_file
// {
//     char   head[80]; // комментарий   - 80 байт
//     unsigned long n; // к-во граней   - 4  байта
//     facet    arr[n]; // массив граней - n * 50 байт
// };
 

// $filename = "C:/xampp/tmp/" .basename($_FILES['uploadfile']['tmp_name']);
 $filename = "box.STL";
 $sum=0;

// $handle = fopen($filename, "rb");
// $contents = fread($handle, filesize($filename));
// fclose($handle);
// // var_dump(unpack('f', "\x99\x99\$arrVert1[0]9\$arrVert3[0]f"));
// // var_dump(unpack('f', $contents));
// var_dump($contents);

$handle = fopen($filename, "rb");
$name = fread($handle, 80);
echo "Заголовок: ".$name;
$content = unpack('i', fread($handle, 4));
echo "<br> Всего треугольников: ".$content[1] . "<br>";
echo "<hr>";
  for ($j = 1; $j <= $content[1]; $j++){
    echo "Треугольник - $j<br>"; 
    $NormalX=unpack('f', fread($handle, 4))[1];
    $NormalY=unpack('f', fread($handle, 4))[1];
    $NormalZ=unpack('f', fread($handle, 4))[1];
    echo "Нормаль: " . $NormalX . " " . $NormalY . " " . $NormalZ . "<br>";

    $Vertex_1_X=unpack('f', fread($handle, 4))[1];
    $Vertex_1_Y=unpack('f', fread($handle, 4))[1];
    $Vertex_1_Z=unpack('f', fread($handle, 4))[1];
    $arrVert1=[$Vertex_1_X, $Vertex_1_Y, $Vertex_1_Z];
    echo "Вершина1: " . $Vertex_1_X . " " . $Vertex_1_Y. " " . $Vertex_1_Z. "<br>";

    $Vertex_2_X=unpack('f', fread($handle, 4))[1];
    $Vertex_2_Y=unpack('f', fread($handle, 4))[1];
    $Vertex_2_Z=unpack('f', fread($handle, 4))[1];
    $arrVert2=[$Vertex_2_X ,$Vertex_2_Y, $Vertex_2_Z];
    echo "Вершина2: " . $Vertex_2_X . " " . $Vertex_2_Y. " " . $Vertex_2_Z. "<br>";

    $Vertex_3_X=unpack('f', fread($handle, 4))[1];
    $Vertex_3_Y=unpack('f', fread($handle, 4))[1];
    $Vertex_3_Z=unpack('f', fread($handle, 4))[1];
    $arrVert3=[$Vertex_3_X, $Vertex_3_Y, $Vertex_3_Z];
    echo "Вершина3: " . $Vertex_3_X . " " . $Vertex_3_Y. " " . $Vertex_3_Z. "<br>";
    
    unpack('s', fread($handle, 2))[1]; // END
    // echo unpack('s', fread($handle, 2))[1]. "<br>";
    $strain=square($arrVert1,$arrVert2,$arrVert3);
    echo "S = " . $strain;
    $sum += $strain;
    
    echo "<hr>";
    }

    echo "S-Solid = " .$sum;
// Для упрощения расчетов введите вспомогательную переменную - полупериметр (Р).
// Из названия понятно, что это половина суммы длин всех сторон:
// Р = ½*(AB+BC+AC) = 0.5*(√((X₁-X₂)² + (Y₁-Y₂)² + (Z₁-Z₂)²) + √((X₂-X₃)² + (Y₂-Y₃)² + (Z₂-Z₃)²) + √((X₁-X₃)² + (Y₁-Y₃)² + (Z₁-Z₃)²)
// vertex_1 2.22934 -0.992723 -0.862826  X_1 Y_1 Z_1 $arrVert1[0] $arrVert1[1] $arrVert1[2]
// vertex_2 2.41037 -0.777999 -0.841105  X_2 Y_2 Z_2 $arrVert2[0] $arrVert2[1] $arrVert2[2]
// vertex_3 2.40731 -0.97498 -0.805091   X_3 Y_3 Z_3 $arrVert3[0] $arrVert3[1] $arrVert3[2]
function square($arrVert1,$arrVert2,$arrVert3){ // полупериметр
//  Р = ½*(AB+BC+AC) = 
//  ½*(√((X₁-X₂)² + 
//  (Y₁-Y₂)² + 
//  (Z₁-Z₂)²) + 
//  √((X₂-X₃)² + 
//  (Y₂-Y₃)² + 
//  (Z₂-Z₃)²) + 
//  √((X₁-X₃)² + 
//  (Y₁-Y₃)² + 
//  (Z₁-Z₃)²)
    $halfMeter= 0.5 * (sqrt(pow($arrVert1[0] - $arrVert2[0],2) + pow($arrVert1[1] - $arrVert2[1],2) +  pow($arrVert1[2] - $arrVert2[2],2)) +  
                       sqrt(pow($arrVert2[0] - $arrVert3[0],2) + pow($arrVert2[1] - $arrVert3[1],2) +  pow($arrVert2[2] - $arrVert3[2],2)) +  
                       sqrt(pow($arrVert1[0] - $arrVert3[0],2) + pow($arrVert1[1] - $arrVert3[1],2) +  pow($arrVert1[2] - $arrVert3[2],2))
                        );
                        

// √( P*(P-√((X₁-X₂)² +                 (Y₁-Y₂)² +                          (Z₁-Z₂)²))*
//      (P-√((X₂-X₃)² +                 (Y₂-Y₃)² +                          (Z₂-Z₃)²))*
//      (P-√((X₁-X₃)² +                 (Y₁-Y₃)² +                          (Z₁-Z₃)²)

    $square = sqrt( $halfMeter * ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert2[0],2) + pow($arrVert1[1]-$arrVert2[1],2) + pow($arrVert1[2]-$arrVert2[2],2))) * 
                                 ($halfMeter-sqrt(pow($arrVert2[0]-$arrVert3[0],2) + pow($arrVert2[1]-$arrVert3[1],2) + pow($arrVert2[2]-$arrVert3[2],2))) * 
                                 ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert3[0],2) + pow($arrVert1[1]-$arrVert3[1],2) + pow($arrVert1[2]-$arrVert3[2],2)))
                );
    return $square ;
}

// Рассчитайте площадь (S) по формуле Герона - извлеките корень из произведения полупериметра на разность между ним и длиной каждой из сторон. 
// В общем виде ее можно записать так: 
// S = √(P*(P-AB)*(P-BC)*(P-AC)) = 
// sqrt( P*(P-sqrt(pow($arrVert1[0]-$arrVert2[0],2) + 
// pow($arrVert1[1]-$arrVert2[1],2) + 
// pow($arrVert1[2]-$arrVert2[2],2)))*(P-sqrt(pow($arrVert2[0]-$arrVert3[0],2) +
// pow($arrVert2[1]-$arrVert3[1],2) + 
// pow($arrVert2[2]-$arrVert3[2],2)))*(P-sqrt(pow($arrVert1[0]-$arrVert3[0],2) +
// pow($arrVert1[1]-$arrVert3[1],2) +
// pow($arrVert1[2]-$arrVert3[2],2)))

// Для упрощения расчетов введите вспомогательную переменную - полупериметр (Р). Из названия понятно, что это половина суммы длин всех сторон:
//  Р = ½*(AB+BC+AC) = 
//  ½*(√((X₁-X₂)² + 
//  (Y₁-Y₂)² + 
//  (Z₁-Z₂)²) + 
//  √((X₂-X₃)² + 
//  (Y₂-Y₃)² + 
//  (Z₂-Z₃)²) + 
//  √((X₁-X₃)² + 
//  (Y₁-Y₃)² + 
//  (Z₁-Z₃)²).

// Рассчитайте площадь (S) по формуле Герона - извлеките корень из произведения полупериметра на разность между ним и длиной каждой из сторон. В общем виде ее можно записать так: S = √(P*(P-AB)*(P-BC)*(P-AC)) = 
// √( P*(P-√((X₁-X₂)² 
// + (Y₁-Y₂)² + 
// (Z₁-Z₂)²))*(P-√((X₂-X₃)² + 
// (Y₂-Y₃)² + 
// (Z₂-Z₃)²))*(P-√((X₁-X₃)² + 
// (Y₁-Y₃)² + 
// (Z₁-Z₃)²)).


// Подробнее: https://www.kakprosto.ru/kak-124513-kak-nayti-ploshchad-treugolnika-po-trem-tochkam#ixzz6myrXMJFt
?>