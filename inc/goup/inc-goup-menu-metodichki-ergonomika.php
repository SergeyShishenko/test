<?php 


// inc\goup\inc-goup-menu-metodichki-ergonomika-vannaya.php

/////////////////////////////////////
//izdeliya-mebel-korpusnaya.php
    // $arrlist = [$vannaya,$list_dvizheniya_obrazcov,$obrazec_albom_oobrazcov];
    // SideMenuList($arrlist)
        $path_img="./dist/images/vannaya/";
        $vannaya=[];
        $vannaya[0]=['path'=>"metodichki-ergonomika.php",
                            'id'=>"#ergonomika-vannoy-komnaty",
                            'def'=>"Эргономика ванной комнаты"];

        $vannaya[1]=['path'=>"metodichki-ergonomika.php",
                            'id'=> "#standartnye-razmery-santehnicheskogo-oborudovaniya",
                            'def'=>"Стандартные размеры сантехнического оборудования",
                            'content'=>array(
                                        0=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-1",// имя файла без версии -v?
                                            'version'=>"",// -v1
                                            'alt'=>"Умывальники",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        1=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-2",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Высота мебели для ванной",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                             ),
                                        2=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-3",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Сантехника",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        3=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-4",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Антропология",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        4=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-5",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Стиральная машина",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        5=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-6",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Умывальник",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            ),
                                        6=>array(
                                            'path'=>$path_img."",
                                            'id-name'=> "vannaya-7",// имя файла без версии -v?
                                            'version'=>"",
                                            'alt'=>"Растояние между сантехникой",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",
                                            'spng'=>"noPNG",                                            
                                            'orient'=>"img-album",//img-book || img-album  
                                            'overlay'=>false 
                                            )
                                    

                            )//content
                                
        ];
     
                        
    /////////////////////////////////////

    $path_img="./dist/images/garderobnaya/";
    $garderobnaya=[];
    $garderobnaya[0]=['path'=>"metodichki-ergonomika.php",
                    'id'=>"#ergonomika-garderobnoy-komnaty",
                    'def'=>"Эргономика гардеробной комнаты"];

    $garderobnaya[1]=['path'=>"metodichki-ergonomika.php",
                    'id'=> "#organizaciya-prostranstva-v-garderobe",
                    'def'=>"Организация пространства в гардеробе",
                    'content'=>array(
                                0=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "garderobnaya-1",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                1=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "garderobnaya-2",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                     ),
                                2=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "garderobnaya-3",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                3=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "garderobnaya-4",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Комод",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                ),
                                4=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "garderobnaya-5",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    )
                               
                               

                                )//content
                        
    ];


    // prihozhaya
    /////////////////////////////////////

    $path_img="./dist/images/prihozhaya/";
    $prihozhaya=[];
    $prihozhaya[0]=['path'=>"metodichki-ergonomika.php",
                    'id'=>"#ergonomika-prihozhaya",
                    'def'=>"Эргономика прихожей"];

    $prihozhaya[1]=['path'=>"metodichki-ergonomika.php",
                    'id'=> "#optimalnye-vysoty",
                    'def'=>"Стандартные размеры",
                    'content'=>array(
                                0=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "prihozhaya-1",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                1=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "prihozhaya-2",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                     ),
                                2=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "prihozhaya-3",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                    ),
                                3=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "prihozhaya-4",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Комод",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-album",//img-book || img-album  
                                    'overlay'=>false 
                                ),
                                4=>array(
                                    'path'=>$path_img."",
                                    'id-name'=> "prihozhaya-5",// имя файла без версии -v?
                                    'version'=>"",
                                    'alt'=>"Габариты одежды",
                                    'xls'=>"",
                                    'pdf'=>"",
                                    'prnt'=>"noPrint",
                                    'spng'=>"noPNG",                                            
                                    'orient'=>"img-book",//img-book || img-album  
                                    'overlay'=>false 
                                    )
                               
                               

                                )//content
                        
    ];
    
   