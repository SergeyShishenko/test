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


$url='https://hafeleshop.ru/catalog/mebelnaya-furnitura/litcevaya-furnitura/mebelnye-opory/63767900-element-regulirovki-tcokolya-stal-otcinkov/';
// $url='https://www.mdm-complect.ru/catalog/opory-kolesnye/13006/';
// $document = new Document('https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/60124/', true);
$pq5=parse_url($url)['host'];
$document = new Document($url, true);

switch (true) {
    case (strpos($pq5, 'hafele')!== false):
        echo "HAFELE", "<br>";
        
        break;
    case (strpos($pq5, 'mdm-complect')!== false):
        echo "МДМ-КОМПЛЕКТ", "<br>";
        $posts = $document->find('.product-title-box h1' );
// var_dump($posts[0]);
        if (!is_null($posts[0])){
        $pq=$posts[0]->text();// наименование  
        }
        $posts = $document->find('.product-title-box p' );

        if (!is_null($posts[0])){
            $pq2=str_replace("Артикул: ", "", $posts[0]->text());// артикул
        }

        $posts = $document->first('#tab01 p' );
        // echo $posts, "<br>";
        if (!is_null($posts)){
            $pq3=$posts->lastChild()->text();// материал
        }



        $n=$document->count('.f-val')-1;
        if ($n>0){
            $pq4 = $document->find('.f-val')[$n]->text();// единица измерения
        }
        break;  
        
    default: echo "Стройдвор"; break;
}
echo $pq;
echo '<br>';
echo $pq2;
echo '<br>';
echo $pq3;
echo '<br>';
echo $pq4;
echo '<br>';
echo $pq5;
echo '<br>';


