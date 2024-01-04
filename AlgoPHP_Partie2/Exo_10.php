<h1>X. Exercice 10
    
    </h1>    
    
    <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
            « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».    
            <br><br>
            Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
            de validation (submit).
        </p>
        
        
        <h2>RESULTAT :</h2>
        
        
        <?php



//champs de texte
$nomsInput = array("Nom", "Prénom", "Adresse email", "Ville");
afficherChampsTexte($nomsInput);

//liste déroulante
$formations = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
afficherListeDeroulante($formations);

//boutons radio
$genres = array("Monsieur", "Madame", "Autre");
afficherRadio($genres);





// Fonction pour afficher les champs de texte
function afficherChampsTexte($nomsInput) {
    echo '<form method="post" action="#">';

    foreach ($nomsInput as $nom) {
        echo '<label for="' . strtolower($nom) . '">' . $nom . ' :<br></label>';
        echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '" required><br>';
    }    

    echo '<br>';
}    

// Fonction pour afficher une liste déroulante
function afficherListeDeroulante($elements) {
    echo '<label for="formation">Formation :<br></label>';
    echo '<select name="formation" id="formation">';

    foreach ($elements as $element) {
        echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
    }    

    echo '</select><br><br>';
}    

// Fonction pour afficher les boutons radio
function afficherRadio($valeursRadio) {
    foreach ($valeursRadio as $valeur) {
        echo '<label>';
        echo '<input type="radio" name="genre" value="' . $valeur . '"> ' . $valeur;
        echo '</label><br>';
    }    

    echo '<br>';
}    
// Bouton de soumission
echo '<input type="submit" value="Soumettre">';
echo '</form>';
?>
