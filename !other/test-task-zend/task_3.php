<?php

/**
* Создать скрипт, который в папке /datafiles найдет все файлы,
* имена которых состоят из цифр и букв латинского алфавита,
* имеют расширение ixt и выведет на экран имена этих файлов,
* упорядоченных по имени.
*
* Задание должно быть выполнено с использованием регулярных выражений.
* Весь код должен быть прокомментирован в стиле PHPDocumentor'а.

*/

$dir = "datafiles/";

// Открыть известный каталог и начать считывать его содержимое
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {

            if ($file != "." && $file != "..") {
                preg_match('/[a-z0-9]+\.ixt/',basename ($file),$matches);
                if ($matches[0]){
                    echo  $matches[0] . "<br>";
                } 
            }   
        }
        closedir($dh);
    }
}