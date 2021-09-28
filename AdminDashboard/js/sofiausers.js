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
		var code = '<input type="number" id="edit" class="raz" value="'+val+'" />';
		$(this).empty().append(code);
		$('#edit').focus();
		$('#edit').blur(function()	{
			var val = $(this).val();
			$(this).parent().empty().html(val);
		});
	});
});

$(window).keydown(function(event){
	//ловим событие нажатия клавиши
	if(event.keyCode == 13) {	//если это Enter
		$('#edit').blur();	//снимаем фокус с поля ввода
	}
});
}); //ready