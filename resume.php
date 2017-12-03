<?php 
require 'functions.php'; 

set_title('Wayne Cassidy - Personal Resume');
require 'header.php';

// Add page level styles and scripts here
add_script('resume', 'resume.js');
?>

<div class="container-fluid">
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
            <image class="paragraph_image float-right lightbox_image" src="images/resume.png"></image>
        </div>
        <div class="col-12 col-lg-8">
            <h2>Personal Resume</h2><hr>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <!-- Section - Introduction -->
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
            <a href="WayneCassidy-Resume.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download pdf version</a>
        </div>
        <div class="col-12 col-lg-8">
            <h3><a data-toggle="collapse" href="#introduction_section" aria-expanded="false" aria-controls="introduction_section"><i class="fa fa-minus-square-o" aria-hidden="true"></i></a> Introduction</h3>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <div id="introduction_section" class="collapse show">
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
            </div>
            <div class="col-12 col-lg-8">
                <p>I am a Software Developer/Architect who has worked in the industry for 20+ years. I have performed many jobs in the IT industry including, Developer, Enterprise Architect, Solution Architect, Business Analyst, and Software Architect.</p>
                <p>I am looking for contract opportunities or full-time employment in the Greater Vancouver Area and am able to start immediately.</p>
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
    </div>
    <!-- Section - Executive Summary of Skills -->
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
        </div>
        <div class="col-12 col-lg-8">
            <h3><a data-toggle="collapse" href="#exec_summary_section" aria-expanded="false" aria-controls="exec_summary_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> Executive Summary of Skills</h3>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <div id="exec_summary_section" class="collapse">
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Architecture</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Architecture</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>TOGAF (The Open Group Architecture Framework)</li>
                    <li>SOA (Service Oriented Architecture)</li>
                    <li>OUP (Open Unified Process, formerly RUP)</li>
                    <li>MVC (Model View Controller Architecture)</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>Agile Scrum</li>
                    <li>OOAD (Object-Oriented Analysis and Design)</li>
                    <li>Business Analysis</li>
                    <li>UML (Unified Modelling Language)</li>
                </ul>
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Languages</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Languages</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>C/C++ (gcc and MS compilers)</li>
                    <li>x86 Assembly</li>
                    <li>Microsoft .NET (C#, VB.NET and managed C++)</li>
                    <li>Java</li>
                    <li>JavaScript</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>SQL (Standard, PL-SQL, Transact-SQL, MySQL, and pgSQL)</li>
                    <li>Shell Scripting (Bash, Bourne, Korn)</li>
                    <li>PHP</li>
                    <li>PERL</li>
                    <li>GLSL (OpenGL Shading Language)</li>
                </ul>
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Distributed/Enterprise Computing</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Distributed/Enterprise Computing</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>WebServices (.NET and Java JAX-WS)</li>
                    <li>CORBA (Common Object Request Broker Architecture with C/C++ and Java)</li>
                    <li>Java RMI (Remote Method Invocation)</li>
                    <li>WebSphere (JEE Server, ESB and Process Server)</li>
                    <li>WebLogic (JEE Server and Integration Server)</li>
                    <li>JBOSS (JEE Server)</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>WCF (Windows Communication Foundation)</li>
                    <li>WWF (Windows Workflow Foundation, including BizTalk Server)</li>
                    <li>Windows Component Services</li>
                    <li>WebSphere MQ</li>
                    <li>Microsoft MQ</li>
                </ul>     
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Web Development</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Web Development</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>HTML 5</li>
                    <li>CSS 3</li>
                    <li>SASS (Syntactically Awesome Style Sheets)</li>
                    <li>Bootstrap 4</li>
                    <li>JavaScript</li>
                    <li>AJAX</li>
                    <li>JQuery</li>
                    <li>PHP</li>
                    <li>ASP.NET</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>ASP.NET MVC (core and 5)</li>
                    <li>JSP (Java Server Pages)</li>
                    <li>JSF (Java Server Faces)</li>
                    <li>Java Struts</li>
                    <li>Java Spring</li>
                    <li>WordPress</li>
                    <li>Apache</li>
                    <li>Tomcat</li>
                    <li>IIS (Internet Information Service)</li>
                </ul>     
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Database Technologies</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Database Technologies</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>Oracle</li>
                    <li>SQL Server</li>
                    <li>DB2</li>
                    <li>MySQL / MariaDB</li>
                    <li>Postgres</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>ORM (Object Relational Mapping)</li>
                    <li>JPA (Java Persistence Architecture)</li>
                    <li>Hibernate</li>
                    <li>Ibatis</li>
                    <li>.NET Entity Framework</li>
                </ul>     
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Continuous Integration</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Continuous Integration</h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>Git</li>
                    <li>Subversion</li>
                </ul>
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <ul>
                    <li>Jenkins</li>
                    <li>Lots of Shell Scripting with CRON</li>
                </ul>     
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Operating Systems</h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Operating Systems</h5>
            </div>
            <div class="col-12 col-lg-8">
                <ul>
                    <li>Windows 3.1 - 8.1 (including server variants)</li>
                    <li>Linux (Gentoo, Arch, Ubuntu, Redhat)</li>
                    <li>UNIX (Solaris, HP-UX, AIX, SCO)</li>
                </ul>
            </div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
    </div>
    <!-- Section - Books Authored -->
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
        </div>
        <div class="col-12 col-lg-8">
            <h3><a data-toggle="collapse" href="#books_section" aria-expanded="false" aria-controls="books_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> Books Authored</h3>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <div id="books_section" class="collapse">
        <div class="row paragraph_row d-block d-lg-none"></div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <img class="lightbox_image" src="images/book.jpg" width="100" alt="MCAD/MCSD - Visual Basic .NET Web Applications">
            </div>
            <div class="col-12 col-lg-8">
                <ul>
                    <li>MCAD/MCSD - Visual Basic .NET Web Applications (2002 Osborne/McGraw Hill, ISBN 0-07-212580-2)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Section - Employment History -->
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
        </div>
        <div class="col-12 col-lg-8">
            <h3><a data-toggle="collapse" href="#employment_section" aria-expanded="false" aria-controls="employment_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> Employment History</h3>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <div id="employment_section" class="collapse">
        <!-- Job 1 -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>June, 2015 - Present <a data-toggle="collapse" href="#caregiver_section" aria-expanded="false" aria-controls="caregiver_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>June, 2015 - Present <a data-toggle="collapse" href="#caregiver_section" aria-expanded="false" aria-controls="caregiver_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-4 col-lg-3"><h5>Care Giver</h5></div>
            <div class="col-4 col-lg-3"><h5></h5></div>
            <div class="col-4 col-lg-2"><h5>Maple Ridge, British Columbia</h5></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="caregiver_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>For the past two years I have stayed at home with my daughter who had been suffering with a serious medical issue.  Her illness has now been properly identified and treated and I no longer need to provide constant care for her.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Job 2 -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>2007 - 2015 <a data-toggle="collapse" href="#webage_section" aria-expanded="false" aria-controls="webage_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>2007 - 2015 <a data-toggle="collapse" href="#webage_section" aria-expanded="false" aria-controls="webage_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-4 col-lg-3"><h5>Senior Instructor</h5></div>
            <div class="col-4 col-lg-3"><h5>WebAge Solutions</h5></div>
            <div class="col-4 col-lg-2"><h5>Vancouver, British Columbia</h5></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="webage_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>I joined WebAge Solutions in 2007 with the responsibility of building their Vancouver office.  Due to the economic crash of 2008, plans to expand their Vancouver office were canceled and I spent the rest of my time at WebAge splitting my time between teaching architecture/development courses and consulting.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Duties</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Provide technical training courses and consulting to many companies throughout Canada</li>
                        <li>Manager of the Vancouver office until the economic crash of 2008, after which I was the the sole employee in the Vancouver office</li>
                        <li>The courses I taught were Enterprise and Solution Architecture courses as well as developer courses</li>
                        <li>Support the sales staff and consult with clients on their behalf</li>
                        <li>Creation of courseware and e-learning materials</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Notable Projects</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Helped Lulu Lemon implement a Service Oriented Architecture (SOA) and built them a Data Service in C#.NET as well as business processes in BizTalk</li>
                        <li>Mentored a new Solution Architect at the University of British Columbia Medical School and helped her build an SOA roadmap for implementing SOA</li>
                        <li>Taught the Banque National Architecture and Development teams SOA and evaluated their employees to determine if they were ready to be on the SOA implementation project</li>
                        <li>Certified over 100 students in the The Open Group Architecture Framework (TOGAF)</li>
                        <li>Taught TOGAF to 4th year students at the Sauder School of Business at UBC</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Job 3 -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>1995 - 2007 <a data-toggle="collapse" href="#scistat_section" aria-expanded="false" aria-controls="scistat_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>1995 - 2007 <a data-toggle="collapse" href="#scistat_section" aria-expanded="false" aria-controls="scistat_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-4 col-lg-3"><h5>CEO/Owner</h5></div>
            <div class="col-4 col-lg-3"><h5>SciStat Inc.</h5></div>
            <div class="col-4 col-lg-2"><h5>Ottawa, Ontario</h5></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="scistat_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>SciStat is a custom software and consulting company I started in 1995 which I used to provide software to members of the scientific community, and later, the general business community.  From 1995 – 2000 I ran SciStat on a part time basis and was employed with, the RCMP until 1998, and then Learnix Ltd.  In 2000 I incorporated SciStat and ran the company on a full time basis until 2007.  I closed SciStat and sold the assets in 2007 in order to spend more time with my family after the birth of my daughter.</p>
                    <p>When I started SciStat, the majority of the software I developed was embedded software for custom lab equipment however; in 1998 I added a focus on custom enterprise level business software with a specific focus on distributed computing.  During the dot-com crash of 2002, I supplemented the companies' income by contracting myself out as a technical trainer and consultant which allowed the company to "weather the storm" without the need to lay off any of the five employees.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Duties</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Business duties inluded everything from developing the business plan to managing the finances</li>
                        <li>Held a Secret security clearance which expired in 2015</li>
                        <li>Creation of training courseware and e-learning materials</li>
                        <li>Developed the architecture of all SciStat Software which included technology selection</li>
                        <li>Primary development role was as the lead programmer</li>
                        <li>I also took on other roles when resources were not available such as Database Developer, Web Developer, etc.</li>
                        <li>Worked as a consultant and technical trainer under contract, for other companies throughout North America</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Notable Projects</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>C/C++ based operating systems for Intel and RISK based hardware (they used the UNIX standard so they are basically my own UNIX systems for embedding into small custom boards)</li>
                        <li>Software to remotely access an F-2000 Fluorescence Spectrophotometer via a PC</li>
                        <li>Protein modeling software which can take a sequence of amino acids and predict the three-dimensional folding of the resulting protein</li>
                        <li>Network monitoring and analysis software</li>
                        <li>Statistical software for Citizenship and Immigration Canada written in C# .NET</li>
                        <li>Several web based scheduling programs using LAMP, for training centers, a hydro company and for our own use at SciStat</li>
                        <li>Web based exam engine for online testing using our own MVC framework written in C# .NET (I wrote the framework)</li>
                        <li>Business analysis of e-learning software for CUPE (they were creating the software however; they canceled the project and bought a similar product based on my analysis which saved them a fortune)</li>
                        <li>Fully functional business to consumer e-commerce web application written in .NET which was used to train Canadian Revenue Agency (CRA) e-cast auditors to find fraud in e-commerce based businesses</li>
                        <li>Integration of all enterprise assets for a large North American photographic publisher using a Service Oriented Architecture, the WebSphere Enterprise Service Bus and Java. This was later ported by us to the WebLogic Integration Server</li>
                        <li>Helped Ford Motor Company hire 250 Businesses Analysts and developed the job description for the role</li>
                        <li>Taught a development team at General Electric how to build control software for a group of industrial robots in a manufacturing plant.  I built the basic system for them and they advanced upon it over the next year</li>
                        <li>Taught ethical hacking and preventative security to the staff of the NATO Electronic Warfare Center</li>
                        <li>Developed a SQL Server based statistical database for the Human Genome Project</li>
                        <li>Trained all of the developers and Software Engineers at Alcatel's Ottawa office systems programming in C++ when Alcatel decided to move from C to C++ for the operating system of their ATM switches</li>
                        <li>Developed the following technical training courseware which we sold to training companies
                            <ul>
                                <li>Introduction to C++</li>
                                <li>Advanced C++</li>
                                <li>Relational Database Management Systems</li>
                                <li>CORBA Programming with C++</li>
                                <li>CORBA Programming with Java</li>
                                <li>Advanced CORBA Programming</li>
                                <li>UNIX Programming with C/C++</li>
                                <li>PHP Programming</li>
                                <li>Web development with LAMP (Linux, Apache, MySQL, and PHP)</li>
                                <li>Courseware to train electronics engineers for the Department of Foreign Affairs how to design radio networks</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Job 4 -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>1998 - 2000 <a data-toggle="collapse" href="#learnix_section" aria-expanded="false" aria-controls="learnix_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>1998 - 2000 <a data-toggle="collapse" href="#learnix_section" aria-expanded="false" aria-controls="learnix_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-4 col-lg-3"><h5>Manager - Programming Department</h5></div>
            <div class="col-4 col-lg-3"><h5>Learnix Ltd.</h5></div>
            <div class="col-4 col-lg-2"><h5>Ottawa, Ontario</h5></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="learnix_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>Learnix Ltd. was Canadas' largest technical training company as well as being the fifth largest US training company.  I was hired in 1998 to teach programming courses and, after three months, was promoted to the head of the programming department for North America.  Learnix was an excellent company to work for however; in 2000, they were bought by a company called TMI.  After a meeting with the TMI executives I felt it was time to leave which is when I incorporated SciStat Inc.  A year after I left, TMI drove Learnix into bankruptcy.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Duties</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Deliver technical training courses in programming throughout North America</li>
                        <li>Manager of the programming team</li>
                        <li>Develop career paths and give direction to Programming instructors</li>
                        <li>Act as support for the sales department</li>
                        <li>Part of the team that team that creates the marketing strategy for Programming courses</li>
                        <li>Consult with corporate clients to develop learning paths for their employees based on their requirements</li>
                        <li>Develop in house software for e-commerce, course registration, and anything else the CEO and COO requested</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Notable Projects</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Part of the team that developed the electronic course registration system</li>
                        <li>Personally developed an online testing system which was sold to several clients</li>
                        <li>Involved in developing the companies first e-commerce system</li>
                        <li>Developed a C++ curriculum specifically designed to teach COBOL programmers C++ (quite the challenge)</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Job 5 -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>1992 - 1998 <a data-toggle="collapse" href="#rcmp_section" aria-expanded="false" aria-controls="rcmp_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>1992 - 1998 <a data-toggle="collapse" href="#rcmp_section" aria-expanded="false" aria-controls="rcmp_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-4 col-lg-3"><h5>FIT/FSLS</h5></div>
            <div class="col-4 col-lg-3"><h5>Royal Canadian Mounted Police</h5></div>
            <div class="col-4 col-lg-2"><h5>Ottawa, Ontario</h5></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="rcmp_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>In 1991 I was struggling to afford my education and decided to instead, apply to the R.C.M.P.  When the force found out I had two years of University science, they suggested I enter force as a forensic technician and continue with my education with the goal of becoming a forensic research scientist.  In 1992 I was sworn in to the R.C.M.P. and continued my education throughout my service.</p>
                    <p>My University degree included what was called a "technical path" which was the equivalent of a minor in computer science.  When the Director if Information and Identifications Services found out about this, I was seconded to the IT department to work on some software that needed someone who understood software engineering and the science behind forensics.  For the rest of my service, I split my time 80/20 between writing software for my department and working in forensics. Most of my time in the R.C.M.P. was spent writing software.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Duties</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Held a Top Secret security clearance which expired in 2010</li>
                        <li>Forensic identification of individuals for criminal investigations and civil security</li>
                        <li>Administration of the Criminal Name Index - GEMDES Computer Network</li>
                        <li>Manage the personnel budget for Identification Services Directorate (a duty offloaded to me by the director)</li>
                        <li>Design and creation of custom software for the Identification Services Directorate</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <h6>Notable Projects</h6>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Year 2000 testing of all computers in the Identification Services Directorate</li>
                        <li>Creation of user manuals for the Automated Fingerprint Identification System (AFIS)</li>
                        <li>Design and creation of two separate pieces of statistical software for the Criminal Name Index Unit.  The software was used to gather dynamic statistics on crime in Canada and was used by StatsCan and the Parliament of Canada</li>
                        <li>Design and creation of software to automate the entry of names into the GEMDES computer network for criminal record searching</li>
                        <li>Built a bridge between the Canadian Police Information System (CPIC) and the American National Crime Information Center (NCIC) to facilitate the sharing of criminal record information</li>
                        <li>Developed the security clearance plan for the 1995 Presidential visit of Bill Clinton and built software to automate a portion of the process</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
    </div>
    <!-- Section - Education -->
    <div class="row paragraph_row">
        <div class="d-none d-lg-block col-lg-2 text-right">
        </div>
        <div class="col-12 col-lg-8">
            <h3><a data-toggle="collapse" href="#education_section" aria-expanded="false" aria-controls="education_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> Education</h3>
        </div>
        <div class="d-none d-lg-block col-lg-2"></div>
    </div>
    <div id="education_section" class="collapse">
        <!-- University -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>University <a data-toggle="collapse" href="#university_section" aria-expanded="false" aria-controls="university_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>University <a data-toggle="collapse" href="#university_section" aria-expanded="false" aria-controls="university_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-12 col-lg-8"></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="university_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>In 1990 I entered University and graduated with a Bachelor of Science High Honors in Neuroscience "technical path" (technical path is equivalent to a minor in Computer Science).  In 2000, since the technical path gave me mid-third year standing in Software Engineering, I went back to school and completed all of the credits needed for a Software Engineering degree with the exception of a thesis.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-4 col-lg-3"><h5>BscH Neuroscience</h5></div>
                <div class="col-4 col-lg-3"><h5>Carleton University</h5></div>
                <div class="col-4 col-lg-2"><h5>Ottawa, Ontario</h5></div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Specialized in Molecular Neurobiology</li>
                        <li>Graduated with High Honors</li>
                        <li>Took the "technical path" for my degree, which is equivalent to a Minor in Computer Science, and involved taking extra credits such as discrete mathematics, systems programming, distributed software development with CORBA, Artificial Intelligence, and others</li>
                        <li>For three years of my degree I was a full-time student as well as being a full-time member of the R.C.M.P.</li>
                        <li>Thesis:  Expression of Recombinant Rat Neuronal alpha-Calcium/Calmodulin Dependent Protein Kinase-II in E. coli using the pGEX bacterial protein expression system</li>
                        <li>For my thesis I also developed software to gather data from a Florescence Spectrophotometer in order to measure and directly calculate the half-life of enzymes such as alpha-Calcium/Calmodulin Dependent Protein Kinase-II.  This involved rewriting a portion of the operating system of the Spectrophotometer</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-4 col-lg-3"><h5>Software Engineering (unfinished)</h5></div>
                <div class="col-4 col-lg-3"><h5>Carleton University</h5></div>
                <div class="col-4 col-lg-2"><h5>Ottawa, Ontario</h5></div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>Specialized in Distributed Computing</li>
                        <li>Completed all credits needed to graduate with the exception of a thesis</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Certifications -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Certifications <a data-toggle="collapse" href="#certs_section" aria-expanded="false" aria-controls="certs_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Certifications <a data-toggle="collapse" href="#certs_section" aria-expanded="false" aria-controls="certs_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-12 col-lg-8"></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="certs_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <ul>
                        <li>TOGAF Certified Enterprise Architect (The Open Group Architecture Framework)</li>
                        <li>Previously held MCSD, MCSD.NET and MCT certifications but did not renew them after I stopped teaching Microsoft Official Curriculum courses which was why I had them in the first place</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
        <!-- Technical Training -->
        <div class="row paragraph_row d-block d-lg-none">
            <div class="col-12"><h5>Technical Training <a data-toggle="collapse" href="#training_section" aria-expanded="false" aria-controls="training_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5></div>
        </div>
        <div class="row paragraph_row">
            <div class="d-none d-lg-block col-lg-2 text-right">
                <h5>Technical Training <a data-toggle="collapse" href="#training_section" aria-expanded="false" aria-controls="training_section"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h5>
            </div>
            <div class="col-12 col-lg-8"></div>
            <div class="d-none d-lg-block col-lg-2"></div>
        </div>
        <div id="training_section" class="collapse">
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right"></div>
                <div class="col-12 col-lg-8">
                    <p>The following is a list of technical training courses I have taken throughout my career. All of the Microsoft courses are listed together at the end as MS shops tend to be ubiquitous with their technology; so you can just skip to the end if that's what you're interested in.</p><p>This is not a complete list and I have only included courses which I think are relevant.  I have also taught every one of these courses as a trainer.</p>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Architecture Courses</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Architecture Courses</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Enterprise Architecture</h6>
                    <ul>
                        <li>Fundamentals of Enterprise Architecture</li>
                        <li>The Open Group Architecture Framework (TOGAF) Certification Course</li>
                    </ul>
                    <h6>Software Architecture</h6>
                    <ul>
                        <li>Software Architecture for J2EE Applications</li>
                        <li>Agile Methodologies</li>
                        <li>Agile Testing</li>
                        <li>Model View Controller(MVC) Architecture</li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Solution Architecture</h6>
                    <ul>
                        <li>Introduction to SOA</li>
                        <li>Service Oriented Architecture (SOA) for Architects</li>
                        <li>Service Oriented Architecture (SOA) for Managers</li>
                        <li>Mastering Service Oriented Analysis and Design</li>
                        <li>Service Oriented Analysis and Design (SOAD)</li>
                        <li>Testing SOA Applications</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Software Design and Business Analysis Courses</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Design, Testing and Business Analysis Courses</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Software Design</h6>
                    <ul>
                        <li>Object Oriented Analysis and Design for Software Engineers</li>
                        <li>Design Patterns in Object Oriented Software</li>
                        <li>The Unified Modeling Language (UML)</li>
                        <li>UX - User eXperience for Web and Mobile Devices</li>
                    </ul>
                    <h6>Testing</h6>
                    <ul>
                        <li>Software Testing Methodologies for Software Engineers</li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Business Analysis</h6>
                    <ul>
                        <li>Introduction to Business Analysis</li>
                        <li>Gathering and Documenting Software Requirements</li>
                        <li>Object Oriented Analysis and Design for Business Analysts</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Software Development</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Software Development</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">                           
                    <h6>C/C++ Programming</h6>
                    <ul>
                        <li>Introduction to C</li>
                        <li>Advanced C</li>
                        <li>Intro to C++</li>
                        <li>Advanced C++</li>
                        <li>Operating System Development on x86 architectures using Assembly and C/C++</li>
                    </ul>
                    <h6>Java Programming</h6>
                    <ul>
                        <li>Intro to Java</li>
                        <li>Introduction to Java for C++ Programmers</li>
                        <li>Advanced Java</li>
                        <li>Java Awt/Swing</li>
                        <li>Building Database Client Applications with JDBC</li>
                        <li>Developing Mobile Applications for Android</li>
                    </ul>
                    <h6>XML Programming</h6>
                    <ul>
                        <li>Fundamentals of XML</li>
                        <li>Comprehensive XML</li>
                        <li>XML Programming Using Java</li>
                        <li>Advanced XML Programming</li>
                    </ul>
                    <h6>CORBA Programming</h6>
                    <ul>
                        <li>CORBA Programming with C++</li>
                        <li>CORBA Programming with Java</li>
                        <li>Advanced CORBA Programming with C++</li>
                        <li>Advanced CORBA Programming with Java</li>
                    </ul>
                    <h6>UNIX Programming</h6>
                    <ul>
                        <li>UNIX Programming</li>
                        <li>Linux Programming</li>
                        <li>UNIX Shell Scripting (Bourne, Korn, C-Shell, Bash)</li>
                        <li>Linux Shell Scripting</li>
                        <li>PERL Programming</li>
                        <li>Awk Programming</li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Web Development</h6>
                    <ul>
                        <li>HTML / CSS and JavaScript</li>
                        <li>HTML 5.0</li>
                        <li>CSS development with SASS</li>
                        <li>CGI Programming using Perl</li>
                        <li>Advanced JavaScript</li>
                        <li>Web Development with Struts</li>
                        <li>Web Development with Apache Tomcat</li>
                        <li>Web Development with JavaServer Faces</li>
                        <li>Web Development with PHP</li>
                        <li>Mastering AJAX</li>
                        <li>AJAX Programming with JQuery</li>
                    </ul>
                    <h6>JEE Programming</h6>
                    <ul>
                        <li>JEE Best Practices and Patterns</li>
                        <li>Developing JEE Applications Using Spring Framework</li>
                        <li>Developing JEE Applications using Hibernate</li>
                        <li>JEE Programming with WebSphere, WebLogic and JBoss</li>
                        <li>WebSphere JSPs and Java Servlets Programming (v8.5.5)</li>
                        <li>WebSphere JEE Programming (JSPs, Servlets, and EJBs) (v8.5.5)</li>
                        <li>WebSphere Security Programming (v8.5.5)</li>
                        <li>WebSphere Enterprise Service Bus (ESB) Programming Using WebSphere Integration Developer</li>
                        <li>WebSphere Process Server Programming Using WebSphere Integration Developer</li>
                        <li>WebSphere MQ C++ Programming</li>
                        <li>JMS Programming for WebSphere MQ</li>
                        <li>WebSphere MQ Java Application Programming</li>
                        <li>JSPs and Java Servlet Development Using Weblogic (v12c)</li>
                        <li>Web Services Development Using WebLogic Server (v12c)</li>
                        <li>Web Development with JSPs and Java Servlets (Jboss/Tomcat Edition)</li>
                        <li>WebLogic Integration Developing Integration Solutions (v8.1)</li>
                        <li>JBoss Application Server Clustering</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Database Programming and Administration Courses</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Database Programming and Administration Courses</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>MySQL</h6>
                    <ul>
                        <li>MySQL Database Design and Development</li>
                    </ul>
                    <h6>Oracle</h6>
                    <ul>
                        <li>Oracle Database 12g: Introduction to SQL</li>
                        <li>Oracle Database 12g: SQL Tuning</li>
                        <li>Oracle Database 12g: Program With PL/SQL Part I</li>
                        <li>Oracle Database 12g: Program With PL/SQL Part II</li>
                        <li>Oracle Database 12g: Advanced PL/SQL Programming and Tuning</li>
                        <li>Oracle Database 12g: Architecture for Developers</li>
                        <li>Oracle Database 12g: Administration I</li>
                        <li>Oracle Database 12g: Administration II  </li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>DB2</h6>
                    <ul>
                        <li>DB2 Universal Database (UDB) Introduction for UNIX and Windows</li>
                        <li>SQL for DB2 Advanced</li>
                        <li>DB2 UDB SQL Stored Procedures for UNIX and Windows</li>
                        <li>DB2 UDB Application Design for Performance for UNIX and Windows</li>
                        <li>DB2 UDB Application Programming for UNIX and Windows</li>
                        <li>DB2 UDB Advanced Programming Topics for UNIX and Windows</li>
                        <li>DB2 UDB Administration for Unix and Windows I</li>
                        <li>DB2 UDB Administration for Unix and Windows II</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Server Administration Courses</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Server Administration Courses</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Linux</h6>
                    <ul>
                        <li>Intro to Linux</li>
                        <li>Linux System Administration</li>
                        <li>Linux Networking</li>
                        <li>Secure Linux Server Techniques for the New Linux Administrator</li>
                    </ul>
                    <h6>UNIX</h6>
                    <ul>
                        <li>Intro to UNIX</li>
                        <li>UNIX System Administration</li>
                        <li>UNIX Networking</li>
                        <li>Solaris OE System Administration</li>
                        <li>Solaris OE Network Administration</li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>WebSphere</h6>
                    <ul>
                        <li>WebSphere Application Server Administration on Linux (v8.5.5)</li>
                        <li>WebSphere Application Server (Network Deployment Edition) Administration (v8.5.5)</li>
                        <li>WebSphere Performance Tuning and Methodology Workshop (v8.5.5)</li>
                    </ul>
                    <h6>WebLogic</h6>
                    <ul>
                        <li>WebLogic Server Administration (v12c)</li>
                        <li>WebLogic Server Performance Tuning</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
            <div class="row paragraph_row d-block d-lg-none">
                <div class="col-12"><h5>Microsoft Courses</h5></div>
            </div>
            <div class="row paragraph_row">
                <div class="d-none d-lg-block col-lg-2 text-right">
                    <h5>Microsoft Courses</h5>
                </div>
                <div class="col-12 col-md-6 col-lg-4">

                    
                    <h6>C++.NET</h6>
                    <ul>
                        <li>Programming with Managed Extension for Microsoft Visual C++ .NET</li>
                    </ul>
                    <h6>C#.NET</h6>
                    <ul>
                        <li>Programming with C#</li>
                        <li>Introduction to C# Programming with Microsoft .NET</li>
                        <li>Programming with the Microsoft .NET Framework (Microsoft Visual C#)</li>
                        <li>Developing Microsoft .NET Applications for Windows (Visual C# .NET)</li>
                        <li>Developing Distributed Applications with Microsoft .NET Remoting</li>
                    </ul>
                    <h6>VB.NET</h6>
                    <ul>
                        <li>Programming with Microsoft Visual Basic .NET</li>
                        <li>Introduction to Visual Basic .NET Programming with Microsoft .NET</li>
                        <li>Programming with the Microsoft .NET Framework (Microsoft Visual Basic .NET)</li>
                        <li>Developing Microsoft .NET Applications for Windows (Visual Basic .NET)</li>
                        <li>Application Upgrade and Interoperability using Visual Studio .NET (Visual Basic .NET)</li>
                    </ul>
                    <h6>ASP.NET</h6>
                    <ul>
                        <li>Upgrading Web Development Skills from ASP to Microsoft ASP.NET</li>
                        <li>Developing Microsoft ASP.NET Web Applications Using Visual Studio .NET</li>
                        <li>Advanced Web Application Development using ASP.NET</li>
                        <li>Developing Microsoft ASP.NET 2.0 Web Applications</li>
                        <li>Building XML-Based Web Applications</li>
                        <li>Developing XML Web Services Using Microsoft ASP.NET</li>
                        <li>Developing ASP.NET MVC Web Applications</li>
                        <li>Developing and Deploying Secure Microsoft .NET Applications</li>
                    </ul>
                </div>
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h6>Misc</h6>
                    <ul>
                        <li>Analyzing Requirements and Defining Microsoft .NET Solution Architectures</li>
                        <li>Optimizing the Software Development Lifecycle with Microsoft Visual Studio Team System</li>
                        <li>Building COM+ Applications Using Microsoft .NET Enterprise Services</li>
                        <li>Developing Distributed Applications with Microsoft .NET Remoting</li>
                        <li>Developing Embedded Solutions using Microsoft Windows CE 3.0</li>
                        <li>Developing Mobile Applications using the Microsoft .NET Compact Framework</li>
                        <li>Customizing Microsoft Share Point Products and Technologies 2003</li>
                    </ul>
                    <h6>XML</h6>
                    <ul>
                        <li>Introduction to XML and the Microsoft .NET Platform</li>
                        <li>Programming with XML in the Microsoft .NET Framework</li>
                        <li>Exchanging and Transforming Data using XML and XSLT</li>
                    </ul>
                    <h6>Database</h6>
                    <ul>
                        <li>Programming with Microsoft ADO.NET</li>
                        <li>Programming a Microsoft SQL Server 2000 Database</li>
                        <li>Querying Microsoft SQL Server 2000 with Transact-SQL</li>
                    </ul>
                    <h6>BizTalk</h6>
                    <ul>
                        <li>Developing E-Business Solutions Using Microsoft BizTalk Server 2004</li>
                        <li>Developing Business Process and Integration Solutions Using Microsoft BizTalk Server 2006</li>
                        <li>Deploying and Managing Business Process and Integration Solutions Using BizTalk Server 2006</li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-lg-2"></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 end_image"></div>
    </div>
</div>

<?php require 'footer.php'; ?>