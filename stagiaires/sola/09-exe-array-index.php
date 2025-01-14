<?php
// Tableau indexé
$stagiairesWeb2025 = [
    "Agim",
    "Omer",
    "Massine",
    "Loukas",
    "Soulaiman",
    "Nordine",
    "Vahagn",
    "Daniel",
    "Samuel",
    "Sola",
    "Reda",
    "Jean-Michaël",
    "Saïd",
    "Géraldine",
    "Jeremy",
    "Mykyta",
];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
echo "<p>Il y a " . count($stagiairesWeb2025) . " élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

echo "<p>Les 3 premiers élèves sont : " . $stagiairesWeb2025[0] . ", " . $stagiairesWeb2025[1] . ",
 " . $stagiairesWeb2025[2] . "</p>";


// Ajoutez les 3 derniers de la classe :

echo "<p>Les 3 derniers élèves sont : " . $stagiairesWeb2025[12] . ", " . $stagiairesWeb2025[13] . ",
 " . $stagiairesWeb2025[14] . "</p>";

// Affichez avec des echos les données de la variable :

$monTab = [
    'un <hr>',
    'deux <hr>',
    'trois <hr>',
    'quatre <hr>',
    'cinq <hr>',
    'six <hr>',
    'sept <hr>',
    'huit <hr>',
    'neuf <hr>',
    'dix <hr>',
];

echo "<p>Les éléments du tableau sont : " . $monTab[0] . ", " . $monTab[1] . ", " . $monTab[2] . ", " . $monTab[3] . ", " . $monTab[4] . ", " . $monTab[5] . ", " . $monTab[6] . ", " . $monTab[7] . ", " . $monTab[8] . ", " . $monTab[9] . "</p>";    