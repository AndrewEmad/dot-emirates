jQuery(function($){
    $('#contact-form').on('submit',function(e){
    e.preventDefault();
    var data = {
        'name':$("#name").val(),
        'address':$("#address").val(),
        'phone':$("#phone").val(),
        'message':$("#message").val(),
        'email':$("#email").val(),
        'action': 'contact',
    };

    $.ajax({
        url : contact_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        
        success : function( response ){
            location.reload();
        }
    });
});
});