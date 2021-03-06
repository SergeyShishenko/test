<?
// !other\IPTC\IPTC.php
// header('Content-Type: text/html; charset=utf-8');
define("IPTC_OBJECT_AEERIBUTE", "004");
define("IPTC_OBJECT_NAME", "005");
define("IPTC_EDIT_STATUS", "007");
define("IPTC_PRIORITY", "010");
define("IPTC_CATEGORY", "015");
define("IPTC_SUPPLEMENTAL_CATEGORY", "020");
define("IPTC_FIXTURE_IDENTIFIER", "022");
define("IPTC_KEYWORDS", "025");
define("IPTC_RELEASE_DATE", "030");
define("IPTC_RELEASE_TIME", "035");
define("IPTC_SPECIAL_INSTRUCTIONS", "040");
define("IPTC_REFERENCE_SERVICE", "045");
define("IPTC_REFERENCE_DATE", "047");
define("IPTC_REFERENCE_NUMBER", "050");
define("IPTC_CREATED_DATE", "055");
define("IPTC_CREATED_TIME", "060");
define("IPTC_ORIGINATING_PROGRAM", "065");
define("IPTC_PROGRAM_VERSION", "070");
define("IPTC_OBJECT_CYCLE", "075");
define("IPTC_BYLINE", "080");
define("IPTC_BYLINE_TITLE", "085");
define("IPTC_CITY", "090");
define("IPTC_PROVINCE_STATE", "095");
define("IPTC_COUNTRY_CODE", "100");
define("IPTC_COUNTRY", "101");
define("IPTC_ORIGINAL_TRANSMISSION_REFERENCE", "103");
define("IPTC_HEADLINE", "105");
define("IPTC_CREDIT", "110");
define("IPTC_SOURCE", "115");
define("IPTC_COPYRIGHT_STRING", "116");
define("IPTC_CAPTION", "120");
define("IPTC_LOCAL_CAPTION", "121");
define("IPTC_REFERENCE_SUBJECT", "12");
define("IPTC_CAPTION_SUBJECT", "122");

class IPTC
{
    var $meta = [];
    var $file = null;

    function __construct($filename)
    {
        $info = null;

        $size = getimagesize($filename, $info);

         $this->dumpinfo($filename);

        if(isset($info["APP13"])) $this->meta = iptcparse($info["APP13"]);

        $this->file = $filename;
    }

    function getValue($tag)
    {
        return isset($this->meta["2#$tag"]) ? $this->meta["2#$tag"][0] : "";
    }

    function setValue($tag, $data)
    {
        $this->meta["2#$tag"] = [$data];

        $this->write();
    }

    private function write()
    {
        $mode = 0;

        $content = iptcembed($this->binary(), $this->file, $mode);   

        $filename = $this->file;

        if(file_exists($this->file)) unlink($this->file);

        $fp = fopen($this->file, "w");
        fwrite($fp, $content);
        fclose($fp);
    }         

    private function binary()
    {
        $data = "";

        foreach(array_keys($this->meta) as $key)
        {
            $tag = str_replace("2#", "", $key);
            $data .= $this->iptc_maketag(2, $tag, $this->meta[$key][0]);
        }       

        return $data;
    }

    function iptc_maketag($rec, $data, $value)
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

    function dump()
    {
        echo "<pre>";
        print_r($this->meta);
        echo "</pre>";
    }
    function dumpinfo($filename)
    {
        // echo "<pre>";
        // print_r($info);
        // print_r($info["APP1"]);
        
        // echo "</pre>";

            //  $exif = exif_read_data('tests/test1.jpg', 'IFD0');
            // echo $exif===false ? "Не найдено данных заголовка.<br />\n" : "Изображение содержит заголовки<br />\n";

            $exif = exif_read_data($filename, 0, true);
            // echo "test2.jpg:<br />\n";
            foreach ($exif as $key => $section) {
                foreach ($section as $name => $val) {
                    echo "$key.$name: $val<br />\n";
                }
            }
    }

    #requires GD library installed
    function removeAllTags()
    {
        $this->meta = [];
        $img = imagecreatefromstring(implode(file($this->file)));
        if(file_exists($this->file)) unlink($this->file);
        imagejpeg($img, $this->file, 100);
    }
}
////////////
function ucs2html($str) {
    $str=trim($str); // if you are reading from file
    $len=strlen($str);
    $html='';
    for($i=0;$i<$len;$i+=2)
        $html.='&#'.hexdec(dechex(ord($str[$i+1])).
                   sprintf("%02s",dechex(ord($str[$i])))).';';
    return($html);
}
///////////////
$file = "photo.jpg";
$objIPTC = new IPTC($file);

//set title 
// iconv("UTF-8", "ISO-8859-1//TRANSLIT", "Запись в картинку");
// $objIPTC->setValue(IPTC_HEADLINE, ucs2html("Запись в картинку"));
// $objIPTC->setValue(IPTC_HEADLINE, iconv("UTF-8","UTF-8",  "Запись в картинку"));


// $objIPTC->setValue(IPTC_COPYRIGHT_STRING, iconv("UTF-8","UTF-8",  "Авторские права"));
// $objIPTC->setValue(IPTC_BYLINE, iconv("UTF-8","UTF-8",  "Шишенко"));
// $objIPTC->setValue("045", iconv("UTF-8","UTF-8",  "IPTC_OBJECT_AEERIBUTE"));
// $objIPTC->setValue(IPTC_KEYWORDS,iconv("UTF-8","UTF-8",  "Теги"));


$objIPTC->setValue(IPTC_COPYRIGHT_STRING, "IPTC_COPYRIGHT_STRING Авторские права");
$objIPTC->setValue(IPTC_BYLINE,  "IPTC_BYLINE Шишенко");
$objIPTC->setValue("044", "IPTC_OBJECT_AEERIBUTE");
$objIPTC->setValue(IPTC_KEYWORDS, "IPTC_KEYWORDS Теги");

//set description
// $objIPTC->setValue(IPTC_CAPTION, "Some words describing what can be seen in this picture.");
$text="Карниз №1";
// echo mb_detect_encoding($text) . "<br>";
$convertedText = mb_convert_encoding($text, 'utf-8', mb_detect_encoding($text));
$objIPTC->setValue(IPTC_CAPTION,  $convertedText);
$objIPTC->dump();

$text = $objIPTC->getValue(IPTC_CAPTION);
echo $text . "<br>";




echo 'Исходная строка        : ', $text, "<br>";
echo 'С добавлением TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text),"<br>";
echo 'С добавлением IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), "<br>";
echo 'Обычное преобразование : ', iconv("UTF-8", "ISO-8859-1", $text), "<br>";
?>