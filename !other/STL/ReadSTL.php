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
// REAL32[3] – Нормальный вектор
// REAL32[3] – Вершина 1
// REAL32[3] – Вершина 2
// REAL32[3] – Вершина 3
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
//     float normal[3];     // 12 байт
//     float vertex[3][3];  // 36 байт
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

//  $handle = fopen($filename, "rb");
// $contents = fread($handle, filesize($filename));
// fclose($handle);
// // var_dump(unpack('f', "\x99\x99\x19\x3f"));
// // var_dump(unpack('f', $contents));
// var_dump($contents);

// $emptyArray = array();
// $normal = array();
// $vertex1 = array();
// $vertex2 = array();
// $vertex3 = array();
$count = 3;
$handle = fopen($filename, "rb");
$contents = fread($handle, 80);
var_dump($contents);
echo filesize($filename);
// fseek($handle,80);
while (feof($handle)==false) {
    for ($j = 1; $j <= 4; $j++){
            $contents = fread($handle, 4);
            $normal[] = unpack('f', $contents);
    }

}
echo "<pre>";
echo "***";
var_dump($normal);
echo "***";
echo "</pre>";

// print("<br>");

// for ($e = 1; $e <= 3; $e++){
//         $content = fread($handle, 4);
//         $vertex1[] = (float)$content;
// }

// var_dump($vertex1);
// print("<br>");

// for ($d = 1; $d <= 3; $d++){
//         $contents = fread($handle, 4);
//         $vertex2[] = (float)$content;
// }

// var_dump($vertex2);
// print("<br>");

// for ($f = 1; $f <= 3; $f++){
//         $contents = fread($handle, 4);
//         $vertex3[] = (float)$content;
// }

// var_dump($vertex3);
// print("<br>");

// fseek($handle,2);
// $sum = $sum + ((((-1) * current($vertex3) * next($vertex2) * end($vertex1)) + prev($vertex2) * next($vertex3) * prev($vertex1) + prev($vertex3) * current($vertex1) * end($vertex2) - prev($vertex1) * next($vertex3) * current($vertex2) - reset($vertex2) * next($vertex1) * next($vertex3) + prev($vertex1) * next($vertex2) * current($vertex3)) / 6);
// $normal = array();
// $vertex1 = array();
// $vertex2 = array();
// $vertex3 = array();
// } 
//  fclose($handle);
// print($sum);
?>