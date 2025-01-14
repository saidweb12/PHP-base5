<?php
// Tableau indexé
$stagiairesWeb2025= [
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
echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
".$stagiairesWeb2025[2]."</p>";

echo "<p>Les 3 derniers élèves sont : ".$stagiairesWeb2025[13].", ".$stagiairesWeb2025[14].",
".$stagiairesWeb2025[15]."</p>";

echo "<p>Les middle élèves sont : $stagiairesWeb2025[6], $stagiairesWeb2025[7], $stagiairesWeb2025[8]</p>";


$monTab= [
    'un',
    'deux',
    'trois',
    'quatre',
    'cinq',
    'six',
    'sept',
    'huit',
    'neuf',
    'dix'
];

echo $monTab[0]."<hr>";
echo $monTab[1]."<hr>";
echo $monTab[2]."<hr>";
echo $monTab[3]."<hr>";
echo $monTab[4]."<hr>";
echo $monTab[5]."<hr>";
echo $monTab[6]."<hr>";
echo $monTab[7]."<hr>";
echo $monTab[8]."<hr>";
echo $monTab[9]."<hr>";

// boucle for
for($i=0;$si<count($monTab); $i++) {
    echo "$monTab[$i]<hr>";
}
// boucle spécialisée dans les tableaux et les objets
foreach($monTab as $value) {
    echo "$value<hr>";
}
//Boucle foreach avec clef
foreach($monTab as $key => $value) {
    echo "$key) $value<hr>";
}