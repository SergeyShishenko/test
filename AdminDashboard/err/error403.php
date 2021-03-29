<?php $msg="Forbidden";?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $msg; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../../messages/css/style.css">
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:500" rel="stylesheet">
    <div class="instructions" onclick="history.back();"> <?php echo $msg; ?></div>
    <canvas></canvas>
    <script src="../../messages/js/index.js"></script>
</body>
</html>