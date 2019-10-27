<?php 
// inc-goup-menu-furnitura-dlya-mebeli-shtangi.php
$path_img="./dist/filesdb/images/thumbs/";//200x200 для поиска
$path_img_composition_article="./dist/filesdb/images/pagevpi/";//100х67 для VPI
$path_img_carousel="./dist/filesdb/images/carousel/";//800x800 и 960x640 или 2х3(6х4)

/////////////////////////////////////
    $shtangi=[];
    $shtangi[0]=['path'=>"furnitura-dlya-mebeli-shtangi3.php",
                    'id'=>"#svetilnik-shtanga",
                    'img'=> $path_img."tbsALLpetly.png",//200x200 для поиска
                    'keywords'=>"",
                    'def'=>"ШТАНГИ МЕБЕЛЬНЫЕ"];    

    $shtangi[1]=['path'=>"furnitura-dlya-mebeli-shtangi3.php",
                    'id'=> "#svetilnik-shtanga",
                    'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
                    'keywords'=>"",
                    'articul_500STP'=>"",
                    'def'=>"Светильник штанга для гардероба, под светодиодную ленту, 2500 мм",
                    'composition_article'=>array( // таблица состава артикула
                                                    array(                            
                                                            'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI
                                                            'alt'=>"Светильник штанга",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"833.72.790",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//страница фурнитуры                            
                                                            'color_material'=>"алюминий",//цвет/материал
                                                            'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                                            ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI
                                                            'alt'=>"Держатель",
                                                            'count'=> 2,// количество
                                                            'supplier_articul'=>"803.25.950",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-shtangi-cvet-alyuminij.html" ,//страница фурнитуры                            
                                                            'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                            'def'=>"Держатель овальной штанги"  //описание                         
                                                        ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI
                                                            'alt'=>"Держатель",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"802.07.910",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-shtangi-cvet-alyuminij.html" ,//страница фурнитуры                            
                                                            'color_material'=>"алюминий",//цвет/материал
                                                            'def'=>"Держатель средний для овальной штанги"  //описание                         
                                                            )
                                            
                                                ),// состав артикула  
                    //характеристики 
                    'harakteristiki_def'=>" <p>
                                                <ul class='stat' style='margin-top: 0px;'>
                                                    <li><b>Светильник штанга для гардероба</b></li>
                                                    <li>Материал: алюминий.</li> 
                                                    <li>Цвет: серебристый.</li>
                                                    <li>Длина: 2500 мм.</li>
                                                    <li>Размер в сечении: 30 х 15 мм.
                                                    <li>В комплекте с матовым стеклом из пластика.</li>
                                                    <li>Штанга имеет конструкцию для размещения в ней светодиодной ленты.</li>
                                                    <li>Выдвигающаяся пластмассовая лента служит для приклеивания светодиодной ленты и для изоляции алюминиевого профиля.</li>                                                                                                                                
                                                    <li>Наклонная конструкция позволяет направить световой поток под углом.</li>                                                                                                                                
                                                </ul>
                                            </p>", 
                    //инструкции                         
                    'instrukciya_def'=>"<h4 >Проектирование</h3>
                                        <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                                        ", 
                    'instrukciya_carousel'=>array( // инструкция
                                                    array(                            
                                                            'img'=>$path_img_carousel."833_72_790-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."833_72_790-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."803_25_950-3.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."803_25_950-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Вкладная конструкция"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."803_25_950-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Вкладная конструкция"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."802_07_910-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Вкладная конструкция"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."802_07_910-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Вкладная конструкция"// data-title, alt
                                                            )
                                                       
                                            
                                                )// инструкция               
                  
                    
    ];
    $shtangi[2]=['path'=>"furnitura-dlya-mebeli-shtangi4.php",
                    'id'=> "#profil-shtanga",
                    'img'=> $path_img."tbsHW_012_1930_PR-1.png", //200x200 для поиска
                    'keywords'=>"",
                    'articul_500STP'=>"",
                    'def'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий",
                    'composition_article'=>array( // таблица состава артикула
                                                    array(                            
                                                            'img'=>$path_img_composition_article."ArticulHW_012_1930_PR-1.png",//100х67 для VPI
                                                            'alt'=>"Профиль-штанга",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"HW.012.1930.PR",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://makmart.ru/WItem/12429/" ,//страница фурнитуры                            
                                                            'color_material'=>"алюминий",//цвет/материал
                                                            'def'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм"  //описание                         
                                                            ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."ArticulHW_012_1930_H1-1.png", //100х67 для VPI
                                                            'alt'=>"Штангодержатель",
                                                            'count'=> 2,// количество
                                                            'supplier_articul'=>"HW.012.1930.H1",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://makmart.ru/WItem/12430/" ,//страница фурнитуры                            
                                                            'color_material'=>"пластик / серый",//цвет/материал
                                                            'def'=>"Штангодержатель для профиль-штанги 1930, цвет серый"  //описание                         
                                                        ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."ArticulHW_012_1930_C1-1.png", //100х67 для VPI
                                                            'alt'=>"Заглушка с отверстием",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"HW.012.1930.C1",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://makmart.ru/WItem/12428/" ,//страница фурнитуры                            
                                                            'color_material'=>"пластик / серый",//цвет/материал
                                                            'def'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"  //описание                         
                                                        ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."ArticulHW_012_1707_TR.png", //100х67 для VPI
                                                            'alt'=>"Профиль-рассеиватель",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"HW.012.1707.TR",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://makmart.ru/WItem/8625/" ,//страница фурнитуры                            
                                                            'color_material'=>"Транспарент",//цвет/материал
                                                            'def'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка транспарент"  //описание                         
                                                        ),
                                                        array(                            
                                                            'img'=>$path_img_composition_article."ArticulHW_012_1707_FR.png", //100х67 для VPI
                                                            'alt'=>"Профиль-рассеиватель",
                                                            'count'=> 1,// количество
                                                            'supplier_articul'=>"HW.012.1707.FR",//артикул поставщика
                                                            'id_table'=>"00",//data-objfurnid
                                                            'href_articul'=>"https://makmart.ru/WItem/8626/" ,//страница фурнитуры                            
                                                            'color_material'=>"Матовый",//цвет/материал
                                                            'def'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка матовый"  //описание                         
                                                            )
                                            
                                                ),// состав артикула  
                    //характеристики 
                    'harakteristiki_def'=>" <p>
                                                <ul class='stat' style='margin-top: 0px;'>
                                                    <li><b>Светильник штанга для гардероба</b></li>
                                                    <li>Материал: Алюминий.</li> 
                                                    <li>Цвет: Алюминий.</li>
                                                    <li>Длина: 2000 мм.</li>
                                                    <li>Размер в сечении: 30 х 19 мм.                                                   
                                                    <li>Штанга имеет конструкцию для размещения в ней светодиодной  LED ленты  шириной 8/10 мм.</li>                                                                                                                                                                                
                                                                                                                                                                                 
                                                </ul>
                                            </p>", 
                    //инструкции                         
                    'instrukciya_def'=>"<h4 >Проектирование</h3>
                                        <h5 >Лента светодиодная, источники питания и коннекторы, пожалуйста, отдельно.</h5>
                                        ", 
                    'instrukciya_carousel'=>array( // инструкция
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_PR-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_PR-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_PR-3.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_PR-4.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_H1-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Штангодержатель для профиль-штанги 1930, цвет серый"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_H1-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Штангодержатель для профиль-штанги 1930, цвет серый"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_C1-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1930_C1-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1707_TR.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка транспарент"// data-title, alt
                                                    ),
                                                    array(                            
                                                            'img'=>$path_img_carousel."HW_012_1707_FR.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                            'title'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка матовый"// data-title, alt
                                                            )
                                                       
                                            
                                                )// инструкция               
                  
                    
    ];

   
                
    

/////////////////////////////////////

