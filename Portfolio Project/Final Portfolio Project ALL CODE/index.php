<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

$pageTitle = "Index";

include('Final Portfolio Project/includes/portfolio_header.php');
?>
<link rel="stylesheet" type="text/css" href="/Final%20Portfolio%20Project/styles/home-styles.css">
<div class="content-wrapper">
    <div class="header-content mb-5" id="header-content">
        <div class="container">
            <h1>Hi, my name is Stephen Allen!</h1>
            <div class="row">
                <div class="col-7" id="biography"> <!-- Biography Description -->
                    <p id="biography-description">I am currently in my third year at Green River College pursuing a Bachelors degree in Software Development. I grew up using technology consistently which painted the picture
                        for the journey I would take through schooling. In the near future I would like to see myself writing programs that would prove to be
                        helpful to others in some way shape or form.
                    </p>
                    <br>
                    <a class="btn" href="https://sallen.greenriverdev.com/Final%20Portfolio%20Project/resume/resume.php" target="_blank" role="button" id="resume-button">Check out my resume</a>
                </div> <!-- /biography-description -->
            </div> <!-- /row -->
        </div> <!-- /container -->
    </div> <!-- /header-content -->
    <div class="main-portfolio-section" id="main-portfolio-section">
        <div class="container" id="portfolio-container">
            <div class="row mb-5">
                <div class="col-md-7 text-center mx-auto" id="portfolio-description"> <!-- Portfolio Description -->
                    <p>In just my first quarter of the Bachelors program for Software Development I was exposed to a variety of different projects and assignments.
                        I was given the opportunity to work with a small scrum team that delivered a data-driven website using HTML, CSS, Bootstrap, and PHP. Aside
                        from that project which last the entire quarter, I was also assigned various individual assignments, which focused on Object-Oriented Programming
                        using Java.</p>
                    <span class="mb-3 d-block">Here's a few projects and assignments from my first quarter</span>
                </div> <!-- /portfolio-container -->
            </div> <!-- /row -->
            <div class="row mb-5" id="polyclinic-project-section">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="Final%20Portfolio%20Project/assignment%20screenshots/polyclinic-screenshot.PNG" alt="" class="img-responsive fit-image">
                </div>
                <div class="col-lg-5 h-100 ml-auto">
                    <h3>PolyClinic Project</h3> <!-- PolyClinic Project -->
                    <p>Working on a scrum team that included myself and three other peers, we worked to deliver a website for the client that would allow standard users to access
                        the basic information that would be needed on a daily basis, while an administrator would have access to view and edit a database of healthcare organizations
                        that worked with the PolyClinic and each of those organizations respective information. The website was deployed using the Bootstrap 4 framework, HTML, CSS, JavaScript, and PHP.</p>
                    <a href="https://runtime-terrors.greenriverdev.com/" target="_blank" id="runtime-terrors-link">Visit Website</a>
                </div> <!-- /col -->
            </div> <!-- /polyclinic-project-section -->
            <div class="row mb-5" id="card-game-assignment-section">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="Final%20Portfolio%20Project/assignment%20screenshots/cardgame-screenshot.PNG" alt="">
                </div>
                <div class="col-lg-5 h-100 ml-auto">
                    <h3>Card Game Assignment</h3> <!-- Card Game Assignment -->
                    <p>With the card game assignment, we were tasked to create a card game that would initially build a 52 deck of cards. Once the deck was built, we would then use
                        different methods that we created to manipulate the deck in different ways. These method functions included- dealing the top card of the deck and placing it
                        into the discard pile, and shuffling the deck to print it back out in a random order. Another addition to this assignment was the implementation of jUnit testing,
                        which we used to test the getters and setters of the individual card classes</p>
                </div> <!-- /col -->
            </div> <!-- /card-game-assignment-section -->
            <div class="row mb-5" id="magic-square-game-assignment-section">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="Final%20Portfolio%20Project/assignment%20screenshots/magicsquaregame-screenshot.PNG" alt="">
                </div>
                <div class="col-lg-5 h-100 ml-auto">
                    <h3>Magic Square Game Assignment</h3> <!-- Magic Square Game Assignment -->
                    <p>With the magic squares game assignment we were tasked to create a game that was similar to tic-tac-toe. The program defined an array of bytes that were used to make up
                        the game board. Two users would take turns inputting a number into the console that would compare values against each other, and compare to the values that were already
                        chosen. As the users entered in numbers the board would populate, showing which numbers were already chosen. Once one of the players was able to fulfill the win-condition
                        of achieving 15 points, then the game would end and that player would be victorious.</p>
                </div> <!-- /col -->
            </div> <!-- /magic-square-game-assignment-section -->
        </div> <!-- /container -->
    </div> <!-- /main-portfolio section -->
</div> <!-- /content-wrapper -->
<?php
include('Final Portfolio Project/includes/portfolio_footer.php');
?>
