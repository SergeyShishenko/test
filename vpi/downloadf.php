<?php
// $fname = $_GET['filename'];
  
 // иначе Internet Explorer будет игнорировать Content-Disposition 
if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');
  
$file_extension = strtolower(substr(strrchr($fname,"."),1));
// echo "<br>$file_extension";
// exit;
  
if( $fname == "" )
{
          echo "ОШИБКА: УКАЖИТЕ ИМЯ ФАЙЛА.";
          exit;
} elseif ( ! file_exists( $fname ) ) // проверяем файл на существование
{
          echo "ОШИБКА: данного файла $fname не существует.";
          exit;
};
switch( $file_extension )
{
          case "pdf": $ctype="application/pdf"; break;
          case "exe": $ctype="application/octet-stream"; break;
          case "zip": $ctype="application/zip"; break;
          case "doc": $ctype="application/msword"; break;
          case "xls": $ctype="application/vnd.ms-excel"; break;
          case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
          case "mp3": $ctype="audio/mp3"; break;
          case "gif": $ctype="image/gif"; break;
          case "png": $ctype="image/png"; break;  
          case "jpeg":
          case "jpg": $ctype="image/jpg"; break;
          default: $ctype="application/force-download";
}
header("Pragma: public"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false); // нужен для Explorer
header("Content-Type: $ctype");
header('Content-Disposition: attachment; filename="downloaded.xls"' );
header("Content-Transfer-Encoding: binary");
// нужно сделать подсчет размера файла его пути
// header("Content-Length: ".filesize($fname));
readfile("$fname");
// readfile("price-01-16-2019-12-51-10.xls");


// // Будем передавать PDF
// header('Content-Type: application/pdf');

// Он будет называться downloaded.pdf
// header('Content-Disposition: attachment; filename="downloaded.pdf"');

// // Исходный PDF-файл original.pdf
// readfile('original.pdf');

exit();
?>