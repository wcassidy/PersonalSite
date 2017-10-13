$(function () {
    "use strict";

    $("body").prepend("<div id='lightbox'><image id='lightbox_content'></image></div>");
    
    // Display the lightbox with the media object when clicked
    $(".lightbox_image").click(function(event) {
        
        var target = $(event.target);

        if(target.is("img"))
        {
            // Add the image to the lightbox and display
            $("#lightbox").css("display", "block");
            $("#lightbox_content").attr( "src", target.attr("src") );
        }
    });

    // Shut down the lightbox when clicked
    $("#lightbox").click(function(event) {
        
        var target = $( event.target );

        $("#lightbox").css("display", "none");
    });
});