<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserMapper
 *
 * @author 845853366
 */
class UserMapper {

    public static function map(User $user, array $properties) {
        if (array_key_exists('id', $properties)) {
            $user->setId($properties['id']);
        }
        if (array_key_exists('first_name', $properties)) {
            $user->setFirstName($properties['first_name']);
        }
        if (array_key_exists('last_name', $properties)) {
            $user->setLastName($properties['last_Name']);
        }
        if (array_key_exists('email', $properties)) {
            $user->setEmail($properties['email']);
        }
        if (array_key_exists('password', $properties)) {
            $user->setPassword($properties['password']);
        }
    }
}
