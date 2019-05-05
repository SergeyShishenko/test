<?php 
// inc-goup-menu-izdeliya-paneli-stenovye.php

/////////////////////////////////////
//izdeliya-mebel-korpusnaya.php
    // $arrlist = [$panelistenovye,$list_dvizheniya_obrazcov,$obrazec_albom_oobrazcov];
    // SideMenuList($arrlist)

        $panelistenovye=[];
        $panelistenovye[0]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=>"#paneli-stenovye-konstrukcii",
                            'def'=>"КОНСТРУКЦИИ ПАНЕЛЕЙ СТЕНОВЫХ"];

        $panelistenovye[1]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=> "#paneli-poyasa-tipovy-sostav-se",
                            'def'=>"5000203-00_100 панели пояса типовые",
                            'content'=>array(
                                        0=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-spisok-paneley-tipovyh",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Список панелей стеновыч типовых",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        1=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-paneli-poyasa-tipovy-sostav-se_1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Состав СЕ &laquo;ПОЯС ПАНЕЛЬНЫЙ&raquo;",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                             ),
                                        2=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-paneli-poyasa-tipovy-sostav-se_2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Состав СЕ &laquo;ПОЯС ПАНЕЛЬНЫЙ&raquo;",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        3=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-01-01-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        4=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-01-01-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        5=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-01-02-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        6=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-01-02-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        7=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-02-01",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        8=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-02-02-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        9=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-02-02-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        10=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-02-02-3",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        11=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-03-01-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        12=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-03-01-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        13=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-prozrachnyy-cikl-otdelki-03-01-3",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ прозрачный цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        14=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-01-4",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        15=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-01-5",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        16=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-01-6",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        17=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-02-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        18=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-02-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        19=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-100-panel-stenovaya-ukryvnoy-cikl-otdelki-03-02-3",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"ПАНЕЛЬ СТЕНОВАЯ укрывной цикл отделки",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            )


                                        )//content
                                
        ];
        $panelistenovye[2]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=> "#poyas-panelnyy-yarus-nizhniy",
                            'def'=>"5000203-00_101 пояс панельный ярус нижний",
                            'content'=>array(
                                        0=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-101-poyas-panelnyy-615-14-5",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"5000203-00_101 пояс панельный ярус нижний",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        1=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-101-poyas-panelnyy-615-14-1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"5000203-00_101 пояс панельный ярус нижний",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                             ),
                                        2=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-101-poyas-panelnyy-615-14-2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"5000203-00_101 пояс панельный ярус нижний",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        3=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-101-poyas-panelnyy-615-14-3",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"5000203-00_101 пояс панельный ярус нижний",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        4=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-00-101-poyas-panelnyy-615-14-4",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"5000203-00_101 пояс панельный ярус нижний",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            )
                                       
                                     

                                        )//content
        ];
        $panelistenovye[3]=['path'=>"izdeliya-paneli-stenovye.php",
                           'id'=> "#poyas-panelnyy-yarus-nizhniy-yarus-verhniy",
                           'def'=>"5000203-00_103 пояс панельный ярус нижний, ярус верхний",
                           'content'=>array(
                                       0=>array(
                                           'path'=>"./dist/images/",
                                           'id-name'=> "5000203-00-103-poyas-panelnyy-1",// имя файла без версии -v?
                                           'version'=>"-v1",
                                           'alt'=>"Пояс панельный два яруса",
                                           'xls'=>"",
                                           'pdf'=>"",
                                           'prnt'=>"noPrint",
                                           'spng'=>"noPNG",                                            
                                           'orient'=>"img-album",//img-book || img-album  
                                           'overlay'=>false 
                                           ),
                                       1=>array(
                                           'path'=>"./dist/images/",
                                           'id-name'=> "5000203-00-103-poyas-panelnyy-2",// имя файла без версии -v?
                                           'version'=>"-v1",
                                           'alt'=>"Пояс панельный два яруса",
                                           'xls'=>"",
                                           'pdf'=>"",
                                           'prnt'=>"noPrint",
                                           'spng'=>"noPNG",                                            
                                           'orient'=>"img-album",//img-book || img-album  
                                           'overlay'=>false 
                                            ),
                                       2=>array(
                                           'path'=>"./dist/images/",
                                           'id-name'=> "5000203-00-103-poyas-panelnyy-3",// имя файла без версии -v?
                                           'version'=>"-v1",
                                           'alt'=>"Пояс панельный два яруса",
                                           'xls'=>"",
                                           'pdf'=>"",
                                           'prnt'=>"noPrint",
                                           'spng'=>"noPNG",                                            
                                           'orient'=>"img-book",//img-book || img-album  
                                           'overlay'=>false 
                                           ),
                                       3=>array(
                                           'path'=>"./dist/images/",
                                           'id-name'=> "5000203-00-103-poyas-panelnyy-4",// имя файла без версии -v?
                                           'version'=>"-v1",
                                           'alt'=>"Пояс панельный два яруса",
                                           'xls'=>"",
                                           'pdf'=>"",
                                           'prnt'=>"noPrint",
                                           'spng'=>"noPNG",                                            
                                           'orient'=>"img-book",//img-book || img-album  
                                           'overlay'=>false 
                                           )
                                    
                                      
                                    

                                       )//content
        ];

       
                        
    /////////////////////////////////////


    $sborochnyeshemypst=[];
    $sborochnyeshemypst[0]=['path'=>"izdeliya-paneli-stenovye.php",
                    'id'=>"#sborochnye-shemy",
                    'def'=>"СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ"];

    $sborochnyeshemypst[1]=['path'=>"izdeliya-paneli-stenovye.php",
                    'id'=> "#poyas-panelnyy-shema-montazha",
                    'def'=>"5000203-99_101 пояс панельный схема монтажа",
                    'content'=>array(
                                0=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_1",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                1=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_2",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                     ),
                                2=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_3",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                3=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_4",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                4=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_5",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                5=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_6",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                6=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_7",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                7=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_8",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                8=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_9",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                9=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-101-poyas-panelnyy-shema-montazha_10",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    )
                               

                                )//content
                        
    ];
    $sborochnyeshemypst[2]=['path'=>"izdeliya-paneli-stenovye.php",
                    'id'=> "#poyas-panelnyy-shema-montazha2",
                    'def'=>"5000203-99_102 пояс панельный схема монтажа",
                    'content'=>array(
                                0=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_1",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                1=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_2",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                     ),
                                2=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_3",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                3=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_4",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                4=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_5",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                5=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_6",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                6=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_7",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                7=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_8",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                8=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_9",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                9=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_10",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                10=>array(
                                        'path'=>"./dist/images/",
                                        'id-name'=> "5000203-99-102-poyas-panelnyy-shema-montazha_11",// имя файла без версии -v?
                                        'version'=>"-v1",
                                        'alt'=>"Пояс панельный схема монтажа",
                                        'xls'=>"",
                                        'pdf'=>"",
                                        'prnt'=>"noPrint",
                                        'spng'=>"noPNG",                                            
                                        'orient'=>"img-album",//img-book || img-album  
                                        'overlay'=>false 
                                        )
                               

                                )//content
                        
    ];
    $sborochnyeshemypst[3]=['path'=>"izdeliya-paneli-stenovye.php",
                    'id'=> "#poyas-panelnyy-shema-montazha-s-metallom",
                    'def'=>"5000203-99_105 пояс панельный схема монтажа с металлом",
                    'content'=>array(
                                0=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_1",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                1=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_2",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                     ),
                                2=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_3",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                3=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_4",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                4=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_5",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                5=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_6",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                6=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_7",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                7=>array(
                                    'path'=>"./dist/images/",
                                    'id-name'=> "5000203-99-105-poyas-panelnyy-shema-montazha-s-metallom_8",// имя файла без версии -v?
                                    'version'=>"-v1",
                                    'alt'=>"Пояс панельный схема монтажа с металлом",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    )
                               
                               

                                )//content
                        
    ];
    $sborochnyeshemypst[4]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=> "#komponovochnoe-reshenie-poyas-ardeko",
                            'def'=>"5000203-99_107 компоновочное решение пояс ардеко",
                            'content'=>array(
                                        0=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        1=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        2=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_3",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        3=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_4",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        4=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_5",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        5=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_6",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        6=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_7",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        7=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_8",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                        ),
                                        8=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "5000203-99_107-komponovochnoe-reshenie-poyas-ardeko_9",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Компоновочное решение пояс ардеко",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-book",//img-book || img-album  
                                            'overlay'=>false 
                                            )
                                    
                                    

                                        )//content
        
    ];

   