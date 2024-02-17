<?php
/******************************************************************************
Author: Priscila Fry
Description: class for doing queries on the users table; provides
            functions for getting all users, getting user by
            their UserId, getting an individual user, adding a
            user, updating a user, and deleting a user
Date: 01/30/2024
Status: Still in progress
Version: 1
********************************************************************************/
require_once(__DIR__ . '/../Controller/user.php');
require_once('database.php');

class UsersDB extends Users
{
    //Get all users in the DB; returns false if the
    //database connection fails
    public static function getUsers()
    {
        //Ge the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            //create the query string; users
            //table  to get the users
            //info for the users object
            $query = 'SELECT * FROM users';

            //execute the query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }
    public static function getUserByEMail($eMail){
        //get the DB connection
        $db =  new Database();
        $dbConn = $db->getDbConn();

        if($dbConn){
            //create the query string
            $query =  "SELECT * FROM users
                    WHERE users.EMail = '$eMail'";
            //execute the query - returns false if no such email found
            $result =  $dbConn->query($query);
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }

    //function to get specific user by their UserId
    public static function getUserById($userId)
    {
        //get the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();
        if ($dbConn) {
            //create the query string
            $query = "SELECT * FROM users
            WHERE UserNo = '$userId'";
            //execute the query
            $result = $dbConn->query($query);
            //return the associative array
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    //Function to delete a user by their UserId
    //returns True on success, False on failure or
    //database connection failure
    public static function deleteUser($userId)
    {
        //get the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            //create the query string
            $query = "DELETE FROM users
            WHERE UserNo= '$userId'";
            //execute the query, returning status
            return $dbConn->query($query) === TRUE;
        } else {
            return false;
        }
    }

    //function to add a user to the DB; returns
    //true on success, false on failure or DB connection failure
    public static function addUser($userId, $firstName, $lastName, $eMail, $password, $phone, $address, $city, $state, $zipCode, $note)
    {
        //get the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            //create the query string -UserId(user number) is an
            //auto-increment field, so no need to specify it
            $query = "INSERT INTO users (FirstName, LastName, EMail, Password, Phone, Address, City, State, ZipCode)
            VALUES('$userId', '$firstName', '$lastName', '$eMail', '$password', '$phone', '$address', '$city', '$state', '$zipCode')";

            //execute the query, returning status
            return $dbConn->query($query) === TRUE;
        } else {
            return false;
        }
    }

    //Function to update a user's information; returns true
    //on success, false on failure or DB connection failure
    public static function updateUser($userId, $firstName, $lastName, $eMail, $password, $phone, $address, $city, $state, $zipCode)
    {
        //get the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();
        if ($dbConn) {
            //create the query string
            $query = "UPDATE users SET
                                    FirstName = '$firstName',
                                    LastName = '$lastName',
                                    EMail = '$eMail',
                                    Password = '$password',
                                    Phone = '$phone',
                                    Address = '$address',
                                    City = '$city',
                                    State = '$state',
                                    ZipCode = '$zipCode',
                                WHERE UserNo= '$userId'";
            //execute the query, returning status
            return $dbConn->query($query) === TRUE;
        } else {
            return false;
        }
    }
}
