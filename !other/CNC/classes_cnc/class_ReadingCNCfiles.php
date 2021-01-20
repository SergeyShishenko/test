<?php 

class class_ReadingCNCfiles
{
    private $arrNameFile ;
    private $arrFile ;
    private $folderCNC ;

    public function __construct($folderCNC) {
        $this->folderCNC = $folderCNC;
        if (file_exists($folderCNC)) {
        $this->arrNameFile=scandir($folderCNC);
       
        array_shift($this->arrNameFile);// удаление  '.'
        array_shift($this->arrNameFile);// удаление  '..'
            
        }else{
            echo "Директория не найдена<br>";
        }
           

    } 
    /**
     * Вывод всех имен файлов 
     *
     * @return void
     */
    public function output(){
        for ($i=0; $i < count($this->arrNameFile); $i++) { 
            echo $this->folderCNC."/".$this->arrNameFile[$i]."<br>";

        }
    }
    private function addObj(){
        for ($i=0; $i < count($this->arrNameFile); $i++) { 
            $this->arrFile[$i]=$this->arrNameFile[$i];

        }
    }


    public function getArr(){

        return $this->arrNameFile;
    }
}

?>