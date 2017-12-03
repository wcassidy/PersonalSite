$(function () {
    "use strict";
    
    const APP_NAME = 0;
    const APP_MAJOR = 1;
    const APP_MINOR = 2;
    const APP_URL = 3;
    const APP_DESC = 4;
    const CODE_FILE_URL = 0;
    const CODE_FILE_DESC = 1;
    
    function populate_applications()
    {
        var post_data = { action : 'get_applications' };

        $('#application_table').empty();
        
        $.post('controller.php', post_data, null, "json")
            .done(function (data) {
                if(data.status == 'success')
                {
                    for(var i = 0; i < data.payload.length; i++)
                    {
                        $('#application_table').append('<tr class="app_list_row"><td class="app_name_col">' + data.payload[i][APP_NAME] + '</td>' +
                                                       '<td class="app_version_col">' + data.payload[i][APP_MAJOR] + '.' + data.payload[i][APP_MINOR] + '</td>' +
                                                       '<td class="app_url_col">' + data.payload[i][APP_URL] + '</td>' +
                                                       '<td class="app_description_col">' + data.payload[i][APP_DESC] + '</td></tr>');
                    }

                    $(".app_list_row").click(function(event) {
                        var row = $(this);
                        
                        if(row.hasClass('active_row') == false)
                        {
                            row.addClass("active_row").siblings().removeClass("active_row");
                        }
                        else
                        {
                            row.removeClass("active_row");
                        }
                    });
                }
                else
                {
                    $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                }
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    }

    function populate_code_files()
    {
        var post_data = { action : 'get_code_files' };

        $('#code_file_table').empty();
        
        $.post('controller.php', post_data, null, "json")
            .done(function (data) {
                if(data.status == 'success')
                {
                    for(var i = 0; i < data.payload.length; i++)
                    {
                        $('#code_file_table').append('<tr class="code_list_row"><td class="cf_url_col">' + data.payload[i][CODE_FILE_URL] + '</td>' +
                                                     '<td class="cf_description_col">' + data.payload[i][CODE_FILE_DESC] + '</td></tr>');
                    }

                    $(".code_list_row").click(function(event) {
                        var row = $(this);
                        
                        if(row.hasClass('active_row') == false)
                        {
                            row.addClass("active_row");
                        }
                        else
                        {
                            row.removeClass("active_row");
                        }
                    });
                }
                else
                {
                    $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                }
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    }

    // Event Handlers------------------------------------
    $("#add_app_button").click(function(event) {
        $("#action").attr('value', 'add_application');
        $("#app_heading").text("Add New Application");
        $("#application_form").collapse('show');
        $("#list_code_files").collapse('hide');
    });
    
    $("#edit_app_button").click(function(event) {
        var active_row = $("#application_table").find(".active_row");

        if(active_row.length > 0)
        {
            var app_name = $(active_row).find(".app_name_col").text();

            $("#old_name").val(app_name);
            $("#application_name").val(app_name);

            var version = $(active_row).find(".app_version_col").text().split(".");
            $("#major_version").val(parseInt(version[0]));
            $("#minor_version").val(parseInt(version[1]));
            $("#git_hub_url").val($(active_row).find(".app_url_col").text());
            $("#description").val($(active_row).find(".app_description_col").text());

            $("#action").attr('value', 'update_application');  
            $("#app_heading").text("Edit Application");
            $("#application_form").collapse('show');
            $("#list_code_files").collapse('hide');
        }
    });

    $("#delete_app_button").click(function(event) {
        var active_row = $("#application_table").find(".active_row");

        if(active_row.length > 0)
        {
            var post_data = { action : 'delete', application_name: $(active_row).find(".app_name_col").text() };

            $.post('controller.php', post_data, null, "json")
                .done(function (data) {
                    $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                    if(data.status == 'success')
                    {
                        populate_applications();
                    }
                })
                .fail(function(exception) {
                    $('#log').text(JSON.stringify(exception));
                });
        }
    });

    $('#application_form').submit(function(event) {
        
        event.preventDefault();

        //var target = $(event.target);
        $.post($(this).attr('action'), $(this).serialize(), null, "json")
            .done(function (data) {

                $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                if(data.status == 'success')
                {
                    populate_applications();
                    $("#application_form").trigger('reset');
                    $("#application_form").collapse('hide');
                    $("#list_code_files").collapse('show');

                }
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    });
    
    $("#add_code_file_button").click(function(event) {
        $("#cf_action").attr('value', 'add_code_file');
        $("#code_file_heading").text("Add New Code File");
        $("#code_file_form").collapse('show');
    });    
 
    $("#edit_code_file_button").click(function(event) {
        var active_row = $("#code_file_table").find(".active_row");

        if(active_row.length == 1)
        {
            var cf_url = $(active_row).find(".cf_url_col").text();

            $("#cf_old_url").val(cf_url);
            $("#cf_git_hub_url").val(cf_url);
            $("#cf_description").val($(active_row).find(".cf_description_col").text());

            $("#cf_action").attr('value', 'update_code_file');
            $("#code_file_heading").text("Edit Code File");
            $("#code_file_form").collapse('show');
        }
        else
        {
            $('#log').prepend('<div class="result_log error">You must select one and only one code file in order to edit it.</div>');
        }
    });

    $("#delete_code_file_button").click(function(event) {
        var active_rows = $("#code_file_table").find(".active_row");

        if(active_rows.length > 0)
        {
            var post_data = { action : 'delete_code_files', code_files: [] };

            for(var i = 0; i < active_rows.length; i++)
            {
                post_data.code_files[i] = active_rows.eq(i).find(".cf_url_col").text();
            }
            
            $.post('controller.php', post_data, null, "json")
                .done(function (data) {
                    $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                    if(data.status == 'success')
                    {
                        populate_code_files();
                    }
                })
                .fail(function(exception) {
                    $('#log').text(JSON.stringify(exception));
                });
        }
    });

    $('#code_file_form').submit(function(event) {
        
        event.preventDefault();

        //var target = $(event.target);
        $.post($(this).attr('action'), $(this).serialize(), null, "json")
            .done(function (data) {

                $('#log').prepend('<div class="result_log ' + data.status + '">' + data.message + '</div>');
                if(data.status == 'success')
                {
                    populate_code_files();
                    $("#code_file_form").trigger('reset');
                    $("#code_file_form").collapse('hide');
                }
            })
            .fail(function(exception) {
                $('#log').text(JSON.stringify(exception));
            });
    });
    
    // Populate the applications list
    populate_applications();
    populate_code_files();
});
