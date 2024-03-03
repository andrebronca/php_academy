<?php
echo 'This is a single quoted string <br>';

echo 'You can also have embedded newlines if
This is the best way 
to get the job done <br>';

echo 'that robot once said: "I\'ll be back" <br>';

echo 'You formatted c:\\*.*? <br>';

echo 'You formatted c:\*.*? <br>';

echo 'This will not create: \n a newline <br>';

//não cria em html
echo "This will create: \n a new line <br>";

$expand = true;
echo 'Variable als do not $expand <br>';

//heredoc
$txt = <<<STR
Here is
The text that
I want to display
STR;

echo $txt .'<br>';

$title = "PHP 8";
$html = <<<HTML
<html>
<head>
    <title>$title</title>
</head>
<body>
    <!-- algo aqui -->
</body>
</html>
HTML;

echo $html;