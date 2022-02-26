<?php
/* 305/pizza/inludes/connect.php */

//Connect to database
$username = "sallengr_grcuser";
$password = "@usergrc123";
$hostname = "localhost";
$database = "sallengr_grc";

($cnxn = @mysqli_connect($hostname, $username, $password, $database)) or
die("<p>Oops! We aren't able to connect to the database</p>");
