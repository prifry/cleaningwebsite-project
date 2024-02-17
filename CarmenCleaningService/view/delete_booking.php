<?php

/******************************************************************************
Author: Priscila Fry
Description: Booking logic to Delete a booking date, time and note
Date: 02/13/2024
Status: good
Version: 1
 ********************************************************************************/
// Include necessary files and classes
require_once(__DIR__ . '/../model/database.php');
require_once(__DIR__ . '/../model/bookingDB.php');

// Check if the booking ID is provided via GET or POST
if (isset($_REQUEST['bookingId'])) {
    // Get the booking ID from GET or POST
    $bookingId = $_REQUEST['bookingId'];

    // Delete the booking from the database
    if (BookingDB::deleteBooking($bookingId)) {
        // Redirect back to the booking page
        header("Location: booking.php");
        exit();
    } else {
        // Display an error message if the deletion fails
        echo "Error deleting booking.";
    }
} else {
    // Display an error message if the booking ID is not provided
    echo "Booking ID not provided.";
}
