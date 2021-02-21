<?php
// Бинарный формат файла STL
// Если в тесселяции много маленьких треугольников, файл ASCII STL может стать огромным.
// Вот почему существует более компактная двоичная версия.

// Двоичный файл STL начинается с 80-символьного заголовка. 
// Это обычно игнорируется большинством программ чтения файлов STL, 
// за некоторыми заметными исключениями, о которых мы поговорим позже. 
// После заголовка общее количество треугольников указывается с использованием 4-байтового целого числа без знака.

// UINT8[80] – Заголовок
// UINT32 – Количество треугольников
// Информация о треугольниках последует позже. Файл просто заканчивается после последнего треугольника.

// Каждый треугольник представлен двенадцатью 32-битными числами с плавающей запятой.
// Как и в файле ASCII STL, 3 числа относятся к трехмерным декартовым координатам нормали к треугольнику. 
// Остальные 9 чисел предназначены для координат вершин (по три в каждой). Вот как это выглядит:

// foreach triangle
// REAL32[3] – Нормальный вектор
// REAL32[3] – Вершина 1
// REAL32[3] – Вершина 2
// REAL32[3] – Вершина 3
// UINT16 – конец подсчета байтов аттрибута
// Обратите внимание, что после каждого треугольника есть 2-байтовая последовательность, называемая «счетчиком байтов атрибута».
// В большинстве случаев это значение равно нулю и действует как разделитель между двумя треугольниками. 
// Но некоторые программы также используют эти 2 байта для кодирования дополнительной информации о треугольнике.
// Мы увидим такой пример позже, где эти байты будут использоваться для хранения информации о цвете.

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

    class class_ReadSTL
    {
        /**
         * Массив данных всех треугольников
         * @var Array $arrTriangles
         */
        private $arrTriangles ; 
        /**
         * Количество треугольников
         * @var Integer $countTriangles
         */
        private $countTriangles ; 
        /**
         * Общая сумма площадей треугольников
         * @var Float $totalSum
         */
        private $totalSum = 0; 

        public function __construct($fileSTL) { 
            $handle = fopen($fileSTL, "rb");

            fseek($handle,80);// пропускаем заголовок
            // $name = fread($handle, 80);
          
            // echo "Файл: ". $fileSTL ;
            $content = unpack('i', fread($handle, 4));
            $this->countTriangles = $content[1];
            // echo "<br> Всего треугольников: ".$content[1] . "<br>";
            // echo "<hr>";
            for ($j = 1; $j <= $this->countTriangles; $j++){
                // echo "Треугольник - $j<br>"; 
                $NormalX=unpack('f', fread($handle, 4))[1];
                $NormalY=unpack('f', fread($handle, 4))[1];
                $NormalZ=unpack('f', fread($handle, 4))[1];
                $this->arrTriangles[$j]['normal']=[ $NormalX , $NormalY , $NormalZ];
                // echo "Нормаль: " .  $this->arrTriangles[$j]['normal'][0] . " " 
                // .$this->arrTriangles[$j]['normal'][1] . " " 
                // . $this->arrTriangles[$j]['normal'][2] . "<br>";
               
                $this->arrTriangles[$j]['colinear']=$this->checkColinear($NormalX, $NormalY, $NormalZ);
                //  echo "Колинеарность: ". $this->arrTriangles[$j]['colinear'] . "<br>";
                 $this->arrTriangles[$j]['directional']=$this->directional($NormalX, $NormalY, $NormalZ);
                // echo "Сонаправленность: ". $this->arrTriangles[$j]['directional'] . "<br>";

                $Vertex_1_X=unpack('f', fread($handle, 4))[1];
                $Vertex_1_Y=unpack('f', fread($handle, 4))[1];
                $Vertex_1_Z=unpack('f', fread($handle, 4))[1];
                $this->arrTriangles[$j]['vertex1']=[$Vertex_1_X, $Vertex_1_Y, $Vertex_1_Z];
               
                // echo "Вершина1: "   . $this->arrTriangles[$j]['vertex1'][0] . " " 
                //                     . $this->arrTriangles[$j]['vertex1'][1]. " " 
                //                     . $this->arrTriangles[$j]['vertex1'][2]. "<br>";

                $Vertex_2_X=unpack('f', fread($handle, 4))[1];
                $Vertex_2_Y=unpack('f', fread($handle, 4))[1];
                $Vertex_2_Z=unpack('f', fread($handle, 4))[1];
                $this->arrTriangles[$j]['vertex2']=[$Vertex_2_X, $Vertex_2_Y, $Vertex_2_Z];
           
                // echo "Вершина2: "   . $this->arrTriangles[$j]['vertex2'][0] . " " 
                //                     . $this->arrTriangles[$j]['vertex2'][1]. " " 
                //                     . $this->arrTriangles[$j]['vertex2'][2]. "<br>";

                $Vertex_3_X=unpack('f', fread($handle, 4))[1];
                $Vertex_3_Y=unpack('f', fread($handle, 4))[1];
                $Vertex_3_Z=unpack('f', fread($handle, 4))[1];
                $this->arrTriangles[$j]['vertex3']=[$Vertex_3_X, $Vertex_3_Y, $Vertex_3_Z];
              
                // echo "Вершина3: "   . $this->arrTriangles[$j]['vertex3'][0] . " " 
                //                     . $this->arrTriangles[$j]['vertex3'][1]. " " 
                //                     . $this->arrTriangles[$j]['vertex3'][2]. "<br>";
                

                unpack('s', fread($handle, 2))[1]; // END
                
                
                
                $this->arrTriangles[$j]['strain']=$this->square($this->arrTriangles[$j]['vertex1'],
                                                                $this->arrTriangles[$j]['vertex2'],
                                                                $this->arrTriangles[$j]['vertex3']
                                                            );
                // echo "S = " . $this->arrTriangles[$j]['strain'];
                $this->totalSum += $this->arrTriangles[$j]['strain'];
                
                // echo "<hr>";
            }// for

            echo "S-Solid = " . ($this->totalSum / 1000000) ." м.кв.";
            // echo "<script>alert('S-Solid = " . ($this->totalSum / 1000000) ." м.кв.');</script>";
        }

        // площадь треугольника по его вершинам
        private function square($arrVert1,$arrVert2,$arrVert3){ 
            // полупериметр
            $halfMeter= 0.5 * (sqrt(pow($arrVert1[0] - $arrVert2[0],2) + pow($arrVert1[1] - $arrVert2[1],2) +  pow($arrVert1[2] - $arrVert2[2],2)) +  
                               sqrt(pow($arrVert2[0] - $arrVert3[0],2) + pow($arrVert2[1] - $arrVert3[1],2) +  pow($arrVert2[2] - $arrVert3[2],2)) +  
                               sqrt(pow($arrVert1[0] - $arrVert3[0],2) + pow($arrVert1[1] - $arrVert3[1],2) +  pow($arrVert1[2] - $arrVert3[2],2))
                                ); 
            $square = sqrt( $halfMeter * ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert2[0],2) + pow($arrVert1[1]-$arrVert2[1],2) + pow($arrVert1[2]-$arrVert2[2],2))) * 
                                         ($halfMeter-sqrt(pow($arrVert2[0]-$arrVert3[0],2) + pow($arrVert2[1]-$arrVert3[1],2) + pow($arrVert2[2]-$arrVert3[2],2))) * 
                                         ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert3[0],2) + pow($arrVert1[1]-$arrVert3[1],2) + pow($arrVert1[2]-$arrVert3[2],2)))
                        );
            return $square ;
        }

        // сонаправленные векторы к  (0 0 -1)
        private function directional($ax, $ay, $az){
            $bx =0; $by=0; $bz=-1;
            $directional=$ax*$bx + $ay*$by + $az*$bz;
            if ($directional>0) {
               return "Yes"; 
            } else{
                return "No"; 
            } 
            
        }
        // проверка на колинеарность векторов к оси Z
        private function checkColinear($ax, $ay, $az){
            $bx =0; $by=0; $bz=-1;
            $Colinear=$ay*$bz - $az*$by - $ax*$bz - $az*$bx + $ax*$by - $ay*$bx;   
            if ($Colinear==0) {
                return "Yes"; 
             } else{
                 return "No"; 
             } 
           
        }

        public function getTotalSum(){
           return $this->totalSum;
           
        }
        public function getCountTriangles(){
           return $this->countTriangles;
           
        }
        public function getTriangles(){

            for($j=1; $j <= $this->countTriangles; $j++) {
                echo "<hr>";
                echo "Треугольник - $j<br>"; 
                echo "Нормаль: " .  $this->arrTriangles[$j]['normal'][0] . " " 
                .$this->arrTriangles[$j]['normal'][1] . " " 
                . $this->arrTriangles[$j]['normal'][2] . "<br>";
                echo "Колинеарность: ". $this->arrTriangles[$j]['colinear'] . "<br>";
                echo "Сонаправленность: ". $this->arrTriangles[$j]['directional'] . "<br>";

                echo "Вершина1: "   . $this->arrTriangles[$j]['vertex1'][0] . " " 
                . $this->arrTriangles[$j]['vertex1'][1]. " " 
                . $this->arrTriangles[$j]['vertex1'][2]. "<br>";

                echo "Вершина2: "   . $this->arrTriangles[$j]['vertex2'][0] . " " 
                                    . $this->arrTriangles[$j]['vertex2'][1]. " " 
                                    . $this->arrTriangles[$j]['vertex2'][2]. "<br>";

                echo "Вершина3: "   . $this->arrTriangles[$j]['vertex3'][0] . " " 
                . $this->arrTriangles[$j]['vertex3'][1]. " " 
                . $this->arrTriangles[$j]['vertex3'][2]. "<br>";

                echo "S = " . $this->arrTriangles[$j]['strain'];
            
             }//for
        
           
        }


        
    }
?>