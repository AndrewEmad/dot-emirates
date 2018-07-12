jQuery(function($){
	$('.formItem').keyup(function(e){
        $(".theResults").html('');
        if(!$(this).val())return;
        var data = {
			'action': 'search',
            'title' : $(this).val(),
        };
		$.ajax({
			url : search_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			
			success : function( data ){
				if( data ) { 
					location.reload();
					$(".theResults").html(data); // insert new posts
                    getImages();
                    getImages2();
                }
            }
		});
	});
});