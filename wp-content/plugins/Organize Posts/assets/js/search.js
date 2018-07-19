function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
jQuery(function($){
	$('#op_post_search').keyup(function(e){

        $(".results").html('');
        $(".results").fadeOut(100);
        if(!$(this).val())return;
        var data = {
			'action': 'op_search',
            'title' : $(this).val(),
            'block_id':$("#sortable").attr('data-block-id'),
            'post_type': getParameterByName('post_type')
        };

		$.ajax({
			url  : search_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',

			success : function( data ){
                if( data ) {
					var output = "";
					for(var i=0;i<data.length;++i){
                        output+="<div class='result' data-content = '"
							+data[i]['post_content']+"' data-id = '"
							+data[i]['ID']+"' onclick='add_post.call(this,event)'>";
                        output+="<img src='"+data[i]['img']+"'/>";
                        output+="<span>"+data[i]['post_title']+"</span>";
                        output+="</div>";
					}
					$(".results").html(output);
                    $(".results").fadeIn(250);
                }
            }
		});
	});
});

