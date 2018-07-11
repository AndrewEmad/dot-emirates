var clicks = 0,max_page;

jQuery(function($){
	$('#load-more').click(function(e){
        e.preventDefault();
        
		var button = $(this),
		    data = {
			'action': 'loadmore',
            'offset' : load_more_params.offset,
            'max_page': (clicks == 0) ? button.data('max-page'):max_page
        };
        if(clicks == 0){
            max_page = parseInt(button.data('max-page'));
        }
        clicks ++;
		$.ajax({
			url : load_more_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			
			success : function( data ){
				if( data ) { 
					button.prev().before(data); // insert new posts
                    getImages();
                    getImages2();

                    load_more_params.offset = parseInt(load_more_params.offset) + 2;
  
					if ( max_page <= 1 || clicks >= 20){
                        button.remove(); 
                    }// if last page, remove the button
                    else{
                        max_page -= 2;
                    }
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
            }
		});
	});
});