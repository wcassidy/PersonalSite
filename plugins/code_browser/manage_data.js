$(function () {
    "use strict";
    
    const APP_NAME = 0;
    const APP_MAJOR = 1;
    const APP_MINOR = 2;
    const APP_URL = 3;
    const APP_DESC = 4;
    
    function populate_applications()
    {
        var post_data = { action : 'select' };

        $('#application_table').empty();
        
        $.post('manage_data.php', post_data, null, "json")
            .done(function (data) {
                for(var i = 0; i < data.payload.length; i++)
                {
                    $('#application_table').append('<tr class="app_list_row"><td><input type="checkbox"></td><td class="app_name_col">' + data.payload[i][APP_NAME] + '</td>' +
                                                   '<td class="app_version">' + data.payload[i][APP_MAJOR] + '.' + data.payload[i][APP_MINOR] + '</td>' +
                                                   '<td class="url">' + data.payload[i][APP_URL] + '</td>' +
                                                   '<td class="description">' + data.payload[i][APP_DESC] + '</td></tr>');
                }
                
                $(".app_list_row").click(function(event) {
                    $('#log').prepend('<div class="result_log">' + $(this).children(".app_name_col").text() + '</div>');
                    $("#application_table").find("input[type=checkbox]").prop('checked', false);
                    $(this).find("input[type=checkbox]").prop('checked', true);
                    $(this).addClass("active_row").siblings().removeClass("active_row");
                });
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    }

    // Event Handlers------------------------------------
    $("#add_app_button").click(function(event) {
        $("#application_form").collapse('show');
        $("#app_heading").text("Add New Application");
    });
    
    $("#edit_app_button").click(function(event) {
        var active_row = $("#application_table").find(".active_row");

        if(active_row.length > 0)
        {
            var app_name = $(active_row).find(".app_name_col").text();

            $("#old_name").val(app_name);
            $("#application_name").val(app_name);

            debugger;
            var version = $(active_row).find(".app_version").text().split(".");
            $("#major_version").val(parseInt(version[0]));
            $("#minor_version").val(parseInt(version[1]));
            $("#git_hub_url").val($(active_row).find(".url").text());
            $("#description").val($(active_row).find(".description").text());

            $("#action").attr('action', 'update');  
            $("#app_heading").text("Edit Application");
            $("#application_form").collapse('show');
        }
    });

    $('#application_form').submit(function(event) {
        
        event.preventDefault();
        $("#action").attr('action', 'insert');

        //var target = $(event.target);
        $.post($(this).attr('action'), $(this).serialize(), null, "json")
            .done(function (data) {
                $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                if(data.status == 'success')
                {
                    populate_applications();
                    $("#list_applications").collapse('show');
                    $("#application_form").collapse('hide');
                }
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    });
 
    // Populate the applications list
    populate_applications();
});
