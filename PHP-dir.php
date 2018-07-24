<?php
    $dir = ".";
        if($handle = opendir($dir))
        {

            while(false !== ($file = readdir($handle))) 
            {
                if($file != "." && $file != "..")
                {
                echo $file."<br>";
                }
            }
        }

        

         echo "---------------------<br>";

         function scanDirectories($rootDir, $allData=array()) {
            // set filenames invisible if you want
            // устанавливать имена файлов, невидимые, если хотите
            $invisibleFileNames = array(".", "..", ".htaccess", ".htpasswd", ".git", ".gitignore", ".vscode","Tools", "Tests", "Classes", "Examples", "Responsive");
            // run through content of root directory
            // запускаем содержимое корневого каталога
            $dirContent = scandir($rootDir);
            foreach($dirContent as $key => $content) {
                // filter all files not accessible
                // фильтровать все файлы, недоступные
                $path = $rootDir.'/'.$content;
                if(!in_array($content, $invisibleFileNames)) {
                    // if content is file & readable, add to array
                    // если контент является файлом и доступен для чтения, добавьте в массив
                    if(is_file($path) && is_readable($path)) {
                        // save file name with path
                        // сохранение имени файла с помощью пути
                        $allData[] = $path;
                    // if content is a directory and readable, add path and name
                    // если контент является каталогом и доступен для чтения, добавьте путь и имя
                    }elseif(is_dir($path) && is_readable($path)) {
                        // recursive callback to open new directory
                        // рекурсивный обратный вызов для открытия нового каталога
                        $allData = scanDirectories($path, $allData);
                    }
                }
            }
            return $allData;
        }
        // Поскольку print_r () форматирует вывод с помощью символов табуляции, 
        // а не с помощью HTML, чтобы в браузере увидеть вы-вод print_r (), 
        // нужно просмотреть исходный код страницы
        // print_r(scanDirectories($dir));


        $massiv = scanDirectories($dir);  
        foreach($massiv as $key => $value)
                {
                echo '['.$key.'] => ' . $value. '<br>';
                }

?>