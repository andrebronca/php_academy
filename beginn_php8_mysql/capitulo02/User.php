<?php

class UserClass {
    var $firstName;
    var $lastName;

    function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    function getFirstName(){
        echo $this->firstName;
    }

    function setLastName($lastName){
        $this->lastName = $lastName;
    }

    function getLastName(){
        echo $this->lastName;
    }

    function getFullName(){
        return $this->firstName .' '. $this->lastName;
    }
}

