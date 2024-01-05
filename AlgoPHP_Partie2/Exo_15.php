
<h1>XV. Exercice 15
</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format. <br><br>
Affichage <br> <br>
L’adresse elan@elan-formation.fr est une adresse e-mail valide <br>
L’adresse contact@elan est une adresse e-mail invalide <br></p>

<h2>RESULTAT :</h2>

<?php

$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";



function filtrerEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse e-mail $email est valide.";
    } else {
        echo "L'adresse e-mail $email n'est pas valide.";
    }
}

filtrerEmail($email1);
echo "<br>";
filtrerEmail($email2);




