<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/connect-database.php');
    include('includes/portfolio_header.php');

    $guest_id = "";
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
if (!$isValid){
    return;
}

$sqlSelect = "SELECT * FROM guestbook_form";
$result = @mysqli_query($cnxn, $sqlSelect);

echo"<table id='table_id' class='display compact'>
    <thead>
    <tr>
        <th>Guest ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>job_title</th>
        <th>Company</th>
        <th>Linkedin</th>
        <th>Email</th>
        <th>Method</th>
        <th>Other</th>
        <th>Comment</th>
        <th>Submission Date</th>
    </tr>
    </thead>
    <tbody>";


foreach ($result as $row) {
    $guest_id = $row['guest_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $job_title = $row['job_title'];
    $company = $row['company'];
    $linkedin = $row['linkedin'];
    $email = $row['email'];
    $method = $row['method'];
    $other = $row['other'];
    $comment = $row['comment'];
    $order_date = $row['order_date'];


    echo "<tr>
        <td>$guest_id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$job_title</td>
        <td>$company</td>
        <td>$linkedin</td>
        <td>$email</td>
        <td>$method</td>
        <td>$other</td>
        <td>$comment</td>
        <td>$order_date</td>
    </tr>";

}

echo "</tbody></table>";

include('includes/portfolio_footer.php');

