<?php
class Servicesclass{
    private $ServiceId;
    private $RegularCleaning;
    private $DeepCleaning;
    private $Bedrooms;
    private $UserNo;

    public function __construct($serviceId, $regularCleaning, $deepCleaning, $bedrooms, $userId){
        $this->ServiceId = $serviceId;
        $this->RegularCleaning = $regularCleaning;
        $this->DeepCleaning = $deepCleaning;
        $this->Bedrooms = $bedrooms;
        $this->UserNo = $userId;
    }
    public function getServiceId()
    {
        return $this->ServiceId;

    }
    public function setServiceId($value)
    {
       return  $this->ServiceId= $value;

    }
    public function getRegularCleaning()
    {
        return $this->RegularCleaning;

    }
    public function setRegularCleaning($value)
    {
       return  $this->RegularCleaning = $value;

    }
    public function getDeepCleaning()
    {
        return $this->DeepCleaning;

    }
    public function setDeepCleaning($value)
    {
        return $this->DeepCleaning = $value;

    }
    public function getBedrooms()
    {
        return $this->Bedrooms;

    }
    public function setBedrooms($value)
    {
       return  $this->Bedrooms = $value;

    }
    public function getUserId()
    {
        $this->UserNo;

    }
    public function setUserId($value)
    {
        $this->UserNo = $value;

    }
}