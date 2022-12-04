<?php

$soldeDepart = 0;
//solde de depart en euros sur le compte

$depot = [122, 143, 45, 28];
$retrait = [12, 47, 60, 80];

//Pour calculer le solde après toutes les differentes operations, nous alons d'abbord calculer
//un total apres les operations "depots" et un deuxieme solde apres les operations "retraits"

//j'utilise la fonction de php array_sum pour faire une addition de depots et de retraits
function totalDeSolde($depot, $retrait) {
    $totalDeDepot = array_sum($depot);
    $totalRetrait = array_sum($retrait);
    //ensuite je calcule le solde du compte après toutes les operations éffectuées
    return $totalDeDepot - $totalRetrait;
}

echo "le solde bancaire après le depot est " . array_sum($depot) . " euros";
echo "<br>";

echo "votre solde bancaire après le dernier retrait est " . totalDeSolde($depot, $retrait) . " euros";
echo "<br>";

//calcul de la moyenne depot 
function moyenDepot($depot) {
    $moyen = array_sum($depot)/count($depot);
    return $moyen;
}

//calcul de la moyenne retrait
function moyenRetrait($retrait) {
    $moyen = array_sum($retrait)/count($retrait);
    return $moyen;
}

// $moyenneDepot =  array_sum($depot)/count($depot);
echo "votre compte est alimenté en moyen " . moyenDepot($depot) . " euros par mois";
echo "<br>";
echo "votre compte est debité en moyen " . moyenRetrait($retrait) . " euros ce dernier mois";






