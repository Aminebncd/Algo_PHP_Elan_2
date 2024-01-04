<h1>V. Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.<br><br>
Exemple :<br><br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);</p><br><br>

<h2>RESULTAT :</h2>

<?php


    $nomsInput = array("Nom", "Prénom", "Ville");
    

    function afficherInput($tableau) {
        echo '<form method="post" action="#">';

        foreach ($tableau as $valeur) {
            echo '<label for="' . strtolower($valeur) . '">' . $valeur . ' <br></label>';
            echo '<input type="text" id="' . strtolower($valeur) . '" name="' . strtolower($valeur) . '" required><br>';
        }

        echo '</form>';
    }

    afficherInput($nomsInput);


?>
