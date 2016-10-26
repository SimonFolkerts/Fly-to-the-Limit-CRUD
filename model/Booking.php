<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Booking
 *
 * @author 845853366
 */
class Booking {
    private $id;
    private $flightName;
    private $flightDate;
    private $dateCreated;
    private $userId;
    
    public function getId() {
        return $this->id;
    }

    public function getFlightName() {
        return $this->flightName;
    }

    public function getFlightDate() {
        return $this->flightDate;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFlightName($flightName) {
        $this->flightName = $flightName;
    }

    public function setFlightDate($flightDate) {
        $this->flightDate = $flightDate;
    }

    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }


}
