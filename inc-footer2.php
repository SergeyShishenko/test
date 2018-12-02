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
   var $depthmin =253;
   var $x=0;
   $( "#inlineRadio1" ).on( "click", function() {    
    $("#input_x").prop("disabled",true);
    $("#box-depth_x_input").prop("disabled",true);
    $("#box-depth_input").prop("disabled",false);
    $x=0;

    });
    $( "#inlineRadio2" ).on( "click", function() {

        $("#input_x").prop("disabled",false);
        // $("#input_x").attr("value",16);
        $("#box-depth_x_input").prop("disabled",false);
        $("#box-depth_input").prop("disabled",true);
        $depthmin =269;
        $("span.gap").text($depthmin);
        $x=1;
        $old2=269;
        
        
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
                    {  
                        if ($x==0)
                        {
                            $("#sidestab").show();$depthmin=265;$gap=15;$("span.gap").text($depthmin);
                            if($("#box-depth_input").val()<$depthmin){$("#box-depth_input").val($depthmin);}
                        }else
                        {
                            $("#sidestab").show();$depthmin=269;$gap=15;$("span.gap").text($depthmin);
                            if($("#box-depth_input").val()<$depthmin){$("#box-depth_input").val($depthmin);}
                        }
                    }
                    else{$("#sidestab").hide();$depthmin=253;$gap=3;$("span.gap").text($depthmin);$("#width_box_input_def").css("color", "black")}

                }
          });

// 250 + 15 + 16 !!!

          //глубина
          $("#box-depth_input").change(function()
           {
                if ($( this ).val()<$depthmin) {$( this ).val($old2);  $("#box-depth_def").css("color", "red"); }
                    else
                    {
                        $("#box-depth_def").css("color", "black");$old2=$("#box-depth_input").val();
                    $old2=$( this ).val();
                    var value=$( this ).val()-$gap;
                    calcfurn(value);

                    }
             });

             $("#box-depth_x_input").change(function()
             {
                  if ($( this ).val()<$depthmin) {$( this ).val($old2);  $("#box-depth_def").css("color", "red"); }
                      else
                      {
                          $("#box-depth_def").css("color", "black");$old2=$("#box-depth_x_input").val();
                      $old2=$( this ).val();
                      var value=$( this ).val()-$gap;
                      calcfurn(value);
  
                      }
               });
  





             function calcfurn(value){
                    switch(true) 
                    {
                        case value >= 250 && value < 300: 
                            // alert("250");
                           
                            $("span.calcarticul").text(250);
                            break;
                        
                        case value >= 300 && value < 350: 
                            // alert("300");
                            $("span.calcarticul").text(300);
                            break;
                        
                        case value >= 350 && value < 400: 
                            // alert("350");
                            $("span.calcarticul").text(350);
                            break;
                        
                        case value >= 400 && value < 450: 
                            // alert("400");
                            $("span.calcarticul").text(400);
                            break;
                        
                        case value >= 450 && value < 500: 
                            // alert("450");
                            $("span.calcarticul").text(450);
                            break;
                        
                        case value >= 500 && value < 550: 
                            // alert("500");
                            $("span.calcarticul").text(500);
                            break;
                        
                        case value >= 550 && value < 600: 
                            // alert("600");
                            $("span.calcarticul").text(600);
                            break;
                        
                        default: 
                            alert("Не получилось(");
                            break;
                        
                    }
                 
                 }


    </script>


    </body>
</html>
';?>