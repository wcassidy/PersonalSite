<?php 
require 'functions.php'; 
set_title('Wayne Cassidy - Personal Web Site');
require 'header.php';

// Add page level styles and scripts here
?>

<div class="container-fluid">
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
            <image class="paragraph_image float-right lightbox_image" src="images/skills.png"></image>
        </div>
        <div class="col-12 col-md-8">
            <h3>Developer / Architect / Teacher / Diver</h3>
            <p>Hello, I'm Wayne Cassidy,<br>
            I am a Software Developer, a Solution / Enterprise Architect, a Teacher, and I have a deep seeded passion for living under the waves (at least until I run out of air).  I live in Vancouver, British Columbia, Canada where I am currently looking for employment or contract opportunities.</p>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
        </div>
        <div class="col-12 col-md-8">
            <h3>Why I Created This Site</h3>
            <p>I created this site originally as a place to experiment with LAMP based web development projects in an environment over which I have little control.  This allows me to see how certain technologies and code libraries will run when hosted with a very low cost provider.</p>
            <p>I also use this site to post code examples.  When answering questions in different online forums it can be challenging to get an idea across without a detailed example and a forum post is not an idea place to put a detailed example.  The examples section of this site uses a plugin I created to display detailed code examples, with descriptions, and includes color coded syntax which is much easier to read than a wall of black text.</p>
            <p>Finally, when I started looking for a job, I felt it might be convinient to put my resume online in an HTML format as well as a downloadable pdf file.  I added a contact page as well so that prospective employers can contact me through the site if they wish to do so.</p>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row paragraph_row">
        <div class="col-md-2 d-none d-md-block">
        </div>
        <div class="col-12 col-md-8">
            <h3>What You'll Find Here</h3>
            <h5>An Online Resume</h5>
            <ul class="main_content">
                <li><a href="resume.php">Resume</a> - is a digital version of my resume</li>
                <li><a href="contact.php">Contact</a> - gives my contact information along with a simple form you can use to email me</li>
            </ul>
            <h5>Example Applications and Technologies</h5>
            <p>This section changes quite a bit but will usually contain my code browser plugin as an example of creating a "roll your own" php plugin from scratch.  The examples section uses this plugin to display the examples.</p>
            <p>All of the examples listed in the <a href="examples.php">examples</a> section include the following:</p>
            <ul class="main_content">
                <li>A technical and/or architectual description of the example</li>
                <li>The main code files for the example with detailed comments</li>
                <li>Links to the code in my public GitHub repository in case you'd like to view all of the code or view it in an editor or IDE</li>
            </ul>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>
