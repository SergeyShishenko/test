<?php 
// inc-goup-menu-furnitura-dlya-mebeli-shtangi.php
$path_img="./dist/filesdb/images/thumbs/shtangi/";//200x200 для поиска
$path_img_composition_article="./dist/filesdb/images/pagevpi/shtangi/";//100х67 для VPI
$path_img_carousel="./dist/filesdb/images/carousel/shtangi/";//800x800 и 960x640 или 2х3(6х4)

/////////////////////////////////////
$shtangi=[];
$shtangi[0]=['path'=>"furnitura-dlya-mebeli-shtangi.php?node=shtangi_1",
                'id'=>"#svetilnik-shtanga",
                'img'=> $path_img."tbsshtangi.png",//200x200 для поиска
                'keywords'=>"",
                'def'=>"ШТАНГИ МЕБЕЛЬНЫЕ"];    

$shtangi[1]=['path'=>"furnitura-dlya-mebeli-shtangi.php?node=shtangi_1",
                'id'=> "#svetilnik-shtanga",
                'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
                'keywords'=>"",
                'def'=>"Светильник штанга для гардероба, под светодиодную ленту, 2500 мм",  //описание для меню
                
                'composition_article'=>array( 
                                                array( // таблица состава артикула
                                                array(   
                                                        'articul_500STP'=>"", //артикул 500СТП
                                                        'id_table'=>"",//data-objfurnid
                                                        'def'=>"Светильник штанга для гардероба, под светодиодную ленту, 2500 мм"  //описание                         
                                                        ),
                                                array(                            
                                                        'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI                                                        
                                                        'count'=> 1,// количество
                                                        'supplier_articul'=>"833.72.790",//артикул поставщика
                                                        'id_table'=>"129",//data-objfurnid
                                                        'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//Cсылка на страницу фурнитуры                            
                                                        'color_material'=>"алюминий",//цвет/материал
                                                        'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                                        ),
                                                array(                            
                                                        'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI                                                       
                                                        'count'=> 2,// количество
                                                        'supplier_articul'=>"803.25.950",//артикул поставщика
                                                        'id_table'=>"130",//data-objfurnid
                                                        'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-shtangi-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                        'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                        'def'=>"Держатель овальной штанги"  //описание                         
                                                         ),
                                                array(                            
                                                        'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                        'count'=> 1,// количество
                                                        'supplier_articul'=>"802.07.910",//артикул поставщика
                                                        'id_table'=>"131",//data-objfurnid
                                                        'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-shtangi-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                        'color_material'=>"алюминий",//цвет/материал
                                                        'def'=>"Держатель средний для овальной штанги"  //описание                         
                                                        )
                                        
                                                 )// состав артикула  
                                        ),// массив артикулов 
                //характеристики 
                'harakteristiki_def'=>" <p>
                                        <ul class='stat' style='margin-top: 0px;'>
                                                <li><b>Светильник штанга для гардероба</b></li>
                                                <li>Материал: алюминий.</li> 
                                                <li>Цвет: серебристый.</li>
                                                <li>Длина: 2500 мм.</li>
                                                <li>Размер в сечении: 30 х 15 мм.</li> 
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
$shtangi[2]=['path'=>"furnitura-dlya-mebeli-shtangi.php?node=shtangi_2",
                'id'=> "#profil-shtanga",
                'img'=> $path_img."tbsHW_012_1930_PR-1.png", //200x200 для поиска
                'keywords'=>"",
                'def'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий",  //описание для меню
                
                'composition_article'=>array( 
                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"", //артикул 500СТП
                                                                'id_table'=>"",//data-objfurnid
                                                                'def'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulHW_012_1930_PR-1.png",//100х67 для VPI                                                               
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"HW.012.1930.PR",//артикул поставщика
                                                                'id_table'=>"132",//data-objfurnid
                                                                'href_articul'=>"https://makmart.ru/WItem/12429/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"алюминий",//цвет/материал
                                                                'def'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulHW_012_1930_H1-1.png", //100х67 для VPI                                                            
                                                                'count'=> 2,// количество
                                                                'supplier_articul'=>"HW.012.1930.H1",//артикул поставщика
                                                                'id_table'=>"133",//data-objfurnid
                                                                'href_articul'=>"https://makmart.ru/WItem/12430/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"пластик / серый",//цвет/материал
                                                                'def'=>"Штангодержатель для профиль-штанги 1930, цвет серый"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulHW_012_1930_C1-1.png", //100х67 для VPI                                                               
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"HW.012.1930.C1",//артикул поставщика
                                                                'id_table'=>"134",//data-objfurnid
                                                                'href_articul'=>"https://makmart.ru/WItem/12428/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"пластик / серый",//цвет/материал
                                                                'def'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulHW_012_1707_TR.png", //100х67 для VPI                                                                
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"HW.012.1707.TR",//артикул поставщика
                                                                'id_table'=>"135",//data-objfurnid
                                                                'href_articul'=>"https://makmart.ru/WItem/8625/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"Транспарент",//цвет/материал
                                                                'def'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка транспарент"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulHW_012_1707_FR.png", //100х67 для VPI                                                               
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"HW.012.1707.FR",//артикул поставщика
                                                                'id_table'=>"136",//data-objfurnid
                                                                'href_articul'=>"https://makmart.ru/WItem/8626/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"Матовый",//цвет/материал
                                                                'def'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка матовый"  //описание                         
                                                        )
                                                
                                                )// состав артикула  
                                         ),// массив артикулов 
                //характеристики 
                'harakteristiki_def'=>" <p>
                                        <ul class='stat' style='margin-top: 0px;'>
                                                <li><b>Светильник штанга для гардероба</b></li>
                                                <li>Материал: Алюминий.</li> 
                                                <li>Цвет: Алюминий.</li>
                                                <li>Длина: 2000 мм.</li>
                                                <li>Размер в сечении: 30 х 19 мм. </li>                                                   
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
$shtangi[3]=['path'=>"furnitura-dlya-mebeli-shtangi.php?node=shtangi_3",
                        'id'=> "#ovalnaya-shtanga",
                        'img'=> $path_img."tbsTA02STCR-1.png", //200x200 для поиска
                        'keywords'=>"",
                        'def'=>"Штанга овальная 15х30, хром, L-3000",  //описание  для меню
                        
                        'composition_article'=>array(  
                                                        array(  // таблица состава артикула
                                                                array(   
                                                                        'articul_500STP'=>"", //артикул 500СТП
                                                                        'id_table'=>"",//data-objfurnid
                                                                        'def'=>"Штанга овальная 15х30, хром, L-3000"  //описание                         
                                                                        ),
                                                                
                                                                array(                            
                                                                        'img'=>$path_img_composition_article."ArticulTA02STCR-1.png",//100х67 для VPI                                                                        
                                                                        'count'=> 1,// количество
                                                                        'supplier_articul'=>"TA02STCR",//артикул поставщика
                                                                        'id_table'=>"137",//data-objfurnid
                                                                        'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/12605/" ,//Cсылка на страницу фурнитуры                            
                                                                        'color_material'=>"хром",//цвет/материал
                                                                        'def'=>"Штанга овальная 15х30, хром, L-3000"  //описание                         
                                                                        ),
                                                                        array(                            
                                                                        'img'=>$path_img_composition_article."ArticulRT03ZNL-1.png", //100х67 для VPI                                                                    
                                                                        'count'=> 2,// количество
                                                                        'supplier_articul'=>"RT03ZNL",//артикул поставщика
                                                                        'id_table'=>"138",//data-objfurnid
                                                                        'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/12587/" ,//Cсылка на страницу фурнитуры                            
                                                                        'color_material'=>"хром",//цвет/материал
                                                                        'def'=>"Штангодержатель для овальной штанги"  //описание                         
                                                                        ),
                                                                        array(                            
                                                                        'img'=>$path_img_composition_article."ArticulWA0612SCR-1.png", //100х67 для VPI                                                                      
                                                                        'count'=> 1,// количество
                                                                        'supplier_articul'=>"WA0612SCR",//артикул поставщика
                                                                        'id_table'=>"139",//data-objfurnid
                                                                        'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/12606/" ,//Cсылка на страницу фурнитуры                            
                                                                        'color_material'=>"хром",//цвет/материал
                                                                        'def'=>"Штангодержатели для овальной штанги, хром, крепление к боковине и к полке (прав.+лев.)"  //описание                         
                                                                        ),
                                                                        array(                            
                                                                        'img'=>$path_img_composition_article."ArticulWA0612CCR.png", //100х67 для VPI                                                                     
                                                                        'count'=> 1,// количество
                                                                        'supplier_articul'=>"WA0612CCR",//артикул поставщика
                                                                        'id_table'=>"140",//data-objfurnid
                                                                        'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/12607/" ,//Cсылка на страницу фурнитуры                            
                                                                        'color_material'=>"хром",//цвет/материал
                                                                        'def'=>"Штангодержатель для овальной штанги, центральный, хром, крепление к полке"  //описание                         
                                                                        ),
                                                                        array(                            
                                                                        'img'=>$path_img_composition_article."Articul7030CR-1.png", //100х67 для VPI                                                                     
                                                                        'count'=> 2,// количество
                                                                        'supplier_articul'=>"7030CR",//артикул поставщика
                                                                        'id_table'=>"141",//data-objfurnid
                                                                        'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/12603/" ,//Cсылка на страницу фурнитуры                            
                                                                        'color_material'=>"хром",//цвет/материал
                                                                        'def'=>"Заглушка для овальной штанги, хром"  //описание                         
                                                                        )
                                                        
                                                                )// состав артикула  
                                                ),// массив артикулов 
                        //характеристики 
                        'harakteristiki_def'=>" <p>
                                                        <ul class='stat' style='margin-top: 0px;'>
                                                        <li><b>Штанга овальная</b></li>
                                                        <li><b>ГЛУБИНА ШКАФА,ММ: свыше 500.</b></li> 
                                                        <li>Цвет: Хром.</li>
                                                        <li>Длина: 3000 мм.</li>
                                                        <li>Размер в сечении: 30 х 15 мм.</li>                                                    
                                                        <li>Производитель: PULSE (Китай)</li>                                                                                                                                                                                
                                                                                                                                                                                        
                                                        </ul>
                                                </p>", 
                        //инструкции                         
                        'instrukciya_def'=>"<h4 >Проектирование</h3>
                                        <!-- <h5 >Лента светодиодная, источники питания и коннекторы, пожалуйста, отдельно.</h5>-->
                                                ", 
                        'instrukciya_carousel'=>array( // инструкция
                                    array(                            
                                            'img'=>$path_img_carousel."TA02STCR-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."TA02STCR-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."RT03ZNL-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."RT03ZNL-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-штанга 1930 для LED подсветки, L=2000 мм, отделка алюминий"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."WA0612SCR-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Штангодержатель для профиль-штанги 1930, цвет серый"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."WA0612SCR-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Штангодержатель для профиль-штанги 1930, цвет серый"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."WA0612SCR-3.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."WA0612CCR.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Заглушка с отверстием для профиль-штанги 1930, цвет серый"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."7030CR-1.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка транспарент"// data-title, alt
                                    ),
                                    array(                            
                                            'img'=>$path_img_carousel."7030CR-2.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                            'title'=>"Профиль-рассеиватель 1707 для LED подсветки, L=2000мм, отделка матовый"// data-title, alt
                                            )
                                       
                            
                                )// инструкция               
  
    
];



$shtangi[4]=['path'=>"furnitura-dlya-mebeli-shtangi.php?node=shtangi_4",
                'id'=> "#kruglaya-shtanga-s-prohodnym-derzhatelem",
                'img'=> $path_img."tbsJOK-004B-CR.png", //200x200 для поиска
                'keywords'=>"Штанга труба круглая D25 мм",
                'def'=>"Труба круглая D25 мм, хром, L-2000 с проходным держателем",  //описание   для меню  

                'composition_article'=>array( 

                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"5000502-10-300", //артикул 500СТП
                                                                'id_table'=>"147",//data-objfurnid
                                                                'def'=>"Труба круглая D25 мм, хром, L-1000"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-004B-CR.png",//100х67 для VPI                                       
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"JOK.004B.CR 05",//артикул поставщика
                                                                'id_table'=>"142",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/13009/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Труба круглая D25 мм, хром, L-1000"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-015B-CR.png", //100х67 для VPI                                      
                                                                'count'=> 2,// количество
                                                                'supplier_articul'=>"JOK.015B.CR 03",//артикул поставщика
                                                                'id_table'=>"143",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/60127/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Консоль-крепление к плоскости D=25мм (зажимная шпилька)"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulUS-KB.png", //100х67 для VPI                                        
                                                                'count'=> 6,// количество
                                                                'supplier_articul'=>"US3,5 X 20 KB/1000ШТ",//артикул поставщика
                                                                'id_table'=>"144",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/samorezy/8903/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"оцинкованный",//цвет/материал
                                                                'def'=>"Саморез с потайной головкой под крест, 3.5 Х 20"  //описание                         
                                                        )
                                                
                                                
                                                ),// состав артикула 
                                                array( // таблица состава артикула
                                                        
                                                        array(   
                                                                'articul_500STP'=>"5000502-10-301", //артикул 500СТП
                                                                'id_table'=>"146",//data-objfurnid
                                                                'def'=>"Труба круглая D25 мм, хром, L-2000 с проходным держателем"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-004B-CR.png",//100х67 для VPI                                       
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"JOK.004B.CR 05",//артикул поставщика
                                                                'id_table'=>"142",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/13009/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Труба круглая D25 мм, хром, L-2000"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-015B-CR.png", //100х67 для VPI                                      
                                                                'count'=> 2,// количество
                                                                'supplier_articul'=>"JOK.015B.CR 03",//артикул поставщика
                                                                'id_table'=>"143",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/60127/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Консоль-крепление к плоскости D=25мм (зажимная шпилька)"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."Articul306.png", //100х67 для VPI                                      
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"306.CR 01",//артикул поставщика
                                                                'id_table'=>"145",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/12992/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Держатель (трубы проходной) хром"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulUS-KB.png", //100х67 для VPI                                        
                                                                'count'=> 9,// количество
                                                                'supplier_articul'=>" US3,5 X 20 KB/1000ШТ",//артикул поставщика
                                                                'id_table'=>"144",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/samorezy/8903/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"оцинкованный",//цвет/материал
                                                                'def'=>"Саморез с потайной головкой под крест, 3.5 Х 20"  //описание                         
                                                        )
                                        
                                                
                                                ),// состав артикула  
                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"", //артикул 500СТП
                                                                'id_table'=>"",//data-objfurnid
                                                                'def'=>"Комплектующие:"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-004B-CR.png",//100х67 для VPI                                       
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"JOK.004B.CR 05",//артикул поставщика
                                                                'id_table'=>"142",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/13009/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Труба круглая D25 мм, хром, L-3000"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulJOK-015B-CR.png", //100х67 для VPI                                      
                                                                'count'=> 2,// количество
                                                                'supplier_articul'=>"JOK.015B.CR 03",//артикул поставщика
                                                                'id_table'=>"143",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/shtangi/60127/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Консоль-крепление к плоскости D=25мм (зажимная шпилька)"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."Articul306.png", //100х67 для VPI                                      
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"306.CR 01",//артикул поставщика
                                                                'id_table'=>"145",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/sistema-joker-i-uno/12992/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"хром",//цвет/материал
                                                                'def'=>"Держатель (трубы проходной) хром"  //описание                         
                                                        ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."ArticulUS-KB.png", //100х67 для VPI                                        
                                                                'count'=> 9,// количество
                                                                'supplier_articul'=>" US3,5 X 20 KB/1000ШТ",//артикул поставщика
                                                                'id_table'=>"144",//data-objfurnid
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/samorezy/8903/" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"оцинкованный",//цвет/материал
                                                                'def'=>"Саморез с потайной головкой под крест, 3.5 Х 20"  //описание                         
                                                        )
                                                
                                                
                                                )// состав артикула  
                                         ),// массив артикулов 
                //характеристики 
                'harakteristiki_def'=>" <p>
                                        <ul class='stat' style='margin-top: 0px;'>
                                                <li><b>Труба круглая D25 мм с проходным держателем</b></li>
                                                <li><b>ГЛУБИНА ШКАФА,ММ: свыше 500.</b></li> 
                                                <li>Цвет: Хром.</li>
                                                <li>Длина: 3000 мм.</li>                                                                              
                                                <li>Производитель: PULSE (Китай)</li>                                                                                                                                                                                
                                                                                                                                                                        
                                        </ul>
                                        </p>", 
                //инструкции                         
                'instrukciya_def'=>"<h4 >Проектирование</h3>
                                <!-- <h5 >Лента светодиодная, источники питания и коннекторы, пожалуйста, отдельно.</h5>-->
                                ", 
                'instrukciya_carousel'=>array( // инструкция
                                array(                            
                                        'img'=>$path_img_carousel."JOK-004B-CR.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Труба круглая D25 мм, хром"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."JOK-004B_dr.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Труба круглая D25 мм, хром, толщина 0.9 мм"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."JOK-015B-CR.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Консоль-крепление к плоскости D=25мм (зажимная шпилька)"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."JOK-015B-03_dr.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Консоль-крепление к плоскости D=25мм (зажимная шпилька)"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."306.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Держатель (трубы проходной) хром"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."306-CR-01_dr.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Держатель (трубы проходной) хром"// data-title, alt
                                ),
                                array(                            
                                        'img'=>$path_img_carousel."US-KB.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                        'title'=>"Саморез с потайной головкой под крест, 3.5 Х 20"// data-title, alt
                                )                            
                                
                        
                        )// инструкция               


];



   
                
    

/////////////////////////////////////

