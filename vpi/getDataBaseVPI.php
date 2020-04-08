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

<?php if (strpos($table[0]['unit_obj_prop'], 'комплект') !== false ){

	$query = "SELECT * FROM `obj_owner_furnitur` WHERE `owner_obj_furnitur_prop_id` = {?}";
	$composit = $db->select($query, array($id)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()

?>
	<li class="menu-item-cm submenu-cm">
		<button type="button" class="menu-btn-cm contextm-toggle">
			<i class="fa fa-list-alt"></i>
			<span class="menu-text-cm">Состав комплекта:</span>
		</button>


		<menu class="menu-cm cm">
		<?php for ($i=0;$i<count($composit);$i++){
			$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
			$clist = $db->select($query, array($composit[$i]['obj_furnitur_prop_id']));
			$imgfurncurr = $clist[0]['fname_img_furn'];
			$imgfurncurr = isset($imgfurncurr) ? $imgfurncurr : './dist/filesdb/images/test.png';
		?>
			<li class="menu-item-cm">
				<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);" title="<?php echo $clist[0]['def_obj_prop'];?>">                       
					<span class="menu-text-cm clip"><?php echo $clist[0]['def_obj_prop'];?></span>
				</button>
				<img style="display:none;" class="togg"  src="<?php echo $imgfurncurr;?>"  width="200"  alt="<?php echo $clist[0]['def_obj_prop'];?>" >
			</li>
		<?php } ?>
		</menu>
	</li>
<?php
 }else{// если не комплект


	$query = "SELECT * FROM `obj_owner_furnitur` WHERE `obj_furnitur_prop_id` = {?}";
	$Used_with = $db->select($query, array($id)); // Запрос явно должен вывести таблицу, поэтому вызываем метод select()
	if (count($Used_with)>0){
?>
	<li class="menu-item-cm submenu-cm">
		<button type="button" class="menu-btn-cm contextm-toggle">
			<i class="fa fa-list-alt"></i>
			<!-- Используется с: -->
			<span class="menu-text-cm">Входит в состав:</span>
		</button>


		<menu class="menu-cm cm">
		<?php for ($i=0;$i<count($Used_with);$i++){
			$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
			$clist = $db->select($query, array($Used_with[$i]['owner_obj_furnitur_prop_id']));
			$imgfurncurr = $clist[0]['fname_img_furn'];
			$imgfurncurr = isset($imgfurncurr) ? $imgfurncurr : './dist/filesdb/images/test.png';
		?>
			<li class="menu-item-cm">
				<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);" title="<?php echo $clist[0]['def_obj_prop'];?>">                       
					<span class="menu-text-cm clip"><?php echo $clist[0]['def_obj_prop'];?></span>
				</button>
				<img style="display:none;" class="togg" src="<?php echo $imgfurncurr;?>"  width="200"  alt="<?php echo $clist[0]['def_obj_prop'];?>" >
			</li>
		<?php } ?>
		</menu>
		<li class="menu-item-cm submenu-cm">
			<button type="button" class="menu-btn-cm contextm-toggle">
			<i class="fa fa-handshake-o" aria-hidden="true"></i>
				<!-- Используется с: -->
				<span class="menu-text-cm">Используется с:</span>
			</button>
		</li>	
	</li>
<?php
}//if

 }
?>
	

	<!-- <li class="menu-separator-cm"></li> -->
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
	<!-- <li class="menu-separator-cm"></li> -->
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