<?php 
require 'functions.php'; 
set_title('Wayne Cassidy - Portfolio');
?>
<?php require 'header.php'; ?>
<div class="container-fluid">
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
            <image class="paragraph_image float-right lightbox_image" src="images/skills.png"></image>
        </div>
        <div class="col-12 col-md-8">
            <h3>Developer / Architect / Teacher / Diver</h3>
            <p>Hello, I'm Wayne Cassidy,<br>
            I am a Software Developer, a Solution / Enterprise Architect, a Teacher, and I have a deep seeded passion for living under the waves (at least until I run out of air).  I live in Vancouver, British Columbia, Canada where I am currently looking for employment or contract opportunities.  I have years of experience with a wide breadth of technologies and methodologies so please look around and find out more about me.
            </p>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
        </div>
        <div class="col-12 col-md-8">
            <h3>Why I Created This Site</h3>
            <p>Firstly, this is, in my opinion, an excellent way to create a resume for an IT professional.  Secondly, during my job search I am often asked to "show" prespective employers some of the work I've done in the past.  Due to Intellectual Property Rights and Non Disclosure Agreements, this is rarely possible.  I've created this "over-engineered" web application in order to give prespective employers an example of my work that covers all tiers of modern architecture and uses commonly used technologies.</p>
            <p>There are actually 3 versions of this web application currently in the works.</p>
            <ul class="main_content">
                <li>The application you're viewing right now, which uses LAMP (Linux, Apache, MySQL, PHP).</li>
                <li>A <a href="#">Microsoft .NET MVC (Model-View-Controller)</a> version of the application.</li>
                <li>A <a href="#">Java/JEE/Spring MVC</a> version of the application</li>
            </ul>
            <p>The footer of each web application shows the different technologies used to create the site.</p>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
        </div>
        <div class="col-12 col-md-8">
            <h3>What You'll Find Here</h3>
            <p>There are two primary goals of this web site</p>
            <h5>An Online Resume</h5>
            <ul class="main_content">
                <li><a href="#">Projects</a> lists some of the proejcts I've worked on</li>
                <li><a href="#">History</a> gives a history of my career</li>
                <li><a href="#">Resume</a> is a digital version of my resume which is stored in a database</li>
                <li><a href="#">Contact</a> gives my contact information along with an simple form you can use to email me</li>
            </ul>
            <h5>An Example of an Application I've Written</h5>
            <p>The web site itself is an example of an application I've written.  At the bottom of each page you'll find a "Code" section where you can find the following:</p>
            <ul class="main_content">
                <li>A technical description of how the page works</li>
                <li>Links to the code in my GitHub repository (for mobile devices)</li>
                <li>The code for the page displayed right on the page (for desktops)</li>
            </ul>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10"><hr></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
            <image class="paragraph_image float-right lightbox_image" src="images/code_square.png"></image>
        </div>
        <div class="col-12 col-md-8">
            <?php add_code_browser($_SERVER['PHP_SELF']); ?>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>
