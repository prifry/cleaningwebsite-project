<?php
/*****************************************************************************
* Author: Priscila Fry
* Date: 02/08/2024
* Description: This script processes the service registration form submission.
* It checks if the user is logged in, inserts the service information into
* the database, and sets the service ID in the session.
*
* Version: 1
*****************************************************************************/
session_start();
require_once(__DIR__ . '/../model/database.php');
require_once(__DIR__ . '/../model/serviceDB.php');

// Create an instance of the Database class
$db = new Database();

// Get the database connection
$conn = $db->getDbConn();

if ($conn) {
    // Process the registration form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            $regularCleaning = $_POST['regularCleaning'];
            $deepCleaning = $_POST['deepCleaning'];
            $bedrooms = $_POST['bedrooms'];
            $userId = $_SESSION['user_id'];

            // Insert the service into the database
            $sql = "INSERT INTO services (RegularCleaning, DeepCleaning, Bedrooms, UserNo) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssii", $regularCleaning, $deepCleaning, $bedrooms, $userId);


            if ($stmt->execute()) {
                // Retrieve the service ID after inserting into the database
                $serviceId = $conn->insert_id;
                // Set the service ID in the session
                $_SESSION['service_id'] = $serviceId;

                // Redirect to the booking page
                header("Location: booking.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            // Handle the case when the user is not logged in
            echo "User not logged in.";
        }
    }
}
