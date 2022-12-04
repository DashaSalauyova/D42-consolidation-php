<?php


//je crée une classe et je type les variables en rajoutant int ou string
class Livre {
    public int $id;
    public string $titre;
    public string $auteur;


    // je crée une fonction qui instancie la classe Livre
    function __construct(int $id, string $titre, string $auteur)
    {
       $this->id = $id;
       $this->titre = $titre;
       $this->auteur = $auteur;
    }
}
 /* pour typer les variables en php, par defaut elles ne sont pas typées
 * $a = (string)"carotte";
 * $a = (int)123;
 */ 