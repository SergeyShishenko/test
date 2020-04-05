<?php
// vpi\getDataBaseVPI.php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/Classes/PHPExcel/IOFactory.php')) {
	$site='';// для сайта !!!!!!!
}
else {	
	$site='/www';// localhost !!!!!!!
}

require_once dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php' ;
require_once dirname(dirname(__FILE__)).'/vendor/MyClass/class_DataBase.php';

// $dbconn=dbconnect();
$db = class_DataBase::getDB(); // Создаём объект базы данных
// echo "<pre>";
// var_dump ($_POST["id"]);
// echo "</pre>";
if (isset($_POST["del"])) {
	$id=explode("_",$_POST["id"])[1];
	$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
	$table = $db->select($query, array($id)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
	 if ($table){ //Если есть в БД
     $imgfurn = $table[0]['fname_img_furn'];
	 }
	 $imgfurn = isset($imgfurn) ? $imgfurn : './dist/filesdb/images/test.png';

?>
<!-- <menu class="menu-cm" id="contextmenu">     -->
<?php if ($_POST["id"] !=""){?>
	<li class="menu-item-cm submenu-cm">
		<button type="button" class="menu-btn-cm">
			<i class="fa fa-list-alt"></i>
			<span class="menu-text-cm">Состав :</span>
		</button>
		<menu class="menu-cm">
			<li class="menu-item-cm">
				<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);">                       
					<span class="menu-text-cm">Комментарии</span>
				</button>
				<img style="display:none;"  src="./dist/filesdb/images/test.png"  width="200"  alt="" >
			</li>
			<li class="menu-item-cm">
				<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);">                     
					<span class="menu-text-cm">Поделиться</span>                        
				</button>
				<img style="display:none;"  src="./dist/filesdb/images/test.png"  width="200"  alt="" > 			
			</li>
		</menu>
	</li>
<?php }?>

	<li class="menu-separator-cm"></li>
	<li class="menu-item-cm">
		<!-- <img   src="./dist/filesdb/images/test.png"  width="200"  alt="" >  -->
		<img   src="<?php echo $imgfurn;?>"  width="200"  alt="" > 
	</li>
	<li class="menu-item-cm">
		<!-- <button type="button" class="menu-btn" data-element="element" onclick="alert(this.dataset.element);delSel(this);" id='del'> -->
		<button type="button" class="menu-btn-cm" data-element="<?php echo $_POST["del"];?>" onclick="delSel(this);" id='del'>
			<i class="fa fa-trash-o"></i>
			<span class="menu-text-cm">Удалить строку</span>
		</button>
	</li>
	<li class="menu-separator-cm"></li>
	<li class="menu-item-cm ">
		<button type="button" class="menu-btn-cm" onclick="hideMenu();" id="chancel_cmenu">
			<i class="fa fa-times-circle"></i>
			<span class="menu-text-cm">Закрыть</span>
		</button>
	</li>	
<!-- </menu> -->
	
<?php

	// $(".list").prepend("<li class='item'> Тест </li>");
}else{
	echo "Нет в базе";
}

?>