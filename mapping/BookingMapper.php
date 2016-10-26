<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookingMapper
 *
 * @author 845853366
 */
class BookingMapper {
    
    public static function map(Booking $booking, array $properties) {
        if (array_key_exists('id', $properties)) {
            $booking->setId($properties['id']);
        }
        if (array_key_exists('flight_name', $properties)) {
            $booking->setFlightName($properties['flight_name']);
        }
        if (array_key_exists('created_on', $properties)) {
            $createdOn = self::createDateTime($properties['created_on']);
            if ($createdOn) {
                $booking->setCreatedOn($createdOn);
            }
        }
        if (array_key_exists('flight_date', $properties)) {
            $flightDate = self::createDateTime($properties['flight_date']);
            if ($flightDate) {
                $booking->setFlightDate($flightDate);
            }
        }
        if (array_key_exists('date_created', $properties)) {
            $dateCreated = self::createDateTime($properties['date_created']);
            if ($dateCreated) {
                $booking->setDateCreated($dateCreated);
            }
        }
        if (array_key_exists('user_id', $properties)) {
            $booking->setUserId($properties['user_id']);
        }
    }
    
    private static function createDateTime($input) {
        return DateTime::createFromFormat('Y-n-j H:i:s', $input);
    }
}
