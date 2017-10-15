$(function () {
    "use strict";

    $(".code_browser_button").click(function(event) {
        
        var target = $(event.target);

        if(target.is("img"))
        {
            // Add the image to the lightbox and display
            $("#lightbox").css("display", "block");
            $("#lightbox_content").attr( "src", target.attr("src") );
        }
    });
});