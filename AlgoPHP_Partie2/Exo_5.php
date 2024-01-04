<h1>V. Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.<br><br>
Exemple :<br><br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);</p><br><br>

<h2>RESULTAT :</h2>

<?php


    $nomsInput = array("Nom", "Prénom", "Ville");
    

    function afficherInput($nomsInput) {
        echo '<form method="post" action="#">';

        foreach ($nomsInput as $nom) {
            echo '<label for="' . strtolower($nom) . '">' . $nom . ' <br></label>';
            echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '" required><br>';
        }

        echo '</form>';
    }

    afficherInput($nomsInput);


?>
