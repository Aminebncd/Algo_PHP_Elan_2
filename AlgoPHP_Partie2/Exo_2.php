
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
    
    td,
    th {
        border: 1px solid #333;
        padding : 3px;
    }
</style>

<h2>RESULTAT :</h2> <br>

<?php


$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
);

function  afficherTableHTML($capitales) {

    asort($capitales);
    
    echo "<table>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>";

    foreach ($capitales as $pays => $capitale) {
        echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
    }

    echo "</table>";
}


afficherTableHTML($capitales);