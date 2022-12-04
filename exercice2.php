<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="PHP" content="PHP">
    <meta name="description" content="php-logo-elephant">
    <title>exercice2</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

$image = '<img src="slon.png" alt="elephant bleu logo php"/>';
//j'instancie une variable $image qui contient le lien de l'image
//de cette façon je ne modifie pas le code initial

echo "<h3>PHP est mieux que JS</h3>";
//j'introduis une balise html dans le php a l'aide d'une fonction echo pour afficher mon texte
    
echo $image;
//je fais appel à la variable $image pour afficher l'image

echo "<p>HELLO WORD</p>";