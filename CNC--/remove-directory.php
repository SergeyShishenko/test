<?php
$dir=$_POST['del'];

// $path='uploads/'.$dir;
delDir('uploads/'.$dir);
delDir('uploads/correct'.$dir);

function delDir($path){
  if (file_exists($path)) {
      // echo "Файл $path существует";
      removeDirectory($path);
  } else {
      echo "Папка $path не существует!<br>";
  }
    
}
function removeDirectory($dir) {
  if ($objs = glob($dir."/*")) {
    foreach($objs as $obj) {
      is_dir($obj) ? removeDirectory($obj) : unlink($obj);
    }
  }
  rmdir($dir);
  echo "Папка $dir удалена!<br>";
}

?>