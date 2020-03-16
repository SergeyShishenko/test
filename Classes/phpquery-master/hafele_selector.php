<?php
// Classes\simplehtmldom_1_9_1\example\hafele_selector.php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file
// $html = file_get_html('http://www.google.com/');
// $html = file_get_html('https://www.mdm-complect.ru/catalog/shkanty/50762/');
$html = file_get_html('https://hafeleshop.ru/catalog/mebelnaya-furnitura/litcevaya-furnitura/mebelnye-opory/63767900-element-regulirovki-tcokolya-stal-otcinkov/');

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
foreach($html->find('div.content-product-main-header') as $e)
    echo $e->plaintext . '<br>';
    echo $html->find('span.articles_text')[0]->plaintext . '<br>';

// content-product-main-header

// extract text from HTML
// echo $html->plaintext;
?>