<?php 
require 'functions.php'; 
set_title('Wayne Cassidy - Examples');
require 'header.php';
require 'plugins/code_browser/code_browser.php'
?>

<div class="container-fluid">
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
            <image class="paragraph_image float-right lightbox_image" src="images/code_square.png"></image>
        </div>
        <div class="col-12 col-md-8">
            <?php
                $cb = new code_browser();
                $cb->display_code_browser('Code Browser');
            ?>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>
