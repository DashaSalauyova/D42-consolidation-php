
<?php

/************ Pour cet exercice je peux proposer 3 solutions*
 * commentez toutes les autres solutions afin de tester le code choisi*******/

/*****PREMIERE SOLUTION******/

/**
 * je declare une variable $users pour les utilisateurs renseignés 
 * je leurs attribue des roles dans le tableau associatif
 * il y a trois roles respectifs pour trois droits : admin, gestionnaire et membre
*/
$users = [
    [
        "name"=>"Dasha",
        "role"=>"Admin"
    ]
    ,
    [
        "name"=>"Mathieu", 
        "role"=>"Gestionnaire"
    ]
    ,
    [
        "name"=>"Victorien",
        "role"=>"Gestionnaire"
    ]
    ,
    [
        "name"=>"Pierre-Louis",
        "role"=>"Membre"
    ]
];
//je prepare le message pour ne pas doubler le texte dans ma fonction de foreach
$message = "Bonjour, vous êtes connéctés en tant que ";

/**
 * j'utilise le boucle foreach afin de parcourir le tableau des utilisateurs ayant les droits
 * je compare le login (ici le prenom) entré par l'utilisateur avec ceux enregistrés precédement
 * Ensuite j'affiche le message indiquant à l'utilisateur son role **/
foreach($users as $person){
    if($_GET["firstname"] == $person["name"] && $person['role'] == "Admin") {
        // je recupere la valeur du champs "prenom" avec l'aide de la methode GET depuis le formulaire html
        echo $message . $person['role'];
    }elseif($_GET["firstname"] == $person["name"] && $person['role'] == "Gestionnaire"){
        echo $message . $person['role'];
    }elseif($_GET["firstname"] == $person["name"] && $person['role'] == "Membre"){
        echo $message . $person ['role'];
    }
}

/**je sors du boucle afin de créer une condition pour tous les autres utilisateurs qui n'ont pas de role
 * (comme ils n'ont pas de role, la condition de foreach d'avant ne sera pas adaptée pour ces derniers)
* */
if(($_GET["firstname"] !== $users[0]["name"]) && ($_GET["firstname"] !== $users[1]["name"])
&& ($_GET["firstname"] !== $users[2]["name"]) && ($_GET["firstname"] !== $users[3]["name"]))
{
    echo "Bonjour Invité, vous êtes bienvenus !";
}
//je recupere la valeur et la compare avec toutes les valeurs de mon tableau
//si cette valeur est differente de toutes les autres alors c'est un Invité, je lui affiche un autre message

/*****DEUXIEME SOLUTION******/

/**
 * une autre option est de créer un autre boucle foreach pour les utilisateurs invités
 * pour cela je declare une variable $hosts pour les utilisateurs qui ne font pas partie de ma liste
 * et donc n'ont pas de role specifique*
 * 
 * 
 * c'est un tableau simple*/
$hosts = ["Julio", "Fabien", "Jihane"];

// /**avec un autre boucle foreach je parcours ce tableau en comparant les valeurs 
//  * que je recupere avec la methode GET avec celles du tableau
//  * ensuite j'affiche le message commun pour les utilisateurs sans role**/
foreach($hosts as $host){
    if($_GET["firstname"] == $host) {
        echo "Bonjour, vous êtes connectés en tant que invité. Bienvenu sur le site !";
    }
}
echo "<br><br>" ;

/********TROISIEME SOLUTION************(avec la variable $role)**/

// Liste des rôles de l'application
$role = ["Admin", "Gestionnaire", "Membre"];

// Users renseignés dans l'application, ceux qui vont avoir les droits
$knownUser = ["Dasha", "Victorien", "Mathieu", "Pierre-Louis"];

/** Association des droits role et nom dans une fonction
 * je passe en paramètres trois parametres respectifs pour les :
 * 1. $_GET["firstname"]
 * 2. $knownUser
 * 3. $role
 * Retourne le role attribué dans un message de salutation
 */
function getRole($getName, $firstName, $status){
    if ($getName == $firstName[0]){
        return "Bonjour $status[0], Vous êtes bienvenus sur mon site";
    }
    elseif ($getName == $firstName[1]){
        return "Bonjour $status[1], Vous êtes bienvenus sur mon site";
    }
    elseif ($getName == $firstName[2]){
        return "Bonjour $status[1], Vous êtes bienvenus sur mon site";
    }
    elseif ($getName == $firstName[3]){
        return "Bonjour $status[2], Vous êtes bienvenus sur mon site";
    }
    else {
      return  "Bonjour à Vous, Chère Invité !!!";
    }
}
/* Si l'utilisateur ne fait pas partie de ma liste
et n'a pas de role, j'affiche le message "Bonjour à vous, Invité"**/

echo getRole($_GET["firstname"], $knownUser, $role);