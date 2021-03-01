<?php

if ($file['size']==84){
    
    $handle = fopen($file['tmp_name'], "rb");
    fseek($handle,80);// пропускаем заголовок
    $content = unpack('i', fread($handle, 4));    
    fclose($handle);
    // $data["head"] =  $content[1]. " треугольников";return; 
    $data["head"] =  $content[1];return; 
}else{
    $handle = fopen($file['tmp_name'], "rb");
    $chunk=$file['size']/50;
    // $data["content"] =  $chunk. " по 50 байт";return;
    // $arrTriangles[];
    for ($j = 1; $j <= $chunk; $j++){
        // $arrTriangles[$j]['num'] = "Треугольник - $j"; 
        $NormalX=unpack('f', fread($handle, 4))[1];
        $NormalY=unpack('f', fread($handle, 4))[1];
        $NormalZ=unpack('f', fread($handle, 4))[1];
        // $arrTriangles[$j]['normal'] = "Нормаль: " . $NormalX . " " . $NormalY . " " . $NormalZ ;
        $arrTriangles[$j]['normal'] = [$NormalX , $NormalY , $NormalZ ] ;
        // $arrTriangles[$j]['colinear'] =  "Колинеарность: ". checkColinear($NormalX, $NormalY, $NormalZ) ;
        // $arrTriangles[$j]['directional'] = "Сонаправленность: ". directional($NormalX, $NormalY, $NormalZ);
        $arrTriangles[$j]['directional'] = directional($NormalX, $NormalY, $NormalZ);

        $Vertex_1_X=unpack('f', fread($handle, 4))[1];
        $Vertex_1_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_1_Z=unpack('f', fread($handle, 4))[1];
        $arrVert1=[$Vertex_1_X, $Vertex_1_Y, $Vertex_1_Z];
        // $arrTriangles[$j]['vertex1'] = "Вершина1: " . $Vertex_1_X . " " . $Vertex_1_Y. " " . $Vertex_1_Z;
        $arrTriangles[$j]['vertex1'] = $arrVert1;

        $Vertex_2_X=unpack('f', fread($handle, 4))[1];
        $Vertex_2_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_2_Z=unpack('f', fread($handle, 4))[1];
        $arrVert2=[$Vertex_2_X ,$Vertex_2_Y, $Vertex_2_Z];
        // $arrTriangles[$j]['vertex2'] =  "Вершина2: " . $Vertex_2_X . " " . $Vertex_2_Y. " " . $Vertex_2_Z;
        $arrTriangles[$j]['vertex2'] =  $arrVert2 ;

        $Vertex_3_X=unpack('f', fread($handle, 4))[1];
        $Vertex_3_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_3_Z=unpack('f', fread($handle, 4))[1];
        $arrVert3=[$Vertex_3_X, $Vertex_3_Y, $Vertex_3_Z];
        // $arrTriangles[$j]['vertex3'] =  "Вершина3: " . $Vertex_3_X . " " . $Vertex_3_Y. " " . $Vertex_3_Z;
        $arrTriangles[$j]['vertex3'] =  $arrVert3;
        
        unpack('s', fread($handle, 2))[1]; // END
        // echo unpack('s', fread($handle, 2))[1]. "<br>";
        $strain=square($arrVert1,$arrVert2,$arrVert3);
        $arrTriangles[$j]['area'] =  $strain;
        $sum += $strain;
        
        // echo "<hr>";
    }// for
   
    fclose($handle);
    $data["totalarea"]=$sum;
     $data["data"]=$arrTriangles;return;
    // echo "S-Solid = " . ($sum / 1000000) ." м.кв.";
    // echo "<script>alert('S-Solid = " . ($sum / 1000000) ." м.кв.');</script>";
}




function square($arrVert1,$arrVert2,$arrVert3){ // полупериметр

    $halfMeter= 0.5 * (sqrt(pow($arrVert1[0] - $arrVert2[0],2) + pow($arrVert1[1] - $arrVert2[1],2) +  pow($arrVert1[2] - $arrVert2[2],2)) +  
                       sqrt(pow($arrVert2[0] - $arrVert3[0],2) + pow($arrVert2[1] - $arrVert3[1],2) +  pow($arrVert2[2] - $arrVert3[2],2)) +  
                       sqrt(pow($arrVert1[0] - $arrVert3[0],2) + pow($arrVert1[1] - $arrVert3[1],2) +  pow($arrVert1[2] - $arrVert3[2],2))
                        );
                        


    $square = sqrt( $halfMeter * ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert2[0],2) + pow($arrVert1[1]-$arrVert2[1],2) + pow($arrVert1[2]-$arrVert2[2],2))) * 
                                 ($halfMeter-sqrt(pow($arrVert2[0]-$arrVert3[0],2) + pow($arrVert2[1]-$arrVert3[1],2) + pow($arrVert2[2]-$arrVert3[2],2))) * 
                                 ($halfMeter-sqrt(pow($arrVert1[0]-$arrVert3[0],2) + pow($arrVert1[1]-$arrVert3[1],2) + pow($arrVert1[2]-$arrVert3[2],2)))
                );
    return $square ;
}

// a = {$ax; $ay; $az} и b = {$bx; $by; $bz}
// a × b = {$ay*$bz - $az*$by; $az*$bx - $ax*$bz; $ax*$by - $ay*$bx}
// i ($ay*$bz - $az*$by) - j ($ax*$bz - $az*$bx) + k ($ax*$by - $ay*$bx)
function checkColinear($ax, $ay, $az){
    $bx =0; $by=0; $bz=-1;
    $Colinear=$ay*$bz - $az*$by - $ax*$bz - $az*$bx + $ax*$by - $ay*$bx;   
    if ($Colinear==0) {
        return "Yes"; 
     } else{
         return "No"; 
     } 
   
}
// сонаправленные векторы Front, Back, Top, Bottom, Left, Right, General
function directional($ax, $ay, $az){
    $bx =0; $by=0; $bz=-1; // Bottom
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Bottom"; 
    } 
    $bx =0; $by=0; $bz=1; // Top
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Top"; 
    } 
      
    $bx =0; $by=1; $bz=0; // Front
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Front"; 
    } 

    $bx =0; $by=-1; $bz=0; // Back
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Back"; 
    } 

    $bx =-1; $by=0; $bz=0; // Left
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Left"; 
    } 
    $bx =1; $by=0; $bz=0; // Right
    $directional=$ax*$bx + $ay*$by + $az*$bz;
    if ($directional > 0) {
       return "Right"; 
    } 
      
    return "General"; 
}


?>