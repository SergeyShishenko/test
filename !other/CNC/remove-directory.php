<?php
$dir=$_POST['del'];
$path='uploads/'.$dir;
if (file_exists($path)) {
    // echo "Файл $path существует";
    removeDirectory($path);
} else {
    echo "Папка $path не существует";
}
  function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
    echo " Папка удалена!";
  }
?>