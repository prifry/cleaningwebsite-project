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
        <a href="registry.php">Register</a>
        <a href="login.php">LogIn</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
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
    <!-- Hero Section -->
    <?php
    // Dynamic image source
    $imageSource = "../util/logo.png";
    ?>
    <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleaning">
    </div>
    <div style="padding-left:16px" class="cleaning-div">

        <form action="contact_process.php" method="POST" onsubmit="return validateForm()" style="border:1px solid #ccc">
            <div class="container">
                <h1 class="signuph1">Contact Us </h1>
                     <div class="txt-index">
                        <p style="font-weight:bold;">Phone: 000-000-0000</p>
                        <p style="font-weight:bold;">E-Mail: carmen@carmen.com</p>
                        <p style="font-weight:bold;">Hours of operation: Monday to Friday 8am to 5pm</p>
                    </div>
                <p>Please fill in this form to sent us a note about what you need.</p>
                <hr>


                <h2>Contact Form</h2>

                <!-- First Name field with error message -->
                <label for="name">First Name:</label><br>
                <input type="text" id="name" name="name" onblur="validateFirstName()">
                <span id="fnameErr" style="color: red;"></span>
                <br><br>

                <!-- Last Name -->
                <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName" onblur="validateLastName()">
                <span id="lnameErr" style="color: red;"></span>
                <br><br>

                <!-- Email -->
                <label for="eMail">Email:</label><br>
                <input type="text" id="email" name="eMail" onblur="validateEmail()">
                <span id="emailErr" style="color: red;"></span>
                <br><br>

                <!-- Phone Number -->
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone" onblur="validatePhoneNumber()">
                <span id="phoneErr" style="color: red;"></span>
                <br><br>

                <!-- Address -->
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" onblur="validateAddress()">
                <span id="addressErr" style="color: red;"></span>
                <br><br>

                <!-- City -->
                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" onblur="validateCity()">
                <span id="cityErr" style="color: red;"></span>
                <br><br>

                <!-- State -->
                <label for="state">State:</label><br>
                <input type="text" id="state" name="state" onblur="validateState()">
                <span id="stateErr" style="color: red;"></span>
                <br><br>

                <!-- ZIP Code -->
                <label for="zipCode">ZIP Code:</label><br>
                <input type="text" id="zipCode" name="zipCode" onblur="validateZipCode()">
                <span id="zipCodeErr" style="color: red;"></span>
                <br><br>

                <!--Note-->
                <label for="note">Note(details of service needed):</label><br>
                <input type="text" id="note" name="note" onblur="validateNote()">
                <span id="note" style="color: red;"></span>
                <br><br>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">Submit</button>
                </div>
            </div>
        </form>
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


        function validateForm() {
            // Validate each field
            var isValid = true;
            if (!validateFirstName()) isValid = false;
            if (!validateLastName()) isValid = false;
            if (!validateEmail()) isValid = false;
            if (!validatePhoneNumber()) isValid = false;
            if (!validateAddress()) isValid = false;
            if (!validateCity()) isValid = false;
            if (!validateState()) isValid = false;
            if (!validateZipCode()) isValid = false;

            return isValid;
        }
        //Functions to validate user inputs***********************
        function validateFirstName() {
            var fnameInput = document.getElementById("name");
            var fnameErr = document.getElementById("fnameErr");
            var fnameValue = fnameInput.value.trim();
            if (fnameValue === '') {
                fnameErr.textContent = "First Name is required.";
                return false;
            } else if (fnameValue.length < 2) {
                fnameErr.textContent = "First Name must be at least 2 characters.";
                return false;

            } else {
                fnameErr.textContent = "";
                return true;
            }
        }

        function validateLastName() {
            var lnameInput = document.getElementById("lastName");
            var lnameErr = document.getElementById("lnameErr");
            var lnameValue = lnameInput.value.trim();
            if (lnameValue === '' && lnameValue < 2) {
                lnameErr.textContent = "Last Name is required.";
                return false;
            } else if (lnameValue.length < 2) {
                lnameErr.textContent = "Last Name must be at least 2 characters.";
                return false;

            } else {
                lnameErr.textContent = "";
                return true;
            }
        }

        function validateEmail() {
            var emailInput = document.getElementById("email");
            var emailErr = document.getElementById("emailErr");
            var emailValue = emailInput.value.trim();
            if (emailValue === '') {
                emailErr.textContent = "Email is required.";
                return false;
            } else if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
                emailErr.textContent = "Invalid email address.";
                return false;
            } else {
                emailErr.textContent = "";
                return true;
            }
        }

        function validatePhoneNumber() {
            var phoneInput = document.getElementById("phone");
            var phoneErr = document.getElementById("phoneErr");
            var phoneValue = phoneInput.value.trim();
            if (phoneValue === '') {
                phoneErr.textContent = "Phone Number is required.";
                return false;
            } else if (!/^\(\d{3}\) \d{3}-\d{4}$/.test(phoneValue)) {
                phoneErr.textContent = "Invalid phone number format. Must be in the format (123) 456-7890.";
                return false;
            } else {
                phoneErr.textContent = "";
                return true;
            }
        }

        function validateAddress() {
            var addressInput = document.getElementById("address");
            var addressErr = document.getElementById("addressErr");
            var addressValue = addressInput.value.trim();
            if (addressValue === '') {
                addressErr.textContent = "Address is required.";
                return false;
            } else if (addressValue.length < 2) {
                addressErr.textContent = "Address must be at least 2 characters.";
                return false;

            } else {
                addressErr.textContent = "";
                return true;
            }
        }

        function validateCity() {
            var cityInput = document.getElementById("city");
            var cityErr = document.getElementById("cityErr");
            var cityValue = cityInput.value.trim();
            if (cityValue === '') {
                cityErr.textContent = "City is required.";
                return false;
            } else if (cityValue.length < 2) {
                cityErr.textContent = "City must be at least 2 characters.";
                return false;

            } else {
                cityErr.textContent = "";
                return true;
            }
        }

        function validateState() {
            var stateInput = document.getElementById("state");
            var stateErr = document.getElementById("stateErr");
            var stateValue = stateInput.value.trim();
            if (stateValue === '') {
                stateErr.textContent = "State is required.";
                return false;
            } else if (stateValue.length < 2) {
                stateErr.textContent = "State must be at least 2 characters.";
                return false;

            } else {
                stateErr.textContent = "";
                return true;
            }
        }

        function validateZipCode() {
            var zipCodeInput = document.getElementById("zipCode");
            var zipCodeErr = document.getElementById("zipCodeErr");
            var zipCodeValue = zipCodeInput.value.trim();
            if (zipCodeValue === '') {
                zipCodeErr.textContent = "ZIP Code is required.";
                return false;
            } else if (!/^[0-9]{5}(?:-[0-9]{4})?$/.test(zipCodeValue)) {
                zipCodeErr.textContent = "Invalid ZIP code format. Please enter a valid ZIP code.";
                return false;
            } else {
                zipCodeErr.textContent = "";
                return true;
            }
        }

        function validateNote() {
            var noteInput = document.getElementById("note");
            var noteErr = document.getElementById("noteErr");
            var noteValue = noteInput.value.trim();
            if (noteValue === '') {
                noteErr.textContent = "Note is required.";
                return false;
            } else if (noteValue.length < 2) {
                noteErr.textContent = "Describe your service and booking need";
                return false;

            } else {
                noteErr.textContent = "";
                return true;
            }
        }
    </script>
</body>

</html>
