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
            <form action="email.php" method="post">
              <div class="form-group">
                <label for="email_address">Your Email Address</label>
                <input type="email" class="form-control" id="email_address" name="email_address" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">I'll never share your email address.</small>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="From your resume web site" required>
              </div>
              <div class="form-group">
                <label for="body">Message</label>
                  <textarea id="body" name="body" class="form-control" rows="15" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mysite">Submit</button>
            </form>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>