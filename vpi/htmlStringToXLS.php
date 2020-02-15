<?php
// vpi\htmlStringToXLS.php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){
    $site = $_SERVER['DOCUMENT_ROOT'] ."/www/";
}else{
    $site = $_SERVER['DOCUMENT_ROOT'] ."/"; 
}
// echo $_SERVER['DOCUMENT_ROOT'] . '/www/index.php';
require $site . 'vendor/autoload.php';
$htmlString = '<table>
<tr>
    <td>Hello World</td>
</tr>
<tr>
    <td>Hello<br />World</td>
</tr>
<tr>
    <td>Hello<br>World</td>
</tr>
</table>';

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
$spreadsheet = $reader->loadFromString($htmlString);

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save($site . 'WRITE/write.xls'); 
echo "Done!";
// $('#data-box').html(response);
?>