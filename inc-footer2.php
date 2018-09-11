<?php echo'
            </div>
        </div>
    </article>    
    <footer class="bs-footer" role="contentinfo">
        <div class="container">
            <p class="text-center">Сайт был создан проектным подразделением компании "София-Декор" <a href="http://www.sofia-decor.ru">(http://www.sofia-decor.ru)</a> под руководством Черкашина Д.В.</p>
            <p class="text-center">Разработчик: Шишенко С.В. </p>
           
        </div>
    </footer> 
    <iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.js"></script> 
    <script src="./dist/js/application.js"></script> 
    <!--<script src="./dist/js/main.26.04.2018.js"></script> -->
    <script src="./dist/js/script2.js?v='. $script2Version .'"></script> 

   <script src="./dist/js/closest.js"></script>
	<script src="./dist/js/blazy.min.js"></script>
	<script>
    window.bLazy = new Blazy({
        //container: \'.container\',
        //validateDelay: 500,
		success: function(element){
			console.log("Element loaded: ", element.nodeName);
		}
    });
    
    </script>
    
    
    </body>
</html>
';?>