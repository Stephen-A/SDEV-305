<?php
session_start();

// Initialize variables
$un = "";
$validLogin = true;

// If the user is already logged in
if(isset($_SESSION['username'])){

    // Redirect to home page
    header("location: index.php");
}

// If the form has been submitted
if(!empty($_POST)) {

    $un = $_POST['username'];
    $pw = $_POST['password'];

    // Require the credentials file, which defines a $logins array
    require('login-creds.php');

    // If the username is in the array and the passwords match
    if (array_key_exists($un, $logins) && $pw == $logins[$un]) {

        // Record the username in the session array
        $_SESSION['username'] = $un;

        // Go to the page that the user came from, or else the home page
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "index.php";
        header('location: '.$page);
    }
    // Invalid login -- set flag variable to false
    $validLogin = false;
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Styling for login.php -->
        <link rel="stylesheet" href="/Final%20Portfolio%20Project/styles/login-styles.css">
        <!-- Built in bootstrap styling -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Favicon from https://icons8.com/icons/set/favicon -->
        <link rel="icon" type="image/png" href="/Final%20Portfolio%20Project/favicon/icons8-bookmark-120.png">
        <title>Login</title>
    </head>
<body>
<div class="container" id="login-container-wrapper">
    <h1 class="mb-4">Login</h1>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"
                   id="username" name="username"
                   value="<?php echo $un ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <?php
        if(!$validLogin) {
            echo '<p class="err">Login is incorrect</p>';
        }
        ?>
        <button type="submit" class="btn">Login</button>
    </form>
</div>
<!-- Includes footer.php with Jquery, Popper, Bootstrap, and </body>, </html> tags -->
<?php
include("/home/sallengr/public_html/Final Portfolio Project/includes/portfolio_footer.php");
?>