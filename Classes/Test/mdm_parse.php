<?php
// Classes\Test\mdm_parse.php
///////////////
require_once( dirname(__DIR__) . '/DiDom/ClassAttribute.php');
require_once( dirname(__DIR__) . '/DiDom/Document.php');
require_once( dirname(__DIR__) . '/DiDom/Node.php');
require_once( dirname(__DIR__) . '/DiDom/DocumentFragment.php');
require_once( dirname(__DIR__) . '/DiDom/Element.php');
require_once( dirname(__DIR__) . '/DiDom/Encoder.php');
require_once( dirname(__DIR__) . '/DiDom/Errors.php');
require_once( dirname(__DIR__) . '/DiDom/Query.php');
require_once( dirname(__DIR__) . '/DiDom/StyleAttribute.php');
require_once( dirname(__DIR__) . '/DiDom/Exceptions/InvalidSelectorException.php');
use DiDom\ClassAttribute;
use DiDom\Document;
use DiDom\Node;
use DiDom\DocumentFragment;
use DiDom\Element;
use DiDom\Encoder;
use DiDom\Errors;
use DiDom\Query;
use DiDom\StyleAttribute;
use DiDom\Exceptions\InvalidSelectorException;
//////////////



$document = new Document('https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/60124/', true);

$posts = $document->find('.product-title-box');

foreach($posts as $post) {
    echo $post->text(), "\n";
}

// $arr=[];
// foreach ($hentry as $el) {
//   $pq = pq($el)->find('h1')->text(); // Это аналог $ в jQuery
//   $pq2 = pq($el)->find('p')->text(); // Это аналог $ в jQuery
// }
// $hentry = $document->find('div#tab01');
// foreach ($hentry as $el) { 
//   $pq3 = pq($el)->find('p:first')->text(); // Это аналог $ в jQuery
// }
// $hentry = $document->find('div.f-val');
// $pq4 = pq($hentry)->find('span[itemprop="brand"]')->html(); // Это аналог $ в jQuery

// echo $pq;
// echo '<br>';
// echo $pq2;
// echo '<br>';
// echo $pq3;
// echo '<br>';
// echo $pq4;