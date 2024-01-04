<h1>XI. Exercice 11
</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date. <br><br>
Exemple : <br>
formaterDateFr("2018-02-23") <br> <br>

Affichage <br>
vendredi 23 février 2018</p>

<h2>RESULTAT :</h2>

<?php



function formaterDateFr($dateString) {
    $date = new DateTime($dateString);

    // Création d'un formateur de date pour le français
    $formateur = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    // Formatage de la date
    $dateEnFrancais = $formateur->format($date->getTimestamp());

    
    echo $dateEnFrancais;
}

// Exemple d'utilisation :
formaterDateFr("2018-02-23");
