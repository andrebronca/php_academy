<?php
require_once 'MessageClass.php';

$byebye = new MessageClass();
$byebye->thankYouBye() .'<br>';

//referenciando a classe e a constante com ::
echo '<br>';
echo MessageClass::EXIT_MESSAGE;