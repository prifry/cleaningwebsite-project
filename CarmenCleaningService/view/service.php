<!DOCTYPE html>
<html>

<head>
    <title>CarmenCleaningService</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="registestyle.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../index.php" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="booking.php">Booking</a>
        <a href="display_change_password.php">Change Password</a>
        <a href="registry.php">Register</a>
        <a href="login.php">LogIn</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div style="padding-left:16px" class="cleaning-div">

        <form action="process_service.php" method="POST" onsubmit="return validateForm()">
            <div class="container">
                <h1 class="signuph1">Cleaning Service</h1>
                <?php
                // Dynamic image source
                $imageSource = "../util/menu.png";
                ?>
                <img src="<?php echo $imageSource; ?>" alt="cleaning tools" class="cleaning">
                <p>Please fill in the following details to book a cleaning service.</p>
                <hr>

                <label for="regularCleaning">Regular Cleaning (yes/no):</label><br>
                <input type="text" id="regularCleaning" name="regularCleaning" onblur="validateRegularCleaning()" required>
                <span id="regularCleaningErr" class="error"></span>
                <br><br>

                <label for="deepCleaning">Deep Cleaning (yes/no):</label><br>
                <input type="text" id="deepCleaning" name="deepCleaning" onblur="validateDeepCleaning()" required>
                <span id="deepCleaningErr" class="error"></span>
                <br><br>

                <label for="bedrooms">Number of Bedrooms:</label><br>
                <input type="number" id="bedrooms" name="bedrooms" onblur="validateBedrooms()" required>
                <span id="bedroomsErr" class="error"></span>
                <br><br>

                <button type="submit" class="signupbtn">Next</button>
            </div>
        </form>

        <div class="txt-index">
            <p style="font-weight:bold;">Phone: 000-000-0000</p>
            <p style="font-weight:bold;">E-Mail: carmen@carmen.com</p>
            <p style="font-weight:bold;">Hours of operation: Monday to Friday 8am to 5pm</p>
        </div>


        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
        </footer>
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

        function validateRegularCleaning() {
            var regularCleaningInput = document.getElementById("regularCleaning").value.trim();
            var regularCleaningErr = document.getElementById("regularCleaningErr");
            if (regularCleaningInput !== "yes" && regularCleaningInput !== "no") {
                regularCleaningErr.textContent = "Please enter 'yes' or 'no'.";
            } else {
                regularCleaningErr.textContent = "";
            }
        }

        function validateDeepCleaning() {
            var deepCleaningInput = document.getElementById("deepCleaning").value.trim();
            var deepCleaningErr = document.getElementById("deepCleaningErr");
            if (deepCleaningInput !== "yes" && deepCleaningInput !== "no") {
                deepCleaningErr.textContent = "Please enter 'yes' or 'no'.";
            } else {
                deepCleaningErr.textContent = "";
            }
        }

        function validateBedrooms() {
            var bedroomsInput = document.getElementById("bedrooms").value.trim();
            var bedroomsErr = document.getElementById("bedroomsErr");
            if (isNaN(bedroomsInput) || bedroomsInput <= 0) {
                bedroomsErr.textContent = "Please enter a valid number of bedrooms.";
            } else {
                bedroomsErr.textContent = "";
            }
        }

        function validateForm() {
            validateRegularCleaning();
            validateDeepCleaning();
            validateBedrooms();

            var regularCleaningErr = document.getElementById("regularCleaningErr").textContent;
            var deepCleaningErr = document.getElementById("deepCleaningErr").textContent;
            var bedroomsErr = document.getElementById("bedroomsErr").textContent;

            if (regularCleaningErr || deepCleaningErr || bedroomsErr) {
                return false; // Prevent form submission if any error exists
            }
            return true; // Allow form submission if all fields are valid
        }
    </script>
</body>

</html>