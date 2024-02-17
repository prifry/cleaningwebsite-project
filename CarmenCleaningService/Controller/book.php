<?php
/******************************************************************************
Author: Priscila Fry
Description: Booking class represents a booking entity with
            related properties and methods.
Date: 01/30/2024
Status: Still in progress
Version: 1
 ********************************************************************************/
class Book
{
    //Properties

    private $bookingId;
    private $Date;
    private $Time;
    private $Note;
    private $UserId;
    private $serviceId;

    public function __construct($bookingId, $date, $time, $note,$userId, $serviceId)
    {
        $this->bookingId = $bookingId;
        $this->Date = $date;
        $this->Time = $time;
        $this->Note = $note;
        $this->UserId = $userId;
        $this->serviceId = $serviceId;
    }

    // Getter and setter methods for properties...

    /**
     * Get the Booking ID.
     * return The booking ID.
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }
    /**
     * Set the Booking ID.
     * param int $value The new booking ID.
     */
    public function setBookingId($value)
    {
        $this->bookingId = $value;
    }

    public function getDate()
    {
        return $this->Date;
    }
    public function setDate($value)
    {
        $this->Date = $value;
    }
    public function getTime()
    {
        return $this->Time;
    }

    public function setTime($value)
    {
        $this->Time= $value;
    }
    public function getNote()
    {
        return $this->Note;
    }

    public function setNote($value)
    {
        $this->Note= $value;
    }

    public function getUserId()
    {
        return $this->UserId;
    }

    public function setUserId($value)
    {
        $this->UserId = $value;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    public function setServiceId($value)
    {
        $this->serviceId = $value;
    }
}
