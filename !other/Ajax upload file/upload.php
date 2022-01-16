<?php
// Разрешенные расширения файлов.
$allow = array('png','jpeg','jpg','xls','xlsx');

 
// Запрещенные расширения файлов.
$deny = array(
	'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 
	'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 
	'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
);
// $parts = pathinfo($_FILES['file']['name']);
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'];
    }
    else {

        $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
        $name = mb_eregi_replace($pattern, '-', $_FILES['file']['name']);
        $name = mb_ereg_replace('[-]+', '-', $name);
        $parts = pathinfo($name);
        $extension = strtolower($parts['extension']);
        if (empty($name) || empty($parts['extension'])) {
            echo 'Недопустимый тип файла err#1';
        
        } elseif (!empty($allow) && !in_array($extension, $allow)) {
            echo  'Недопустимый тип файла err#2';
            
        } elseif (!empty($deny) && in_array($extension, $deny)) {
            echo 'Недопустимый тип файла err#3';

        } else {
            // Перемещаем файл в директорию.
        // $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
        $newfile ='uploads/' . "my_new_filename.".$extension;
        move_uploaded_file($_FILES['file']['tmp_name'],$newfile );
            echo "ok -> ".$newfile;
        }
    }

// $uploaddir = '/home/aasinua/crm.contrust.club/uploads/';
// $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);

// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 'название.' . $ext)) {
//     print "File is valid, and was successfully uploaded.";
// } else {
//     print "There some errors!";
// }

?>