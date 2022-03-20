<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

$pageTitle = "Resume";

/*include "/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_header.php";*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Final%20Portfolio%20Project/styles/navbar-styles.css">
    <!-- Stylesheets for Bootstrap and DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <!-- Bootstrap icons (Linkedin, Github, Email, Phone) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/Final%20Portfolio%20Project/favicon/icons8-bookmark-120.png">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
<link rel="stylesheet" href="/Final%20Portfolio%20Project/resume/styles/resume-styles.css">
<div class="container">
    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="row">
                <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                    <img class="picture" src="portrait/newPortrait.png" alt="">
                </div><!--//col-->
                <div class="col">
                    <div class="row p-4 justify-content-center justify-content-md-between">
                        <div class="primary-info col-auto">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Stephen Allen</h1>
                            <div class="title mb-3 text-white">Full Stack Developer Intern</div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a class="text-link" href="mailto:stephenallen337@gmail.com"><i class="bi bi-envelope-fill"></i>Stephenallen337@gmail.com</a></li>
                                <li><a class="text-link" href="#"><i class="bi bi-phone-fill"></i>(253) 347-1047</a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info col-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3"><a class="text-link" href="https://www.linkedin.com/in/stephen--j--allen/"><span class="fa-container text-center me-2"><i class="bi bi-linkedin"></i></span>linkedin.com/in/Stephen--j--Allen</a></li>
                                <li class="mb-3"><a class="text-link" href="https://github.com/Stephen-A"><span class="fa-container text-center me-2"><i class="bi bi-github"></i></span>github.com/Stephen-A</a></li>
                            </ul>
                        </div><!--//secondary-info-->
                    </div><!--//row-->
                </div><!--//col-->
            </div><!--//row-->
        </header>
        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0">
                            Upcoming graduate with a BAS in Software Development striving to improving skills within a company through hands-on learning and development work.
                        Adept at using HTML5, JavaScript and other programming languages to produce clean code.
                        Well-organized and collaborative team player with strong communication and analytical abilities.
                        </p>
                    </div>
            </section>
            <section class="resume-section work-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                <p class="mb-0" id="polyclinic">PolyClinic</p>
                    <span> - Auburn, WA</span>
                    <span class="date">2022 to Present</span>
                <h6 class="mb-0 font-weight-normal">Web Developer Intern</h6>
                <ul>
                    <li>Operated using scrum methodologies within a small team to develop a data-driven website for a client</li>
                    <li>Responsible for providing client with a readable and editable database for over 20 individual health-care facilities</li>
                    <li>Designed web page structure and tables utilizing HTML, CSS, Bootstrap, JavaScript, PHP, and MySQL</li>
                </ul>
            </section>
            <section class="resume-section skills-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Technical Skills</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-6 pl-0">
                            <ul>
                                <li>Languages: Java, JavaScript, SQL, PHP</li>
                                <li>Web: HTML/CSS, Bootstrap</li>
                                <li>Agile: pair programming, working in sprints</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Tools: IntelliJ IDE, Komodo IDE, PHPStorm</li>
                            </ul>
                        </div><!--</col-->
                    </div><!--</row-->
                </div><!--</container-->
            </section>

            <section class="resume-section education-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                <p class="mb-0" id="college">Green River College</p>
                <span> - Auburn, WA</span>
                <span class="date">2017 to Present</span>
                <p class="mb-0">Bachelors of Science: Software Development, expected August 2023</p>
                <p class="mb-0">Relevant Coursework:</p>
                <div class="container">
                    <div class="row">
                        <div class="col-6 pl-0">
                            <ul>
                                <li>Object-Oriented Programming</li>
                                <li>Data Structures</li>
                                <li>Systems Programming (bitwise operations,</li>
                                <li class="list-unstyled">exceptions, threads, networking)</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Web Programming W/JavaScript</li>
                                <li>Front-End Web Development</li>
                                <li>Interpersonal Communication</li>
                            </ul>
                        </div><!-- </col> -->
                    </div><!-- </row> -->
                </div><!-- </container> -->
            </section>
        </div>
    </div>
</div>

<?php
include("/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_footer.php");
?>
