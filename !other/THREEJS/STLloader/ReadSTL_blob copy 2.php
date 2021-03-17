<?php

if ($file['size']==84){
    
    $handle = fopen($file['tmp_name'], "rb");
    fseek($handle,80);// пропускаем заголовок
    $content = unpack('i', fread($handle, 4));    
    fclose($handle);  
    $data["head"] =  $content[1];return; 
}else{
    $handle = fopen($file['tmp_name'], "rb");
    $chunk=$file['size']/50;   
    $sum=$Front=$Back=$Top=$Bottom=$Left=$Right=$General=0;
    for ($j = 1; $j <= $chunk; $j++){
        // $arrTriangles[$j]['num'] = "Треугольник - $j"; 
        $NormalX=unpack('f', fread($handle, 4))[1];
        $NormalY=unpack('f', fread($handle, 4))[1];
        $NormalZ=unpack('f', fread($handle, 4))[1];
       
        // $arrTriangles[$j]['normal'] = [$NormalX , $NormalY , $NormalZ ] ;
       
        $directional = checkColinear($NormalX, $NormalY, $NormalZ);

        $Vertex_1_X=unpack('f', fread($handle, 4))[1];
        $Vertex_1_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_1_Z=unpack('f', fread($handle, 4))[1];
        $arrVert1=[$Vertex_1_X, $Vertex_1_Y, $Vertex_1_Z];  

        // $arrTriangles[$j]['vertex1'] = $arrVert1;

        $Vertex_2_X=unpack('f', fread($handle, 4))[1];
        $Vertex_2_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_2_Z=unpack('f', fread($handle, 4))[1];
        $arrVert2=[$Vertex_2_X ,$Vertex_2_Y, $Vertex_2_Z];  

        // $arrTriangles[$j]['vertex2'] =  $arrVert2 ;

        $Vertex_3_X=unpack('f', fread($handle, 4))[1];
        $Vertex_3_Y=unpack('f', fread($handle, 4))[1];
        $Vertex_3_Z=unpack('f', fread($handle, 4))[1];
        $arrVert3=[$Vertex_3_X, $Vertex_3_Y, $Vertex_3_Z];   

        // $arrTriangles[$j]['vertex3'] =  $arrVert3;
        
        unpack('s', fread($handle, 2))[1]; // END
       
        $strain=square($arrVert1,$arrVert2,$arrVert3);
        // $arrTriangles[$j]['area'] =  $strain;
        $sum += $strain;


        switch ($directional) {
            case 'Front':
                $Front += $strain;
              
                break;
            case 'Back':
                $Back += $strain;
              
                break;
            case 'Top':
                $Top += $strain;
            
                break;
            case 'Bottom':
                $Bottom += $strain;
             
                break;
            case 'Left':
                $Left += $strain;
             
                break;
            case 'Right':
                $Right += $strain;
             
                break;
            case 'General':
                $General += $strain;
             
                break;
                
        }
        
        // echo "<hr>";
    }// for
   
    fclose($handle);
    $data["totalarea"]=$sum;
    $data["Front"]=$Front;
    $data["Back"]=$Back;
    $data["Top"]=$Top;
    $data["Bottom"]=$Bottom;
    $data["Left"]=$Left;
    $data["Right"]=$Right;
    $data["General"]=$General;
    $data["data"]=$arrTriangles;return;
  
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
     $bx =0; $by=1; $bz=0; // Top
     $Colinear=$ay*$bz - $az*$by - $ax*$bz - $az*$bx + $ax*$by - $ay*$bx;   
        if ($Colinear==0) {
            if ( directional($ax, $ay, $az, $bx, $by, $bz)){
                return "Top"; 
            } else{
                
                return "Bottom"; 
            }
        } 
   
     $bx =0; $by=0; $bz=1; // Front
     $Colinear=$ay*$bz - $az*$by - $ax*$bz - $az*$bx + $ax*$by - $ay*$bx;   
        if ($Colinear==0) {        
            if ( directional($ax, $ay, $az, $bx, $by, $bz)){
                return "Front"; 
            } else{
                return "Back"; 
            }
        } 
 
     $bx =1; $by=0; $bz=0; // Right
     $Colinear=$ay*$bz - $az*$by - $ax*$bz - $az*$bx + $ax*$by - $ay*$bx;   
    if ($Colinear==0) {        
        if ( directional($ax, $ay, $az, $bx, $by, $bz)){
             return "Right";
        } else{
             
            return "Left";
        }
     }    
       
     return "General"; 
   
}

// сонаправленные векторы
function directional($ax, $ay, $az, $bx, $by, $bz){
    
    if (($ax*$bx + $ay*$by + $az*$bz) > 0) {
       return true; 
    } else{
        return false; 
    } 
    
}


?>