<?php

/******************************************************************************
Author: Priscila Fry
Description: Processing to update the booking
Date: 02/11/2024
Status: good
Version: 1
 ********************************************************************************/
// Include the necessary files
require_once(__DIR__ . '/../model/database.php');
require_once(__DIR__ . '/../model/bookingDB.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $bookingId = $_POST['bookingId'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $note = $_POST['note'];

    // Call the function to update the booking
    $success = BookingDB::updateBooking($bookingId, $date, $time, $note);

    if ($success) {
        // If update successful, redirect to thank_you.php
        header("Location: booking.php");
        exit();
    } else {
        // If update failed, display an error message
        echo "Failed to update booking.";
    }
}
