<?php
    class class_CSVspecification
    {
            /**
         * Массив строк файла
         * @var Array $arrAllCSV
         */
        private $arrAllCSV ; 
        private $CSV ; 

        /**
         * @param mixed $fileCSV имя файла csv  test_numpart.csv
         */

        public function __construct($fileCSV) {  
            
            $this->CSV=glob($fileCSV.'/*.[cC][sS][vV]')[0];      
        //    echo count($this->CSV);
           if (count($this->CSV)>0){
                $row = 1;    
                if (($handle = fopen($this->CSV, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {  // строка  до 1000 символов    
                        if ($row > 1){                
                            $data[0]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[0])));// № Заказа
                            $data[1]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[1])));// № Изделия
                            $data[2]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[2])));// № СЕ/пСЕ
                            $data[3]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[3])));// № Детали
                            $data[4]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[4])));// № Детали
                            $data[5]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[5])));// № Детали
                            $data[6]=preg_replace('/[^ a-zа-я\d.]/ui', '',trim(str_replace(",", ".", $data[6])));// № Детали
                        
                            $this->arrAllCSV[]=$data;         
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

    }
?>