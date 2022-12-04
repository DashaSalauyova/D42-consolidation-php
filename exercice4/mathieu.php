 
<?php
enum Gender: string
{
    case Female = 'Madame';
    case Male = "Monsieur";
}

class Bank
{
    public string $user;
    public int|float $solde = 0;
    public int|float $debt = 0;
    public string $gender;
    /**
     * j'effectue la fonction construct afin de recuperer mon utilisateur
     */
    function __construct(Gender $gender)
    {
        $this->user = !empty($_GET["user"]) ? $_GET["user"] : "Théo";
        
        $this->gender = $gender->value;
    }
    /**
     * @param int|float $number valeur a soutraire au solde
     */
    public function addToSolde(int|float $number): void
    {
        $this->solde += $number;
    }

    /**
     * @param int|float $number valeur a soutraire au solde
     */
    public function removeToSolde(int|float $number): void
    {
        // je recupere la valeur du solde dans une variable afin de la réutiliser plus tard
        $originSolde = $this->solde;
        $this->solde -= $number;
        // je regarde si le solde est inférieur 0 et si c'est le cas j'ajoute une dette qui a pour valeur le solde négatif diviser par deux
        if ($this->solde <= 0) {
            $this->debt += (($number - $originSolde) / 2);
        }
    }
    /**
     * je crée une fonction qui va prendre toutes mles valeur du tableau , les additionné puis les diviser par le nombre d'élement du tableau
     * @param array $array tableau de nombre permettant de trouver la moyenne
     */
    public function getAverage(array $array): int|float
    {
        return array_sum($array) / count($array);
    }

    public function payDebtRent(): void
    {
        if ($this->solde <= 0) $this->debt *= 1.2;
        else
            $this->removeToSolde($this->debt);
    }
}
$bank = new Bank(Gender::Female);
foreach ($depot as $value) {
    $bank->addToSolde($value);
}
foreach ($withdraw as $value) {
    $bank->removeToSolde($value);
}
?>