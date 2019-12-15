<?php 
// inc/goup/inc-goup-menu-materialy-svet.php
$path_img="./dist/filesdb/images/thumbs/svet/";//200x200 для поиска shtangi
$path_img_composition_article="./dist/filesdb/images/pagevpi/svet/";//100х67 для VPI
$path_img_carousel="./dist/filesdb/images/carousel/svet/";//800x800 и 960x640 или 2х3(6х4)

/////////////////////////////////////
$transformatory=[];
$transformatory[0]=['path'=>"materialy-svet.php?group=transformatory&node=transformatory",//node
                'id'=>"#transformatory",
                'img'=> $path_img."tbssvet.png",//200x200 для поиска
                'keywords'=>"",
                'def'=>"ТРАНСФОРМАТОРЫ"];    

$transformatory[1]=['path'=>"materialy-svet.php?group=transformatory&node=transformatory",
                'id'=> "#LED-transformatory1",
                'img'=> $path_img."tbs833_72_790-1.png", //200x200 для поиска
                'keywords'=>"",
                'def'=>"Трансформаторы1",  //описание для меню
                
                'composition_article'=>array( 
                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"", //артикул 500СТП
                                                                'id_table'=>"",//data-objfurnid
                                                                'def'=>"Трансформаторы RT 2-5000 12V COOL 8K 2X (3528, 600 LED, LUX) 120 LED НА 1М"  //описание                         
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
                                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"цинковое литьё / алюминий",//цвет/материал
                                                                'def'=>"Держатель овальной штанги"  //описание                         
                                                                ),
                                                        array(                            
                                                                'img'=>$path_img_composition_article."Articul802_07_910-1.png", //100х67 для VPI                                                      
                                                                'count'=> 1,// количество
                                                                'supplier_articul'=>"802.07.910",//артикул поставщика
                                                                'id_table'=>"131",//data-objfurnid
                                                                'href_articul'=>"https://hafele-shop.ru/catalog/sistemy-osveshcheniya/svetodiodnye-loox/12v/komplektuyushchie-dlya-svetilnikov/derzhatel-srednij-dlya-ovalnoj-svet-cvet-alyuminij.html" ,//Cсылка на страницу фурнитуры                            
                                                                'color_material'=>"алюминий",//цвет/материал
                                                                'def'=>"Держатель средний для овальной штанги"  //описание                         
                                                                )
                                        
                                                 )// состав артикула  
                                        ),// массив артикулов 
                //характеристики 
                'harakteristiki_def'=>" <div id='parameters' style='display: block;'>
                             <table class='table table-striped table-responsive'>
                                                <tbody><tr>
                            <td>Артикул																</td>
                                                                <td>013239(B)</td>
                                                        </tr>
                                                <tr>
                            <td>Цвет																</td>
                                                                <td><div class='block-color-wrapper'><div class='block-color block-color-cool_white'>cool_white</div></div></td>
                                                        </tr>
                                                <tr>
                            <td>Тип товара																</td>
                                                                <td>Лента</td>
                                                        </tr>
                                                <tr>
                            <td>Класс пылевлагозащиты																</td>
                                                                <td>IP20</td>
                                                        </tr>
                                                <tr>
                            <td>Длина волны																</td>
                                                                <td>Белый (холодный)</td>
                                                        </tr>
                                                <tr>
                            <td>Цветовая температура																</td>
                                                                <td>min: 8 100 K; typ: 8 000 K; max: 9 600 K</td>
                                                        </tr>
                                                <tr>
                            <td>Индекс цветопередачи																</td>
                                                                <td>&gt;85</td>
                                                        </tr>
                                                <tr>
                            <td>Угол обзора																</td>
                                                                <td>120 °</td>
                                                        </tr>
                                                <tr>
                            <td>Типоразмер светодиода																</td>
                                                                <td>3528</td>
                                                        </tr>
                                                <tr>
                            <td>Плотность светодиодов																</td>
                                                                <td>120 шт/м</td>
                                                        </tr>
                                                <tr>
                            <td>Кол-во светодиодов																</td>
                                                                <td>600 шт</td>
                                                        </tr>
                                                <tr>
                            <td>Световой поток на 1м																</td>
                                                                <td>max: 820 lm/m</td>
                                                        </tr>
                                                <tr>
                            <td>Световой поток																</td>
                                                                <td>max: 4 100 lm</td>
                                                        </tr>
                                                <tr>
                            <td>Мощность на 1м																</td>
                                                                <td>typ: 8,4 W/m; max: 9,6 W/m</td>
                                                        </tr>
                                                <tr>
                            <td>Мощность																</td>
                                                                <td>typ: 42 W; max: 48 W</td>
                                                        </tr>
                                                <tr>
                            <td>Мощность, макс.																</td>
                                                                <td>48 W</td>
                                                        </tr>
                                                <tr>
                            <td>Напряжение питания																</td>
                                                                <td>12 V</td>
                                                        </tr>
                                                <tr>
                            <td>Ток потребления																</td>
                                                                <td>typ: 4 A</td>
                                                        </tr>
                                                <tr>
                            <td>Длина																</td>
                                                                <td>5 000 мм</td>
                                                        </tr>
                                                <tr>
                            <td>Ширина																</td>
                                                                <td>8 мм</td>
                                                        </tr>
                                                <tr>
                            <td>Высота																</td>
                                                                <td>1,8 мм</td>
                                                        </tr>
                                                <tr>
                            <td>Минимальный отрезок																</td>
                                                                <td>25 мм</td>
                                                        </tr>
                                                <tr>
                            <td>Сертификат																</td>
                                                                <td>РСТ-01461</td>
                                                        </tr>
                                                <tr>
                            <td>Вид упаковки																</td>
                                                                <td>Катушка</td>
                                                        </tr>
                                                <tr>
                            <td>Норма упаковки																</td>
                                                                <td>5</td>
                                                        </tr>
                                                <tr>
                            <td>Длина упаковки																</td>
                                                                <td>0.28</td>
                                                        </tr>
                                                <tr>
                            <td>Ширина упаковки																</td>
                                                                <td>0.236</td>
                                                        </tr>
                                                <tr>
                            <td>Высота упаковки																</td>
                                                                <td>0.012</td>
                                                        </tr>
                                                <tr>
                            <td>Вес упаковки																</td>
                                                                <td>0.137</td>
                                                        </tr>
                                                <tr>
                            <td>Объём упаковки																</td>
                                                                <td>0.0008</td>
                                                        </tr>
                                                                    <tr>
                        <td>
                            Гарантийный срок							</td>
                        <td>
                        5 лет
                        </td>
                    </tr>						
                                            <tr>
                        <td>
                            Производитель
                        </td>
                        <td>
                                                                                <a href='https://arlight.ru ' rel='nofollow' target='_blank'>Arlight</a>
                                                                </td>
                    </tr>
                </tbody></table>
            </div>", 
                //инструкции                         
                'instrukciya_def'=>"<h4 >Проектирование</h3>
                                <h5 >Светодиодную ленту, драйвер напряжения 12V, сенсор открытия двери и крепления заказывайте, пожалуйста, отдельно.</h5>
                                ", 
                'instrukciya_carousel'=>array( // инструкция
                                                array(                            
                                                        'img'=>$path_img_carousel."LS-3528-IP33-4-8.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                        'title'=>"Лента"// data-title, alt
                                                ),
                                             
                                                array(                            
                                                        'img'=>$path_img_carousel."LS-2835-4-8_sch.png",//data-image, src, data-src  800x800 и 960x640                                                            
                                                        'title'=>"Ленту можно резать, кратность реза равна 50 мм"// data-title, alt
                                                )
                                        
                                        )// инструкция               
                
                
];
$transformatory[2]=['path'=>"materialy-svet.php?group=transformatory&node=transformatory",
                'id'=> "#LED-transformatory2",
                'img'=> $path_img."tbsHW_012_1930_PR-1.png", //200x200 для поиска
                'keywords'=>"",
                'def'=>"Трансформаторы2",  //описание для меню
                
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
                                                        'img'=>$path_img_carousel."LSP-FM2-ALU-2000-0_dr.webp",//data-image, src, data-src  800x800 и 960x640                                                            
                                                        'title'=>"Профиль FM2, врезной увеличенной высоты, 22х12мм, L-2000"// data-title, alt
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
$transformatory[3]=['path'=>"materialy-svet.php?group=transformatory&node=transformatory",
                'id'=> "#LED-transformatory3",
                'img'=> $path_img."tbsJOK-004B-CR.png", //200x200 для поиска
                'keywords'=>"Трансформаторы",
                'def'=>"Трансформаторы3",  //описание   для меню  

                'composition_article'=>array( 

                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"", //артикул 500СТП
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                                                                'articul_500STP'=>"", //артикул 500СТП
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                'instrukciya_def'=>'
                <h4>Калькулятор подбора блока питания для светодиодной ленты</h4>
                <div id="calc" class="row">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 5px;" width="60px">Вид</td>
                            <td style="padding: 5px;">
                            <div><select name="n_type">
                            <option value="4.8">SMD 3528 60 светодиодов/метр 4,8 Вт/метр</option>
                            <option value="7.2">SMD 3528 90 светодиодов/метр 7,2 Вт/метр</option>
                            <option selected value="9.6">SMD 3528 120 светодиодов/метр 9,6 Вт/метр</option>
                            <option value="19.2">SMD 3528 240 светодиодов/метр 19,2 Вт/метр</option>
                            <option value="12">SMD 2835 120 светодиодов/метр 12 Вт/метр</option>
                            <option value="7.2">SMD 5050 (5060) 30 светодиодов/метр 7,2 Вт/метр</option>
                            <option value="14.4">SMD 5050 (5060) 60 светодиодов/метр 14,4 Вт/метр</option>
                            <option value="24">SMD 3014 240 светодиодов/метр 24 Вт/метр</option>
                            </select></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;" width="60px">Напряжение питания</td>
                            <td style="padding: 5px;">
                            <div><select name="n_v">
                            <option value="12">12V</option>
                            <option value="24">24V</option>
                            </select></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">Длина, м</td>
                            <td style="padding: 5px;"><input value="5" name="n_len" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 5px;"><button onclick="Start(); return false;">Рассчитать</button></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top: 15px; padding-bottom: 15px;">
                            <div id="result" style="color: #1CA768;font-size:16px;">&nbsp;</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                                ', 
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
$transformatory[4]=['path'=>"materialy-svet.php?group=transformatory&node=transformatory",
                'id'=> "#LED-transformatory4",
                'img'=> $path_img."tbsJOK-004B-CR.png", //200x200 для поиска
                'keywords'=>"Трансформаторы",
                'def'=>"Трансформаторы4",  //описание   для меню  

                'composition_article'=>array( 

                                                array( // таблица состава артикула
                                                        array(   
                                                                'articul_500STP'=>"", //артикул 500СТП
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                                                                'articul_500STP'=>"", //артикул 500СТП
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                                                                'href_articul'=>"https://www.mdm-complect.ru/catalog/svet/60127/" ,//Cсылка на страницу фурнитуры                            
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
                'instrukciya_def'=>'
                <h4>Калькулятор подбора блока питания для светодиодной ленты</h4>
                <div id="calc" class="row">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 5px;" width="60px">Вид</td>
                            <td style="padding: 5px;">
                            <div><select name="n_type">
                            <option value="4.8">SMD 3528 60 светодиодов/метр 4,8 Вт/метр</option>
                            <option value="7.2">SMD 3528 90 светодиодов/метр 7,2 Вт/метр</option>
                            <option selected value="9.6">SMD 3528 120 светодиодов/метр 9,6 Вт/метр</option>
                            <option value="19.2">SMD 3528 240 светодиодов/метр 19,2 Вт/метр</option>
                            <option value="12">SMD 2835 120 светодиодов/метр 12 Вт/метр</option>
                            <option value="7.2">SMD 5050 (5060) 30 светодиодов/метр 7,2 Вт/метр</option>
                            <option value="14.4">SMD 5050 (5060) 60 светодиодов/метр 14,4 Вт/метр</option>
                            <option value="24">SMD 3014 240 светодиодов/метр 24 Вт/метр</option>
                            </select></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;" width="60px">Напряжение питания</td>
                            <td style="padding: 5px;">
                            <div><select name="n_v">
                            <option value="12">12V</option>
                            <option value="24">24V</option>
                            </select></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">Длина, м</td>
                            <td style="padding: 5px;"><input value="5" name="n_len" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 5px;"><button onclick="Start(); return false;">Рассчитать</button></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top: 15px; padding-bottom: 15px;">
                            <div id="result" style="color: #1CA768;font-size:16px;">&nbsp;</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                                ', 
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

