<h1>VII. Exercice 7
</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br><br>
Exemple :<br><br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br><br>
</p>

<h2>RESULTAT :</h2>



<?php

$elements = array( 'choix 1', 'choix 2', 'choix 3');

function genererCheckbox($elements) {

    echo '<form method="post" action="#">';

    foreach ($elements as $element) {
        echo '<label>';
        echo '<input type="checkbox" name="' . $element . '"> ' . $element;
        echo '</label><br>';
    }

    echo '</form>';
}



genererCheckbox($elements);

