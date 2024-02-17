<?php
/******************************************************************************
Author: Priscila Fry
Description: Logic to change the user password
Date: 01/31/2024
Status: Good
Version: 1
********************************************************************************/
// Include database connection file
session_start();
require_once(__DIR__ . '/../model/database.php');
// Create an instance of the Database class
$db = new Database();

// Get the database connection
$conn = $db->getDbConn();

// Handle password change form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $current_password = $_POST['current_password'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Retrieve current password from the database
    $stmt = $conn->prepare('SELECT Password FROM users WHERE UserNo = ?');
    // Debugging: Check if the prepare() function failed
    if (!$stmt) {
        // Print out the SQL query and any errors
        echo "Prepare Error: " . $conn->error;
        exit(); // Stop further execution
    }

    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Close the statement after fetching results
    $stmt->close();

    // Verify the current password
    if (password_verify($current_password, $hashed_password)) {
        // Update the password in the database
        $update_stmt = $conn->prepare('UPDATE users SET Password = ? WHERE UserNo = ?');
        // Check if prepare() failed
        if ($update_stmt === false) {
            // Print out the SQL error message
            echo "Prepare Error: " . $conn->error;
            exit(); // Stop further execution
        }
        $update_stmt->bind_param('si', $new_password, $userId);

        if ($update_stmt->execute()) {
            header("Location: service.php");
        } else {
            echo 'Error changing password.';
        }

        $update_stmt->close();
    } else {
        echo 'Invalid current password.';
    }
}