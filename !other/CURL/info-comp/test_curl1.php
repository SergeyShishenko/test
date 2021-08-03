<?PHP
// https://info-comp.ru/obucheniest/450-php-curl.html
// localhost\www\!other\CURL\info-comp\test_curl1.php
        //Инициализирует сеанс
        $connection = curl_init();
        //Устанавливаем адрес для подключения, по умолчанию методом GET
        curl_setopt($connection, CURLOPT_URL, "http://localhost/www/!other/CURL/info-comp/test1.php?id=1");
        //Выполняем запрос
        curl_exec($connection);
        //Завершает сеанс
        curl_close($connection);
?>