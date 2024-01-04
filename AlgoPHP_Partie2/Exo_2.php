
<h1>II. Exercice 2</h1>


<p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br><br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br><br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

</p>


<style>

    table {
         align : left;
         border-collapse: collapse;
    } 
    
    th,
    td {
        border: 1px solid #333;
        padding : 3px;
    }

</style>

<h2>RESULTAT :</h2> <br>

<?php


$capitalesPays = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
);

$intitules = array('Pays', 'Capitale');


function  afficherTableHTML($tableau, $titres) {

    asort($tableau);
    
    echo "<table>";

    echo "<tr>";
    foreach ($titres as $titre) {
        echo "<th>$titre</th>";
    }
    echo "</tr>";

    foreach ($tableau as $cle => $valeur) {
        echo "<tr><td>" . strtoupper($cle) . "</td><td>" . $valeur . "</td></tr>";
    }

    echo "</table>";
}


afficherTableHTML($capitalesPays, $intitules);