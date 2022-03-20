<?php
session_start();

$pageTitle = "Guestbook Log";

if(empty($_SESSION['username'])) {
    // Store the current page in the session
    $_SESSION['page'] = "https://sallen.greenriverdev.com/Final%20Portfolio%20Project/guestbook%20form/adminpage.php";

    // Redirect user to login page
    header('location: ../login.php');
}
include "/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_header.php";
include "/home/sallengr/public_html/Final Portfolio Project/guestbook form/includes/connect-database.php";
?>
    <!-- Styling for Datatables on admin.php-->
    <link rel="stylesheet" type="text/css" href="/Final%20Portfolio%20Project/guestbook%20form/styles/data-tables-styles.css">
    <div class="form-group mx-sm-3 mb-2">
        <label>
            <input type="text" class="form-control" id="datatables-search" placeholder="Search...">
        </label>
    </div>
<?php
$sqlSelect = "SELECT * FROM guestbook_form";
$result = @mysqli_query($cnxn, $sqlSelect);

echo "<table id='table_id' class='table table-striped table-bordered'>
           <thead>
               <tr>
                   <th>Guest ID</th>
                   <th>Name</th>
                   <th>Date</th>
                   <th>Job Title</th>
                   <th>Company</th>
                   <th>Linkedin URL</th>
                   <th>Email</th>
                   <th>How We Met</th>
                   <th>Message</th>
                   <th>Emailing List?</th>
                   <th>Email Format</th>
               </tr>
           </thead>
       <tbody>";

foreach ($result as $row) {
    $guest_id = $row["guest_id"];
    $fname = $row["fname"];
    $lname = $row["lname"];
    $date = $row["date"];
    $job_title = $row["job_title"];
    $company = $row["company"];
    $linkedin = $row["linkedin"];
    $email = $row["email"];
    $how_we_met = $row['how_we_met'];
    $comment = $row["comment"]; // Message
    $method = $row["method"];
    $mailing_list = $row["mailing_list"];
    $other = $row["other"];

    echo "<tr>
               <td>$guest_id</td>
               <td>$fname $lname</td>
               <td>$date</td>
               <td>$job_title</td>
               <td>$company</td>
               <td>$linkedin</td>
               <td>$email</td>
               <td>$how_we_met</td>
               <td>$comment</td>
               <td>$mailing_list</td>
               <td>$method</td>
           </tr>";
}

echo "</tbody></table>";

?>
<?php
include("/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_footer.php");
?>