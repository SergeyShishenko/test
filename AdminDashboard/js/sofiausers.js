$(document).ready(function() {

//   console.log('sofiausers');
  $(function()	{
	$('td').click(function(e)	{
		//ловим элемент, по которому кликнули
		var t = e.target || e.srcElement;
		//получаем название тега
      
        //Проверим класс
        // console.log(t.classList.contains("hidden-xs")); //true
        // console.log("id "+t.id);
		var elm_name = t.tagName.toLowerCase();
		//если это инпут - ничего не делаем
		if(elm_name == 'input' || t.id !== "usph")	{return false;}
        // console.log("id "+t.id);
		var val = $(this).html();
		var oldval=val;
		var code = '<input type="number" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="edit" class="raz" value="'+val+'" />';
		$(this).empty().append(code);
		$('#edit').focus();
		$('#edit').blur(function()	{
			var val = $(this).val();
				if(val.length != "11" ){
					if (val.length !="0"){
						alert("Ошибка в номере! "+val.length);						
					}
						$(this).parent().empty().html(oldval);
				}else if(val == oldval ){
					console.log("Номер не изменён.");
				}else{
					// alert($(this).parent().parent().find('.usid').html());
					// dataArray=["tel:"+$(this).parent().parent().attr("id"),"id:"+val]
					// {selorder :
					var tel=$(this).parent().parent().find('.usid').html();
					// var tel='tel';
					dataArray={id: tel, tel: val}
					
					// alert(location.href);
					// $.post('application/more/user_telephone.php', {tel: $(this).parent().parent().attr("id"), id: val}, function(data) {
					$.post('application/more/user_telephone.php', dataArray, function(data) {
						console.log(data);

					});
					// alert($(this).parent().parent().find('.usid').html());
					$(this).parent().empty().html(val);
					// console.log($(this).parent().parent().find('.usid'));
					
				}
			
		

			

		});
	});
});

$(window).keydown(function(event){
	//ловим событие нажатия клавиши
	if(event.keyCode == 13) {	//если это Enter
		$('#edit').blur();	//снимаем фокус с поля ввода
	}
});

// $(".raz").keypress(function(e){
// 	var event = e || window.e;
// 	if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
// 	  return false;
//   });
}); //ready