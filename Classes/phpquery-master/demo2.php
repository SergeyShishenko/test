<?php
require('phpQuery/phpQuery.php');

$habrablog = file_get_contents('https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/60124/');
  
$document = phpQuery::newDocument($habrablog);

$hentry = $document->find('div.product-title-box');
$arr=[];
foreach ($hentry as $el) {
  $pq = pq($el)->find('h1')->text(); // Это аналог $ в jQuery
  $pq2 = pq($el)->find('p')->text(); // Это аналог $ в jQuery
//   $pq = $pq->find('h1')->text(); // меняем атрибуты найденого элемента
//   $pq->find('div.entry-info')->remove(); // удаляем ненужный элемент
//   $tags = $pq->find('ul.tags > li > a');
//   $tags->append(': ')->prepend(' :'); // добавляем двоеточия по бокам
//   $pq->find('div.content')->prepend('<br />')->prepend($tags); // добавляем контент в начало найденого элемента
}

// echo $hentry;
// var_dump($pq);
echo $pq;
echo '<br>';
echo $pq2;