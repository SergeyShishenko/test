<?php
// Classes\simplehtmldom_1_9_1\example\mdm_complect_selector.php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file
// $html = file_get_html('http://www.google.com/');
// $html = file_get_html('https://www.mdm-complect.ru/catalog/shkanty/50762/');
$html = file_get_html('https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/60124/');
// $html = file_get_html('https://hafeleshop.ru/catalog/mebelnaya-furnitura/litcevaya-furnitura/mebelnye-opory/63767900-element-regulirovki-tcokolya-stal-otcinkov/');

// find all link
// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';

// find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';


// find all span tags with class=gb1
// foreach($html->find('div.content-product-main-header') as $e)
//     echo $e->plaintext . '<br>';
//     echo $html->find('span.articles_text')[0]->plaintext . '<br>';
// find all span tags with class=gb1
$title = array();
$divproduct=$html->find('div.product-title-box');
foreach($divproduct as $e)
$title[] = trim($e->innertext);

echo "<pre>";
var_dump($title);
// echo "divproduct";
// var_dump($divproduct);
echo "</pre>";
$divval=$html->find('div.f-val');    
foreach($divval as $e){
    echo $e->innertext . '<br>';
}
// echo "<pre>";
// echo "divval";
// var_dump($divval);
// echo "</pre>";

$divtab=$html->find('div#tab01 p');    
foreach($divtab as $e){
    echo $e->innertext . '<br>';
}

// echo "<pre>";
// echo "divtab";
// var_dump($divtab); 
// echo "</pre>";   
    // echo $html->find('div.product-title-box')[0]->plaintext;
    // echo $html->find('div.product-title-box')[2]->plaintext . '_';

// content-product-main-header

// extract text from HTML
// echo $html->plaintext;
?>