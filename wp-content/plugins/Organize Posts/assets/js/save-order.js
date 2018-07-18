jQuery(function($){
	$('#op-save-block').on('click',function(e){
        var elements = $('.portlet');
        var updated = [];
        for(var i=0;i<elements.length;++i){
                updated.push({
                    'post_id': $(elements[i]).attr("id"),
                    'block_id': $("#sortable").attr('data-block-id'),
                    'order': $(elements[i]).attr("data-newindex")
                })
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