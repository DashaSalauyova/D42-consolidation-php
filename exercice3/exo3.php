<?php

/**
 * Je crée une fonction qui calcule me nombre de lignes affichées en prenant
 * en parametres le nombre d'images affichées
 * Premiere fonction va calculer le nombre de lignes.
 * Dans cette fonction je declare une variable $linesNumber qui stock
 * le resultat de la division de toutes les images par 3(1 ligne = 3 images),
 * et la fonction inval qui va obliger d'avoir le nombre entier
 */
 function numberOfLines($numberOfImage) {
    $linesNumber = intval($numberOfImage/3);
    //si le resultat est un INT, j'affiche le chiffre entier
    if ($numberOfImage % 3 === 0) {
        return $linesNumber;
    /**si le resultat est un float(c'est qu'il reste un espace pour une image
     * mais pas suffisant pour une image intiere, peut n'importe cet espace), 
     * je rajoute une ligne
     **/
    } elseif($numberOfImage % 3 > 0) {
        return $linesNumber+=1;
    }
    //retourne le nombre de lignes
        return $linesNumber;
}
//Deuxieme fonction va calculer les nombre d'images sur la derniere ligne avec une division par 3
function numberOfImageByLastLine($numberOfImage){
    $result = $numberOfImage % 3;
    //si le resultat est un INT, alors, le nombre d'image est 3
    if ($result == 0){
        $result = 3;    
    }
    return $result;
}

$numberOfImage = 3;
echo "Nous avons $numberOfImage images <br>";
echo "Le nombre de lignes est " . numberOfLines(3);
echo "<br>";
echo "Le nombre d'images sur la dernière ligne est " . numberOfImageByLastLine(3);
echo "<br>";
echo "<br>";

$numberOfImage = 8;
echo "Nous avons $numberOfImage images <br>";
echo "Le nombre de lignes est " . numberOfLines(8);
echo "<br>";
echo "Le nombre d'images sur la dernière ligne est " . numberOfImageByLastLine(8);
echo "<br><br>";

$numberOfImage = 144;
echo "Nous avons $numberOfImage images <br>";
echo "Le nombre de lignes est " . numberOfLines(144);
echo "<br>";
echo "Le nombre d'images sur la dernière ligne est " . numberOfImageByLastLine(144);
echo "<br><br>";

$numberOfImage = 152;
echo "Nous avons $numberOfImage images <br>";
echo "Le nombre de lignes est " . numberOfLines(152);
echo "<br>";
echo "Le nombre d'images sur la dernière ligne est " . numberOfImageByLastLine(152);
echo "<br><br>";

//juste pour mon test
$numberOfImage = 1;
echo "Nous avons $numberOfImage images <br>";
echo "Le nombre de lignes est " . numberOfLines(1);
echo "<br>";
echo "Le nombre d'images sur la dernière ligne est " . numberOfImageByLastLine(1);
echo "<br><br>";

/**Calculer le nombre de lignes affichées, et le
nombre d’images sur la dernière ligne si nous
décidons d’afficher 3 images par ligne si nous
avons, au total :

3 images

8 images

144 images

152 images */