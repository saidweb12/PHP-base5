<?php
// Exemple de variables non valides
$1variable = "Ceci est une variable qui commence par un chiffre.";
$-variable = "Ceci est une variable qui commence par un tiret.";
$variable#special = "Ceci est une variable avec un caractère spécial (#).";
$variable@invalid = "Ceci est une variable avec un caractère @.";

echo "<h1>Affichage des variables non valides :</h1>";

// Vérification et affichage des variables non valides
$variables_non_valides = [
    '$1variable' => $1variable,
    '$-variable' => $-variable,
    '$variable#special' => $variable#special,
    '$variable@invalid' => $variable@invalid
];

foreach ($variables_non_valides as $nom => $valeur) {
    echo "<p><strong>$nom</strong> : $valeur</p>";
}
?>
