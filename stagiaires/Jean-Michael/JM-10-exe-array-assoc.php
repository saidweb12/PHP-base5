<?php
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];

// affichage du tableau via le débugueur var_dump()
var_dump($tab3);
// affichera :
// array(2) { ["clef1"]=> string(7) "valeur1" ["clef2"]=> string(7) "valeur2" }


//Créez un fichier nommé 10-exe-array-assoc.php et affichez avec des echo les données de la variable $monTabAssoc =  ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique","dateDeNaissance" => "1951-03-02"]; séparées par un <hr> à chaque ligne

$monTabAssoc =  [   "prenom" => "Michaël",
                    "nom" => "Pitz",
                    "caracteristique" => "égocentrique",
                    "dateDeNaissance" => "1951-03-02"
                ];

foreach($monTabAssoc as $value => $comme) {
echo "$value = $comme<hr>";
}