<?php echo'
            </div>
        </div>
    </article>    
    <footer class="bs-footer" role="contentinfo">
        <div class="container">
            <p class="text-center">Сайт был создан проектным подразделением компании "София-Декор" <a href="http://www.sofia-decor.ru">(http://www.sofia-decor.ru)</a> под руководством Черкашина Д.В.</p>
            <p class="text-center">Разработчик: Шишенко С.В. </p>
            <p><button type="button" class="btn btn-default center" onclick="location.href=\'exit.php\';">  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Выйти</button></p>
        </div>
    </footer> 
    <iframe src="index.php" width="100%" height="600" id="iframe_1"  style="display: none"  ></iframe>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.js"></script> 
    <script src="./dist/js/application.js"></script> 
   <script src="./dist/js/script.js?v=6"></script>
   <script>
   var delta = 0;
//    onWheel onwheel MozMousePixelScroll onmousewheel
$(\'.sub\').bind(\'mousewheel DOMMouseScroll \', function(e){

    // var dat = $(e.delegateTarget).data(); //in case you have set some, read it here.
    // var datx = dat.x || 0; // just to show how to get specific out of jq-data object
  
    // var eo = e.originalEvent;
    // var xy = eo.wheelDelta || -eo.detail; //shortest possible code
    // var x = eo.wheelDeltaX || (eo.axis==1?xy:0);
    // var y = eo.wheelDeltaY || (eo.axis==2?xy:0); // () necessary!
    // console.log(x,y);

    // e = e || window.event;
    // var delta = e.deltaY || e.detail || e.wheelDelta;
    // e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    if(e.originalEvent.wheelDelta /120 > 0) {
        // alert(\'up\');
        // e.preventDefault();
        // console.log(e.originalEvent.wheelDelta);
        delta = parseInt(e.originalEvent.wheelDelta/120, 10) +  delta;
        console.log(\'up\');
         console.log(delta);
        //  alert(delta);
        e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }
    else{
        // alert(\'down\');
        // e.preventDefault();
        // console.log(e.originalEvent.wheelDelta);
        // console.log(delta);
        delta = parseInt(e.originalEvent.wheelDelta/120, 10) +  delta;
        console.log(\'down\');
        console.log(delta);
        
        // alert(delta);
        e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }
   
});</script>
    </body>
</html>
';?>