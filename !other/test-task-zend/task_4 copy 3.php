<!DOCTYPE html>
<!-- http://www.megasoft.ru/tests/phpdeveloper/ -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_4</title>


</head>

<body>
    <?php
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
 
?>
    <?php


$url = "https://www.bills.ru";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_HEADER, false);
   $page = curl_exec($curl);



 $news=explode('<!--Блок новостей-->', $page, -1)[1];
 $news=explode('<!--Блок новостей END-->', $news, -1)[0];

//    echo $news;
  
   preg_match_all('/<tr[^>]+?class\s*?=\s*?["\']bizon_api_news_row["\'][^>]*?>(.+?)<\/tr>/su', $news, $res, PREG_PATTERN_ORDER);

 foreach ($res[1] as $val) {
    
    echo "<hr>" ;
   
    preg_match_all('/([^\s].+?)<a[^>]+?href\s*?=\s*?["\'](.+?)["\'][^>]*?>(.+?)<\/a>/su', $val, $dat);
    // echo "<pre>";
    //    var_dump( $dat);
    //    echo "</pre>";
     echo $dat[1][0];
     echo "<br>";
     echo $dat[2][0];
     echo "<br>";
     echo $dat[3][0];


}


curl_close($curl);

// bizon_api_news_list  искать
?>
  
</body>

</html>