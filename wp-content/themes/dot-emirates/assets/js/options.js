(function() {
    var frame = wp.media({
        title: 'Upload Logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });
    $('#logo').on('click', function (e) {
        e.preventDefault();
        frame.open();
        frame.on('select',function(){
           var attachment = frame.state().get('selection').first().toJSON();
           $("input[name='de_option_logo']").attr('value',attachment.url);
        });
    });
})();