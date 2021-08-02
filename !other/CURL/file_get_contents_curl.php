<?php
// https://ruseller.com/lessons.php?id=1370&rub=37
// localhost\www\!other\CURL\file_get_contents_curl.php

// 2. Замена cURL для функции file_get_contents()
// Функция file_get_contents() очень полезная, но на многих хостингах она отключена. С помощью cURL можно написать функцию, которая будет работать в точности как file_get_contents().

       function file_get_contents_curl($url) {
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Устанавливаем параметр, чтобы curl возвращал данные, вместо того, чтобы выводить их в браузер.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); 
        curl_setopt($ch, CURLOPT_URL, $url);
    
        $data = curl_exec($ch);
        curl_close($ch);
    
        return $data;
    }

    // var_dump(file_get_contents_curl('https://500stp.website'));//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // file_get_contents_curl('https://500stp.website');
 
?>