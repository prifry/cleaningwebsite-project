<?php

/******************************************************************************
Author: Priscila Fry
Description: Processing to update a service
Date: 02/11/2024
Status: good
Version: 1
 ********************************************************************************/
// Include necessary files and classes
require_once(__DIR__ . '/../model/database.php');
require_once(__DIR__ . '/../model/serviceDB.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the service ID from the form
    $serviceId = $_POST['serviceId'];

    // Get the updated values from the form
    $regularCleaning = $_POST['regularCleaning'];
    $deepCleaning = $_POST['deepCleaning'];
    $bedrooms = $_POST['bedrooms'];

    // Update the service in the database
    if (ServiceDB::updateServices($regularCleaning, $deepCleaning, $bedrooms, $serviceId)) {
        // Redirect to the booking page or display a success message
        header("Location: booking.php");
        exit();
    } else {
        // Display an error message if the update fails
        echo "Error updating service.";
    }
}
