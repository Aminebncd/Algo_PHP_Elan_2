<h1>VIII. Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. <br><br>
Exemple : <br>
repeterImage($url,4);</p>

<h2>RESULTAT :</h2>

<?php


$urlChien = "http://my.mobirise.com/data/userpic/764.jpg";


function repeterImage($lien, $nbrRepetitions) {

    for ($i = 0; $i < $nbrRepetitions; $i++) {
        echo '<img src="' . $lien . '" alt="Chien tenant un jouet dans sa bouche">';
    }
}


repeterImage($urlChien,4);