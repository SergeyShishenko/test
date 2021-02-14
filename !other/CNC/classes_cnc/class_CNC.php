<?php

/**
*               5
*       *   *   *   *   *
*       *               *
*    6  *       1       * 4
*       *               *
*       *   *   *   *   *
*               3
*       
 * Часть программа для работы кусок в форме параллелепипеда может быть разложен на 7 логических блоков. 

 * Логический блок № 1 – Описание общие параметры, относящиеся к части.

 * TPA\ALBATROS\EDICAD\01.00:20:r0w0                           ; Заголовок программы
 * $=test cad interface	                          	               ; $= Комментарий.	
 * ::SIDE=1;					; Список лиц не работал
 * ::UNm DL=600 DH=400 DS=20			; UNm = Единицей измерения для программирования в мм
 * 						DL=600 Piece length = 600 mm.
 * 						DH=400 Piece height = 400 mm.
 * 						DS=20 Piece depth = 20 mm.
 * OFFS{						; Раздел зарезервировано для назначения программы кусок смещения.
 * #0=0.0|0						; Программа смещения в направлении X
 * #1=0.0|0						; Программа смещения в направлении Y
 * #2=0.0|0						; Программа смещения в направлении Z
 * }OFFS
 * VARV{						; Раздел зарезервировано для назначения переменных V,
 *                 					  используемая в рамках программы
 * }VAR
 * 
 * VAR{	; Раздел зарезервировано для назначения глобальных переменных, используемых в программe
 * }VAR
 * OPTI{						; Раздел зарезервировано для специальной оптимизации настроек.
 * }OPTI
 * SPEC{						; Раздел зарезервирован для спец
 * ::0						; Назначить Оснастки 0
 * }SPEC
 * 
 * Номер логического блока 2 – Описание работы должны быть выполнены на лицо 1. (ВЕРХ)
 * 
 * SIDE#1{						; Лица Заголовок 1
 * W#81{ ::WTp					; Вызывает сверление (W#81) в точке (::WTp)
 * #1=101 #2=102 #3=-15 #9012=-5 #9013=-10 #8015=0 #44=0 #201=1 #203=1 #1002=10 #1001=1 #2005=1.5 #2002=3300 }W        
 *                                                                                              ; Параметры сверления
 * }SIDE						; Конец блок, описывающий лицо выработок.

 * Номер логического блока 3 – Описание работы должны быть выполнены на лице 2. (нИЗ)

 * SIDE#2{
 * }SIDE

 * Номер логического блока 4 – Описание работы должна быть выполнена на лице 3.

 * SIDE#3{
 * }SIDE

 * Логический блок № 5 – описание работы должны быть выполнены на лицо 4.

 * SIDE#4{
 * }SIDE

 * Номер логического блока 6 – описание работы должна быть выполнена на лице 5.

 * SIDE#5{
 * }SIDE

 * Номер логического блока 6 – описание работы должна быть выполнена на лице 6.

 * SIDE#6{
 * }SIDE

 */
/**
*   СВЕРЛЕНИЕ
    * "W#81{ ::WTp WS=5  #1=181.501 #2=8 #3=-41 #8015=0 #1002=5 #205= #201=1 #1001=0 }W"
    * W#81{  операция
    * :: WTp точка
    * WS = 9  номер операции
    * W$=комментарий
    * #1=1037.504  X
    * #2=377.5     Y
    * #3=-17       Z глубина
    * #8015=0 абсолютные коолдинаты
    * #1002=8 диаметр
    * #205= инструмент - убрать
    * #201=1  тип машины
    * #1001=1 сквозное/глухое  1/0
    * }W"
 */
/**
 * CNC class
 * @param mixed $fileCNC путь к файлу CNC
 */
class class_CNC
{
    /**
	 * Массив строк файла
	 * @var Array $arrStr
	 */
    private $arrStr ; 

    /**
	 *Второй разделитель
	 * @var String $mod для findVal
	 */ 
    private $mod; 

    /**
	 * Длина детали
	 * @var Float $DL (x)
	 */
    private $DL=340.0; 
    
    /**
	 * Ширина детали
	 * @var Float $DH (y)
	 */
    private $DH=170.0; 

    /**
	 * Толщина детали
	 * @var Float $DS (z)
	 */
    private $DS=16.0; 
    
    /**
    * Путь к файлу
    *
    * @var String
    */
    private $pathfile; 

    private $arrSpecification; 

    /**
     * Текущий блок
     * OFFS{						; Раздел зарезервировано для назначения программы кусок смещения.
     * }OFFS
     *
     * VARV{						; Раздел зарезервировано для назначения переменных V,
     * }VAR
     * 
     * VAR{	                        ; Раздел зарезервировано для назначения глобальных переменных, используемых в программe
     * }VAR
     *
     * OPTI{						; Раздел зарезервировано для специальной оптимизации настроек.
     * }OPTI
     *
     * SPEC{						; Раздел зарезервирован для спец
     * }SPEC
     *
     * SIDE#1{
     * }SIDE
     *
     * SIDE#2{
     * }SIDE
     *
     * SIDE#3{
     * }SIDE
     *
     * SIDE#4{
     * }SIDE
     *
     * SIDE#5{
     * }SIDE
     *
     * SIDE#6{
     * }SIDE
     *
     * @var Sthing
     */
    private $currentBlock="start"; 

    private $currentRow=-1; 

    public $err="";



    public function __construct($fileCNC) {

        $this->pathfile=$fileCNC;
        $this->$arrStr=file($fileCNC);
        $this->DL = $this->findVal($this->getStrByNum(2),"DL");
        $this->DH = $this->findVal($this->getStrByNum(2),"DH");
        $this->DS = $this->findVal($this->getStrByNum(2),"DS");        

    } 

    /**
     * Вывод строки по номеру
     * @return string
    */ 
    public function getStrByNum($i){
        return $this->$arrStr[$i];
    }

    /**
     * Вывод длины детали
     * @return Float
    */ 
    public function getDL(){
        return $this->DL;
    }

    /**
     * Вывод ширины детали
     * @return Float
    */ 
    public function getDH(){
        return $this->DH;
    }

    /**
     * Вывод njkobys детали
     * @return Float
    */ 
    public function getDS(){
        return $this->DS;
    }

    public function nameFile(){
        return basename($this->pathfile, ".cnc");
    }

    public function getSpecification(){
        $var2=basename($this->pathfile);        
        $this->arrSpecification['name']=substr($var2,0,strrpos($var2, '_')); // строка до последнего "_"
        $this->arrSpecification['DL']=round(trim($this->DL), 1);
        $this->arrSpecification['DS']=round(trim($this->DS), 1);
        $this->arrSpecification['DH']=round(trim($this->DH), 1);
        return $this->arrSpecification;
    }

    // private function toFixed($number, $fix = 1) {
    //     $arr = explode('.', $number);
    //     return isset($arr[1]) ? floatval($arr[0] . "." . substr($arr[1], 0, $fix)) : $number;
    // }

    public function getArr(){       
           
        return $this->$arrStr;           
  
}


    /**
     * Вывод всех строк файла
     * @return String
    */
    public function outputCNC(){
       
        for($i=0; $i < count($this->$arrStr); $i++) {
            echo "<br>";
            // echo $i."~";
            echo $this->getStrByNum($i);
        
         }
    }
/**
     * Поиск значения параметра в строке
     * @param   String   $row    Проверяемоя строка
     * @param   String    $key   Имя ключа
     * @param   String    $separator   Первый разделитель
     * @param   null|String    $mod   Второй разделитель
     * @return  null|Float
    */
    public function findVal($row,$key,String $separator=" ",String $mod = '='){   
        $this->mod=$mod;
        // $row=$this->getStrByNum($numrow);
        $arr = explode($separator, $row);
         $arr =array_map(function($p) { return explode($this->mod,$p); }, $arr);

         foreach ($arr as $k => $innerarr) {         
            for($j=0; $j < count($innerarr); $j++) {
                if ($innerarr[$j]==$key){
                    // echo "{$key} = {$innerarr[$j+1]} <br>"; 
                   return $innerarr[$j+1];
                }
                
            }
            // print_r($arr);
        }
        // return $arr;

    }

    /**
     * Поиск номера строки строки по вхождению
     */

    public function findNumByStr($substr){
       
        for($i=0; $i < count($this->$arrStr); $i++) {
           // echo $this->$arrStr[$i]."<br>";
            if (strstr($this->$arrStr[$i], $substr)){
                // echo "{$key} = {$innerarr[$j+1]} <br>"; 
               return "Номер строки ".$i;
            }
         }
    }

    public function checkCNC(){
       
        for($i=0; $i < count($this->$arrStr); $i++) { 
            
            if ($this->currentRow >= 0){
                $this->currentRow++;
            }
                  
            if (strpos($this->$arrStr[$i], "SIDE#1{") !== false){
                $this->currentBlock = "SIDE#1{";
                    $this->currentRow=0;            
            }
            if (strpos($this->$arrStr[$i], "SIDE#2{") !== false){
                $this->currentBlock = "SIDE#2{";
                    $this->currentRow=0;             
            }
            if (strpos($this->$arrStr[$i], "SIDE#3{") !== false){
                $this->currentBlock = "SIDE#3{";
                    $this->currentRow=0;             
            }
            if (strpos($this->$arrStr[$i], "SIDE#4{") !== false){
                $this->currentBlock = "SIDE#4{"; 
                    $this->currentRow=0;            
            }
            if (strpos($this->$arrStr[$i], "SIDE#5{") !== false){
                $this->currentBlock = "SIDE#5{";
                    $this->currentRow=0;             
            }
            if (strpos($this->$arrStr[$i], "SIDE#6{") !== false){
                $this->currentBlock = "SIDE#6{"; 
                    $this->currentRow=0;            
            }



            if ($this->currentBlock == "SIDE#1{") {                
                    if (strpos($this->$arrStr[$i], "W#81{") !== false){ // Сверление                 
                       $this->checkDepth1($this->findVal($this->$arrStr[$i],"#3"),$this->findVal($this->$arrStr[$i],"#1002"),$i);
                    }
            }


            if ($this->currentBlock == "SIDE#3{" || $this->currentBlock == "SIDE#4{" || $this->currentBlock == "SIDE#5{" || $this->currentBlock == "SIDE#6{"  ){              
                    if (strpos($this->$arrStr[$i], "W#81{") !== false){ 
                        $this->checkDepth3($this->findVal($this->$arrStr[$i],"#3"),$this->findVal($this->$arrStr[$i],"#1002"),$i);
                     }
            }           
        
        }// for

       if ($this->err != ""){
            $this->correctionRecord();
       }

     }

    private function checkDepth3($depth,$diam,$i){        
        if ($diam == 5 && $depth < -35 ){ 
           $this->err.= "Поверхность ".substr($this->currentBlock, -2,1)." " 
            ."Строка ". $this->currentRow 
            ." диаметр ".$diam."; глубина ".$depth
            ." (Ошибка!) исправлено-: -35<br>";
            $this->$arrStr[$i] = str_replace('#3='.$depth, '#3=-35', $this->$arrStr[$i]);
            $this->$arrStr[$i] = substr_replace($this->$arrStr[$i], 'W$=changed ', strpos($this->$arrStr[$i], '#', 2), 0);
        } 
        if ($diam == 8 && $depth < -39 ){
            $this->err.= "Поверхность ".substr($this->currentBlock, -2,1)." "
            ."Строка ". $this->currentRow 
            ." диаметр ".$diam."; глубина ".$depth
            ." (Ошибка!) исправлено-: -38<br>";
            $this->$arrStr[$i] = str_replace('#3='.$depth, '#3=-39', $this->$arrStr[$i]);
            $this->$arrStr[$i] = substr_replace($this->$arrStr[$i], 'W$=changed ', strpos($this->$arrStr[$i], '#', 2), 0);
            
        } 

    }
    private function checkDepth1($depth,$diam,$i){  
        // echo "Строка ". $this->currentRow . " ".($this->DS-3)." < ". abs($depth) . " && ". abs($depth) . " < " . ($this->DS) ."<br>";
        if (($this->DS-3) < abs($depth) && abs($depth) < $this->DS ){ 
           $this->err.= "Поверхность ".substr($this->currentBlock, -2,1)." " 
            ."Строка ". $this->currentRow 
            ." диаметр ".$diam."; глубина ".$depth
            ." (Ошибка!) исправлено-:-".($this->DS-3)."<br>";
            $this->$arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS-3), $this->$arrStr[$i]);
            $this->$arrStr[$i] = substr_replace($this->$arrStr[$i], 'W$=changed ', strpos($this->$arrStr[$i], '#', 2), 0);
        } 
        if (abs($depth) >= $this->DS && abs($depth) < ($this->DS+4)) { 
           $this->err.= "Поверхность ".substr($this->currentBlock, -2,1)." " 
            ."Строка ". $this->currentRow 
            ." диаметр ".$diam."; глубина ".$depth
            ." (Ошибка!) исправлено+:-".($this->DS+4)."<br>";
            $this->$arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS+4), $this->$arrStr[$i]);
            $this->$arrStr[$i] = substr_replace($this->$arrStr[$i], 'W$=changed ', strpos($this->$arrStr[$i], '#', 2), 0);
        } 
        if (abs($depth) > ($this->DS+4)){ 
           $this->err.= "Поверхность ".substr($this->currentBlock, -2,1)." " 
            ."Строка ". $this->currentRow 
            ." диаметр ".$diam."; глубина ".$depth
            ." (Ошибка!) исправлено-: -".($this->DS+4)."<br>";
            $this->$arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS+4), $this->$arrStr[$i]);
            $this->$arrStr[$i] = substr_replace($this->$arrStr[$i], 'W$=changed ', strpos($this->$arrStr[$i], '#', 2), 0);
        } 
        

    }

    public function correctionRecord(){ 
        $correct_folder= "correct1";// сделать свойством
        $dir = "files/".$correct_folder ."/"; // Например /var/www/localhost/public
        if (!file_exists($dir)) { 
            mkdir($dir, 0777, true);
        }

        file_put_contents($dir.$this->nameFile() , implode("\n", $this->$arrStr ));
    }

}// end class

?>