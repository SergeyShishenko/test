<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="shortcut icon" href="stl.png" type="image/x-icon"> 
    <title>Чтение STL</title>
</head>
<body>
<script>obj= <?php echo include "ReadSTL.php"; ?>; 
function forEach(data, callback){
  for(var key in data){
    if(data.hasOwnProperty(key)){
      callback(key, data[key]);
    }
  }
}
function fcallback(key, value){
  if (key!=="totalsum"){
      document.write(key + ': ' 
      + "<br>"
      + '..normal: '
      + value['normal'][0] +" "+ value['normal'][1] +" "+ value['normal'][2]  + "<br>"
      + '..колинеарно: ' + value['colinear']+"<br>"
      + '..соноправлен: ' + value['directional']+"<br>"
      + '..вершина1: ' 
      + value['vertex1'][0] +" "+ value['vertex1'][1] +" "+ value['vertex1'][2] + " <br>"
      + '..вершина2: ' 
      + value['vertex2'][0] +" "+ value['vertex2'][1] +" "+ value['vertex2'][2] + " <br>"
      + '..вершина3: ' 
      + value['vertex3'][0] +" "+ value['vertex3'][1] +" "+ value['vertex3'][2] + " <br>"
      + '..площадь: ' + value['strain']+" мм&sup2;<br>"
      );
    } else{
      document.write("<br>****<br>");
      document.write("Площадь поверхности: " + parseFloat((value / 1000000).toFixed(3)) +" м&sup2");
    } 

}
forEach(obj, fcallback)

</script>   
</body>
</html>
