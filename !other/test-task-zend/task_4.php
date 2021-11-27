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



foreach ($parse->getNews() as $val) {
    echo $val['date']."<br>";
    echo $val['link']."<br>";
    echo $val['title']."<hr>";
}

  