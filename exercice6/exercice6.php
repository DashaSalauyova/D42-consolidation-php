<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="accueil home" content="bienvenu sur site php">
    <title>str-replace</title>
</head>
<body>
    
</body>
</html>

<?php

$hello = "<h2>Bonjour, c'est moi. T'es bienvenu sur mon site.</h2>";
$name = "moi";
$newName = "Dasha";

//j'utilise la fonction str_replace
echo str_replace($name, $newName, $hello);

