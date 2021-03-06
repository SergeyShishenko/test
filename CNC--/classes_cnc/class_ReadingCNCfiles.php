<?php 

class class_ReadingCNCfiles
{
    private $arrNameFile ;
    private $arrFile ;
    private $folderCNC ;
    private $rand_folder ;

    public function __construct($folderCNC) {
        $this->folderCNC = $folderCNC;
        $this->rand_folder = explode( '/', $folderCNC )[1];
        if (file_exists($folderCNC)) {
        $this->arrNameFile=scandir($folderCNC);
       
        array_shift($this->arrNameFile);// удаление  '.'
        array_shift($this->arrNameFile);// удаление  '..'
            
        }else{
            echo "Директория не найдена<br>";
        }

         $this->arrNameFile=$this->array_preg_diff($this->arrNameFile, '/[cC][sS][vV]/');  
        $this->addObj();
    } 

    private function array_preg_diff($a, $p) {
        foreach ($a as $i => $v)
            if (preg_match($p, $v))
                unset($a[$i]);
        return $a;
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
            $this->arrFile[$i]=new class_CNC( $this->folderCNC."/".$this->arrNameFile[$i],$this->rand_folder);

        }

    }


    public function getArr(){

        for ($i=0; $i < count($this->arrFile); $i++) { 
           echo  $this->arrFile[$i]->nameFile()." ........ "
           .$this->arrFile[$i]->getDL()." x "
           .$this->arrFile[$i]->getDH()." x "
           .$this->arrFile[$i]->getDS()
           ."<br>";

        }
      
    }


    public function checkAllCNC(){

        $data=array();
        $j=0;

        for ($i=0; $i < count($this->arrFile); $i++) {             
           
            $this->arrFile[$i]->checkCNC();

            if($this->arrFile[$i]->warning !=""){              
                $data[$j]['name']=$this->arrFile[$i]->nameFile();
                $data[$j]['DL']=$this->arrFile[$i]->getDL();
                $data[$j]['DH']=$this->arrFile[$i]->getDH();
                $data[$j]['DS']=$this->arrFile[$i]->getDS();
                $data[$j]['warning']= $this->arrFile[$i]->warning;
                $j++; 
            }
            if($this->arrFile[$i]->err !=""){          
                $data[$j]['name']=$this->arrFile[$i]->nameFile();
                $data[$j]['DL']=$this->arrFile[$i]->getDL();
                $data[$j]['DH']=$this->arrFile[$i]->getDH();
                $data[$j]['DS']=$this->arrFile[$i]->getDS();
                $data[$j]['err']= $this->arrFile[$i]->err;
                $j++; 
            } 
        }
        return $data; 
        // if (sizeof($data)){
        //   return $data;   
        // }else{
        //     $data[0]['name']="пусто";
        //     return $data; 
        // }
      
    }

    public function specificationAllCNC(){

        for ($i=0; $i < count($this->arrFile); $i++) {             
           
            $this->arrSpecification[$i]=$this->arrFile[$i]->getSpecification();
        } 
        return $this->arrSpecification;

    }

    
}

?>