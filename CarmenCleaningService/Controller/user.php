<?php
/******************************************************************************
Author: Priscila Fry
Description: Booking class represents a user entity with
            related properties and methods.
Date: 01/30/2024
Status: Still in progress
Version: 1
********************************************************************************/
//class to represent an entry in the users table
class Users
{
    //properties - match the columns in the users table

    private $UserId;
    private $FirstName;
    private $LastName;
    private $EMail;
    private $Password;
    private $Phone;
    private $Address;
    private $City;
    private $State;
    private $ZipCode;
    public function __construct($userId, $firstName, $lastName, $eMail, $password, $phone, $address, $city, $state, $zipCode )
    {

        $this->UserId = $userId;
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
        $this->EMail = $eMail;
        $this->Password = $password;
        $this->Phone = $phone;
        $this->Address = $address;
        $this->City = $city;
        $this->State = $state;
        $this->ZipCode = $zipCode;
   
    }

    //get and set the user properties
    public function getUserId()
    {
        return $this->UserId;
    }
    public function setUserId($value)
    {
        return $this->UserId = $value;
    }

    public function getUserFirstName()
    {
        return $this->FirstName;
    }
    public function setUserFisrtName($value)
    {
        return $this->FirstName = $value;
    }


    public function getUserLastName()
    {
        return $this->LastName;
    }
    public function setUserLastName($value)
    {
        return $this->LastName = $value;
    }


    public function getEMail()
    {
        return $this->EMail;
    }
    public function setEMail($value)
    {
        return $this->EMail = $value;
    }

    public function getPassword()
    {
        return $this->Password;
    }
    public function setPassword($value)
    {
        return $this->Password = $value;
    }

    public function getUserPhone()
    {
        return $this->Phone;
    }
    public function setUserPhone($value)
    {
        return $this->Phone = $value;
    }
    public function getAddress()
    {
        return $this->Address;
    }
    public function setAddress($value)
    {
        return $this->Address = $value;
    }

    public function getCity()
    {
        return $this->City;
    }
    public function setCity($value)
    {
        $this->City = $value;
    }

    public function getState()
    {
        return $this->State;
    }
    public function setState($value)
    {
        $this->State = $value;
    }
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    public function setZipCode($value)
    {
        $this->ZipCode = $value;
    }

}