<?php

include('./Livre.php');

$livre1 = new Livre (
    1,
    "Hamlet",
    "Shakespeare"
);

$livre2 = new Livre (
    2,
    "Zadig",
    "Voltaire"
);

$livre3 = new Livre (
    3,
    "Nouvelle Terre",
    "Tolle"
);

// var_dump($livre1);
// var_dump($livre2);
// var_dump($livre3);

/********* Création de la connexion à la BDD **********/

//J'instancie 3 variables pour installer une connextion avec le server MySql
$server = "localhost";
$utilisateur = "root";
$mdp = "";

    //j'instancie un nouvel objet de PDO pour créer une connexion avec la base de données et établie la connexion
$connexionServer = new PDO("mysql:host=$server", $utilisateur, $mdp);
    // On prevoit des erreurs en cas d'exception
$connexionServer->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connexion réussie ";
   
    //Création d'une requete Sql pour créer une nouvelle base de données
$sql = "CREATE DATABASE Bibliothéque";
    // on utilise une fonction exec() pour executer la requete
$connexionServer->exec($sql);
    //On affiche un message si la base a été créée
echo "Base de donné est créée avec succés ";

/*********Création d'une table **********/

    //fonctions try et catch sont utilisées pour empecher de planter le programme en cas d'erreur
try {
    //On établie une autre connexion en précisant le nom de la base de données 
    $connexionBibliotheque = new PDO("mysql:host=localhost;dbname=Bibliothéque", $utilisateur, $mdp);
    //Création d'une table Livres, requete sql. On attribue 3 champs pour id, titre et auteur des livres
    $livres = "CREATE TABLE Livres (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titre VARCHAR(70) NOT NULL,
        auteur VARCHAR(30) NOT NULL
    )";
    //execution de la requete de création de la table
    $connexionBibliotheque->exec($livres);
    echo 'La nouvelle table est créée ';
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}

/********* Insérsion des données à la BDD **********/

//On formule la requete d'insertion des données, on passe en parametres les noms de champs
$sql = "INSERT INTO Livres (titre, auteur) VALUES

/* et en parametres de VALUE les données respectives */
    ('Hamlet', 'Shakespeare'),
    ('Zadig', 'Voltaire'),
    ('Nouvelle Terre', 'Tollé')";

// j'instancie une variable transfert pour se connecter a la bd et executer la requete d'insertion
$transfert = $connexionBibliotheque->exec($sql);
//j'affiche un message si la requete est reussie 
echo "les champs dans la base Livres ont été rajouté";

// $collection = [$livre1, $livre2, $livre3];
// $collection = $resStatement->fetchAll();
// foreach ($collection as $livre) {
//     fetchAll($collection);
// }

?>