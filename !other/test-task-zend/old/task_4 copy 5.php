<?php

// http://www.megasoft.ru/tests/phpdeveloper/
/**
*    Написать скрипт закачивания страницы www.bills.ru, 
*   из страницы извлечь даты, заголовки, ссылки в блоке "события на долговом рынке", 
*   сохранить в таблицу bills_ru_events, имеющей такую структуру:

*   id	целое, автоинкрементарное
*   date	в формате год-месяц-день часы:минуты:секунды
*   title	строковое не более 230 символов
*   url	строковое не более 240 символов, уникальное
*   Весь код должен быть прокомментирован в стиле PHPDocumentor'а.
*/
include "classes/class_DBoutput.php";
include "classes/class_DataBase.php";
include "classes/class_ParseBills.php";
$db = class_DataBase::getDB(); // Создаём объект базы данных

$parse = new class_ParseBills("https://www.bills.ru");
 echo  "<hr>";

// $url = "https://www.bills.ru";
// $curl = curl_init($url);
// curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt ($curl, CURLOPT_HEADER, false);
// $page = curl_exec($curl);
// curl_close($curl);

/** 
*$news=explode('<!--Блок новостей-->', $parse->getPage(), -1)[1];
*$news=explode('<!--Блок новостей END-->', $news, -1)[0];
*   
*preg_match_all('|<tr[^>]+?class\s*?=\s*?["\']bizon_api_news_row["\'][^>]*?>(.+?)<\/tr>|su', $news, $res, PREG_PATTERN_ORDER);
*/

foreach ($parse->getNews() as $val) {
    preg_match_all('|([^\s].+?)<a[^>]+?href\s*?=\s*?["\'](.+?)["\'][^>]*?>(.+?)<\/a>|su', $val, $dat, PREG_PATTERN_ORDER);
        
    // echo "<pre>";
    // var_dump( $dat);
    // echo "</pre>";
    echo $dat[1][0];//дата
    echo "<br>";
    echo $dat[2][0];//ссылка
    echo "<br>";
    echo $dat[3][0];//заголовок
    echo "<hr>" ;
}

// curl_close($curl);