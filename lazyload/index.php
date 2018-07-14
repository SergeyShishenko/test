<!-- 

Author WH-DB.COM
Статья: http://ru.wh-db.com/article/realizacia-lazy-load-na-jquery/
Канал YouTube: https://www.youtube.com/channel/UCgXre66qzcu5642OaqXbnRg
Группа VK: http://vk.com/service_web_hosting

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LazyLoad</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="jquery.lazyload.min.js" type="text/javascript"></script>  
	<style>
		.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
	</style>
</head>
<body>
	<!-- -->
	<?php for ($i = 1; $i <= 10; $i++) { ?>
		<img class="lazy center-block" data-original="img/<?php echo $i; ?>.png" 
		width="800" height="600" 
		><br>
	<?php } ?>



	<script type="text/javascript">

		$(document).ready(function () {
			$("img.lazy").lazyload({
			    effect : "fadeIn"
			});
			
		});

	</script>
</body>
</html>