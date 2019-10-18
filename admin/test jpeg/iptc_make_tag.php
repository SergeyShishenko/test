<?php
// localhost\www\admin\test jpeg\iptc_make_tag.php
// iptc_make_tag() функция от Thies C. Arntzen
function iptc_make_tag($rec, $data, $value)
{
    $length = strlen($value);
    $retval = chr(0x1C) . chr($rec) . chr($data);

    if($length < 0x8000)
    {
        $retval .= chr($length >> 8) .  chr($length & 0xFF);
    }
    else
    {
        $retval .= chr(0x80) . 
                   chr(0x04) . 
                   chr(($length >> 24) & 0xFF) . 
                   chr(($length >> 16) & 0xFF) . 
                   chr(($length >> 8) & 0xFF) . 
                   chr($length & 0xFF);
    }

    return $retval . $value;
}

// Путь к jpeg файлу
$path = 'pr-925.jpg';

// установка IPTC тэгов
$iptc = array(
    '2#120' => 'Тестовое изображение',
    '2#005' => 'Object Name',
    '2#007' => 'Edit Status',
    '2#025' => '3333',
    '2#085' => 'Byline Title',
    '2#116' => 'Шишенко Сергей'
);

// Преобразование IPTC тэгов в двоичный код
// $data = '';
// $utf8seq = chr(0x1b) . chr(0x25) . chr(0x47);
// $length = strlen($utf8seq);
// $data = chr(0x1C) . chr(1) . chr('090') . chr($length >> 8) . chr($length & 0xFF) . $utf8seq;

foreach($iptc as $tag => $string)
{
    $tag = substr($tag, 2);
    $data .= iptc_make_tag(2, $tag, $string);
}

// Встраивание IPTC данных
$content = iptcembed($data, $path);
 echo "<pre>";  
echo "<p>content</p>";              
echo var_dump($content);	 
echo "</pre>";
// запись нового изображения в файл
$fp = fopen($path, "wb");
fwrite($fp, $content);
fclose($fp);
// --- The most common IPTC Fileds
// 005 - Object Name
// 007 - Edit Status
// 010 - Priority
// 015 - Category
// 020 - Supplemental Category
// 022 - Fixture Identifier
// 025 - Keywords
// 030 - Release Date
// 035 - Release Time
// 040 - Special Instructions
// 045 - Reference Service
// 047 - Reference Date
// 050 - Reference Number
// 055 - Created Date
// 060 - Created Time
// 065 - Originating Program
// 070 - Program Version
// 075 - Object Cycle
// 080 - Byline
// 085 - Byline Title
// 090 - City
// 095 - Province State
// 100 - Country Code
// 101 - Country
// 103 - Original Transmission Reference
// 105 - Headline
// 110 - Credit
// 115 - Source
// 116 - Copyright String
// 120 - Caption
// 121 - Local Caption
?>