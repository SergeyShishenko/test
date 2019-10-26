<?php 
// inc-goup-menu-furnitura-dlya-mebeli-shtangi.php
$path_img="./dist/filesdb/images/thumbs/";//200x200 для поиска
$path_img_composition_article="./dist/filesdb/images/pagevpi/";//100х67 для VPI
// $path_img_carousel="./dist/filesdb/images/carousel/";//800x800 и 960x640
$path_img_carousel="./dist/filesdb/images/";//800x800 и 960x640
/////////////////////////////////////
    $shtangi=[];
    $shtangi[0]=['path'=>"furnitura-dlya-mebeli-shtangi.php",
                    'id'=>"#svetilnik-shtanga",
                    'img'=> $path_img."tbsALLpetly.png",//200x200 для поиска
                    'keywords'=>"",
                    'def'=>"ШТАНГИ МЕБЕЛЬНЫЕ"];    

    $shtangi[1]=['path'=>"furnitura-dlya-mebeli-petlya-clip-top-vkladnaya.php",
                    'id'=> "#svetilnik-shtanga",
                    'img'=> $path_img."tbsvkladnaya-5000502-01-100_2.png", //200x200 для поиска
                    'keywords'=>"",
                    'articul_500STP'=>"5000502-10-302",
                    'def'=>"Светильник штанга для гардероба, под светодиодную ленту",
                    'composition_article'=>array( // таблица состава артикула
                                                    array(                            
                                                            'img'=>$path_img_composition_article."Articulvkladnaya-5000502-01-100_1.png",//100х67 для VPI
                                                            'alt'=>"Петля",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"71B9750",//артикул поставщика
                                                            'id_table'=>"23",//data-objfurnid
                                                            'href_articul'=>"https://publications.blum.com/2018/catalogue/ru/175/#zoom=z" ,//страница фурнитуры                            
                                                            'color_material'=>"Металл",//цвет/материал
                                                            'def'=>"пeтля вкладная CLIP top BLUMOTION"  //описание                         
                                                            ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."Articulvkladnaya-5000502-01-100_1.png", //100х67 для VPI
                                                            'alt'=>"Петля",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"71B9750",//артикул поставщика
                                                            'id_table'=>"23",//data-objfurnid
                                                            'href_articul'=>"https://publications.blum.com/2018/catalogue/ru/175/#zoom=z" ,//страница фурнитуры                            
                                                            'color_material'=>"Металл",//цвет/материал
                                                            'def'=>"пeтля вкладная CLIP top BLUMOTION"  //описание                         
                                                            )
                                            
                                                ),// состав артикула    

                    'instrukciya_carousel'=>array( // инструкция
                                                    array(                            
                                                            'img'=>$path_img_carousel."vkladnaya-5000502-01-100_2.png",//data-image, src, data-src  800x800 и 960x640
                                                            'alt'=>"Петля",
                                                            'title'=>"Петля в сборе"// data-title
                                                            )
                                                       
                                            
                                                )// инструкция               
                  
                    
                ];

    $shtangi[2]=['path'=>"furnitura-dlya-mebeli-petlya-clip-top-nakladnaya.php",
                    'id'=> "#petlya-nakladnaya",
                    'img'=> $path_img."nakladnaya-5000502-01-101_2.png",
                    'keywords'=>"",
                    'def'=>"5000502-01-101 петля накладная"];                
                
    $shtangi[3]=['path'=>"furnitura-dlya-mebeli-petlya-clip-top-polunakladnaya.php",
                    'id'=> "#petlya-polunakladnaya",
                    'img'=> $path_img."tbspolunakladnaya-5000502-01-102_2.png",
                    'keywords'=>"",
                    'def'=>"5000502-01-102 петля полунакладная"];

    $shtangi[4]=['path'=>"furnitura-dlya-mebeli-petlya-clip-top-vkladnaya-falshfasadnaya.php",
                    'id'=> "#petlya-vkladnaya-falshfasadnaya",
                    'img'=> $path_img."tbsvkladnaya-falshfasadnaya-5000502-01-103_2.png",
                    'keywords'=>"",
                    'def'=>"5000502-01-103 петля вкладная фальшфасадная"];

    $shtangi[5]=['path'=>"furnitura-dlya-mebeli-petlya-clip-top-nakladnaya-nulevogo-vhozhdeniya.php",
                    'id'=> "#petlya-nakladnaya-nulevogo-vhozhdeniya",
                    'img'=> $path_img."tbsnakladnaya-nulevogo-vhozhdeniya-5000502-01-104_2.png",
                    'keywords'=>"",
                    'def'=>"5000502-01-104 петля накладная нулевого вхождения"];
                
    

/////////////////////////////////////

