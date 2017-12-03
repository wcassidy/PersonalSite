<?php 
require 'functions.php'; 
set_title('Wayne Cassidy - Contact');
require 'header.php';

// Add page level styles and scripts here

?>

<div class="container-fluid">
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
            <image class="paragraph_image float-right lightbox_image" src="images/email.png"></image>
        </div>
        <div class="col-12 col-md-8">
            <h3>Conact Information</h3>
            <a href="mailto:wayne.cassidy@alumni.carleton.ca">wayne.cassidy@alumni.carleton.ca</a>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
        </div>
        <div class="col-12 col-md-8">
            <?php
            $to = "wayne.cassidy@alumni.carleton.ca";
            $subject = $_POST['subject'];
            $body = $_POST['body'];
            $headers = 'From:' . $_POST['email_address'];

            if(mail($to, $subject, $body, $headers))
            {
                echo('<h4>Your message has been sent, thank you for your interest.</h4>');
            }
            else
            {
                echo('<h4 class="error">Your message could not be sent, please send a regular email to <a href="mailto:wayne.cassidy@alumni.carleton.ca">wayne.cassidy@alumni.carleton.ca</a>.</h4>');
            }
            ?>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>
