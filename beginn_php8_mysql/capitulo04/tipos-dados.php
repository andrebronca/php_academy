<?php

/*
Boolean type is: True or False, ou true or false
0 é considerado false
<> de 0 é considerado true
*/
$foo = True;
$foo2 = true;
$x = 1;     //será true
$y = 0;     //será false
$w = "";    //será false
$z = 'z';   //será true
$k = ' ';   //será true

if ($foo) {
    echo 'V <br>';
}

if ($foo2) {
    echo 'V <br>';
}

if ($x)
    echo 'x is V <br>';

if ($y)
    echo 'y is V <br>';
else
    echo 'y is F <br>';

echo $w ? 'w é V <br>' : 'w é F <br>';
echo $z ? 'z é V <br>' : 'z é F <br>';
echo $k ? 'k é V <br>' : 'k é F <br>';

//tipo inteiro
$a = 1234;          //decimal
echo "(decimal) a = $a <br>";
$a = 0123;          //octal
echo "(octal) a = $a <br>";
$a = 0o123;         //octal
echo "(octal) a = $a <br>";
$a = 0x1A;          //hexadecimal
echo "(hexadecimal) a = $a <br>";
$a = 0b11111111;    //binário
echo "(binário) a = $a <br>";
$a = 1_234_567;     //decimal
echo "(decimal) a = $a <br>";

//float
$b = 1.234;
echo "b = $b <br>";
$b = 1.2e3;
echo "b = $b <br>";
$b = 7E-10;
echo "b = $b <br>";
$b = 1_234.567;
echo "b = $b <br>";

//string
$f = "Hello World with PHP 8!";
echo "f = $f <br>";
$f = 'Olá mundo com PHP 8!';
echo "f = $f <br>";
