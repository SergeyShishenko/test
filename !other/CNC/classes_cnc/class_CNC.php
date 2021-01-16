<?php
/**
 * CNC class
 * @param mixed $fileCNC файл CNC
 */
class class_CNC
{
    /**
	 * Массив строк файла
	 * @var array $arrStr
	 */
    private $arrStr; 
    /**
	 *Второй разделитель
	 * @var String $mod для findVal
	 */ 
    private $mod;  

    public function __construct($fileCNC) {
        $this->$arrStr=file($fileCNC);                     
    } 

    /**
     * Вывод строки по номеру
     * @return string
    */ 
    public function getStrByNum($i){
        return $this->$arrStr[$i];
    }


    /**
     * Вывод всех строк файла
     * @return String
    */
    public function outputCNC(){
       
        for($i=0; $i < count($this->$arrStr); $i++) {
            echo "<br>";
            echo $this->getStrByNum($i);
        
         }
    }
/**
     * Поиск значения параметра в строке
     * @param   Integer   $numrow   Номер проверяемой строки
     * @param   String    $key   Имя ключа
     * @param   String    $separator   Первый разделитель
     * @param   null|String    $mod   Второй разделитель
     * @return  null|Integer
    */
    public function findVal($numrow,$key,String $separator=" ",String $mod = '='){   
        $this->mod=$mod;
        $row=$this->getStrByNum($numrow);
        $arr = explode($separator, $row);
         $arr =array_map(function($p) { return explode($this->mod,$p); }, $arr);
        // if ($mod != null){


        // }
        return $arr;

    }

}// end class

?>