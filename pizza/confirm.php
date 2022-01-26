<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/pizza-styles.css">

    <title>Steve's Pizza</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/pizza-slice.jpg">
</head>

<body>

<!-- Start Of Main Div -->
<div id="main" class="container">
    <div class="jumbotron">
        <h1 class="display-4">Steves's PizzaTheHut</h1>
        <p class="lead">The best pizza GRC students have ever tasted!</p>
        <hr class="my-4">
        <p>Something Something Pizza</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
    </div>
    <h1>Order Summary</h1>
    <h1>Thank you for your order</h1>
    <?php

    // Turn on error reporting at the beginning of all PHP files
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    var_dump($_POST);
    echo "</pre>";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $size = $_POST['size'];
    $comment = $_POST['comment'];
    $toppings = implode(", ", $_POST['toppings']);

    // Define constants
    define("TAX_RATE", 0.065);
    define("TOPPING_PRICE", 0.50);

    $numToppings = sizeof($_POST['toppings']);

    // Calculate price of the pizza
    $price = 0.0;
    if($size == "small") {
        $price = 10.00;
    }
    elseif($size == "medium"){
        $price = 15.00;
    }
    else{
        $price = 20.00;
    }

    // Add cost of toppings
    $price += $numToppings * TOPPING_PRICE;

    // Add sales tax
    // TAX_RATE = 0.065
    $price += $price * TAX_RATE;

    // Format price
    $price = number_format($price, 2);

    // Check if the method is delivery
    // Add 5 dollars if it is
    if($method == "delivery"){
        $price += 5.00;
    }
    //Display an order summary
    echo "<p>Name: $fname $lname </p>";
    echo "<p>Email: $email</p>";
    echo "<p>Method: $method</p>";
    echo "<p>Size: $size</p>";
    echo "<p>Comment: $comment</p>";
    echo "<p>Toppings: $toppings</p>";

    echo "<p>Total Cost: $$price</p>";
    echo "<p>Total cost after delivery: $$price</p>";

    ?>

    <script>

    </script>


</body>
</html>