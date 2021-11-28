<?php

/**
 * найдет все файлы,
 * имена которых состоят из цифр и букв латинского алфавита,
 * имеют расширение ixt и выведет на экран имена этих файлов,
 * упорядоченных по имени.
 * 
 * @method getScan()
 */

class class_ScanDir
{
    /**
     * Путь к сканируемой папке
     *
     * @var string
     */
    private $dir;

    /**
     * Массив найденных имен файлов
     *
     * @var array
     */
    private $arr=[];

    /**
     * Путь к сканируемой директории
     * Без последнего слеша "/"
     *
     * @param string $path
     */
    public function __construct($path)
    {
        $this->dir=$path."/";
        $this->scan($path);
    }

    /**
     * Сканирование директории
     *
     * @return void
     */
    private function scan(): void{
        if (is_dir($this->dir)) {
            if ($dh = opendir($this->dir)) {
                while (($file = readdir($dh)) !== false) {
        
                    if ($file != "." && $file != "..") {
                        preg_match('/[a-z0-9]+\.ixt/',basename ($file),$matches);
                        if ($matches[0]){                            
                            $this->arr[]=$matches[0];
                        } 
                    }   
                }
                closedir($dh);
            }
        }

    }

    /**
     * Вывод результатов сканирования в браузер
     *
     * @return void
     */
    public function getScan(): void{
        asort($this->arr);
        // arsort($this->arr);
        foreach ($this->arr as $val) {
            echo  $val . "<hr>";
        }

    }
}