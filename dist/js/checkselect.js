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
			console.log("data-num="+datanum);
			console.log(':checked '+$(this).is(':checked'));
			console.log('parent '+$('td[id^=number_complect]').data('num'));
			// var data = $('td[id^=number_complect]').each(function() {
			// 	return $(this).data("num") === datanum;
			// });
			var data = $('td[id^=number_complect]');
			console.log('data '+data.length);
			$.each(data, function(i, item) {

				// console.log(datanum +"__"+$(data[i]).data('num') === datanum);
				if (datanum == $(data[i]).data('num')){
					// console.log(datanum +"__"+$(data[i]).data('num'));
					console.log(data[i]);
					// console.log($(data[i]).parent().find('input[id^=someSwitchOptionSuccess]').attr('id'));
					$(data[i]).parent().find('input[id^=someSwitchOptionSuccess]').trigger('click');
				}
				
			});

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

		$('html, body').on('click', function(e){
			
			if ($(e.target).closest('.checkselect').length == 0){
				
				$('.checkselect-popup').css('display', 'none');
			}
		});
	};
})(jQuery);	

// $('.checkselect').checkselect();