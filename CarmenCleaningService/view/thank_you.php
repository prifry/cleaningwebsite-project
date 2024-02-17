<?php

/******************************************************************************
Author: Priscila Fry
Description: This page will display after booking is add or updated
Date: 02/15/2024
Status: good
Version: 1
 ********************************************************************************/
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// If logged in, destroy the session to log out
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <title>CarmenCleaningService</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../index.php" class="active">Home</a>
        <a href="about.php" id="#about">About</a>
        <a href="contact.php">Contact</a>
        <a href="registry.php">Register</a>
        <a href="login.php">LogIn</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    </div>
    <?php
    // Dynamic image source
    $imageSource = "../util/logo.png";
    ?>
    <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleaning">

    <div style="padding-left:16px" class="cleaning-div">
        <h1 id="h1">Thank You!</h1>

    </div>

    <div class="txt-index">
        <p><strong>We will contact you as soon as possible to confirm your appointment.</strong></p>
        <p>If you would like to make changes to your booking click logIn, next</p>
        <p> go to the booking tab, and Scroll down to booked service and make your changes.</p>
        <p>You have been logged out.</p>
        <p><a href="login.php">Log In Again</a></p>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
    </footer>
</body>

</html>