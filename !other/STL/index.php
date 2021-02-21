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
    document.write(key + ': ' +
    "<br>"+
    '..normal '+
     value['normal'][0] +" "+ value['normal'][1] +" "+ value['normal'][2] 
     +"<br>"+
     value['colinear']+"<br>"
     )  

}
forEach(obj, fcallback)

</script>   
</body>
</html>
