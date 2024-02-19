<?php
/*****************************************************************************
* Author: Priscila Fry
* Date: 02/08/2024
*
* Description: This script processes the booking form submission.
* It checks if the user is logged in and a service ID is set in the session.
* If the user is logged in and a service ID is set, it inserts the booking
* information into the database.
*
*Version: 1
********************************************************************************/
session_start(); // Start the session

require_once(__DIR__ . '/../model/database.php');

// Check if the user is logged in and the service ID is set
if (!isset($_SESSION['user_id']) || !isset($_SESSION['service_id'] )) {
    // User is not logged in or service ID is not set, redirect to login page
    header("Location: login.php");
    exit();
}

// Create an instance of the Database class
$db = new Database();

// Get the database connection
$conn = $db->getDbConn();

if ($conn) {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the user is logged in and the service ID is set
        if (isset($_SESSION['user_id']) && isset($_SESSION['service_id'])) {
            // User is logged in
            $userId = $_SESSION['user_id'];
            $serviceId = $_SESSION['service_id'];

            // Get other form data
            $selectedDate = $_POST['submitDate']; // Adjust accordingly based on  form input
            $selectedTime = $_POST['submitTime']; // Adjust accordingly based on  form input
            $note = $_POST['Note']; // Additional form data

            // Debugging: Echo out form data
            /*echo "Selected Date: $selectedDate<br>";
            echo "Selected Time: $selectedTime<br>";
            echo "Note: $note<br>";*/

            // Insert booking into the database
            $sql = "INSERT INTO booking (Date, Time, Note, UserNo, serviceId) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Check if the prepared statement is valid
            if ($stmt) {
                $stmt->bind_param("sssii", $selectedDate, $selectedTime, $note, $userId, $serviceId);

                // Execute the statement
                if ($stmt->execute()) {
                      // Retrieve the service ID after inserting into the database
                    if ($stmt->affected_rows > 0) {
                         header("Location: booking.php");
                        exit();
                    } else {
                        echo "Error: Unable to insert booking.";
                    }
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Error: Unable to prepare statement.";
            }
        } else {
            // Redirect the user to the login page or handle the case when the user is not logged in or service ID is not set
            header("Location: login.php");
            exit();
        }
    }
}
