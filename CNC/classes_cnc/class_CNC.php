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
    * W#81{ :: WTp операция точка  
    * WS = 9  номер операции
    * W$=комментарий
    * #1=1037.504  X
    * #2=377.5     Y
    * #3=-17       Z глубина
    * #8015=0 абсолютные коолдинаты
    * #1002=8 &Oslash; диаметр
    * #205= инструмент - убрать
    * #201=1  тип машины
    * #1001=1 сквозное/глухое  1/0
    * }W"
 */
/**
 *  ПИЛА ПО X
    * W#1050{ ::WT2 WS=52  #8098=lame.tmcr #6=1 #8509=0 #8510=-50 #8511=12 #8512=-6 #8514=1 #8515=1 #8516=3003 #8517=2387+50 #8525=1 #8526=0 #8527=0 }W
    * W#1050{ ::WT2
    * #8098=lame.tmcr  Макрос, который используется
    * WS = 52        номер операции
    * WB = 52        выключить операции
    * W$=комментарий
    * #6=1           Выбор лица (должен быть установлен =1)
    * #8509=0        Тип пилы (должен быть установлен =0)
    * #8510=-50      Координата X начальной точки
    * #8517=2387+50  Координата X конечной точки 
    * #8511=12       Позиция Y
    * #8512=-6       Позиция Z глубина
    * #8514=1        Машина (должна быть =1)
    * #8515=1        Группа (должна быть =1)
    * #8516=3003     Идентификатор инструмента
    *
    * #8525=1        Применение компенсации инструмента: 1 для левой компенсации, 2 для правой
    *                компенсация, 0 для отключения компенсации
    * #8526=0        Если = 1 пила будет выполнена в два шага
    * #8527=0        Если =1 вычисляется строка смычка для начальной точки
   
    * 
 */

/**
 *  * CNC class
 * @param mixed $fileCNC путь к файлу CNC
 */
class class_CNC
{
    /**
	 * Массив строк файла
	 * @var Array $arrStr
	 */
    private $arrStr=[] ; 

    /**
	 * Массив существующих инструментов W#81 - диаметр сверла: #1002=8  и тип: #1001=1 сквозное/глухое  1/0
	 * @var Array $arrStr
	 */
    private $arrToolsW81Side1 = array('4:1','5:1','5:0','8:1','8:0','10:0','15:0','18:0','20:0','35:0') ; 

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

    public $err=""; // ошибки 

    public $warning=""; // предупреждения

    private $rand_folder;



    public function __construct($fileCNC, $folder) {

        $this->pathfile=$fileCNC;
        $this->rand_folder = $folder;
        Logger::$PATH = dirname(__FILE__);
        Logger::getLogger('log_class_CNC')->log($fileCNC);
        $this->arrStr=file($fileCNC);
        $num=2;
        if(is_null($this->findVal($this->getStrByNum($num),"DL"))){$num=3;}
        $this->DL = $this->findVal($this->getStrByNum($num),"DL");
        $this->DH = $this->findVal($this->getStrByNum($num),"DH");
        $this->DS = $this->findVal($this->getStrByNum($num),"DS");         

    } 

    /**
     * Вывод строки по номеру
     * @return string
    */ 
    public function getStrByNum($i){
        return $this->arrStr[$i];
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
     * Вывод толщины детали
     * @return Float
    */ 
    public function getDS(){
        return $this->DS;
    }

    public function nameFile(){
        return basename($this->pathfile);
    }

    public function getSpecification(){
        $var2=basename($this->pathfile);        
        $this->arrSpecification['name']=substr($var2,0,strrpos($var2, '_')); // строка до последнего "_"
        $this->arrSpecification['DL']=round(trim($this->DL), 1);
        $this->arrSpecification['DS']=round(trim($this->DS), 1);
        $this->arrSpecification['DH']=round(trim($this->DH), 1);
        return $this->arrSpecification;
    }


    /**
     * Вывод всех строк файла
     * @return String
    */
    public function outputCNC(){
       
        for($i=0; $i < count($this->arrStr); $i++) {
            // echo "\n";
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
                    // echo "{$key} = {$innerarr[$j+1]} \n"; 
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
       
        for($i=0; $i < count($this->arrStr); $i++) {
           // echo $this->arrStr[$i]."\n";
            if (strstr($this->arrStr[$i], $substr)){
                // echo "{$key} = {$innerarr[$j+1]} \n"; 
               return "Номер строки ".$i;
            }
         }
    }
    public function getArr(){       
           
               return $this->arrStr;           
         
    }

    public function checkCNC(){
       
        for($i=0; $i < count($this->arrStr); $i++) { 
            
            if ($this->currentRow >= 0){
                $this->currentRow++;
            }
                  
            if (strpos($this->arrStr[$i], "SIDE#1{") !== false){
                $this->currentBlock = "SIDE#1{";
                    $this->currentRow=0;            
            }
            if (strpos($this->arrStr[$i], "SIDE#2{") !== false){
                $this->currentBlock = "SIDE#2{";
                    $this->currentRow=0;             
            }
            if (strpos($this->arrStr[$i], "SIDE#3{") !== false){
                $this->currentBlock = "SIDE#3{";
                    $this->currentRow=0;             
            }
            if (strpos($this->arrStr[$i], "SIDE#4{") !== false){
                $this->currentBlock = "SIDE#4{"; 
                    $this->currentRow=0;            
            }
            if (strpos($this->arrStr[$i], "SIDE#5{") !== false){
                $this->currentBlock = "SIDE#5{";
                    $this->currentRow=0;             
            }
            if (strpos($this->arrStr[$i], "SIDE#6{") !== false){
                $this->currentBlock = "SIDE#6{"; 
                    $this->currentRow=0;            
            }

            if ($this->currentBlock == "SIDE#1{") {                
                    if (strpos($this->arrStr[$i], "W#81{") !== false){ // Сверление                 
                       $this->checkDepth1($this->findVal($this->arrStr[$i],"#3"),$this->findVal($this->arrStr[$i],"#1002"),$i);
                    }
                    if (strpos($this->arrStr[$i], "W#1050{") !== false){ // Пила по Х    
                        // #8510=-50      Координата X начальной точки
                        // #8517=2387+50  Координата X конечной точки             
                       $this->checkSaw($this->findVal($this->arrStr[$i],"#8510"),$this->findVal($this->arrStr[$i],"#8517"),$i);
                    }
            } // if "SIDE#1{"

            if ($this->currentBlock == "SIDE#3{" || $this->currentBlock == "SIDE#4{" || $this->currentBlock == "SIDE#5{" || $this->currentBlock == "SIDE#6{"  ){              
                    if (strpos($this->arrStr[$i], "W#81{") !== false){ 
                        $this->checkDepth3($this->findVal($this->arrStr[$i],"#3"),$this->findVal($this->arrStr[$i],"#1002"),$i);
                     }
            }           
        
        }// for

    //    if ($this->warning == "" &&  $this->err != ""){
    //         $this->correctionRecord();
    //    }
       if ( $this->err != ""){
            $this->correctionRecord();
       }

     }

    //  &#9888;	Внимание!
// проверка торцы
    private function checkDepth3($depth,$diam,$i): void {        
        if ($diam == 5 && $depth < -35 ){ 

            $this->printErr($depth, $diam, 35, 1);  //Ошибка #1: Проверка глубины сверления в торцах деталей. Максимальная глубина сверления     
            $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-35', $this->arrStr[$i]);
            $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);
            return; 
        } 
        if ($diam == 8 && $depth < -39 ){

            $this->printErr($depth, $diam, 39, 1);  //Ошибка #1: Проверка глубины сверления в торцах деталей. Максимальная глубина сверления     
            $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-39', $this->arrStr[$i]);
            $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);
            return; 
            
        } 

    }

    // проверка пласть  
    private function checkDepth1($depth,$diam,$i): void {    
            $this->printWarning($diam, $i); // проверка на предупреждения
        // if (!$this->printWarning($i)){
            if (abs($diam)  < 4 ){                 
                    $this->printErr($depth, $diam, 1.5 , 4);  //Ошибка #4: Проверка на правильность установки наколки    
                    $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-1.5', $this->arrStr[$i]); // новая глубина
                    $this->arrStr[$i] = str_replace('#1002='.$this->findVal($this->arrStr[$i],"#1002"), '#1002=4', $this->arrStr[$i]); // новый диаметр
                    $this->arrStr[$i] = str_replace('#1001='.$this->findVal($this->arrStr[$i],"#1001"), '#1001=1', $this->arrStr[$i]); // новый тип сверления - сквозное
                    $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);// комментарий 
                    return; 
            } 
            if (($this->DS-3) < abs($depth) && abs($depth) < $this->DS ){ 
                    $this->printErr($depth, $diam, ($this->DS-3), 2);  //Ошибка #2: Проверка на максимальную глубину сверления в пласть детали    
                    $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS-3), $this->arrStr[$i]);
                    $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);
                    return; 
            } 

            if (abs($depth) >= $this->DS && abs($depth) < ($this->DS+4)) { 
                    $this->printErr($depth, $diam, ($this->DS+4), 3); //Ошибка #3: Проверка на чистовой выход сквозного сверления    
                    $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS+4), $this->arrStr[$i]);
                    $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);
                    return; 
            } 

            if (abs($depth) > ($this->DS+4)){ 
                    $this->printErr($depth, $diam, ($this->DS+4), 3);  //Ошибка #3: Проверка на чистовой выход сквозного сверления     
                    $this->arrStr[$i] = str_replace('#3='.$depth, '#3=-'.($this->DS+4), $this->arrStr[$i]);
                    $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);
                    return; 
            } 


        // }// printWarning   

    }

    // проверка на вход/выход пилы
    private function checkSaw($xi,$xf,$i){ 

        if ($xi == 0 &&  $xf == $this->DL){   
            // #8510=-50      Координата X начальной точки
            // #8517=2387+50  Координата X конечной точки                 
            $this->printErrSaw(5);  //Ошибка #5: Проверка на вход/выход пилы   
            $this->arrStr[$i] = str_replace('#8510=0', '#8510=-50', $this->arrStr[$i]); // новый вход
            $this->arrStr[$i] = str_replace('#8517='.$this->DL, '#8517=l+50', $this->arrStr[$i]); // новый выход           
            $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);// комментарий 
            return; 
        } 
        if ( $xi == $this->DL && $xf == 0 ){   
            // #8510=-50      Координата X начальной точки
            // #8517=2387+50  Координата X конечной точки                 
            $this->printErrSaw(5);  //Ошибка #5: Проверка на вход/выход пилы   
            $this->arrStr[$i] = str_replace('#8510='.$this->DL, '#8510=l+50', $this->arrStr[$i]); // новый вход
            $this->arrStr[$i] = str_replace('#8517=0', '#8517=-50', $this->arrStr[$i]); // новый выход           
            $this->arrStr[$i] = substr_replace($this->arrStr[$i], 'W$=changed   ', strpos($this->arrStr[$i], '#', 2), 0);// комментарий 
            return; 
        } 

    }

    private function printErr($depth, $diam, $edit, $numerr){ 
        $chdiam="";
        if ($numerr == 4){$chdiam='; &Oslash 4';}
        $this->err.= "Поверхность ".substr($this->currentBlock, -2,1) 
            .", стр. ". $this->currentRow 
            ." => &Oslash; ".$diam."; Z ".$depth
            ." &mdash; <span class='numerr' data-tooltip='$numerr'>{Ошибка #".$numerr."}</span> исправлено: Z -". $edit . $chdiam ." <span id='ok'>&#9745;</span> <br>";
    }

    private function printErrSaw($numerr){
        $this->err.= "Поверхность 1"
            .", стр. ". $this->currentRow            
            ."<span class='numerr' data-tooltip='$numerr'>{Ошибка #".$numerr."}</span> исправлено: Вход  -50; Выход  + 50 <span id='ok'>&#9745;</span> <br>";
    }

    private function printWarning($diam, $i){  

        $x=$this->findVal($this->arrStr[$i],"#1"); //значение по х
        $y=$this->findVal($this->arrStr[$i],"#2"); //значение по н
        $m = 7; // минимальный отступ

        if ($x < $m || $x > ($this->DL - $m) || $y < $m || $y > ($this->DH - $m)){
            $numerr="1";
           $this->warning.= "Поверхность ".substr($this->currentBlock, -2,1) 
           .", стр. ". $this->currentRow 
           ."<span class='numerr warning' data-tooltip='w".$numerr."'>{Предупреждение #".$numerr."} &Oslash; ".$diam."; X ".$x."; Y ".$y." </span><span id='warning'> &#9888;</span> <br>"; 
        //    return true;
        }
        if ($diam >= 4 ){
            // Массив существующих инструментов W#81 - диаметр сверла: #1002=8  и тип: #1001=1 сквозное/глухое  1/0
            $in=$diam.':'.$this->findVal($this->arrStr[$i],"#1001");
          if(!in_array($in, $this->arrToolsW81Side1)) {

            $numerr="2";
            if ($this->findVal($this->arrStr[$i],"#1001")=== "0" ) {$through=' глухое ';}else{$through=' сквозное '; } 
            $this->warning.= "Поверхность ".substr($this->currentBlock, -2,1) 
            .", стр. ". $this->currentRow 
            ."<span class='numerr warning' data-tooltip='w".$numerr."'>{Предупреждение #".$numerr."} &Oslash; ".$diam." -".$through."; Нет такого инструмента </span><span id='warning'> &#9888;</span> <br>"; 

          }
        }
        
        
        // return false;
    }


    public function correctionRecord(){ 
        // $correct_folder= "correct1";// сделать свойством

        $dir = "uploads/correct".$this->rand_folder ."/"; // Например /var/www/localhost/public
        // $dir = "uploads/correct/"; // Например /var/www/localhost/public
        if (!file_exists($dir)) { 
            mkdir($dir, 0777, true);
        }

        // file_put_contents($dir.$this->nameFile() , implode("\n", $this->arrStr ));
        file_put_contents($dir.$this->nameFile() , implode("", $this->arrStr ));
    }

}// end class

?>