<?php

/******************************************************************************
Author: Priscila Fry
Description: Processing the contact form. This form is for user whom does not want to register
Date: 01/30/2024
Status: good
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
        $email = $_POST["eMail"];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipCode = $_POST['zipCode'];
        $note = $_POST['note'];

        // Insert the user into the database
        $sql = "INSERT INTO contact (FirstName, LastName, EMail,  Phone, Address, City, State, ZipCode, Note)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $fname, $lname, $email, $phone, $address, $city, $state, $zipCode, $note);

        if ($stmt->execute()) {
            // Redirect to the login page
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
