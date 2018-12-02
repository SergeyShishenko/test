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
   
    <script>
    // Перезагрузить текущую страницу, без использования кэша     
    //$(document).ready(function(){ window.location.reload(true);}
   </script>
   <script>
//    калькулятор
   var $old=$("#width_box_input").val();
   var $old2=$("#box-depth_input").val();
   var $gap=3;
   var $widthmin =253;
   $( "#inlineRadio1" ).on( "click", function() {    
    $("#input_x").prop("disabled",true);
    $("#box-depth_x_input").prop("disabled",true);
    $("#box-depth_input").prop("disabled",false);

    });
    $( "#inlineRadio2" ).on( "click", function() {

        $("#input_x").prop("disabled",false);
        // $("#input_x").attr("value",16);
        $("#box-depth_x_input").prop("disabled",false);
        $("#box-depth_input").prop("disabled",true);
        
        
        });
        $(".only_number").keypress(function(e) {
            if(e.which != 13){
              if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
               return false;
              }
            }
          });
         //ширина
          $("#width_box_input").change(function() {
            if ($( this ).val()<286 || $( this ).val()>1368) 
            {$( this ).val($old); $("#width_box_input").val($old); $("#width_box_input_def").css("color", "red"); }
                else{$("#width_box_input_def").css("color", "black");$("#box-depth_def").css("color", "black");$old=$("#width_box_input").val();
                    if ($( this ).val()>600)
                    {$("#sidestab").show();$widthmin=265;$old2=265;$("span.gap").text($widthmin);
                        if($("#box-depth_input").val()<$widthmin){$("#box-depth_input").val($widthmin);}
                    }
                    else{$("#sidestab").hide();$widthmin=253;$("span.gap").text($widthmin);$("#width_box_input_def").css("color", "black")}

                }
          });
          //глубина
          $("#box-depth_input").change(function() {
            if ($( this ).val()<$widthmin) {$( this ).val($old2); $("#box-depth_def").val($old2); $("#box-depth_def").css("color", "red"); }
                else{$("#box-depth_def").css("color", "black");$old2=$("#box-depth_input").val();
                   // if ($( this ).val()>600)
                   // {$("#sidestab").show();}
                   // else{$("#sidestab").hide();}


                }
          });
    </script>


    </body>
</html>
';?>