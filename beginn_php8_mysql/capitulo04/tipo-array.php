<?php
$myArray[0] = 'first';
$myArray[1] = 'second';
$myArray[2] = '3rd';

var_dump($myArray);

$arr2['fruit'] = 'apple';
$arr2['vegetable'] = 'carrot';
$arr2['color'] = 'blue';
$arr2['quant'] = 3;
$arr2['comprar'] = true;
$arr2['verba'] = 1234.99;

var_dump($arr2);

$s1 = 'season1';
function ep($i){
    return 'episode'.$i;
}
$strangestThings[$s1][ep(1)] = 
    "The Beginning";
$strangestThings[$s1][ep(3)] = "The Third Episode";

var_dump($strangestThings);

$v1 = NULL;
$v2 = null;

function eh_nulo($v){
    if(!isset($v1)){
        echo 'Null value <br>';
    } else {
        echo $v .'<br>';
    }
}
eh_nulo($v1);
eh_nulo($v2);
