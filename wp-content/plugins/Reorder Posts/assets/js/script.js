$(function() {
    $("#sortable").sortable({
      handle: ".portlet-header,.portlet-content,.img",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",
      start: function(e,ui){
        ui.item.attr('data-oldindex',ui.item.index());
      },
      stop: function(e, ui) {
        var oldIndex = ui.item.attr('data-oldindex');
        var newIndex = ui.item.index();
        ui.item.attr('data-newindex',newIndex);
        if(oldIndex < newIndex)
        {
            var els = ui.item.prevUntil($('.portlet[data-newindex="'+oldIndex+'"]'),'.portlet');
            for(var i=0;i<els.length;++i){
                var element = els[i];
                $(element).attr('data-oldindex',$(element).attr('data-newindex'));
                $(element).attr('data-newindex',parseInt($(element).attr('data-newindex'))-1);
            }
        }
        else if(oldIndex > newIndex){
            var els = ui.item.nextUntil($('.portlet[data-newindex="'+oldIndex+'"]'),'.portlet');
            for(var i=0;i<els.length;++i){
                var element = els[i];
                $(element).attr('data-oldindex',$(element).attr('data-newindex'));
                $(element).attr('data-newindex',parseInt($(element).attr('data-newindex'))+1);
            }
        }
      }
    });
  
    $(".portlet")
      .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
      .find(".portlet-header")
      .addClass("ui-widget-header ui-corner-all");
  });
