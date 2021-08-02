<?php
// https://ruseller.com/lessons.php?id=1370&rub=37
// 1. Проверяем доступность определённого веб сайта
// Как узнать, доступен ли определённый веб сайт? cURL поможет ответить на данный вопрос. Данный скрипт можно использовать совместно с планировщиком для мониторинга сайта.
// Замените URL в строке 3 на тот, который вам нужен.  Скопируйте код на свою страницу, и станет известно, доступен ли указанный сайт.
// localhost\www\!other\CURL\isDomainAvailible.php
       if (isDomainAvailible('https://500stp.website'))
       {
        echo "Работает и готов отвечать на запросы!";
       }
       else
       {
        echo "Ой, сайт не доступен.";
       }

       //Возвращает true, если домен доступен
       function isDomainAvailible($domain)
       {
               //Проверка на правильность URL 
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //Инициализация curl
               $curlInit = curl_init($domain);
            //    curl_setopt($curlInit, CURLOPT_URL, $domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);


               
                curl_setopt($curlInit, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($curlInit, CURLOPT_SSL_VERIFYHOST,  2);
                // curl_setopt($curlInit, CURLOPT_FOLLOWLOCATION, 1);
                // curl_setopt($curlInit, CURLOPT_HEADER, 0);
                // curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, 1);

               //Получаем ответ
               $response = curl_exec($curlInit);

               curl_close($curlInit);

               if ($response) return true;

               return false;
       }
?>