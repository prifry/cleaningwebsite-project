<?php
/******************************************************************************
Author: Priscila Fry
Date: 01/30/2024
Description: Process the login form to Authenticate the user
Status: Good
Version: 1
********************************************************************************/
session_start();
// Establish a connection to the database
require_once(__DIR__ . '/../model/database.php');

// Create an instance of the Database class
$db = new Database();

// Get the database connection
$conn = $db->getDbConn();

// Debugging: Print $_POST data
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

// Process the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "email" and "password" keys are set in $_POST
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM users WHERE EMail = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if the user exists
            if ($result->num_rows == 1) {
                // Retrieve user data
                $row = $result->fetch_assoc();

                // Verify password using password_verify
                if (password_verify($password, $row["Password"])) {
                    // Password is correct, redirect to the service page
                    // Start session and store user info if needed
                    session_start();
                    $_SESSION['user_id'] = $row['UserNo']; // Store user ID in session
                    header("Location:service.php");
                    exit();
                } else {
                    echo "Incorrect password";
                    
                    exit();
                }
            } else {
                echo "User not found";
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Email or password not set in the POST request";
    }
    // Display error message (if any)
    if(isset($error)) {
        echo $error;
    }

}
