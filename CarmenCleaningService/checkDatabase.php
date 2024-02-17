<?php
/*****************************************************************************************
Author: Priscila Fry
Version: 1
Description: Check database connection
Date: 01/26/2024

******************************************************************************************/

// Include the Database class
include_once('model/database.php');

// Create an instance of the Database class
$db = new Database();

// Get the database connection and error message
$conn = $db->getDbConn();
$error = $db->getDbError();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Test</title>
</head>

<body>
    <h2>Database Connection Test</h2>

    <?php
    // Check if the connection was successful
    if ($conn) {
        echo "<p style='color: green;'>Database connection successful!</p>";
    } else {
        echo "<p style='color: red;'>Database connection failed. Error: $error</p>";
    }
    ?>

</body>

</html>