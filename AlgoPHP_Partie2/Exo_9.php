<h1>IX. Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle"). <br><br>
Exemple : <br>
afficherRadio($nomsRadio);
</p>


<h2>RESULTAT :</h2>

<?php

$nomsRadio = array ("Monsieur","Madame","Mademoiselle");

function afficherRadio($valeursRadio) {
    echo '<form>';

    foreach ($valeursRadio as $valeur) {
        echo '<label>';
        echo '<input type="radio" name="genre" value="' . $valeur . '"> ' . $valeur;
        echo '</label><br>';
    }

    // Option pour "Autre"
    echo '<label>';
    echo '<input type="radio" name="genre" value="Autre"> Autre';
    echo '</label><br>';

    echo '</form>';
}

afficherRadio ($nomsRadio);

