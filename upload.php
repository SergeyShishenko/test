<?php
// Название <input type="file">
$input_name = 'file';
$response = [];

// Разрешенные расширения файлов.
$allow = array('png', 'jpeg', 'jpg', 'xls', 'xlsx');
$allowIMG = array('png', 'jpeg', 'jpg');
if ($_POST['xls'] !== 'undefined' && $_POST['xls'] !== "") {
    $xlsFlag = true;
} else {
    $xlsFlag = false;
}
$imgFlag = false;


// Запрещенные расширения файлов.
$deny = array(
    'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp',
    'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html',
    'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe',
);
// $files = array($_FILES[$input_name]);
// echo var_dump($_POST[$input_name]);exit;
// echo var_dump($_FILES['file']);exit;
// echo var_dump($_POST);exit;
if (!isset($_FILES[$input_name])) {
    $response[] = ["err", 'Файлы не загружены.', null];
    // echo json_encode(["err",'Файлы не загружены.', null]);
} else {
    // Преобразуем массив $_FILES в удобный вид для перебора в foreach.
    $files = array();
    $diff = count($_FILES[$input_name]) - count($_FILES[$input_name], COUNT_RECURSIVE);
    if ($diff == 0) {
        $files = array($_FILES[$input_name]);
    } else {
        foreach ($_FILES[$input_name] as $k => $l) {
            foreach ($l as $i => $v) {
                $files[$i][$k] = $v;
            }
        }
    }



    foreach ($files as $file) {
        $error = $success = '';

        // Проверим на ошибки загрузки.
        if (!empty($file['error']) || empty($file['tmp_name'])) {
            // echo json_encode(["err", 'Не удалось загрузить файл.', null]);
            $response[] =  ["err", 'Не удалось загрузить файл.', null];
        } elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
            // echo json_encode(["err", 'Не удалось загрузить файл.', null]);
            $response[] =  ["err", 'Не удалось загрузить файл.', null];
        } else {

            // $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
            // $name = mb_eregi_replace($pattern, '-', $_FILES['file']['name']);
            // $name = mb_ereg_replace('[-]+', '-', $name);
            $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
            $name = mb_eregi_replace($pattern, '-', $file['name']);
            $name = mb_ereg_replace('[-]+', '-', $name);


            $parts = pathinfo($name);
            $extension = strtolower($parts['extension']);
            if (empty($name) || empty($parts['extension'])) {
                // echo json_encode(["err", 'Недопустимый тип файла err#1', null]);
                $response[] =  ["err", 'Недопустимый тип файла err#1', null];
            } elseif (!empty($allow) && !in_array($extension, $allow)) {
                // echo json_encode(["err", 'Недопустимый тип файла err#2', null]);
                $response[] =  ["err", 'Недопустимый тип файла err#2', null];
            } elseif (!empty($deny) && in_array($extension, $deny)) {
                // echo json_encode(["err", 'Недопустимый тип файла err#3', null]);
                $response[] =  ["err", 'Недопустимый тип файла err#3', null];
            } else {

                if ($xlsFlag) {
                    $newfile = 'uploads/' . "my_new_filename." . $extension;
                }


                if (in_array($extension, $allowIMG)) {
                    $r = +$_POST['ver'];
                    do {
                        $r += 1;
                        $newfile = "uploads/" . $_POST['pattern'] . "-v" . $r . "." . $extension;
                        // echo "rand -> " . $newfile . "\n";
                    } while (file_exists($newfile));
                    $imgFlag = true;
                }

                // Перемещаем файл в директорию. 
                if ($imgFlag || $xlsFlag) {
                    if (move_uploaded_file($file['tmp_name'], $newfile)) {
                        // удаление
                        // $delfile = 'uploads/my_new_filename-v1182837040.png';
                        // if (file_exists($delfile)) {
                        //     if (unlink($delfile)) {
                        //         echo "delete -> " . $delfile . "\n";
                        //     }
                        // }

                        // echo json_encode(["ok", $newfile, $extension]);
                        $response[] =  ["ok", $newfile, $extension];
                    }
                } else {
                    // echo json_encode(["no", "Загрузка отменена", null]);
                    $response[] =  ["no", "Загрузка отменена", null];
                }
            }
        }
    } //foreach
}
echo json_encode($response);
