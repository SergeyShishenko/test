<?php 
// inc/goup/inc-goup-menu-materialy-svet.php
$path_img="./dist/filesdb/images/thumbs/svet/";//200x200 для поиска shtangi
$path_img_composition_article="./dist/filesdb/images/pagevpi/svet/";//100х67 для VPI
$path_img_carousel="./dist/filesdb/images/carousel/svet/";//800x800 и 960x640 или 2х3(6х4)
$path_page="materialy-svet.php?group=lenta&node=lenta";
$component_data="inc//ComponentData/materialy/svet/lenta/";

/////////////////////////////////////  КЛЮЧИ МАССИВА ИСПРАВИТЬ В ВЕРХНИЙ РЕГИСТР
$lenta=[];
$lenta[0]=[
        'path'=>$path_page,//node
        'id'=>"#svet",
        'img'=> $path_img."tbssvet.png",//200x200 для поиска
        'keywords'=>"",
        'def'=>"СВЕТОДИОДНАЯ ЛЕНТА"
];    

$lenta[1]=[
        'path'=>$path_page,
        'id'=> "#LED-lenta1",
        'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
        'keywords'=>"",
        'def'=>"Светодиодная лента1",  //описание для меню        
        'composition_article'=>[ 
                                [// таблица состава артикула
                                        [
                                                'articul_500STP'=>"", //артикул 500СТП
                                                'id_table'=>"",//data-objfurnid
                                                'def'=>"СВЕТОДИОДНАЯ ЛЕНТА RT 2-5000 12V COOL 8K 2X (3528, 600 LED, LUX) 120 LED НА 1М"  //описание                         
                                        ],
                                        [
                                                'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI                                                        
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"833.72.790",//артикул поставщика
                                                'id_table'=>"129",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                        ],
                                        [                  
                                                'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI                                                       
                                                'count'=> 2,// количество
                                                'supplier_articul'=>"803.25.950",//артикул поставщика
                                                'id_table'=>"130",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                'def'=>"Держатель овальной штанги"  //описание                         
                                        ],
                                        [                   
                                                'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"802.07.910",//артикул поставщика
                                                'id_table'=>"131",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Держатель средний для овальной штанги"  //описание                         
                                        ]
                        
                                ]// состав артикула  
        ],// массив артикулов 
        //характеристики 
        'harakteristiki_def'=> include $component_data.'harakteristiki_def_1.php', 
        //инструкции                         
        'instrukciya_def'=>"<h4 >Проектирование</h4>
                <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                ", 
        'instrukciya_carousel'=> [// карусель
                                        [                             
                                                'img'=>$path_img_carousel."LS-3528-IP33-4-8.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Лента"// data-title, alt
                                        ],
                                        
                                        [                           
                                                'img'=>$path_img_carousel."LS-2835-4-8_sch.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Ленту можно резать, кратность реза равна 50 мм"// data-title, alt
                                        ]                      
        ],// карусель  
        'propertiesTable'=>[ // таблица свойств
                        [
                                "Толщина ДСП (A), мм",//Sf
                                "L, мм",//Lm
                                "I, мм",//Im
                                "D, мм",//Dm
                                "Артикул",//Ar
                        ],
                        [  // массив данных 
                                [
                                        "Sf" => "1.jpg",
                                        "Lm" => "http://vk.com/id0",
                                        "Im" => "Жекі",
                                        "Dm" => "Жекі",
                                        "Ar" => "Жекі"
                                ]                   
                        ]              
        ]// таблица свойств              
];
$lenta[2]=[
        'path'=>$path_page,
        'id'=> "#LED-lenta2",
        'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
        'keywords'=>"",
        'def'=>"Светодиодная лента2",  //описание для меню        
        'composition_article'=>[ 
                                [// таблица состава артикула
                                        [
                                                'articul_500STP'=>"", //артикул 500СТП
                                                'id_table'=>"",//data-objfurnid
                                                'def'=>"СВЕТОДИОДНАЯ ЛЕНТА RT 2-5000 12V COOL 8K 2X (3528, 600 LED, LUX) 120 LED НА 1М"  //описание                         
                                        ],
                                        [
                                                'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI                                                        
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"833.72.790",//артикул поставщика
                                                'id_table'=>"129",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                        ],
                                        [                  
                                                'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI                                                       
                                                'count'=> 2,// количество
                                                'supplier_articul'=>"803.25.950",//артикул поставщика
                                                'id_table'=>"130",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                'def'=>"Держатель овальной штанги"  //описание                         
                                        ],
                                        [                   
                                                'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"802.07.910",//артикул поставщика
                                                'id_table'=>"131",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Держатель средний для овальной штанги"  //описание                         
                                        ]
                        
                                ]// состав артикула  
        ],// массив артикулов 
        //характеристики 
        'harakteristiki_def'=> include $component_data.'harakteristiki_def_1.php', 
        //инструкции                         
        'instrukciya_def'=>"<h4 >Проектирование</h4>
                <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                ", 
        'instrukciya_carousel'=> [// карусель
                                        [                             
                                                'img'=>$path_img_carousel."LS-3528-IP33-4-8.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Лента"// data-title, alt
                                        ],
                                        
                                        [                           
                                                'img'=>$path_img_carousel."LS-2835-4-8_sch.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Ленту можно резать, кратность реза равна 50 мм"// data-title, alt
                                        ]                      
        ],// карусель  
        'propertiesTable'=>[ // таблица свойств
                        [
                                "Толщина ДСП (A), мм",//Sf
                                "L, мм",//Lm
                                "I, мм",//Im
                                "D, мм",//Dm
                                "Артикул",//Ar
                        ],
                        [  // массив данных 
                                [
                                        "Sf" => "1.jpg",
                                        "Lm" => "http://vk.com/id0",
                                        "Im" => "Жекі",
                                        "Dm" => "Жекі",
                                        "Ar" => "Жекі"
                                ]                   
                        ]              
        ]// таблица свойств              
];
$lenta[3]=[
        'path'=>$path_page,
        'id'=> "#LED-lenta3",
        'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
        'keywords'=>"",
        'def'=>"Светодиодная лента3",  //описание для меню        
        'composition_article'=>[ 
                                [// таблица состава артикула
                                        [
                                                'articul_500STP'=>"", //артикул 500СТП
                                                'id_table'=>"",//data-objfurnid
                                                'def'=>"СВЕТОДИОДНАЯ ЛЕНТА RT 2-5000 12V COOL 8K 2X (3528, 600 LED, LUX) 120 LED НА 1М"  //описание                         
                                        ],
                                        [
                                                'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI                                                        
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"833.72.790",//артикул поставщика
                                                'id_table'=>"129",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                        ],
                                        [                  
                                                'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI                                                       
                                                'count'=> 2,// количество
                                                'supplier_articul'=>"803.25.950",//артикул поставщика
                                                'id_table'=>"130",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                'def'=>"Держатель овальной штанги"  //описание                         
                                        ],
                                        [                   
                                                'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"802.07.910",//артикул поставщика
                                                'id_table'=>"131",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Держатель средний для овальной штанги"  //описание                         
                                        ]
                        
                                ]// состав артикула  
        ],// массив артикулов 
        //характеристики 
        'harakteristiki_def'=> include $component_data.'harakteristiki_def_1.php', 
        //инструкции                         
        'instrukciya_def'=>"<h4 >Проектирование</h4>
                <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                ", 
        'instrukciya_carousel'=> [// карусель
                                        [                             
                                                'img'=>$path_img_carousel."LS-3528-IP33-4-8.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Лента"// data-title, alt
                                        ],
                                        
                                        [                           
                                                'img'=>$path_img_carousel."LS-2835-4-8_sch.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Ленту можно резать, кратность реза равна 50 мм"// data-title, alt
                                        ]                      
        ],// карусель  
        'propertiesTable'=>[ // таблица свойств
                        [
                                "Толщина ДСП (A), мм",//Sf
                                "L, мм",//Lm
                                "I, мм",//Im
                                "D, мм",//Dm
                                "Артикул",//Ar
                        ],
                        [  // массив данных 
                                [
                                        "Sf" => "1.jpg",
                                        "Lm" => "http://vk.com/id0",
                                        "Im" => "Жекі",
                                        "Dm" => "Жекі",
                                        "Ar" => "Жекі"
                                ]                   
                        ]              
        ]// таблица свойств              
];
$lenta[4]=[
        'path'=>$path_page,
        'id'=> "#LED-lenta4",
        'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
        'keywords'=>"",
        'def'=>"Светодиодная лента4",  //описание для меню        
        'composition_article'=>[ 
                                [// таблица состава артикула
                                        [
                                                'articul_500STP'=>"", //артикул 500СТП
                                                'id_table'=>"",//data-objfurnid
                                                'def'=>"СВЕТОДИОДНАЯ ЛЕНТА RT 2-5000 12V COOL 8K 2X (3528, 600 LED, LUX) 120 LED НА 1М"  //описание                         
                                        ],
                                        [
                                                'img'=>$path_img_composition_article."Articul833_72_790-1.png",//100х67 для VPI                                                        
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"833.72.790",//артикул поставщика
                                                'id_table'=>"129",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/profili-dlya-svetodiodnyh-lent/svetilnik-shtanga-dlya-garderoba-pod-svetodiodnuyu-lentu.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Светильник штанга для гардероба, под светодиодную ленту 2500 мм"  //описание                         
                                        ],
                                        [                  
                                                'img'=>$path_img_composition_article."Articul803_25_950-1.png", //100х67 для VPI                                                       
                                                'count'=> 2,// количество
                                                'supplier_articul'=>"803.25.950",//артикул поставщика
                                                'id_table'=>"130",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                'def'=>"Держатель овальной штанги"  //описание                         
                                        ],
                                        [                   
                                                'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                'count'=> 1,// количество
                                                'supplier_articul'=>"802.07.910",//артикул поставщика
                                                'id_table'=>"131",//data-objfurnid
                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                'color_material'=>"алюминий",//цвет/материал
                                                'def'=>"Держатель средний для овальной штанги"  //описание                         
                                        ]
                        
                                ]// состав артикула  
        ],// массив артикулов 
        //характеристики 
        'harakteristiki_def'=> include $component_data.'harakteristiki_def_1.php', 
        //инструкции                         
        'instrukciya_def'=>"<h4 >Проектирование</h4>
                <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                ", 
        'instrukciya_carousel'=> [// карусель
                                        [                             
                                                'img'=>$path_img_carousel."LS-3528-IP33-4-8.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Лента"// data-title, alt
                                        ],
                                        
                                        [                           
                                                'img'=>$path_img_carousel."LS-2835-4-8_sch.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                'title'=>"Ленту можно резать, кратность реза равна 50 мм"// data-title, alt
                                        ]                      
        ],// карусель  
        'propertiesTable'=>[ // таблица свойств
                        [
                                "Толщина ДСП (A), мм",//Sf
                                "L, мм",//Lm
                                "I, мм",//Im
                                "D, мм",//Dm
                                "Артикул",//Ar
                        ],
                        [  // массив данных 
                                [
                                        "Sf" => "1.jpg",
                                        "Lm" => "http://vk.com/id0",
                                        "Im" => "Жекі",
                                        "Dm" => "Жекі",
                                        "Ar" => "Жекі"
                                ]                   
                        ]              
        ]// таблица свойств              
];




   
                
    

/////////////////////////////////////

