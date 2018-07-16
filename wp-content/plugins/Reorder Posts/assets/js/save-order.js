jQuery(function($){
	$('#rp-save-order').on('click',function(e){
        var elements = $('.portlet');
        var updated = [];
        for(var i=0;i<elements.length;++i){
            var sourceIndex = $(elements[i]).attr('data-index');
            var newIndex = $(elements[i]).attr('data-newindex');
            if(parseInt(sourceIndex) != parseInt(newIndex)){
                updated.push({
                    'id': $(elements[i]).attr("id"),
                    'order': newIndex
                })
            }
        }
        var data = {
			'action': 'reorder',
            'elements' : updated
        };
		$.ajax({
			url : reorder_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			
			success : function( data ){
				if(data) { 
					$(".alert").show(100);
                }
            }
		});
	});
});