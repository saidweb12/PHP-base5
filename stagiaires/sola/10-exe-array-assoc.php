//  affichez avec des echo les données de la variable $monTabAssoc :

<?php

$monTabAssoc =  [
    "prenom" => "Michaël",
    "nom" => "Pitz",
    "caracteristique" => "égocentrique",
    "dateDeNaissance" => "1951-03-02"
];

foreach ($monTabAssoc as $key => $value) {
    echo "<p>$key : $value</p>";
}