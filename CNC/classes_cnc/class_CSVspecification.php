<?php
// include_once dirname(dirname(__DIR__ )). '/Classes/Logger.php';
// вызов из CNC\specificationCSV.php
    class class_CSVspecification
    {
        /**
        * Массив строк файла
        * @var Array $arrAllCSV
        */
        private $arrAllCSV = []; 
       
        private $CSV=[]; 

        /**
        * Массив изделий заказа
        * @var Array $arrProducts
        */

        private $arrProducts=[]; 

        /**
        * Номер Заказа
        * @var Int $order
        */

        private $order; 

        /**
        * @param mixed $fileCSV имя файла csv  test_numpart.csv
        */

        public function __construct($fileCSV) {  
            $data=[];
            $this->CSV=glob($fileCSV.'/*.[cC][sS][vV]')[0];  
            
            Logger::$PATH = dirname(dirname(__FILE__))."/LOGS";
            // Logger::getLogger('log_class_CNC')->log("CSV = ".$this->CSV);
            // Logger::getLogger('log_class_CNC')->log("exists()= ".$this->exists());
            // echo count($this->CSV);
            if ($this->exists()){
             // Logger::getLogger('log_class_CNC')->log("exists()= ".$this->exists());
                $row = 1;    
                if (($handle = fopen($this->CSV, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {  // строка  до 1000 символов    
                        if ($row > 1){  
                            $this->order= preg_replace('/[^ a-zа-я\d.]/ui', '',trim( $data[0]));// № Заказа 
                            $Product=preg_replace('/[^ a-zа-я\d.]/ui', '',trim($data[1]));// № Изделия
                            
                            if(count($this->arrProducts)==0){
                                $this->arrProducts[]=$Product;
                            }elseif(!in_array($Product,$this->arrProducts)){
                                $this->arrProducts[]=$Product;
                            } 
                            
                            
                            $dataR[0]=$this->order;                            
                            $dataR[1]=$Product;
                            $dataR[2]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[2])));// № СЕ/пСЕ
                            $dataR[3]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[3])));// № Детали
                            $dataR[4]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[4])));// № Длина
                            $dataR[5]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[5])));// № Ширина
                            $dataR[6]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[6])));// № Толщина

                          
                             $index=array_search($Product, $this->arrProducts);
                            //  Logger::getLogger('log_class_CNC')->log("array_search(Product, this->arrProducts) = ".$index);
                            //  Logger::getLogger('log_class_CNC')->log("count = ".count($this->arrAllCSV[$index]));
                             
                            if (count($this->arrAllCSV[$index])==0){
                                $this->arrAllCSV[$index]= array($dataR) ;
                            }else{
                               array_push( $this->arrAllCSV[$index], $dataR); 
                            }
                            // array_push( $this->arrAllCSV[0], $data);
                            // $this->arrAllCSV[array_search($Product, $this->arrProducts)]=$data;         
                        }
                          
                         $row++;
                    }
                    fclose($handle);        
                } 
            }     

        } 

        public function   getSpecification(){
            return $this->arrAllCSV;

        }  
        
        /**
        * Имя файла
        * @var String getName()
        */

        public function   getName(){
            return $this->CSV;
        }  

        /**
        * Номер заказа
        * @var Int getOrder()
        */

        public function   getOrder(){
            return $this->order;
        }  

        /**
        * Массив изделий заказа
        * @var Array $arrProducts
        */
        
        public function   getArrProducts(){
            return $this->arrProducts;

        }  
        private function   exists(){
            
            if (file_exists($this->CSV)) {
                return true;
            }  
            return false;
        }  
        
        

    }
?>