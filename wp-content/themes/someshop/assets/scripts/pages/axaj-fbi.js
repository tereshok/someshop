$(document).ready(function (){
	$('.fbi-offices-list select').select2();
	$('.spinner-grow').hide();
	$('.fbi-offices-list select').change(function () {
		var depr_code = $(this).val();
		$.ajax({
			url: themeVars.ajaxurl,
			datatype: 'json',
			method: 'GET',
			data: {
				action: 'get_fbi_info',
				depr_code: depr_code,
			},
			beforeSend: () => {
				$('.spinner-grow').show();
				$('.fbi-data').hide();
			},
			success: function (data) {
				if(data != ''){
					$('.spinner-grow').hide();
					$('.fbi-data').show();
					$('.fbi-data').html(data);
				} else {
					let error_message = data.error;
					$('.fbi-error').text(error_message).show();
				}
			},
		});
	});
	$('.fbi-data').on('click', '.fbi-pagination li', function () {
		var page_numb = $(this).text();
		$.ajax({
			url: themeVars.ajaxurl,
			type: 'GET',
				data: { action: 'get_fbi_info',
				depr_code: $('.fbi-offices-list select').val(),
				page_numb: page_numb,
			},
			beforeSend: () => {
				$('.spinner-grow').show();
				$('.fbi-data').hide();
			},
			success: function (data) {
				$('.spinner-grow').hide();
				$('.fbi-data').show();
				$('.fbi-data').html(data);
			},
		});
	});
});

