<?php
class class_CNC
{
    private $arrStr;  

    public function __construct($fileCNC) {
        $this->$arrStr=file($fileCNC);                     
    } 

   public function getStrByNum($i){
        return $this->$arrStr[$i];
    }

   public function countStr(){
        return count($this->$arrStr);
    }

    public function outputCNC(){
       
        for($i=0; $i < $this->countStr(); $i++) {
            echo "<br>";
            echo $this->getStrByNum($i);
        
         }
    }
}

?>