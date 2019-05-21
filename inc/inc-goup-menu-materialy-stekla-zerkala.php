<?php 
// inc-goup-menu-materialy-stekla-zerkala.php

/////////////////////////////////////

    // $arrlist = [$steklazerkala,$list_dvizheniya_obrazcov,$obrazec_albom_oobrazcov];
    // SideMenuList($arrlist)

        $steklazerkala=[];
        $steklazerkala[0]=['path'=>"materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php",
                            'id'=>"#vidy-obrabotki-kromki-stekla-zerkala",
                            'def'=>"ОБРАБОТКА КРОМКИ СТЕКЛА, ЗЕРКАЛА"];

        $steklazerkala[1]=['path'=>"materialy-ne-derevyannye-steklo-zerkalo-vitrazh.php",
                            'id'=> "#vidy-obrabotki-kromki-stekla-zerkala-foto",
                            'def'=>"виды обработки торца стекла",
                            'content'=>array(
                                        0=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "vidy-obrabotki-kromki-stekla-zerkala-foto",// имя файла без версии -v?
                                            'version'=>"",//-v1
                                            'alt'=>"ВИДЫ ОБРАБОТКИ КРОМКИ СТЕКЛА, ЗЕРКАЛА",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",//
                                            'spng'=>"noPNG",  //                                        
                                            'orient'=>"img-album",//img-book || img-album  
                                            'no-b-lazy'=>true, // не img-book, не img-album  
                                            'overlay'=>false 
                                        ),                                   
                                        1=>array(
                                            'path'=>"./dist/images/",
                                            'id-name'=> "vidy-obrabotki-kromki-stekla-zerkala-eskizy",// имя файла без версии -v?
                                            'version'=>"",//-v1
                                            'alt'=>"виды обработки торца стекла",
                                            'xls'=>"",
                                            'pdf'=>"",
                                            'prnt'=>"noPrint",//
                                            'spng'=>"noPNG",  //                                        
                                            'orient'=>"img-album",//img-book || img-album 
                                            'no-b-lazy'=>true,  // не img-book, не img-album 
                                            'overlay'=>false  
                                            )                                   


                                        )//content
                                
        ];
      
       

       
                        
    /////////////////////////////////////


   