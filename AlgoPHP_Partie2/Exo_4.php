<h1>IV. EXERCICE 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br><br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : <br>
https://fr.wikipedia.org/wiki/<br><br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid")</p><br><br>


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
    "Espagne" => "Madrid",
);

function  afficherTableHTML($capitales) {

    asort($capitales);
    
    echo "<table>";
    echo "<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";

    foreach ($capitales as $pays => $capitale) {

        $lienWiki = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);

    
        echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td><td>" ."<a href='$lienWiki' target='_blank'>Lien". "</td></tr>";
    }

    echo "</table>";
}


afficherTableHTML($capitales);

foreach ($capitales as $pays => $capitale) {
    $lienWiki = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);
    echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td><td>" . "<a href='$lienWiki' target='_blank'>Lien</a>" . "</td></tr>";
}