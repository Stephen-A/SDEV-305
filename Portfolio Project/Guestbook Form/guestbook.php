<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "includes/portfolio_header.php";
?>

<!-- MAIN CONTENT FOR GUESTBOOK -->
<div id="main" class="container-fluid">
    <!-- Jumbotron -->
    <div class="jumbotron" id="jumbotron">
        <h1 class="display-4">Guestbook</h1>
    </div>
    <!-- FORM | FIRST NAME, LAST NAME, JOB TITLE, COMPANY, LINKEDIN URL, EMAIL ADDRESS, HOW WE MET, MAILING LIST, SUBMIT BUTTON -->
    <form id="guestbook-form" action="thankyou.php" method="post">

        <!-- Contact Information (First Name, Last Name, Email Address)-->
        <fieldset class="contact-info form-group mb-0">
            <legend class="col-form-label col-sm"><strong>Contact Info</strong></legend>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" placeholder="Enter first name" id="fname" name="fname">
                <span class="err" id="err-fname">*Please enter your first name</span>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Enter last name" id="lname" name="lname">
                <span class="err" id="err-lname">*Please enter your last name</span>
            </div>
            <div class="form-group">
                <label for="job-title">Job Title:</label>
                <input type="text" class="form-control" placeholder="Enter Job Title" id="job-title" name="job-title">
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" placeholder="Enter Company" id="company" name="company">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn:</label>
                <input type="url" class="form-control" placeholder="Enter linkedIn" id="linkedin" name="linkedin">
                <span class="err" id="err-linkedin">*Please enter a valid linkedin url ("https://linkedin.com/in/...)"</span>

            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                <span class="err" id="err-email">*Please enter a valid email address</span>
            </div>
        </fieldset>
        <!-- How We Met -->
        <fieldset class="how-we-met form-group">
            <legend class="col-form-label col-sm"><strong>How we met</strong></legend>
            <div class="form-row">
                <div class="col-auto">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">How did we meet?</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" onchange="validateOtherMain()">
                        <option value="0" selected>Choose...</option>
                        <option value="1">Meetup</option>
                        <option value="2">Job Fair</option>
                        <option value="3">Other</option>
                        <option value="4">We haven't met yet</option>
                    </select>
                    <span class="err" id="err-choose">*Please select an option</span>
                    <div class="form-group mt-2" id="otherMain">
                        <label for="otherTextBox">Other (please specify):</label>
                        <textarea class="form-control" rows="1" id="otherTextBox" name="otherTextBox"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="2" id="comment" name="comment"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- Mailing List -->
        <fieldset class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="mailingList" name="mailingList" onclick="validateCheckbox()">Please add me to your mailing list! </label>
            <!-- Email Format Radio Buttons-->
            <div class="emailFormat" id="emailFormat">
                <label class="mr-sm-2 pt-2 mb-0">Please choose an email format:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="HTML">
                    <label class="form-check-label" for="inlineRadio1">HTML</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="Text">
                    <label class="form-check-label" for="inlineRadio2">Text</label>
                </div>
            </div>
        </fieldset>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit Form</button>
    </form>
</div>


<!-- Includes footer.php with Jquery, Popper, Bootstrap, and </body>, </html> tags -->
<?php include "includes/portfolio_footer.php";
?>
