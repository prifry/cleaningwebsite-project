<?php
require_once(__DIR__ . '/../controller/servicesclass.php');
require_once('database.php');


// ServiceDB class
class ServiceDB extends Servicesclass
{

    // Function to fetch all services for a user
    public static function getServices($userId)
    {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM services WHERE UserNo = ?";
            $stmt = $dbConn->prepare($query);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            $services = array();

            while ($row = $result->fetch_assoc()) {
                $service = new Servicesclass($row['serviceId'], $row['RegularCleaning'], $row['DeepCleaning'], $row['Bedrooms'], $row['UserNo']);
                $services[] = $service;
            }

            $stmt->close();
            return $services;
        } else {
            return false;
        }
    }


    public static function updateServices($regularCleaning, $deepCleaning, $bedrooms, $serviceId)
    {
        $db = new Database();
        $conn = $db->getDbConn();
        if ($conn) {
            $sql = "UPDATE services SET RegularCleaning=?, DeepCleaning=?, Bedrooms=? WHERE serviceId=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssii", $regularCleaning, $deepCleaning, $bedrooms, $serviceId);
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

    public static function deleteService($serviceId) {
        $db = new Database();
        $conn = $db->getDbConn();
        if ($conn) {
            $sql = "DELETE FROM services WHERE serviceId=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $serviceId);
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
