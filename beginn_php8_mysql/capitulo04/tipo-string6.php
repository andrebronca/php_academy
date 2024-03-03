<?php
$n = '<br>';
$foo = "bar";

//strlen
if (strlen($foo) > 0){
    echo 'that is valid foo'.$n;
} else {
    echo 'that foo is too small'. $n;
}

//str_replace
$strings = array (
    'You like to have a snazzy time',
    'You are a really snazzy person',
    'Would you like to drink a cup of coffee?'
);

$search = array(
    'snazzy', 'cup', 'person', 'coffee'
);

$replace = array(
    'great', 'bottle', 'dude', 'Dark brown stuff'
);

$replaced = str_replace($search, $replace, $strings);

var_dump($strings);

var_dump($replaced);

//trim
//remove espaços nas bordas ou outro valor
$trimit = 'junk awsome stuff junk';
$trimmed = trim($trimit, 'junk');
print_r($trimmed);
echo $n;

//strpos
$awesome = "Super Awesome!";
echo strpos($awesome, "!") .$n;

//inicia a busca na posição 3
echo strpos($awesome, 'm', 3) .$n;
echo strpos($awesome, "!",-2) .$n;
echo strpos($awesome, "!",2) .$n;

$result = strpos($awesome, 'G');
if ($result === false){
    echo 'Não encontrado: G'. $n;
} else {
    echo 'Encontrado na posição: '. $result .$n;
}

//strtolower
function calm_down($string){
    return strtolower($string);
}

$person = 'Angry people SHOUT!';
echo calm_down($person) .$n;

//strtoupper
function wake_up($string){
    return strtoupper($string);
}
$person = 'these people need to get working!';
echo wake_up($person) .$n;

//is_string
function eh_string($value){
    if (is_string($value)){
        echo "é string: $value <br>";
    } else {
        echo "não é string: $value <br>";
    }
}

eh_string(7);
eh_string("Lucky Number 7");

//strstr
$url = 'vegibit.com';
$pattern = 'https://www.';

function has_str($search, $pattern){
    if(strstr($search, $pattern) === false){
        $search = $pattern . $search;
    }
    return $search;
}

echo has_str($url, $pattern) .$n;
