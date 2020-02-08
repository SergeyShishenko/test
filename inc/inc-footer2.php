
            </div>
        </div>
    </article>    
    <footer class="bs-footer" role="contentinfo">
        <div class="container">
            <p class="text-center">Сайт был создан проектным подразделением компании "София-Декор" <a href="http://www.sofia-decor.ru">(http://www.sofia-decor.ru)</a> под руководством Черкашина Д.В.</p>
            <p class="text-center">© 2018–<?php echo date("Y");?> Разработчик: Шишенко С.В. </p>
           
        </div>
    </footer> 
    <iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="./dist/js/bootstrap.js"></script> 
    <script src="./dist/js/application.js"></script> 
    <!--<script src="./dist/js/main.26.04.2018.js"></script> -->
    <script src="./dist/js/script2.js?v='<?php echo $script2Version; ?>'"></script> 
    <script src="./dist/js/calcMovento.js"></script>

   <script src="./dist/js/closest.js"></script>
    <script src="./dist/js/blazy.min.js"></script>
    <script src="./dist/js/bootstrap-number-input.js" ></script>
    <script src="./dist/js/vpi.js?v='<?php echo $vpijsVersion ; ?>'" ></script>
	
         <!-- Генерация -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  -->
    <!-- <script src="./dist/js/shortcut.js"></script> -->
    <script src="./dist/js/drop.js"></script>  
    <script src="./dist/js/selectcell.js?<?php echo $selectcell; ?>"></script>
    <script src="./dist/js/calc-bloka-pitaniya.js"></script>
    <?php if($role !="guest"){ ?>
    <script src="./dist/js/password-check.js?<?php echo $role; ?>"></script>
    <?php } ?>
    <script>
    window.bLazy = new Blazy({
        //container: \'.container\',
        //validateDelay: 500,
		success: function(element){
			// console.log("Element loaded: ", element.nodeName);
		}
    });
    
    </script>
   
  


        <script>
            if (!name) {name = new Date ().getTime (); location.reload (true)}
        </script> 
    
<?php 
if($item_profile_directory_Class=="active")
{
//   echo "
// <script>alert( document.location.href";
// // echo $item_profile_directory_Class;
// echo ");</script>
// ";  
echo 
'<script src="./dist/js/gallery.js"></script>
<script src="./dist/js/live-search-gallery.js"></script>';
}
else{
    echo 
'<script src="./dist/js/live-search.js"></script>';

}

?>

    </body>
</html>
