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
		$table = $db->select($query, array($id)); 
		if ($table){ //Если есть в БД
			$imgfurn = $table[0]['fname_img_furn'];
		}
		$imgfurn = isset($imgfurn) ? $imgfurn : './dist/filesdb/images/test.png';

		if (strpos($table[0]['unit_obj_prop'], 'комплект') !== false && $table[0]['obj_indivisible_complect']!=1){// Если комплект
			$query = "SELECT * FROM `obj_owner_furnitur` WHERE `owner_obj_furnitur_prop_id` = {?}";
			$composit = $db->select($query, array($id)); 

?>
			<li class="menu-item-cm submenu-cm">
				<button type="button" class="menu-btn-cm contextm-toggle" data-togg="cm2">
					<i class="fa fa-list-alt"></i>
					<span class="menu-text-cm">Состав комплекта:</span>
				</button>				
					<menu class="menu-cm cm" id="cm1">
						<?php 
						$strId="{";
						for ($i=0;$i<count($composit);$i++){
							$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
							$clist = $db->select($query, array($composit[$i]['obj_furnitur_prop_id']));
							$imgfurncurr = $clist[0]['fname_img_furn'];
							$imgfurncurr = isset($imgfurncurr) ? $imgfurncurr : './dist/filesdb/images/test.png';
							$objurl=$clist[0]['url_furnitur_obj_prop'];
							if (is_null($objurl)){
								$objurl="javascript:void(0)";
							}else{
								$objurl="".$objurl.'" target="_blank"';
							}
						?>
							<li class="menu-item-cm">
								<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);" title="<?php echo $clist[0]['def_obj_prop'];?>">                       
									<span class="menu-text-cm clip"><?php echo $clist[0]['def_obj_prop'];?></span>
								</button>
								<img style="display:none;" class="togg"  src="<?php echo $imgfurncurr;?>"  width="200"  alt="<?php echo $clist[0]['def_obj_prop'];?>" >
								<p class="menu-p"  title="<?php

								 echo $composit[$i]['number_in_set']." - ";
								 if ($clist[0]['obj_indivisible_complect'] ){ echo "компл." ;} else {echo "шт.";}
								// echo "  ID-".$clist[0]['obj_furnitur_prop_id'];//
								 $strId.="'".$clist[0]['obj_furnitur_prop_id']."':".$composit[$i]['number_in_set'].",";
								 ?>"><a href="<?php echo $objurl;?>"><?php echo $clist[0]['articul_furnitur_obj'];?></a></p>
							</li>
						<?php } ?>
					</menu>
			</li>
			<li class="menu-item-cm ">
				<button type="button" class="menu-btn-cm" onclick="splitAset(this,<?php echo rtrim($strId,',').'}';?>);" id="splitAset" data-parent="<?php echo $_POST["del"];?>" >
					<i class="fa fa-chain-broken"></i>
					<span class="menu-text-cm">Разбить комплект</span>
				</button>
			</li>
<?php
	}else{// если не комплект
			$query = "SELECT * FROM `obj_owner_furnitur` WHERE `obj_furnitur_prop_id` = {?}  AND `owner_obj_furnitur_prop_id` IS NOT NULL";
			$Be_a_part = $db->select($query, array($id)); 
			if (count($Be_a_part)>0){
					?>
				<li class="menu-item-cm submenu-cm">
					<button type="button" class="menu-btn-cm contextm-toggle" data-togg="cm2">
						<i class="fa fa-list-alt"></i>
						<!-- Используется с: -->
						<span class="menu-text-cm">Входит в состав:</span>
					</button>
					<menu class="menu-cm cm" id="cm1">
					<?php for ($i=0;$i<count($Be_a_part);$i++){
						$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
						$clist = $db->select($query, array($Be_a_part[$i]['owner_obj_furnitur_prop_id']));
						$imgfurncurr = $clist[0]['fname_img_furn'];
						$imgfurncurr = isset($imgfurncurr) ? $imgfurncurr : './dist/filesdb/images/test.png';
						$objurl=$clist[0]['url_furnitur_obj_prop'];
						if (is_null($objurl)){
							$objurl="javascript:void(0)";
						}else{
							$objurl="".$objurl.'" target="_blank"';
						}
					?>
						<li class="menu-item-cm">
							<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);" title="<?php echo $clist[0]['def_obj_prop'];?>">                       
								<span class="menu-text-cm clip"><?php echo $clist[0]['def_obj_prop'];?></span>
							</button>
							<img style="display:none;" class="togg" src="<?php echo $imgfurncurr;?>"  width="200"  alt="<?php echo $clist[0]['def_obj_prop'];?>" >
							<p class="menu-p"><a href="<?php echo $objurl;?>"><?php echo $clist[0]['articul_furnitur_obj'];?></a></p>
						</li>
					<?php } ?>
					</menu>			
				</li>
<?php
	}//if count($Be_a_part)>0

			///////////////
			$query = "SELECT * FROM `obj_owner_furnitur` WHERE `used_with_obj_furnitur_prop_id` = {?} ";
			$used_with = $db->select($query, array($id)); 
			if (count($used_with)>0){
					?>
				<li class="menu-item-cm submenu-cm">
					<button type="button" class="menu-btn-cm contextm-toggle" data-togg="cm1">
					<i class="fa fa-handshake-o" aria-hidden="true"></i>
						<!-- Используется с: -->
						<span class="menu-text-cm">Используется с:</span>
					</button>
					<menu class="menu-cm cm" id="cm2">
					<?php for ($i=0;$i<count($used_with);$i++){
						$query = "SELECT * FROM `obj_furnitur_prop` WHERE `obj_furnitur_prop_id` = {?}";
						$ulist = $db->select($query, array($used_with[$i]['obj_furnitur_prop_id']));
						$imgfurncurr = $ulist[0]['fname_img_furn'];
						$imgfurncurr = isset($imgfurncurr) ? $imgfurncurr : './dist/filesdb/images/test.png';
						$objurl=$ulist[0]['url_furnitur_obj_prop'];
						if (is_null($objurl)){
							$objurl="javascript:void(0)";
						}else{
							$objurl="".$objurl.'" target="_blank"';
						}
					?>
						<li class="menu-item-cm">
							<button type="button" class="menu-btn-cm img-sub" onclick="buttonToggle(this);" title="<?php echo $ulist[0]['def_obj_prop'];?>">                       
								<span class="menu-text-cm clip"><?php echo $ulist[0]['def_obj_prop'];?></span>
							</button>
							<img style="display:none;" class="togg" src="<?php echo $imgfurncurr;?>"  width="200"  alt="<?php echo $ulist[0]['def_obj_prop'];?>" >
							<p class="menu-p"><a href=<?php echo $objurl;?>><?php echo $clist[0]['articul_furnitur_obj'];?></a></p>
						</li>
					<?php } ?>
					</menu>				
				</li>
	<?php
	}//if count($Be_a_part)>0
	///////////////
 	}// если не комплект
?>
	<li class="menu-item-cm">		
		<img   src="<?php echo $imgfurn;?>"  width="200"  alt="" > 
	</li>
	<li class="menu-item-cm">		
		<button type="button" class="menu-btn-cm" data-element="<?php echo $_POST["del"];?>" onclick="delSel(this);" id='del'>
			<i class="fa fa-trash-o"></i>
			<span class="menu-text-cm">Удалить строку</span>
		</button>
	</li>	
	<li class="menu-item-cm ">
		<button type="button" class="menu-btn-cm" onclick="hideMenu();" id="chancel_cmenu">
			<i class="fa fa-times-circle"></i>
			<span class="menu-text-cm">Закрыть</span>
		</button>
	</li>	
	<!--<li class="menu-separator-cm"></li> -->
	<!-- </menu> -->
	
<?php
	// $(".list").prepend("<li class='item'> Тест </li>");
	}else{ // NOT (isset($_POST["del"]))
		echo "Нет в базе";
	}

?>