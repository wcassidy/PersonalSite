<?php 
require 'functions.php'; 
set_title('Wayne Cassidy - Personal Web Site');
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
            <p>Firstly, during my job search, I'm often asked to "show" prospective employers some of the work I've done in the past. Due to Intellectual Property Rights and Non-Disclosure Agreements, this is rarely possible.  Front-end developers and designers can often point you at Internet applications they've created however; Back-end/Intranet/Desktop developers and Architects don't have the same capability.</p>
            <p>Secondly, this is, in my opinion, an excellent way to create a resume for an IT professional. With the exception of a writer, creating a traditional resume requires very few of the skills most employees need to perform their job.  As a developer/architect, I can easily create an "over-engineered" web site that uses a current platform, combines server-side and client-side code, mines it's information from a database, use SOA techniques to wrap that database in a webservice, etc.</p>
            <p>I've created this web site both as an example of my skills, as well as a place to host examples of skills which aren't terribly useful for building a web site (e.g. C/C++).  It's my goal to give prospective employers examples of my skills that cover all tiers of modern architecture and use commonly adopted technologies.</p>
            <p>There are actually 2 versions of this web application currently.</p>
            <ul class="main_content">
                <li>An <a href="#">application which uses LAMP</a> (Linux, Apache, MySQL, PHP) as well as a Java webservice running on Tomcat.</li>
                <li>A <a href="#">A Microsoft .NET MVC</a> (Model-View-Controller) version of the application which uses a Windows Communication Framework webservice.</li>
            </ul>
            <p>Both of these sites use many common web-development libraries such as JQuery and Bootstrap and you can see the different technologies used to create the site on the footer of each web page on both sites.</p>
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
                <li><a href="#">Projects</a> lists some of the proejcts I've worked on</li>
                <li><a href="#">History</a> gives a history of my career</li>
                <li><a href="#">Resume</a> is a digital version of my resume which is stored in a database</li>
                <li><a href="#">Contact</a> gives my contact information along with an simple form you can use to email me</li>
            </ul>
            <h5>Examples Applications and Technologies</h5>
            <p>The web site itself is an example of an application I've written and is described in the <a href="examples.php">examples</a> section.</p>
            <p>All of the examples listed in the <a href="examples.php">examples</a> section include the following:</p>
            <ul class="main_content">
                <li>A technical and architectual description of the example</li>
                <li>The code for the page displayed right on the page</li>
                <li>Links to the code in my GitHub repository in case you'd like to view the code in an editor or IDE</li>
            </ul>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>
<?php require 'footer.php'; ?>
