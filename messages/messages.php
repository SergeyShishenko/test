<?php  
// messages\messages.php 
if (isset($_GET['msg'])){

switch ($_GET['msg']) {
  
  case 1:
      $msg = "Ваш email подтвержден!";
      break;
  case 2:
      $msg = "Ваш email уже подтвержден!";
      break;
  case 3:
      $msg = "Неверный код подтверждения!";
      break;
  default:
    $msg = 'Привет!';
} 
}else{
$msg = 'Forbidden';
}
?>
<!DOCTYPE html>
<html lang="ru" >

<head>
  <meta charset="UTF-8">
  <title><?php echo $msg; ?></title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:500" rel="stylesheet">

  <div class="instructions"> <?php echo $msg; ?></div>

<canvas></canvas>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
