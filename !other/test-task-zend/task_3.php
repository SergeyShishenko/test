<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_3</title>
</head>

<body>
    <?php
        foreach (glob("datafiles/[0-9a-z].ixt") as $filename) {
            echo basename($filename) . "<br>";
        } 

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
    ?>
</body>

</html>