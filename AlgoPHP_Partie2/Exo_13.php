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
    private bool $etat;

    public function __construct(string $marque, string $modele, int $nbPortes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->etat = false;
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
    
    public function getEtat()
    {
        return $this->etat;
        
    }
    
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }
    
    public function afficherInformations() {

        echo "infos vehicule" . "<br>";
        echo "******************<br>";
        echo "Marque: " . $this->getMarque() . "<br>";
        echo "Modèle: " . $this->getModele() . "<br>";
        echo "Nombre de portes: " . $this->getNbPortes() . "<br>";
        echo "Etat actuel :" . $this->getEtat() . "<br>";
        echo "Vitesse actuelle: " . $this->getVitesseActuelle() . "km/h<br><br>";
    }

    public function demarrer(){
       if ($this->etat){
        echo "La $this est deja allumée !<br>" ;
       } else {
           $this->etat = true;
            echo "la $this est demarrée<br>";
       }
    }


    public function stopper(){
        if ($this->etat){
            $this->etat = false;
            $this->vitesseActuelle = 0;
            echo "la  $this est arretée<br>";  
        } else {
            echo "la $this est deja eteinte !<br>";
        }
    }


    public function accelerer(int $vitesse){
        if($this->etat){
            $this-> vitesseActuelle += $vitesse;
            echo "la vitesse du $this est de :" . $this->vitesseActuelle . "km/h<br>";
        } else {
            echo "La  $this doit d'abord etre allumée !<br>";
        }
    }


    public function ralentir(int $vitesse){
        if ($this->etat && $this->vitesseActuelle - $vitesse > 0){
            $this-> vitesseActuelle -= $vitesse;
            echo "la vitesse du $this est de :" . $this->vitesseActuelle . "km/h<br>";

        }elseif($this->etat && $this->vitesseActuelle - $vitesse <= 0) {
            $this->etat = false;
            echo "La $this s'est arretée<br>";
            echo "la vitesse du $this est de : 0km/h <br>";

        }else {
            echo "La $this doit d'abord etre allumée !<br>";
        }
     
    }

    public function __toString()
    {
        return "$this->marque $this->modele";
    }

   
}

// Instanciation des voitures
$vehicule1 = new Voiture("Peugeot", "408", 5);
$vehicule2 = new Voiture("Citroen", "C4", 3);
$vehicule3 = new Voiture("Mercedes", "Classe C", 5);


$vehicule1->afficherInformations();
$vehicule1->demarrer();
$vehicule1->demarrer();
$vehicule1->stopper();
$vehicule1->accelerer(50);

echo "<br><br>";

$vehicule2->afficherInformations();
$vehicule2->demarrer();
$vehicule2->accelerer(100);
$vehicule2->ralentir(120);

echo "<br><br>";

$vehicule3->afficherInformations();
$vehicule3->demarrer();
$vehicule3->accelerer(50);
$vehicule3->ralentir(40);
$vehicule3->stopper();


echo "<br><br>";