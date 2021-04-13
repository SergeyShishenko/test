<?php
// include '../inc/inc-session-start.php';
// session_start();

 $dir="/www/AdminDashboard"; 
 $bdir="/www"; 
 ?>
<!DOCTYPE html>

<html lang="ru">


<head>
    <meta charset="utf-8">

    <title>Админ панель</title>


    <link rel="stylesheet" href="<?php echo $dir; ?>/css/documenter_style.css" media="all">
    <!-- <link rel="stylesheet" href="css/theme.css" media="all"> -->
    <!-- <link rel="stylesheet" href="js/google-code-prettify/prettify.css" media="screen"> -->
    <!-- <script src="js/google-code-prettify/prettify.js"></script> -->
    <?php if(Route::$contr_name=="addfurn") { ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/addfurn.css">
    <?php }	?>
   
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/doc.css" media="screen">
 <?php if(Route::$contr_name=="login") { ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/skeleton.css">
   
    <?php }	?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $dir; ?>/favicon.png" />



</head>

<body class="documenter-project-porto-admin">
    <div id="documenter_sidebar">
        <a href="#documenter_cover" id="documenter_logo"></a>
        <ul id="documenter_nav">
            <!-- <li><a class="current" href="#documenter_cover">Start</a></li> -->
            <li><a href="<?php echo $dir; ?>/main" title="Гравная" class="">Главная</a></li>
            <!-- <li><a href="<?php //echo $dir; ?>/tips" title="Советы">Советы</a></li> -->
            <li><a href="<?php echo $dir; ?>/sofiausers" title="SofiaUsers">Пользователи</a></li>
            <li><a href="<?php echo $dir; ?>/kit" title="OwnerFurnitur">Комплектация фурнитуры</a></li>
            <li><a href="<?php echo $dir; ?>/addfurn" title="AddFurn">AddFurn</a></li>
            <!-- <li><a href="<?php// echo $dir; ?>/portfolio" title="Portfolio">Portfolio</a></li> -->
            <!-- <li><a href="html_structure" title="HTML Structure">HTML Structure</a></li> -->
            <!-- <li><a href="css"  title="CSS">CSS</a></li> -->
            <!-- <li><a href="js" title="Javascript">Javascript</a></li> -->

            <!-- <li><a href="skin" title="Skin">Skin</a></li>
			<li><a href="icons" title="Icons">Icons</a></li> -->

            <li><a href="<?php echo $dir; ?>/login" title="Регистрация пользователя">Регистрация пользователя</a></li>
            <!-- <li><a class="disabled" href="customization_styles" title="Customization & Styles">Customization & Styles</a></li> -->
            <!-- <li><a href="source_credits" title="Source & Credits">Source & Credits</a></li> -->
            <li><a class="disabled" href="<?php echo $dir; ?>/PHPINFO" title="PHPINFO">PHPINFO</a></li>
            <li><a href="<?php echo $bdir; ?>/shablony-dokumentov-titulnyy-kd.php" class="nav">Вернуться на сайт</a>
            </li>

        </ul>
        <div id="documenter_copyright">Панель управления сайтом<br>
            © 2021
            <!-- –<?php// echo date("Y");?>  -->
        </div>
    </div>
    <script>
    var sel = "<?php echo explode("_", $content_view)[0];?>";
    if (sel !== "404") {
        // alert('a[href="'+sel+'"]');
        // sel=<?php echo $dir; ?>+ "/"+sel;
        // console.log(sel);
        element = document.querySelector('a[href$="' + sel + '"]');
        element.classList.add("current");
    }
    </script>

    <div id="documenter_content">      
        <?php include __ROOTR__.'/application/views/'.$content_view; ?>
    </div>


<script src="<?php echo $dir; ?>/js/jquery.js"></script>
    <?php if(Route::$contr_name=="addfurn") { ?>
    <script src="<?php echo $dir; ?>/js/addfurn.js"></script>    
    <?php }?>
    <?php if(Route::$contr_name=="login") { ?>
    <script src="<?php echo $dir; ?>/js/seourl.js"></script>    
    <?php }?>
</body>

</html>