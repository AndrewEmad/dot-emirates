$(function () {
    $("#sortable").sortable({
        handle: ".portlet-header,.portlet-content,.img",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all",
        stop: function (e, ui) {
            var els = $('.portlet').not('.portlet[data-newindex="-1"]');
            for (var i = 0; i < els.length; ++i) {
                $(els[i]).attr('data-newindex', i);
            }
        }

    });

    $(".portlet")
        .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
        .find(".portlet-header")
        .addClass("ui-widget-header ui-corner-all");

    var frame = wp.media({
        title: 'Upload Logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });
    $('#featured-image .card-footer a').on('click', function (e) {
        e.preventDefault();
        frame.open();
        frame.on('select', function () {
            var attachment = frame.state().get('selection').first().toJSON();
            $("#featured-image img").attr('data-id', attachment.id);
            $("#featured-image img").attr('src', attachment.url);
            $("#featured-image img").show();
        });
    });
});

$(document).ready(function () {
    $('#blocks').DataTable();

});

function removePost() {
    var element = $(this).parent().parent().parent().parent();
    element.attr('data-newindex', -1);
    element.hide();
    var els = $('.portlet').not('.portlet[data-newindex="-1"]');
    for (var i = 0; i < els.length; ++i) {
        $(els[i]).attr('data-newindex', i);
    }

    var cnt = $('.portlet').not('.portlet[data-newindex="-1"]').length;
    if (cnt == 0) {
        $('#sortable').append('<div class="no-posts">No posts to show</div> ');
    }

}

function add_post(e) {
    var elem = $(this),
        ID = elem.data('id'),
        title = elem.find('span').text(),
        content = elem.data('content'),
        img = elem.find('img').first().attr('src'),
        cnt = $('.portlet').not('.portlet[data-newindex="-1"]').length;
    $('#sortable .no-posts').remove();

    var output = "<div class=\"portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all\" id='" + ID + "'\n" +
        "                             data-index = \"" + cnt + "\" data-newindex = \"" + cnt + "\">\n" +
        "                            <div class=\"row\">\n" +
        "                                <div class=\"post-id\">" + ID + "</div>\n" +
        "                                <img class=\"img col-2 ui-sortable-handle\" src=\"" + img + "\" />\n" +
        "                                <div class=\"post-content col-10\">\n" +
        "                                    <div class=\"portlet-header ui-sortable-handle  ui-widget-header ui-corner-all\"><span class=\"title\">" + title + "</span><span onclick = 'removePost.call(this)' class=\"portlet-close\">x</span></div>\n" +
        "                                    <div class=\"portlet-content ui-sortable-handle\">" + content + "</div>\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                        </div>";


    $("#sortable").append(output);
    $(this).remove();
    e.stopPropagation();
}


$(document).on('click', function () {
    $(".results").fadeOut(100);
});

$("#block-name").keypress(function (e) {
    return e.which != 13;
});
$(".results").niceScroll();

