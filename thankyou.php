<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/portfolio_header.php');
include('includes/connect-database.php');
include('includes/functions.php');

?>
    <div id="main" class="container-fluid">
        <!-- Jumbotron -->
        <div class="jumbotron" id="jumbotron">
            <h1 class="display-4">Thank you for your submission!</h1>
        </div>

<?php

$fname = "";
$lname = "";
$job_title = "";
$company = "";
$linkedin = "";
$email = "";
$method = "";
$other = "";
$comment = "";

$isValid = true;

if (isset($_POST['fname'])){
    $fname = $_POST['fname'];
}
if (isset($_POST['lname'])){
    $lname = $_POST['lname'];
}
if (isset($_POST['method'])){
    $method = $_POST['method'];
}
if (isset($_POST['job-title'])){
    $job_title = $_POST['job-title'];
}
if (isset($_POST['company'])){
    $company = $_POST['company'];
}
if (isset($_POST['linkedin'])){
    $linkedin = $_POST['linkedin'];
}
if (isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['otherTextBox'])){
    $other = $_POST['otherTextBox'];
}
if (isset($_POST['comment'])){
    $comment = $_POST['comment'];
}



$sqlInsert = "INSERT INTO guestbook_form(`fname`, `lname`, `job_title`, `company`, `linkedin`, `email`, `method`, `other`, `comment`)
                                  VALUES('$fname', '$lname', '$job_title', '$company', '$linkedin', '$email', '$method', '$other', '$comment')";
$success = mysqli_query($cnxn, $sqlInsert);


    $sqlSelect = "SELECT * FROM guestbook_form";
    $result = @mysqli_query($cnxn, $sqlSelect);

echo "<p>Name: $fname $lname </p>";
echo "<p>Job Title: $job_title</p>";
echo "<p>Company: $company</p>";
echo "<p>Linkedin: $linkedin</p>";
echo "<p>Email: $email</p>";
echo "<p>Method: $method</p>";
echo "<p>Other comment: $other</p>";
echo "<p>Comment: $comment</p>";

?>

    </div>
<?php
include('includes/portfolio_footer.php');

?>