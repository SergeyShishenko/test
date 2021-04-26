<?php
// http://easy-code.ru/lesson/logger-php
//namespace Classes;

class Logger 
{
    //статические переменные
    public static $PATH;//папка с лог-файлами
    protected static $loggers=array();//массив с логгеров с разными файлами
 
    protected $name;//имя текущего логгера
    protected $file;//путь к файлу, с которым он работает
    protected $fp;//файловый поток
 
    public function __construct($name, $file=null){
        $this->name=$name;
        $this->file=$file;
 
        $this->open();
    }
 
    public function open(){
        if(self::$PATH==null){
            return ;
        }
 
        $this->fp=fopen($this->file==null ? self::$PATH.'/'.$this->name.'.log' : self::$PATH.'/'.$this->file,'a+');
    }
    //Функция open инициализирует наш файловый поток, если переменная $file не задана, 
    //то будет открыт файл с тем же именем, что и логгер. Конструктор будет использоваться внутри класса, 
    //непосредственно при логировании мы будем пользоваться следующей функцией
    //Эта функция возвратит нам логгер, имя которого мы указали
    public static function getLogger($name='root',$file=null){
        if(!isset(self::$loggers[$name])){
            self::$loggers[$name]=new Logger($name, $file);
        }
 
        return self::$loggers[$name];
    }
 
    public function log($message){
        if(!is_string($message)){
            $this->logPrint($message);
 
            return ;
        }
 
        $log='';
 
        $log.='['.date('D M d H:i:s Y',time()).'] ';
        if(func_num_args()>1){
            $params=func_get_args();
 
            $message=call_user_func_array('sprintf',$params);
        }
 
        $log.=$message;
        $log.="\n";
 
        $this->_write($log);
    }
 
    public function logPrint($obj){
        ob_start();
 
        print_r($obj);
 
        $ob=ob_get_clean();
        $this->log($ob);
    }
 
    protected function _write($string){
        fwrite($this->fp, $string);
 
       // echo $string;
    }
 
    public function __destruct(){
        fclose($this->fp);
    }
}//end class


// Статическая функция getLogger() возвратит логгер, который мы вызвали, далее функция log() запишет наши данные. 
// Но перед этим необходимо задать путь, где будут храниться логи. 
// Например та же папка, где и файл из которого мы вызвали логгер:
// Logger::$PATH = dirname(__FILE__);
// Logger::getLogger($name)->log($data);

?>