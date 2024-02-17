<!DOCTYPE html>
<html>

<head>
    <title>CarmenCleaningService</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="registestyle.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../index.php" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="registry.php">Register</a>
        <a href="login.php">LogIn</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- Hero Section -->
    <?php
    // Dynamic image source
    $imageSource = "../util/logo.png";
    ?>
    <img src="<?php echo $imageSource; ?>" alt="logo" class="logo">

    <div style="padding-left:16px" class="cleaning-div">

        <h1 id="h1">Change Password</h1>
    </div>
    <!-- HTML code for password change form -->
    <form action="change_password.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
            <h1 class="signuph1">Make Changes</h1>
            <!-- Display error message if any -->
            <?php if (!empty($error_message)) : ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <hr>

            <label for="current_password"><b>Current Password</b></label>
            <input type="password" placeholder="Enter Current Password" name="current_password" required title="Password must much current password">

            <label for="new_password"><b>New Password</b></label>
            <input type="password" placeholder="Enter New Password" name="new_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

            <label for="confirm_new_password"><b>Confirm New Password</b></label>
            <input type="password" placeholder="Confirm New Password" name="confirm_new_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

            <div class="clearfix">
                <button type="submit" class="signupbtn">Change Password</button>
            </div>
        </div>
    </form>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
    </footer>
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

</body>

</html>