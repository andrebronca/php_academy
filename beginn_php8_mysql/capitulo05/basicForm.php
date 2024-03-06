<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = null;
$email = null;
if (isset($_GET)){
    if (isset($_GET['name'])){
        $name = $_GET['name'];
    }
    if (isset($_GET['email'])){
        $email = $_GET['email'];
    }
}

//se $name não for null seta para $name, senão para ""
$name  != null ? $name : "";
$email != null ? $email : "";
?>
    <form action="functions.php" method="post">
        Name: <input type="text" value="<?= $name; ?>"
            id="name" name="name"><br>
        E-mail: <input type="email" value="<?= $email; ?>"
            name="email" id="email"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>