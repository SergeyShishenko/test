<?php
/**
 * CNC class
 * @param mixed $fileCNC файл CNC
 */
class class_CNC
{
    /**
	 * Массив строк файла
	 * @var array 
	 */
    private $arrStr;  

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
 * Количество строк в файле
 * @return integer
*/
   public function countStr(){
        return count($this->$arrStr);
    }
/**
 * Вывод всех строк файла
 * @return string
*/
    public function outputCNC(){
       
        for($i=0; $i < $this->countStr(); $i++) {
            echo "<br>";
            echo $this->getStrByNum($i);
        
         }
    }
}

?>