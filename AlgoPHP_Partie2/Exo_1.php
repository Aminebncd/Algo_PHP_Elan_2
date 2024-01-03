
<h1>I. Exercice 1</h1>


<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<style>
    .rouge {
        color : red;
    }
</style>

<h2>RESULTAT :</h2> <br>

<?php

$texte = "Mon texte en paramètre" ; 

    function convertirMajRouge($texte) {

        $result = "<p class='rouge'>".mb_strtoupper($texte)."</p>";
        return $result;
    }

echo convertirMajRouge($texte);

?>

