<?php
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];

// affichage du tableau via le débugueur var_dump()
var_dump($tab3);
// affichera :
// array(2) { ["clef1"]=> string(7) "valeur1" ["clef2"]=> string(7) "valeur2" }

$monTabAssoc =  ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique","dateDeNaissance" => "1951-03-02"];

foreach($monTabAssoc as $i=>$value){
    echo "$i = $value<hr>";
}

?>