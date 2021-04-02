<?php
// include '../inc/inc-session-start.php';
// session_start();

 $dir="/www/AdminDashboard"; 
 ?>
<!DOCTYPE html>
<!-- F:\YandexDisk\web\!!!Шаблон Admin - панель\Шаблон Admin - панель\!!!!!!portoadmin\themeforest-8539472-porto-admin-responsive-html5-template\Documentation -->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<title>Админ панель</title>

	<!-- <meta name="description" content="">
	<meta name="author" content="Okler Themes">
	<meta name="copyright" content="Okler Themes">

	<meta name="date" content="1970-01-01T01:00:00+01:00"> -->

	<link rel="stylesheet" href="<?php echo $dir; ?>/css/documenter_style.css" media="all">
	<!-- <link rel="stylesheet" href="css/theme.css" media="all"> -->
	<!-- <link rel="stylesheet" href="js/google-code-prettify/prettify.css" media="screen"> -->
	<!-- <script src="js/google-code-prettify/prettify.js"></script> -->

	<link rel="stylesheet" href="<?php echo $dir; ?>/css/doc.css" media="screen">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $dir; ?>/favicon.png" />

	<script src="<?php echo $dir; ?>/js/jquery.js"></script>

	<!-- <script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.easing.js"></script>  -->

	<!-- <script>document.createElement('section'); var duration = '500', easing = 'swing';</script> -->


	<style>

	</style>

</head>

<body class="documenter-project-porto-admin">
	<div id="documenter_sidebar">
		<a href="#documenter_cover" id="documenter_logo"></a>
		<ul id="documenter_nav">
			<!-- <li><a class="current" href="#documenter_cover">Start</a></li> -->
			<li><a href="<?php echo $dir; ?>/main" title="Гравная" class="" >Главная</a></li>
			<!-- <li><a href="<?php //echo $dir; ?>/tips" title="Советы">Советы</a></li> -->
			<li><a href="<?php echo $dir; ?>/sofiausers" title="SofiaUsers">Пользователи</a></li>			 
			<li><a href="<?php echo $dir; ?>/kit" title="OwnerFurnitur">Комплектация фурнитуры</a></li>			 
			
			<!-- <li><a href="<?php// echo $dir; ?>/portfolio" title="Portfolio">Portfolio</a></li> -->
			<!-- <li><a href="html_structure" title="HTML Structure">HTML Structure</a></li> -->
			<!-- <li><a href="css"  title="CSS">CSS</a></li> -->
			<!-- <li><a href="js" title="Javascript">Javascript</a></li> -->
			
			<!-- <li><a href="skin" title="Skin">Skin</a></li>
			<li><a href="icons" title="Icons">Icons</a></li> -->
			
			<li><a  href="<?php echo $dir; ?>/login" title="Регистрация пользователя">Регистрация пользователя</a></li>
			<!-- <li><a class="disabled" href="customization_styles" title="Customization & Styles">Customization & Styles</a></li> -->
			<!-- <li><a href="source_credits" title="Source & Credits">Source & Credits</a></li> -->
			<li><a class="disabled" href="<?php echo $dir; ?>/PHPINFO" title="PHPINFO">PHPINFO</a></li>
			<li><a href="../shablony-dokumentov-titulnyy-kd.php" class="nav">Вернуться на сайт</a></li>
			
		</ul>
		<div id="documenter_copyright">Панель управления сайтом<br>
		 © 2021
		 <!-- –<?php// echo date("Y");?>  -->
		</div>
	</div>
	<script>
	var sel="<?php echo explode("_", $content_view)[0];?>";
	if (sel !== "404"){
		// alert('a[href="'+sel+'"]');
		// sel=<?php echo $dir; ?>+ "/"+sel;
		// console.log(sel);
	element = document.querySelector('a[href$="'+sel+'"]');
	element.classList.add("current");	
	}
	
	</script>
	
	<div id="documenter_content">	
	<?php //echo $content_view; ?>
		<?php include __ROOTR__.'/application/views/'.$content_view; ?>
	</div>
	<!-- <script src="js/script.js"></script> -->

</body>

</html>