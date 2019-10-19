<?php
// F:\OPEN_SERVER\OSPanel\domains\localhost\www\admin\test_jpeg\metadata_jpeg.php
$filename="pr-925.jpg";
echo '<html>
<head>

                <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
                <STYLE TYPE="text/css" MEDIA="screen, print, projection">
                

                .parent {
                     position: relative;
                  }
                  .child {
                   /* position: absolute;*/
                    margin:auto auto;
                    width:50%;
                
                  } 
                       
                  img {
                    /* position: absolute;*/
                    flex-shrink: 0;
                    width: 100%;
                    /* height: 100%;*/
                  }
              
                </STYLE>
</head>

<body >';

echo '<div class="parent">';

echo '<div class="child">';


echo "<span><img src=\"$filename\"  alt=\"Изображение\"></span>";

// echo "<p>";
echo $filename." :<br />\n";
$exif = exif_read_data($filename, 'IFD0');

echo $exif===false ? "<p>Не найдено данных заголовка.<br />\n</p>" : "<p>Изображение содержит заголовки<br />\n</p>";



// $size = GetImageSize ("$filename",$info);
// $iptc_old = iptcparse ($info["APP1"]);

// echo "<pre>";  
// echo "<p>APP1</p>";              
// echo var_dump($iptc_old);	 
// echo "</pre>";

$exif = exif_read_data($filename, 0, true);
// echo "<pre>";  
// echo "<p>exif</p>";              
// echo var_dump($exif);	 
// echo "</pre>";
echo "<p>";
echo "<br>IFD0:<br>";
echo "Title: ".$exif['IFD0']['ImageDescription']."<br />\n";
echo "Comments: ".ucs2html($exif['IFD0']['Comments'])."<br />\n";
echo "Keywords: ".ucs2html($exif['IFD0']['Keywords'])."<br />\n";
echo "</p>";


$size = GetImageSize ("$filename",$info);
$iptc_old = iptcparse ($info["APP13"]);

// echo "<pre>";  
// echo "<p>APP13</p>";              
// echo var_dump($iptc_old);	 
// echo "</pre>";
echo "<p>";
echo "<br>APP13:<br>";
echo "Title: ".$iptc_old['2#120'][0]."<br />\n";
echo "Comments: ".$iptc_old['2#005'][0]."<br />\n";
echo "Keywords: ".$iptc_old['2#116'][0]."<br />\n";
echo "</p>";

// echo "<br>APP13:\n";
// echo "Title: ".$exif['APP13']['2#120'][0]."<br />\n";
// echo "Comments: ".ucs2html($exif['APP13']['2#005'][0])."<br />\n";
// echo "Keywords: ".ucs2html($exif['APP13']['2#116'][0])."<br />\n";

// echo "<hr>";
// $Title_prop_jpg = explode("~", $exif['IFD0']['ImageDescription']);
// echo "Имя=> " .$Title_prop_jpg[0]. "<br />\n";
// echo "Описание=> " .$Title_prop_jpg[1]. "<br />\n";
// echo "<hr>";
// mb_convert_encoding($exif['IFD0']['Comments'], "UCS-2LE", "JIS, eucjp-win, sjis-win");


// все свойства файла
// foreach ($exif as $key => $section) {
//     foreach ($section as $name => $val) {
//         echo "$key.$name: $val <br />\n";
//         echo ucs2html($val)." <br />\n";
//         // echo "$key.$name:". utf8_decode($val)." <br />\n";
//         // echo "$key.$name:". iconv('ASCII', 'UTF-8',$val)." <br />\n";
//         // echo "$key.$name:". iconv("", "UTF-8", $val)." <br />\n";
     
     
//     }
// }



// echo "<hr>";

// $size = getimagesize($filename, $info);
// echo ucs2html($info['APP1'])." <br />\n<hr>";
// echo ucs2html_2($info['APP1'])." <br />\n";
// foreach ($info as $name => $val) {
    
    // echo "<br />$name: $val <br />\n";
            // echo "<br />$name:". mb_convert_encoding($val,"UTF-8" ,"auto")." <br />\n";
            // echo ucs2html($val)." <br />\n";
            // echo ucs2html_2($val)." <br />\n";
            // echo cp1251_utf8( $val )." <br />\n";
    // echo encoding($val)." <br />\n";
    // echo "<br />$name:". utf8_decode($val)." <br />\n";
 
    
    // $iptc = iptcparse($info[$name]);
    // var_dump($val);
    
    
 
// }


// if(isset($info['APP1']))
// {


//     // foreach ($exif as $key => $section) {
//     //     foreach ($section as $name => $val) {
//     //         echo "$key.$name: $val <br />\n";
         
         
//     //     }
//     // }

//     $iptc = iptcparse($info['APP1']);
//     print_r($iptc);
//     // foreach ($info['APP1'][0] as $val) {
//     //     echo "$val <br />\n";
     
     
//     // }
//     // 
// }

function ucs2html($str) {
    $str=trim($str); // if you are reading from file
    $len=strlen($str);
    $html='';
    for($i=0;$i<$len;$i+=2)
        $html.='&#'.hexdec(dechex(ord($str[$i+1])).
                   sprintf("%02s",dechex(ord($str[$i])))).';';
    return($html);
}
function ucs2html_2($str) {
    $str=trim($str); // if you are reading from file
    $len=strlen($str);
    $html='';
    for($i=0;$i<$len;$i+=2)
        $html.='&#'.hexdec(dechex(ord($str[$i+1])).
                   sprintf("%02s",dechex(ord($str[$i])))).'('.ord($str[$i]).');';
    return($html);
}

function cp1251_utf8( $sInput )
{
    $sOutput = "";

    for ( $i = 0; $i < strlen( $sInput ); $i++ )
    {
        $iAscii = ord( $sInput[$i] );

        if ( $iAscii >= 192 && $iAscii <= 255 )
            $sOutput .=  "&#".( 1040 + ( $iAscii - 192 ) ).";";
        else if ( $iAscii == 168 )
            $sOutput .= "&#".( 1025 ).";";
        else if ( $iAscii == 184 )
            $sOutput .= "&#".( 1105 ).";";
        else
            $sOutput .= $sInput[$i];
    }
   
    return $sOutput;
}



function detectUTF8($string)
{
        return preg_match('%(?:
        [\xC2-\xDF][\x80-\xBF]        # non-overlong 2-byte
        |\xE0[\xA0-\xBF][\x80-\xBF]               # excluding overlongs
        |[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}      # straight 3-byte
        |\xED[\x80-\x9F][\x80-\xBF]               # excluding surrogates
        |\xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3
        |[\xF1-\xF3][\x80-\xBF]{3}                  # planes 4-15
        |\xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16
        )+%xs', $string);
}

// function cp1251_utf8( $sInput )
// {
//     $sOutput = "";

//     for ( $i = 0; $i < strlen( $sInput ); $i++ )
//     {
//         $iAscii = ord( $sInput[$i] );

//         if ( $iAscii >= 192 && $iAscii <= 255 )
//             $sOutput .=  "&#".( 1040 + ( $iAscii - 192 ) ).";";
//         else if ( $iAscii == 168 )
//             $sOutput .= "&#".( 1025 ).";";
//         else if ( $iAscii == 184 )
//             $sOutput .= "&#".( 1105 ).";";
//         else
//             $sOutput .= $sInput[$i];
//     }
   
//     return $sOutput;
// }

function encoding($string){
    if (function_exists('iconv')) {   
        if (@!iconv('utf-8', 'cp1251', $string)) {
            $string = iconv('cp1251', 'utf-8', $string);
        }
        return $string;
    } else {
        if (detectUTF8($string)) {
            return $string;       
        } else {
            return cp1251_utf8($string);
        }
    }
}
// echo encoding($string);
// echo "</p>";
         echo '</div>';
      echo '</div> '; 
    echo '</body>';
echo '</html>';
?>