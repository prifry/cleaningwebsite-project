<?php

/******************************************************************************
Author: Priscila Fry
Description: Processing the registration form
Date: 01/30/2024
Status: Still in progress
Version: 1
 ********************************************************************************/
require_once(__DIR__ . '/../model/database.php');

// Create an instance of the Database class
$db = new Database();

// Get the database connection
$conn = $db->getDbConn();

if ($conn) {
    // Process the registration form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['name'];
        $lname = $_POST['lastName'];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["psw-repeat"];
        $phone = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipCode = $_POST['zipCode'];

        // Check if passwords match
        if ($password !== $confirm_password) {
            $confirm_password_err = "Error: Passwords do not match";
            echo ($confirm_password_err);
            exit();
        }

        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the user into the database
        $sql = "INSERT INTO users (FirstName, LastName, EMail, Password, Phone, Address, City, State, ZipCode)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $fname, $lname, $email, $hashed_password, $phone, $address, $city, $state, $zipCode);

        if ($stmt->execute()) {
            // Redirect to the login page
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
