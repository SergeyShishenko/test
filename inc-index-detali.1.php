<?php
$top ='detali';
$page_site="profili";
// $LEVEL1 = array( array( "name" => "ДЕТАЛИ",                         
//                          "id" => "floating1",
//                          "data-href" => "detali-profili.php",
//                          "data-img" => "./dist/images/no-175x0.jpg",                         
//                          "KEYWORDS" => array(""),
//                          // <!--LEVEL2--> 
//                          "LEVEL2" => array( array( "name" => "ПРОФИЛИ ГЛАДКИЕ",                         
//                                                     "id" => "floating8",
//                                                     "data-href" => "detali-profili.php",
//                                                     "data-img" => "./dist/images/no-175x0.jpg",                         
//                                                     "KEYWORDS" => array(""),
//                                                     // <!--LEVEL3--> 
//                                                     "LEVEL3" => array( array( "name" => "Накладки",                         
//                                                                                 "id" => "floating46",
//                                                                                 "data-href" => "detali-profili.php#profili-nakladki",
//                                                                                 "data-img" => "./dist/images/no-175x0.jpg",                         
//                                                                                 "KEYWORDS" => array( "Накладные панели"),
//                                                                                 // <!--LEVEL4--> 
//                                                                                 "LEVEL4" => array( array( "name" => "МДФ накладка №050/ДШ",                         
//                                                                                                             "id" => "mdf-profili-nakladki-50",
//                                                                                                             "KEYWORDS" => array( "Панель накладкая 50")
//                                                                                                         ),
//                                                                                                     array(  "name" => "МДФ накладка №051/ДШ",
//                                                                                                             "id" => "mdf-profili-nakladki-51",
//                                                                                                             "KEYWORDS" => array()
//                                                                                                         ),
//                                                                                                     array(  "name" => "МДФ накладка №052/ДШ",
//                                                                                                             "id" => "mdf-profili-nakladki-52",
//                                                                                                             "KEYWORDS" => array( "Панель накладкая 52")
//                                                                                                         )
//                                                                                                 )// <!--/LEVEL4--> 
//                                                                             ) 
//                                                                     ) // <!--/LEVEL3--> 
//                                                     )    
//                                         )// <!--/LEVEL2-->   
//                         )      
//                 );// <!--/LEVEL1--> 

$LEVEL2 = array( array( "name" => "ПРОФИЛИ ГЛАДКИЕ",                         
                         "id" => "floating8",
                         "data-href" => "detali-profili.php",
                         "data-img" => "./dist/images/no-175x0.jpg",                         
                         "KEYWORDS" => array( ""),
                         // <!--LEVEL3--> 
                         "LEVEL3" => array( array( "name" => "Накладки",                         
                                                    "id" => "floating46",
                                                    "data-href" => "detali-profili.php#profili-nakladki",
                                                    "data-img" => "./dist/images/no-175x0.jpg",                         
                                                    "KEYWORDS" => array( "Накладные панели"),
                                                    // <!--LEVEL4--> 
                                                    "LEVEL4" => array( array( "name" => "МДФ накладка №050/ДШ",                         
                                                                                "id" => "mdf-profili-nakladki-50",
                                                                                "KEYWORDS" => array( "Панель накладкая 50")
                                                                            ),
                                                                        array(  "name" => "МДФ накладка №051/ДШ",
                                                                                "id" => "mdf-profili-nakladki-51",
                                                                                "KEYWORDS" => array()
                                                                            ),
                                                                        array(  "name" => "МДФ накладка №052/ДШ",
                                                                                "id" => "mdf-profili-nakladki-52",
                                                                                "KEYWORDS" => array( "Панель накладкая 52")
                                                                            )
                                                                    )// <!--/LEVEL4--> 
                                                )// <!--/LEVEL3-->  
                                        )// <!--/LEVEL2-->   
                        )      
                );


   

echo "<h1>TABLE</h1>";

// for ($row1 = 0; $row1 < count($LEVEL1); $row1++) { 

//     $LEVEL2=$LEVEL1[$row1]['LEVEL2'];
    for ($row2 = 0; $row2 < count($LEVEL2); $row2++) { 
        echo ' <TABLE border> <!-- LEVEL2 --> 
            <TR>
                <TD class="hover mapsite ">
                <p data-href="'.$LEVEL2[$row2]['data-href'].'"  data-img="'.$LEVEL2[$row2]['data-img'].'" id="'.$LEVEL2[$row2]['id'].'">'.$LEVEL2[$row2]['name'].'</p>
                '; 
                for ($KEYWORDS = 0; $KEYWORDS < count($LEVEL2[$row2]["KEYWORDS"]); $KEYWORDS++){ 
                    echo '<p class="KEYWORDS" data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL2[$row2]['id'].'"> '.$LEVEL2[$row2]["KEYWORDS"][$KEYWORDS].'</p>
                    ';
                }
                echo ' <TD>
                ';
        $LEVEL3=$LEVEL2[$row2]['LEVEL3'];
        for ($row3 = 0; $row3 < count($LEVEL3); $row3++) { 
            echo '<TABLE border> <!-- LEVEL3--> 
                <TR>
                    <TD  class="hover mapsite" >
                        <p data-href="'.$LEVEL3[$row3]['data-href'].'"  data-img="'.$LEVEL3[$row3]['data-img'].'" id="'.$LEVEL3[$row3]['id'].'">'.$LEVEL3[$row3]['name'].'</p>
                        '; 
                        for ($KEYWORDS = 0; $KEYWORDS < count($LEVEL3[$row3]["KEYWORDS"]); $KEYWORDS++){ 
                            echo '<p class="KEYWORDS" data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL3[$row3]['id'].'"> '.$LEVEL3[$row3]["KEYWORDS"][$KEYWORDS].'</p>
                            ';
                        }
            echo '  </TD>                                                                            
                    <TD>
                    ';
                    echo "<TABLE border>  <!--LEVEL4--> ";
                    $LEVEL4=$LEVEL3[$row3]['LEVEL4'];
                    for ($row4 = 0; $row4 < count($LEVEL4); $row4++) {    
                        echo '<TR>
                                <TD class="mapsite" colspan="2" id="flo-'.$LEVEL4[$row4]['id'].'">              
                                    <p data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL4[$row4]['id'].'" data-img= "./dist/images/'.$LEVEL4[$row4]['id'].'.png">'.$LEVEL4[$row4]['name'].'</p>';
                                    for ($KEYWORDS = 0; $KEYWORDS < count($LEVEL4[$row4]["KEYWORDS"]); $KEYWORDS++){ 
                                        echo '<p class="KEYWORDS" data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL4[$row4]['id'].'"> '.$LEVEL4[$row4]["KEYWORDS"][$KEYWORDS].'</p>';
                                    }
                        echo '        </TD>
                            </TR><TD></TD></TR> <!--end LEVEL4-->
                            ';    
                    }
                    echo "</TABLE>";    
                echo ' </TD>
                    </TR>
                    <TR><TD> &nbsp; </TD><TD></TD></TR> <!--end LEVEL3-->      
                </TABLE>
                ';
        }
        echo ' </TD>
            </TR>                     
            <TR><TD> &nbsp; </TD><TD></TD></TR> <!--end LEVEL2-->
            '; 
    }
// }


// echo "<TABLE border>  <!--LEVEL4--> ";
// for ($row = 0; $row < count($LEVEL4); $row++) {    
//     echo '<TR>
//             <TD class="mapsite" colspan="2" id="flo-'.$LEVEL4[$row]['id'].'">              
//                 <p data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL4[$row]['id'].'" data-img= "./dist/images/'.$LEVEL4[$row]['id'].'.png">'.$LEVEL4[$row]['name'].'</p>';
//                 for ($KEYWORDS = 0; $KEYWORDS < count($LEVEL4[$row]["KEYWORDS"]); $KEYWORDS++){ 
//                     echo '<p class="KEYWORDS" data-href="'.$top.'-'.$page_site.'.php#'.$LEVEL4[$row]['id'].'"> '.$LEVEL4[$row]["KEYWORDS"][$KEYWORDS].'</p>';
//                 }
//     echo '        </TD>
//           </TR><TD></TD></TR> <!--end LEVEL4--> '
//     ;    
// }
// echo "</TABLE>";



 //             $LEVEL3 = array( array( "name" => "Накладки",                         
    //             "id" => "floating46",
    //             "data-href" => "detali-profili.php#profili-nakladki",
    //             "data-img" => "./dist/images/no-175x0.jpg",                         
    //             "KEYWORDS" => array( "Накладные панели"),
    //             // <!--LEVEL4--> 
    //             "LEVEL4" => array( array( "name" => "МДФ накладка №050/ДШ",                         
    //                                        "id" => "mdf-profili-nakladki-50",
    //                                        "KEYWORDS" => array( "Панель накладкая 50")
    //                                     ),
    //                                 array(  "name" => "МДФ накладка №051/ДШ",
    //                                        "id" => "mdf-profili-nakladki-51",
    //                                        "KEYWORDS" => array()
    //                                      ),
    //                                 array(  "name" => "МДФ накладка №052/ДШ",
    //                                        "id" => "mdf-profili-nakladki-52",
    //                                        "KEYWORDS" => array( "Панель накладкая 52")
    //                                     )
    //                               )// <!--/LEVEL4--> 


    //           )
             
        
                  
    //    );

    // $LEVEL3 = array( array( "name" => "Накладки",                         
//                          "id" => "floating46",
//                          "data-href" => "detali-profili.php#profili-nakladki",
//                          "data-img" => "./dist/images/no-175x0.jpg",                         
//                          "KEYWORDS" => array( "Накладные панели"),
//                          // <!--LEVEL4--> 
//                          "LEVEL4" => array( array( "name" => "МДФ накладка №050/ДШ",                         
//                                                     "id" => "mdf-profili-nakladki-50",
//                                                     "KEYWORDS" => array( "Панель накладкая 50")
//                                                  ),
//                                              array(  "name" => "МДФ накладка №051/ДШ",
//                                                     "id" => "mdf-profili-nakladki-51",
//                                                     "KEYWORDS" => array()
//                                                   ),
//                                              array(  "name" => "МДФ накладка №052/ДШ",
//                                                     "id" => "mdf-profili-nakladki-52",
//                                                     "KEYWORDS" => array( "Панель накладкая 52")
//                                                  )
//                                            )// <!--/LEVEL4--> 
//                        )// <!--/LEVEL3-->         
//                 );



?>