jQuery(function($){
	$('#op_post_search').keyup(function(e){
        $(".results").html('');
        if(!$(this).val())return;
        var data = {
			'action': 'op_search',
            'title' : $(this).val(),
        };
		$.ajax({
			url : search_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			
			success : function( data ){
				if( data ) { 
					$(".results").html(data); // insert new posts

                }
            }
		});
	});
});