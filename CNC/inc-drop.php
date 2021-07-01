<div class="content">	
	<!-- Область для перетаскивания -->
	<div id="drop-files" ondragover="return false">
		<p>Перетащите файлы CNC сюда</p>
        <!-- <form id="frm"> -->
			<input type="file" id="uploadbtn" multiple >			
		<!-- </form> -->		
	</div><!-- drop-files -->	
	<!-- Список загруженных файлов -->    
</div>
<div id="file-name-holder"></div>
<input  id="dircnc"  name="folder" type="hidden"><br>
<!-- <input  id="dircnc"  name="folder" disabled><br> -->

<?php if($role ==DBfield::AROLE){ ?>
<button type="button" id="delFolder" style="float:right;">Удалить всю папку uploads</button>   
<?php } ?>  
<button type="button" id="clear">Очистить</button>  
</div> 