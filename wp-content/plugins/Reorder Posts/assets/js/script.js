$(function() {
    $("#sortable").sortable({
      connectWith: ".column",
      handle: ".portlet-header,.portlet-content,.img",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",
      start: function(e, ui) {
        // creates a temporary attribute on the element with the old index
        $(this).attr('data-previndex', ui.item.index());
    },
    update: function(e, ui) {
        // gets the new and old index then removes the temporary attribute
        var newIndex = ui.item.index();
        var oldIndex = $(this).attr('data-previndex');
        $(this).removeAttr('data-previndex');
        alert(ui.item.attr("id")+" "+newIndex)
    }
    });
  
    $(".portlet")
      .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
      .find(".portlet-header")
      .addClass("ui-widget-header ui-corner-all");
  });
