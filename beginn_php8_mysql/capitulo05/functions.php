<?php
$emailErr = null;
$name = filter_var($_POST['name'], 
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$email = filter_var($_POST['email'], 
    FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr = "Formato inválildo do email";
}

if (!$emailErr){
    echo "Thank you {$name}. I will email you at {$email}";
} else {
    echo $emailErr;
}

$url = "?name={$name}&email={$email}";
?>
<br>
<a href="basicForm.php<?= $url ?>">voltar</a>