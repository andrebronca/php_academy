<?php
require_once 'Candy.php';
require_once 'KitKat.php';
require_once 'Skittle.php';
require_once 'Twix.php';

$skittle = new Skittle('Skittles');
echo $skittle->slogan() .'<br>';

$kitkat = new KitKat('KitKat');
echo $kitkat->slogan() .'<br>';