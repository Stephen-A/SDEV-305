<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

if(empty($_SESSION['username'])) {
    // Store the current page in the session
    $_SESSION['page'] = "https://sallen.greenriverdev.com/Final%20Portfolio%20Project/guestbook%20form/guestbook.php";
}

$pageTitle = "Guestbook Form";

include "/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_header.php";
include "/home/sallengr/public_html/Final Portfolio Project/guestbook form/includes/guestbook_functions.php";
?>
    <!-- Styling for guestbook.php -->
    <link rel="stylesheet" href="/Final%20Portfolio%20Project/guestbook%20form/styles/guestbook-styles.css">
    <!-- Main container -->
    <div id="main" class="container-fluid">
        <div class="jumbotron" id="jumbotron">
            <h1 class="display-4">Guestbook</h1>
            <h2>I look forward to meeting you!</h2>
        </div>

        <!-- Form | First Name, Last Name, Job Title, Company, Linkedin URL, Email Address, How We Met, Mailing List, Submit Button -->
        <form id="guestbook-form" action="thankyou.php" method="post">
            <h3 class="mb-3">Contact Information</h3>
            <div class="form-row">
                <div class="col">
                    <!-- Contact Information | First Name, Last Name, Job-Title, Company, Linkedin URL, Email Address, -->
                    <label for="fname">First Name:</label> <!-- First Name -->
                    <input type="text" class="form-control" placeholder="What's your first name?" id="fname" name="fname">
                    <span class="err" id="err-fname">*Please enter your first name</span>
                </div> <!-- /col -->
                <div class="col">
                    <label for="lname">Last Name:</label> <!-- Last Name -->
                    <input type="text" class="form-control" placeholder="What's your last name?" id="lname" name="lname">
                    <span class="err" id="err-lname">*Please enter your last name</span>
                </div> <!-- /col -->
            </div> <!-- /form-row -->
            <div class="form-row">
                <div class="col"> <!-- Job Title -->
                    <label for="job-title">Job Title:</label>
                    <input type="text" class="form-control" placeholder="What do you do for work?" id="job-title" name="job-title">
                </div> <!-- /col -->
                <div class="col"> <!-- Company -->
                    <label for="company">Company:</label>
                    <input type="text" class="form-control" placeholder="What company do you work for?" id="company" name="company">
                </div> <!-- /col -->
            </div> <!-- /form-row -->
            <div class="form-row mb-5">
                <div class="col"> <!-- Linkedin -->
                    <label for="linkedin">Linkedin:</label>
                    <input type="url" class="form-control" placeholder="Let's Connect!" id="linkedin" name="linkedin">
                    <span class="err" id="err-linkedin">*Please enter a valid linkedin url ("https://linkedin.com/in/...)"</span>
                </div> <!-- /col -->
                <div class="col">
                    <label for="email">Email:</label> <!-- Email -->
                    <input type="email" class="form-control" placeholder="What's your email?" id="email" name="email">
                    <span class="err" id="err-email">*Please enter a valid email address</span>
                </div> <!-- /col -->
            </div> <!-- /form-row -->
            <!-- How we met | Where did we meet, Other comment box, Comment box -->
            <div class="how-we-met form-group" id="how-we-met">
                <h3 class="mb-3">How We Met</h3>
                <div class="form-row">
                    <div class="col"> <!-- Where did we meet? -->
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Where did we meet?</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="how_we_met" onchange="validateOtherMain()">
                            <option value="0" selected>Choose...</option>
                            <option value="Tech Meetup">Tech Meetup</option>
                            <option value="Job Fair">Job Fair</option>
                            <option value="We haven't met yet">We haven't met yet</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="err" id="err-choose">*Please select an option</span>
                        <div class="form-group mt-2" id="otherMain"> <!-- Other comment box -->
                            <label for="otherTextBox">Please Specify!</label>
                            <textarea class="form-control" rows="1" id="otherTextBox" name="otherTextBox"></textarea>
                        </div>
                        <div class="form-group mt-2"> <!-- Comment box -->
                            <label for="comment">Feel free to leave a message!</label>
                            <textarea class="form-control" rows="4" id="comment" name="comment"></textarea>
                        </div>
                    </div> <!-- /col -->
                </div> <!-- /form-row -->
            </div> <!-- /how-we-met -->
            <!-- Mailing list | Emailing list checkbox, Email format -->
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="mailingList" name="mailingList" onclick="validateCheckbox()">Please add me to your mailing list!</label> <!-- Emailing list checkbox -->
                <div class="emailFormat" id="emailFormat">
                    <label class="mr-sm-2 pt-2 mb-0">Please choose an email format:</label> <!-- Email format -->
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="html">
                        <label class="form-check-label" for="inlineRadio1">HTML</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="text">
                        <label class="form-check-label" for="inlineRadio2">Text</label>
                    </div>
                </div> <!-- /emailFormat -->
            </div> <!-- /form-group -->
            <!-- Submit Button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn">Submit Form</button>
            </div>
        </form> <!-- /guestbook-form -->
    </div> <!-- /main -->
    <!-- Includes footer.php with Jquery, Popper, Bootstrap, and </body>, </html> tags -->
<?php
include("/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_footer.php");
?>