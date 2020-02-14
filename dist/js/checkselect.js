(function($) {
	function setChecked(target) {
		
		var checked = $(target).find("input[type='checkbox']:checked").length;
		if (checked) {
			$(target).find('select option:first').html('Выбрано: ' + checked);

		} else {
			$(target).find('select option:first').html('Список');
		}
	}

	$.fn.checkselect = function() {
        
		this.wrapInner('<div class="checkselect-popup"></div>');
		this.prepend(
			'<div class="checkselect-control">' +
				'<select class="form-control"><option></option></select>' +
				'<div class="checkselect-over"></div>' +
			'</div>'
		);	

		this.each(function(){
			setChecked(this);
			
		});		
		this.find('input[type="checkbox"]').click(function(){
			setChecked($(this).parents('.checkselect'));
			var datanum = $(this).parent().text();
			// console.log("data-num="+datanum);
			// console.log(':checked '+$(this).is(':checked'));
			// console.log('parent '+$('td[id^=number_complect]').data('num'));
			// pressedTime
			var data = $('td[id^=number_complect]');
			// console.log('data '+data.length);

			if ($(this).is(':checked'))	{  //если включен  
				$.each(data, function(i, item) {

					if (datanum == $(data[i]).data('num')){				
						// console.log(data[i]);
						var p=$(data[i]).parent();	
						// console.log("hasClass "+p.hasClass('check-vis'));	
						if(p.hasClass('check-vis')){
							p.find('input[id^=someSwitchOptionSuccess]').trigger('click');
						}
						
					}		
					
				});
			}else{// выключен

				$.each(data, function(i, item) {

					if (datanum == $(data[i]).data('num')){				
						// console.log(data[i]);
						var p=$(data[i]).parent();
						// console.log("hasClass "+p.hasClass('check-vis'));				
						if(!p.hasClass('check-vis')){
							p.find('input[id^=someSwitchOptionSuccess]').trigger('click');
						}
					}		
					
				});

			}

		});

		this.parent().find('.checkselect-control').on('click', function(){
			$popup = $(this).next();
			$('.checkselect-popup').not($popup).css('display', 'none');
			if ($popup.is(':hidden')) {
				$popup.css('display', 'block');
				$(this).find('select').focus();
			} else {
				$popup.css('display', 'none');
			}
		});
// скрытие при клике на html, body
		$('html, body').on('click', function(e){
			
			// if ($(e.target).closest('.checkselect').length == 0){
				
			// 	$('.checkselect-popup').css('display', 'none');
			// }
		});
	};
})(jQuery);	

// $('.checkselect').checkselect();