jQuery(function($){
	$('.show_employees').click(function(){
		var button = $(this),
		    data = {
			'action': 'loadmore',
		};

		$.ajax({
			url : show_employees_params.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function () {
				button.text('Loading...');
			},
			success : function( data ){
				button.after(data);
				button.remove();
			}
		});
	});
});
