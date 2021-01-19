<?php 

class class_ReadingCNCfiles
{
    private $arrNameFile ;

    public function __construct($folderCNC) {
      
        if (file_exists($folderCNC)) {
        $this->arrNameFile=scandir($folderCNC);
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
        for ($i=2; $i < count($this->arrNameFile); $i++) { 
            echo $this->arrNameFile[$i]."<br>";

        }
    }

    
}

?>