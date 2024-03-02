<?php
$title = "main3 php file";
require "User.php";
//criando um novo usuário
$user = new UserClass();
$user->setFirstName('gunnard');
$user->setLastName('engebreth');
var_dump($user);
error_reporting( E_ALL );
ini_set("display_errors", 1);
$content = include_once "inc/template3.php";
