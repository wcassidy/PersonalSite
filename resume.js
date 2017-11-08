$(function () {
    "use strict";

    $('.collapse').on('hide.bs.collapse', function(event) {
        event.stopPropagation();
        var icon = $('a[href="#' + $(this).attr('id') + '"] > i');
        icon.removeClass('fa-minus-square-o');
        icon.addClass('fa-plus-square-o');        
    });

    $('.collapse').on('show.bs.collapse', function(event) {
        event.stopPropagation();
        var icon = $('a[href="#' + $(this).attr('id') + '"] > i');
        icon.removeClass('fa-plus-square-o');
        icon.addClass('fa-minus-square-o');
        location.href = '#' + $(this).attr('id');
    });
});