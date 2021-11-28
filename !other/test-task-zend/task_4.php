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

echo $db->cteate_table_bills_ru_events();
echo "<br>";


/**
 * Вывод на результатов в браузер
 * и добавление их в базу данных
 */
foreach ($parse->getNews() as $val) {
    echo $val['date']."<br>";
    echo $val['url']."<br>";
    echo $val['title'];
   
    if (addNews($db,$val['date'], $val['title'], $val['url'] )){
        echo "<br>Ok";
    }else{
        echo "<br>Error";
    }
    echo "<hr>";
}

/**
 * Вставка данных в таблицу
 *
 * @param class_DataBase $db
 * @param string $date_news (DATETIME - формат: YYYY-MM-DD HH:MI:SS)
 * @param string $title_news
 * @param string $url_news
 * @return void
 */
function addNews($db, $date_news,  $title_news, $url_news){
    $query ="INSERT INTO  `bills_ru_events` (`id`,`date_news`, `title_news`, `url_news`) VALUES (NULL, {?}, {?}, {?}) ";
    if  ($db->query($query, array($date_news, $title_news, $url_news))) {
        return true;
    }else{
        return false;
    }

}


  