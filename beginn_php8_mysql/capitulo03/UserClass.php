<?php

class UserClass {
    //var declara a propriedade como public por padrão
    var $firstName;
    var $lastName;

    function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    function setLastName($lastName){
        $this->lastName = $lastName;
    }

    function getFullName(){
        return $this->firstName .' '. $this->lastName;
    }
}