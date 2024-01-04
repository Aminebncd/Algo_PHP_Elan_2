<h1>XIII. Exercice 13
</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes :
 marque, modèle, nbPortes et vitesseActuelle <br>
ainsi que les méthodes 
 demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels.<br> La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule. <br><br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br><br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :</p>

<h2>RESULTAT :</h2>

<?php

class Voiture {

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
        return $this;
    }

    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
        return $this;
    }

    public function afficherInformations() {
        echo "Marque: " . $this->getMarque() . "<br>";
        echo "Modèle: " . $this->getModele() . "<br>";
        echo "Nombre de portes: " . $this->getNbPortes() . "<br>";
        echo "Vitesse actuelle: " . $this->getVitesseActuelle() . "<br>";
    }
}

// Instanciation des voitures
$v1 = new Voiture("Peugeot", "408", 5, 0);
$v2 = new Voiture("citroen", "C4", 3, 0);


$v1->afficherInformations();
echo "<br><br>";
$v2->afficherInformations();
