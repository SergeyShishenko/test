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


// // $url = 'https://www.bills.ru/';
// $url = 'https://yandex.ru';
// $ci = curl_init($url);
// curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ci, CURLOPT_HEADER, 0);
// // $reponse = curl_exec($ci);
// curl_exec($ci);
// // var_dump($reponse) ;

// curl_close($ci);
// Access-Control-Allow-Origin

$url = "https://www.bills.ru";
// $url = 'https://500stp.website';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_HEADER, false);
   $page = curl_exec($curl);
//   echo $page;

// $decoded_result = json_decode($page);

// output it on the screen
// echo "<pre>";
//  var_dump($page);
// echo "</pre>";
// curl_exec($curl);
// header('Content-Type: image/jpeg');
// header("Access-Control-Allow-Origin: *");
// var_dump(curl_exec($curl));
// var_dump($page);
// curl_exec($curl);

// $chars = preg_split('/<table id=\"bizon_api_news_list\"*<table>/', $page, -1, PREG_SPLIT_NO_EMPTY);
// $chars = preg_split('/bizon_api_news_list/', $page, -1, PREG_SPLIT_NO_EMPTY);
// print_r($chars);
 $news=explode('Блок новостей', $page, -1)[1];
//  $news=explode('titles', $page, -1)[1];
 $news=explode('bizon_api_news_row', $news);

//  echo $news[1];
 foreach ($news as $val) {
    // if(preg_match("/(td)(.*?)(\/td)/",$val,$matches))
     var_dump($val)  ;
    
    // $tr=explode('tr', $val);
    // foreach ($tr as $val_tr) {
    //     echo $val_td."<hr>" ;
    // }

}
// Разделителями могут быть слеши, точки или дефисы
// $date = "04/30/1973";
// list($month, $day, $year) = split('[/.bizon_api_news_list]', $page);
// echo "Месяц: $month; День: $day; Год: $year<br />\n";
// var_dump($chars);
// echo $chars[2];
// if(preg_match("/text=(.*?)&/",$page,$matches))
// if(preg_match('/<table id=\"bizon_api_news_list\"(.*?)<\/table>/',$page,$matches))
// if(preg_match("/titles(.*?)titles/",$page,$matches))
// if(preg_match("/.+/",$page,$matches))
// {
//      echo $matches[1];
// //var_dump($matches);
// }


curl_close($curl);

// bizon_api_news_list  искать
?>
  
</body>

</html>