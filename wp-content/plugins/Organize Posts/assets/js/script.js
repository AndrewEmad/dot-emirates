$(function() {
    $("#sortable").sortable({
      handle: ".portlet-header,.portlet-content,.img",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",
      stop: function(e, ui) {
          var els = $('.portlet').not('.portlet[data-newindex="-1"]');
          for (var i = 0; i < els.length; ++i) {
              $(els[i]).attr('data-newindex',i);
          }
      }

    });
  
    $(".portlet")
      .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
      .find(".portlet-header")
      .addClass("ui-widget-header ui-corner-all");
  });

$(document).ready(function() {
    $('#blocks').DataTable();

} );

function removePost(){
        var element = $(this).parent().parent().parent().parent();
        element.attr('data-newindex',-1);
        element.hide();
        var els = $('.portlet').not('.portlet[data-newindex="-1"]');
          for (var i = 0; i < els.length; ++i) {
              $(els[i]).attr('data-newindex',i);
          }

          $("#op_post_search").prop('disabled',false)
}


function add_post(e){
    var elem = $(this),
        ID = elem.data('id'),
        title = elem.find('span').text(),
        content = elem.data('content'),
        img = elem.find('img').first().attr('src'),
        cnt = $('.portlet').not('.portlet[data-newindex="-1"]').length,
        output="<div class=\"portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all\" id='"+ID+"'\n" +
            "                             data-index = \""+cnt+"\" data-newindex = \""+cnt+"\">\n" +
            "                            <div class=\"row\">\n" +
            "                                <div class=\"post-id\">"+ID+"</div>\n" +
            "                                <img class=\"img col-md-1 col-2 ui-sortable-handle\" src=\""+img+"\" />\n" +
            "                                <div class=\"post-content col-md-11 col-10\">\n" +
            "                                    <div class=\"portlet-header ui-sortable-handle  ui-widget-header ui-corner-all\"><span class=\"title\">"+title+"</span><span onclick = 'removePost.call(this)' class=\"portlet-close\">x</span></div>\n" +
            "                                    <div class=\"portlet-content ui-sortable-handle\">"+content+"</div>\n" +
            "                                </div>\n" +
            "                            </div>\n" +
            "                        </div>";


    $("#sortable").append(output);
    $(this).remove();
    if( cnt >= 9){
        $("#op_post_search").attr('value','');
        $("#op_post_search").prop('disabled',true);
        $(".results").html('');
        $(".results").fadeOut(100);
    }
    e.stopPropagation();
}

$(document).ready(function(){
    cnt = $(".portlet").length;
    if( cnt == 10){
        $("#op_post_search").attr('value','');
        $("#op_post_search").prop('disabled',true);
        $(".results").html('');
        $(".results").fadeOut(100);
    }
});


$(document).on('click',function(){
    $(".results").fadeOut(100);
});