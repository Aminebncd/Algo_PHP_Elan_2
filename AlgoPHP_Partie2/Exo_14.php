<h1>XIV. Exercice 14
</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie). <br><br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes : <br> <br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br><br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br><br>
echo $v1->getInfos()."";<br/>
echo $ve1->getInfos()."";<br/></p>

<h2>RESULTAT :</h2>


<?php


class Voiture {

    private string $marque;
    private string $modele;

    public function __construct(string $marque, string $modele){
        $this->marque = $marque;
        $this->modele = $modele;
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


    public function getInfos(){
        echo "Marque: " . $this->getMarque() . "<br>";
        echo "Modèle: " . $this->getModele() . "<br>";
    }
}



class VoitureElec extends Voiture {
    
    private string $autonomie;
    
    public function __construct(string $marque, string $modele, string $autonomie){
        parent:: __construct ($marque, $modele);
        $this->autonomie = $autonomie;
    }
    
    
    public function getAutonomie()
    {
        return $this->autonomie;
    }
    
    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;
        
        return $this;
    }
    
    public function getInfos(){
        parent:: getInfos();
        echo "Autonomie : " . $this->getAutonomie() . "<br>";
    }
}


$v1 = new Voiture("Peugeot", '408');
$v1-> getInfos();

echo "<br>" ;

$v2 = new VoitureElec("BMW", "i3", "500");
$v2-> getInfos();
