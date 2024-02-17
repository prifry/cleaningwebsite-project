<?php
include_once(__DIR__ . '/../Controller/book.php');
require_once('database.php');
// BookDB class
class BookingDB extends Book
{
    // Existing code for deleteBooking and updateBooking methods...

    // Function to fetch all bookings for a user
    public static function getBookings($userId)
    {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM booking WHERE UserNo= ?";
            $stmt = $dbConn->prepare($query);
            if (!$stmt) {
                // Handle query preparation error
                die("Error preparing query: " . $dbConn->error);
            }


            $stmt->bind_param("i", $userId);
            if (!$stmt->execute()) {
                // Handle query execution error
                die("Error executing query: " . $stmt->error);
            }

            $result = $stmt->get_result();
            $bookings = array();

            while ($row = $result->fetch_assoc()) {
                $booking = new Book($row['bookingId'], $row['Date'], $row['Time'], $row['Note'], $row['UserNo'], $row['serviceId']);
                $bookings[] = $booking;
            }

            $stmt->close();
            return $bookings;
        } else {
            return false;
        }
    }
    public static function updateBooking($bookingId, $newDate, $newTime, $newNote)
    {
        $db = new Database();
        $conn = $db->getDbConn();
        if ($conn) {
            $sql = "UPDATE booking SET Date=?, Time=?, Note=? WHERE bookingId=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $newDate, $newTime, $newNote, $bookingId);
            if ($stmt->execute()) {
                // Update successful
                return true;
            } else {
                // Update failed
                return false;
            }
        } else {
            // Database connection failed
            return false;
        }
    }

    public static function deleteBooking($bookingId)
    {
        $db = new Database();
        $conn = $db->getDbConn();
        if ($conn) {
            $sql = "DELETE FROM booking WHERE bookingId=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $bookingId);
            if ($stmt->execute()) {
                // Deletion successful
                return true;
            } else {
                // Deletion failed
                return false;
            }
        } else {
            // Database connection failed
            return false;
        }
    }
}
