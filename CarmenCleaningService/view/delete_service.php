<?php

/******************************************************************************
Author: Priscila Fry
Description: Processing the service form to delete the service
Date:02/13/2024
Status: good
Version: 1
 ********************************************************************************/
// Include necessary files and classes
require_once(__DIR__ . '/../model/database.php');
require_once(__DIR__ . '/../model/serviceDB.php');

// Check if the service ID is provided via GET or POST
if (isset($_REQUEST['serviceId'])) {
    // Get the service ID from GET or POST
    $serviceId = $_REQUEST['serviceId'];

    // Delete the service from the database
    if (ServiceDB::deleteService($serviceId)) {
        // Redirect back to the booking page
        header("Location: booking.php");
        exit();
    } else {
        // Display an error message if the deletion fails
        echo "Error deleting service.";
    }
} else {
    // Display an error message if the service ID is not provided
    echo "Service ID not provided.";
}
