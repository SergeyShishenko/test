<?php
// Classes\phpquery-master\demo2.php
require('phpQuery/phpQuery.php');

$habrablog = file_get_contents('https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/60124/');
  
$document = phpQuery::newDocument($habrablog);

$hentry = $document->find('div.product-title-box');
$arr=[];
foreach ($hentry as $el) {
  $pq = pq($el)->find('h1')->text(); // Это аналог $ в jQuery
  $pq2 = pq($el)->find('p')->text(); // Это аналог $ в jQuery
}
$hentry = $document->find('div#tab01');
foreach ($hentry as $el) { 
  $pq3 = pq($el)->find('p:first')->text(); // Это аналог $ в jQuery
}
$hentry = $document->find('div.f-val');
$pq4 = pq($hentry)->find('span[itemprop="brand"]')->html(); // Это аналог $ в jQuery
// foreach ($hentry as $el) { 
//   $pq4 = pq($el)->find('span[itemprop="brand"]')->html(); // Это аналог $ в jQuery
// }

// echo $hentry;
// var_dump($pq);
echo $pq;
echo '<br>';
echo $pq2;
echo '<br>';
echo $pq3;
echo '<br>';
echo $pq4;