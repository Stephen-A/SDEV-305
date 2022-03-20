<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

if(empty($_SESSION['username'])) {
    // Store the current page in the session
    $_SESSION['page'] = "https://sallen.greenriverdev.com/Final%20Portfolio%20Project/guestbook%20form/thankyou.php";
}


$pageTitle = "Thank You";

include "/home/sallengr/public_html/Final Portfolio Project/guestbook form/includes/connect-database.php";
include "/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_header.php";
include "/home/sallengr/public_html/Final Portfolio Project/guestbook form/includes/guestbook_functions.php";

$fname = ""; //First name
$lname = ""; ;//Last name
$job_title = ""; // Job title
$company = ""; // Company
$linkedin = ""; // Linkedin
$email = ""; // email address
$how_we_met = ""; // How we met
$mailing_list = ""; // mailing list checkbox
$method = ""; // html/email radio button
$other = "";
$comment = "";

// Validate data
$isValid = true;

// Validate First Name
if (!validName($_POST['fname'])) {
    echo "<p>Please enter your first name</p>";
    $isValid = false;
} else {
    $fname = $_POST['fname'];
}

// Validate Last Name
if (!validName($_POST['lname'])) {
    echo "<p>Please enter a last name<p>";
    $isValid = false;
} else {
    $lname = $_POST['lname'];
}

// Validate LinkedIn
if(validLinkedin($_POST["linkedin"])) {
    echo"<p>Please enter a valid Linkedin</p>";
    $isValid = false;
} else {
    $linkedin = $_POST['linkedin'];
}

// Validate E-mail
if(validEmail($_POST["email"])) {
    echo "<p>Please enter a valid email<p>";
    $isValid = false;
} else {
    $email = $_POST['email'];
}

// Validate How We Met
if(!isset($_POST['how_we_met'])){
    echo "<p>Please select a valid option for how we met<p>";
    $isValid = false;
} else if (!validHowWeMet($_POST['how_we_met'])) {
    echo "<p>Please select a valid option for how we met</p>";
    $isValid = false;
} else {
    $how_we_met = $_POST['how_we_met'];
}

// Validate mailingList checkbox
if(isset($_POST['mailingList'])){
    $mailing_list = "Yes";
} else{
    $mailing_list = "No";
}

// Validate Email Listing and email address
if(isset($_POST['mailingList']) && empty($_POST["email"])) {
    echo "<p>Email address is required to add you to our mailing list. Please provide an email address</p>";
    $isValid = false;
}

if(isset($_POST['mailingList']) && !isset($_POST['method'])){
    echo "<p>Email format must be selected</p>";
    $isValid = false;
} else if(isset($_POST['mailingList']) && isset($_POST['method'])){
    $method = $_POST['method'];
}

$job_title = $_POST['job-title'];
$company = $_POST['company'];
$other = $_POST['otherTextBox'];
$comment = $_POST['comment'];

// FINAL CHECK - If the data is not valid, stop processing the form/ data
if(!$isValid) {
    return;
}

?>
    <!-- Styling for thankyou.php -->
    <link rel="stylesheet" href="/Final%20Portfolio%20Project/guestbook%20form/styles/guestbook-styles.css">
    <!-- Favicon from https://icons8.com/icons/set/favicon -->
    <link rel="icon" type="image/png" href="/Final%20Portfolio%20Project/guestbook%20form/images/guest-book-8460.png">
    <div id="main" class="container-fluid">
        <div class="jumbotron" id="jumbotron">
            <h1 class="display-4">Thank you for your submission!</h1>
        </div>
        <?php
        $sqlInsert = "INSERT INTO guestbook_form(`fname`, `lname`, `job_title`, `company`, `linkedin`, `email`, `how_we_met`, `method`, `other`, `comment`, `mailing_list`)
                                        VALUES('$fname', '$lname', '$job_title', '$company', '$linkedin', '$email', '$how_we_met', '$method', '$other', '$comment', '$mailing_list')";
        $success = mysqli_query($cnxn, $sqlInsert);
        $sqlSelect = "SELECT * FROM guestbook_form";
        $result = @mysqli_query($cnxn, $sqlSelect);

?>
        <div class='container' id='summary-info-container'> <!-- summary-info-container -->
        <h1 id='summary-header'>Summary of your Information</h1>
        <?php
        echo "<p><strong>Name:</strong> $fname $lname </p>";
        echo "<p><strong>Job Title:</strong> $job_title</p>";
        echo "<p><strong>Company:</strong> $company</p>";
        echo "<p><strong>Linkedin:</strong> $linkedin</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Where we met:</strong> $how_we_met $other</p>";
        echo "<p><strong>Leave a message:</strong> $comment</p>";
        echo "<p><strong>Emailing list?</strong> $mailing_list</p>";
        echo "<p><strong>Email format:</strong> $method</p>";
        ?>
        </div>
    </div> <!-- /summary-info-container -->
<!-- Includes footer.php with Jquery, Popper, Bootstrap, and </body>, </html> tags -->
<?php
include("/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_footer.php");
?>