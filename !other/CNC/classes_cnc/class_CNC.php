<?php
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

    private $pathfile; 



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

    

}// end class

?>