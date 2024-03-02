<?php

class RegisteredUser extends UserClass {

    private $registrationNumber;

    function setRegistrationNumber($number){
        $this->registrationNumber = $number;
    }

    function getRegistrationNumber(){
        return $this->registrationNumber;
    }

}

$currentUser = new RegisteredUser();
$currentUser->setFirstName('Robert');
$currentUser->setLastName('Paulson');
$currentUser->setRegistrationNumber('1234xyz');