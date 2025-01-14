<?php
// Tableau indexé
//$stagiairesWeb2025= [
//    "Agim", 
//   "Omer", 
//    "Massine", 
//    "Loukas", 
//    "Soulaiman", 
//    "Nordine", 
//    "Vahagn", 
//    "Daniel", 
//    "Samuel", 
//   "Sola",
//    "Reda",
//    "Jean-Michaël",
//    "Saïd",
//   "Géraldine",
//    "Jeremy",
//    "Mykyta",
//   ];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
//echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

//echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
 //".$stagiairesWeb2025[2]."</p>";

 // Ajoutez les 3 derniers de la classe
 //echo "<p>Les 3 derniers élèves sont : ".$stagiairesWeb2025[13].", ".$stagiairesWeb2025[14].",
 //".$stagiairesWeb2025[15]."</p>";
?>
 <?php
 //Créez un fichier nommé 09-exe-array-index.php et affichez avec des echo les données de la variable $monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix']; séparées par un <hr> à chaque ligne


 $monTab = [
    "un <hr>",  
    "deux <hr>",  
    "trois <hr>", 
    "quatre <hr>", 
    "cinq <hr>", 
    "six <hr>", 
    "sept <hr>", 
    "huit <hr>", 
    "neuf <hr>", 
    "dix <hr>", 
];

echo $monTab[0]. "<hr>";
echo $monTab[1]. "<hr>";
echo $monTab[2]. "<hr>";
echo $monTab[3]. "<hr>";
echo $monTab[4]. "<hr>";
echo $monTab[5]. "<hr>";
echo $monTab[6]. "<hr>";
echo $monTab[7]. "<hr>";
echo $monTab[8]. "<hr>";
echo $monTab[9]. "<hr>";
//ou ça peut être noté en racourcis 
?>
<?=$monTab[6]?><hr>;

print $monTab[7]."<hr>";

//boucle for (initialisation, condition pour tourner, incrémentation)
//boucle spécialisée pour les numériques 
<?php
for($i=0;$i<count($monTab); $i++){
    echo"$monTab[$i]<hr> ";
}

