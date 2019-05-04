<?php 
// inc-goup-menu-izdeliya-paneli-stenovye.php

/////////////////////////////////////
//izdeliya-mebel-korpusnaya.php
    // $arrlist = [$panelistenovye,$list_dvizheniya_obrazcov,$obrazec_albom_oobrazcov];
    // SideMenuList($arrlist)

        $panelistenovye=[];
        $panelistenovye[0]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=>"#paneli-stenovye-konstrukcii",
                            'def'=>"Конструкции панелей стеновых"];

        // $panelistenovye[1]=['path'=>"izdeliya-paneli-stenovye.php",
        //                     'id'=> "#paneli-poyasa-tipovye",
        //                     'def'=>"5000203-00_100 панели пояса типовые",
        //                     'content'=>array(
        //                                 1=>array(
        //                                     'id'=> "#spisok-paneley-tipovyh",
        //                                     'alt'=>"5000203-00_100 список панелей типовых",
        //                                     'data-xls'=>"",
        //                                     'data-pdf'=>"",
        //                                     'data-prnt'=>"noPrint",
        //                                     'data-spng'=>"noPNG",                                            
        //                                     'orient'=>"img-album",//img-book
        //                                     'version'=>"-v1",
        //                                     'name'=>"5000203-00-100-spisok-paneley-tipovyh-0",

        //                                     )
        //                                 )
        //                    ];
        $panelistenovye[1]=['path'=>"izdeliya-paneli-stenovye.php",
                            'id'=> "#paneli-poyasa-tipovy-sostav-se",
                            'def'=>"Состав СЕ &laquo;ПОЯС ПАНЕЛЬНЫЙ&raquo;",
                            'content'=>array(
                                        1=>array(
                                            'id-name'=> "#5000203-00-100-paneli-poyasa-tipovy-sostav-se_1",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Состав СЕ &laquo;ПОЯС ПАНЕЛЬНЫЙ&raquo;",
                                            'data-xls'=>"",
                                            'data-pdf'=>"",
                                            'data-prnt'=>"noPrint",
                                            'data-spng'=>"noPNG",                                            
                                            'orient'=>"img-album"//img-book || img-album  
                                            )
                                        2=>array(
                                            'id-name'=> "#5000203-00-100-paneli-poyasa-tipovy-sostav-se_2",// имя файла без версии -v?
                                            'version'=>"-v1",
                                            'alt'=>"Состав СЕ &laquo;ПОЯС ПАНЕЛЬНЫЙ&raquo;",
                                            'data-xls'=>"",
                                            'data-pdf'=>"",
                                            'data-prnt'=>"noPrint",
                                            'data-spng'=>"noPNG",                                            
                                            'orient'=>"img-album"//img-book || img-album 
                                            )
                                        )//content
                           ];

       
                        
    /////////////////////////////////////


    // $panelistenovye=[];
    // $panelistenovye[0]=['path'=>"izdeliya-mebel-korpusnaya.php",
    //                 'id'=>"#sborochnye-shemy",
    //                 'def'=>"СБОРОЧНО-МОНТАЖНЫЕ СХЕМЫ"];

    // $panelistenovye[1]=['path'=>"izdeliya-mebel-korpusnaya.php",
    //                 'id'=> "#osnovanie-korpusa-shkafa",
    //                 'def'=>"5000202-99_101 основание корпуса шкафа"];

   