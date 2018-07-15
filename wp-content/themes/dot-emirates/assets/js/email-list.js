jQuery(function($){
    $('#email-list-form').on('submit',function(e){
    e.preventDefault();
    var data = {
        'email':$("#emailInp").val(),
        'action': 'email_list',
    };

    $.ajax({
        url : contact_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        
        success : function( response ){
            alert(response.message);
        }
    });
});
});