$(function () {
    "use strict";

    $('#application_form').submit(function(event) {
        
        event.preventDefault();

        //var target = $(event.target);
        $.post($(this).attr('action'), $(this).serialize(), null, "json")
            .done(function (data) {
                debugger;
                $('#add_results').append('<div class="row add_application_row"><div class="col-2 text-right"></div><div class="col-8">' +
                                        '<span class="' + data.status + '">' + data.message + '</span></div><div class="col-2"></div></div>');
                $('#application_form').trigger('reset');

            });
    });
});
