<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>status_sh</title>
 </head>
 <body>
<?php
include ("func.inc");

db_update_status($_POST['id_order'],$_POST['status']);

echo '<div>'.$_POST['id_order'].'</div>';

echo '<div>'.$_POST['status'].'</div>';
?>
 </body>
</html>