<h1>VI. Exercice 6
</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.<br><br>
Exemple :<br><br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);<br><br>
</p>

<h2>RESULTAT :</h2>


<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function afficherListeDeroulante($elements) {
    echo '<select name="choix">';

    foreach ($elements as $element) {
        echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
    }

    echo '</select>';
}

afficherListeDeroulante($elements);