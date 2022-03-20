<!DOCTYPE html>
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
<!-- Navigation bar | Home, Guestbook Form, Admin Page, Alternative Links, Logout/ Login -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="active-home" href="/index.php">Home</a> <!-- Home -->
            </li>
            <li class="nav-item">
                <a class="nav-link" id="active-guestbook" href="/Final%20Portfolio%20Project/guestbook%20form/guestbook.php">Guestbook Form</a> <!-- Guestbook Form -->
            </li>
            <li class="nav-item">
                <a class="nav-link" id="active-admin" href="/Final%20Portfolio%20Project/guestbook%20form/adminpage.php">Admin Page</a> <!-- Admin Page -->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alternative Links</a> <!-- Alternative Links -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="https://github.com/Stephen-A" target="_blank">GitHub</a>
                    <a class="dropdown-item" href="https://www.linkedin.com/in/stephen--j--allen/" target="_blank">LinkedIn</a>
                </div>
            </li>
            <li class="nav navbar-nav navbar-right" id="login-logout-button">
                <?php if(isset($_SESSION['username'])){ ?>
                    <a href="/Final%20Portfolio%20Project/logout.php" class="nav-link">Logout</a> <!-- Logout -->
                <?php } else{ ?>
                    <a href="/Final%20Portfolio%20Project/login.php" class="nav-link">login</a> <!-- Login -->
                <?php } ?>
            </li>
        </ul> <!-- /ul -->
    </div> <!-- /navbarNavDropdown -->
</nav> <!-- /navbar -->
