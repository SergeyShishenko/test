

// калькулятор MOVENTO
    var $old_width=parseInt($("#width_box_input").val());
    var $old_depth=parseInt($("#box-depth_input").val());
    var $old_depth_x=parseInt($("#box-depth_x_input").val());
    // var $x=parseInt($("#input_x").val());   
    var $x=0;   
    var $gap=3;
    var $depthmin =253;
    var $Radio=1;

    $( "#inlineRadio1" ).on( "click", function() {  //накладной  
      $("#input_x").prop("disabled",true);
      $("#box-depth_x_input").prop("disabled",true);
      $("#box-depth_input").prop("disabled",false);
      $x=0;
      $depthmin =250 + $x + $gap;        
      $("span.gap").text($depthmin);
      if (parseInt($("#box-depth_input").val())<$depthmin) 
          {  $("#box-depth_input").val($depthmin); }
      $Radio=1;
      

    });
    $( "#inlineRadio2" ).on( "click", function() { //вкладной
        
        $("#input_x").prop("disabled",false);
        // $("#input_x").attr("value",16);
        $("#box-depth_x_input").prop("disabled",false);
        
        $("#box-depth_input").prop("disabled",true);
        $x=parseInt($("#input_x").val()); 
        $depthmin =250 + $x + $gap;
        $old_depth=$depthmin;
        $("span.gap2").text($depthmin);
        // alert($depthmin);
        
        if (parseInt($("#box-depth_x_input").val())<$depthmin) 
        {  $("#box-depth_x_input").val($depthmin); }
        // alert($depthmin);
        $("span.gap2").text($depthmin);
        $Radio=2; 
    });

    $(".only_number").keypress(function(e) {
        functimer();
        if(e.which != 13){
          if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
          return false;
          }
        }
    });
    //ширина
    $("#width_box_input").change(function() {
        // alert(15+parseInt($("span.calcarticul:first").text(), 10));
    
      if ($( this ).val()<286 || $( this ).val()>1368) {$( this ).val($old_width); $("#width_box_input").val($old_width); $("#width_box_input_def").css("color", "red"); }//ошибка
          else{
              $("#width_box_input_def").css("color", "black");$("#box-depth_def").css("color", "black");$old_width=$("#width_box_input").val();
              if ($( this ).val()>600)
              {  
                  if ($Radio==1)
                  {
                    // alert($x);
                    // alert(15+parseInt($("span.calcarticul:first").text(), 10));
                    $gap=15; $depthmin =250 + $x + $gap;$("span.gap").text($depthmin);

                    if($("#box-depth_input").val()<= 15+parseInt($("span.calcarticul:first").text(), 10)){ 
                        $("#sidestab").removeClass("dis");
                    }
                    //   $("#sidestab").removeClass("dis");$gap=15; $depthmin =250 + $x + $gap;$("span.gap").text($depthmin);
                      
                      calcsidestab($("span.calcarticul:first").text());

                      if($("#box-depth_input").val()<$depthmin){$("#box-depth_input").val($depthmin);}
                  }else //$Radio==2
                  {
                    // alert($Radio);
                    // alert(15+parseInt($("span.calcarticul:first").text(), 10));
                      $("#sidestab").removeClass("dis");$gap=15; $depthmin =250 + $x + $gap;$("span.gap2").text($depthmin);
                   
                      calcsidestab($("span.calcarticul:first").text());

                      if($("#box-depth_x_input").val()<$depthmin){$("#box-depth_x_input").val($depthmin);}
                  }
              }
              else // < 600
              {
                  if ($Radio==1)
                  {
                    // alert($Radio);
                      $("#sidestab").addClass("dis");$gap=3; $depthmin =250 + $x + $gap;$("span.gap").text($depthmin);$("#width_box_input_def").css("color", "black");
                    
                      if($("#box-depth_input").val()<$depthmin){$("#box-depth_input").val($depthmin);}
                  }else //$Radio==2
                  {
                    // alert($Radio);
                      $("#sidestab").addClass("dis");$gap=3; $depthmin =250 + $x + $gap;$("span.gap2").text($depthmin);$("#width_box_input_def").css("color", "black");
                      if($("#box-depth_x_input").val()<$depthmin){$("#box-depth_x_input").val($depthmin);}
                  }
                

              }

          }
    });

     // 250 + 15 + 16 !!!

    //глубина
    $("#box-depth_input").change(function() //накладной
    {
      
      if ($( this ).val()<$depthmin) 
      {$( this ).val($old_depth);  $("#box-depth_def").css("color", "red"); }//ошибка
          else
          {
              $("#box-depth_def").css("color", "black");$old_depth=parseInt($("#box-depth_input").val());
              $old_depth=parseInt($( this ).val());
              var value=$( this ).val()-$gap;
              calcfurn(value);
              calcsidestab($("span.calcarticul:first").text());
// alert(15+parseInt($("span.calcarticul:first").text(), 10));
              if($("#box-depth_input").val()<= 15+parseInt($("span.calcarticul:first").text(), 10) && $("#width_box_input").val>600 ){ 
                $("#sidestab").removeClass("dis");
            }
      
          }
    });

    $("#input_x").change(function() // вкладной
    {
      $x=parseInt($( this ).val());
      $depthmin =250 + $x + $gap;
      $("span.gap2").text($depthmin);
      if ($("#box-depth_x_input").val()<$depthmin) 
      {$("#box-depth_x_input").val($depthmin);$old_depth=$depthmin;}
      else
      {
          $("#box-depth_def2").css("color", "black");$old_depth=parseInt($("#box-depth_x_input").val());

          //  $old_depth=parseInt($( this ).val());
          var value=parseInt($("#box-depth_x_input").val())-$gap-$x;
          calcfurn(value);
          calcsidestab($("span.calcarticul:first").text());

      }
    });

    $("#box-depth_x_input").change(function() // вкладной
    {
      if ($( this ).val()<$depthmin) 
        {$( this ).val($old_depth);  $("#box-depth_def2").css("color", "red"); }
        else
        {
            $("#box-depth_def2").css("color", "black");$old_depth=parseInt($("#box-depth_x_input").val());
            $old_depth=parseInt($( this ).val());
            var value=parseInt($( this ).val())-$gap-$x;
            calcfurn(value);
            calcsidestab($("span.calcarticul:first").text());

        }
    });


    function calcsidestab(value){
        switch(true) 
        {
            case value >= 250 && value <= 400:
                // alert("400");
                $("span.calcarticul2").parent().data('objfurnid','2');
                $("span.calcarticul2").text(400);
                $( ".animated" ).addClass("tada");
                break;
            
                case value > 400 && value <= 600:
                // alert("600-"+value);
                $("span.calcarticul2").parent().data('objfurnid','9');
                $("span.calcarticul2").text(600);
                $( ".animated" ).addClass("tada");
                break;
            
                case value   > 600: 
                // alert("750-"+value);
                $("span.calcarticul2").parent().data('objfurnid','11');
                $("span.calcarticul2").text(750);
                $( ".animated" ).addClass("tada");
                break;
            
      
            
            default: 
                alert("Не получилось( "+value);
                break;
            
        }
    
    }


    function calcfurn(value){
      switch(true) 
      {
          case value >= 250 && value < 300: 
              // alert("250");
              $("span.calcarticul").parent().data('objfurnid','1');
              $("span.calcarticul").text(250);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 300 && value < 350: 
              // alert("300");
              $("span.calcarticul").parent().data('objfurnid','3');
              $("span.calcarticul").text(300);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 350 && value < 400: 
              // alert("350");
              $("span.calcarticul").parent().data('objfurnid','4');
              $("span.calcarticul").text(350);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 400 && value < 450: 
              // alert("400");
              $("span.calcarticul").parent().data('objfurnid','5');
              $("span.calcarticul").text(400);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 450 && value < 500: 
              // alert("450");
              $("span.calcarticul").parent().data('objfurnid','6');
              $("span.calcarticul").text(450);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 500 && value < 550: 
              // alert("500");
              $("span.calcarticul").parent().data('objfurnid','7');
              $("span.calcarticul").text(500);
              $( ".animated" ).addClass("tada");
              break;
          
          case value >= 550 && value < 600: 
          
              // alert("600");
              $("span.calcarticul").parent().data('objfurnid','8');
              $("span.calcarticul").text(550);
              $( ".animated" ).addClass("tada");
              break;
          case value >= 600 : 
          
              // alert("600");
              $("span.calcarticul").parent().data('objfurnid','10');
              $("span.calcarticul").text(600);
              $( ".animated" ).addClass("tada");
              break;
          
          default: 
              alert("Не получилось(");
              break;
          
      }
        
    }

    $( "#box-depth_input" ).focus(function() {
        $( ".animated" ).removeClass("tada");
      
        //  alert( "Handler for .focus() called." );animated
      
    });

    function functimer() {
        $( ".animated" ).removeClass("tada");
    }
                        
    setTimeout(functimer, 500);
//    калькулятор MOVENTO end



