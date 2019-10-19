<?php
$filename="pr-925.jpg";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" media="all" type="text/css" href="style.css" />
        <style>
      :root{ --div-height:600px;}
        .wrap {
        /*фиксируем ширину обертки*/
         width: 1310px;
         margin: 0 auto;/*центрируем ее*/
         background: #eeecec;
         height: var(--div-height);/*Задаем высоту обертки*/
        }
        .wrap > div{
            /*Высота строки +  верт. центрирования текста*/
            /* line-height: 500px; */
        }
        .bblock1 {
        float: left; /*Задаем обтекание*/
        
        font-size: 20px;
        /* background: dodgerblue; */
        /* color: white; */
        width: 40%; /*Фиксируем ширину блока*/
        /* margin-right: 10px; */
        /*Центрируем текст по горизонтали*/
        /* text-align: center;  */
        margin: 0 -10px 0 10px;
}
        .bblock2 {
        float: right; /*Задаем обтекание*/
       
        font-size: 0px;
        /* background: dodgerblue; */
        /* color: white; */
        width: 60%; /*Фиксируем ширину блока*/
        text-align: center; /*Центрируем текст по горизонтали*/
     
}
img{
    padding:10px;
    height:calc(var(--div-height) - 20px);
} 
        </style>
    </head>
    <body>
    <div class="wrap">
    <div class="row">
        <div class="bblock1">
       <? $exif = exif_read_data($filename, 'IFD0');
        echo $exif===false ? "<p>Не найдено данных заголовка.<br />\n</p>" : "<p>Изображение содержит заголовки<br />\n</p>";
        $exif = exif_read_data($filename, 0, true);
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
       ?>
        </div>
        <div class="bblock2">
        <? echo "<span><img src=\"$filename\"  alt=\"Изображение\"></span>";?>
        </div>
        <!-- <div class="bblock">ряд</div>
        <div class="bblock">из дивов</div> -->
        </div>
    </div><!--wrap -->
    
    </body>
</html>
<?
function ucs2html($str) {
    $str=trim($str); // if you are reading from file
    $len=strlen($str);
    $html='';
    for($i=0;$i<$len;$i+=2)
        $html.='&#'.hexdec(dechex(ord($str[$i+1])).
                   sprintf("%02s",dechex(ord($str[$i])))).';';
    return($html);
}
?>