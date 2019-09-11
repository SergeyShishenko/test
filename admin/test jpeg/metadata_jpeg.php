<?php

echo "pr-925.jpg:<br />\n";
$exif = exif_read_data('pr-925.jpg', 'IFD0');

echo $exif===false ? "Не найдено данных заголовка.<br />\n" : "Изображение содержит заголовки<br />\n";

$exif = exif_read_data('pr-925.jpg', 0, true);
echo "pr-925.jpg:<br />\n";
echo "Comments: ".$exif['IFD0']['Comments']."<br />\n";
echo "Title: ".$exif['IFD0']['ImageDescription']."<br />\n";
// mb_convert_encoding($exif['IFD0']['Comments'], "UCS-2LE", "JIS, eucjp-win, sjis-win");
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val <br />\n";
     
     
    }
}


?>