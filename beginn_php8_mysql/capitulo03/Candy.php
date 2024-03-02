<?php

abstract class Candy {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function slogan() : string;
}