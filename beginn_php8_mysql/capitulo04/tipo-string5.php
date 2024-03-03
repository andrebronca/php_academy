<?php
$n = '<br>';
$comment = 'your product works well!';

echo substr($comment, 1) .$n;

echo substr($comment, -9) .$n;

$file = 'tipo.php';
echo substr($file, -3) .$n;

echo substr($comment, 0, 4) .$n;

echo substr($comment, 5, -10) .$n;

/* RESULTADOS
our product works well!
rks well!
php
your
product w
*/

