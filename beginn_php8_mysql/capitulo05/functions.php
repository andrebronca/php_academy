<?php
$name = filter_var($_POST['name'], 
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$email = filter_var($_POST['email'], 
    FILTER_SANITIZE_EMAIL);

echo "Thank you {$name}. 
    I will email you at {$email}";
?>
<br>
<a href="basicForm.php">voltar</a>