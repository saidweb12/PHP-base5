<?php
// Tableau indexé
//$stagiairesWeb2025= [
    //"Agim", 
    //"Omer", 
    //"Massine", 
    //"Loukas", 
    //"Soulaiman", 
    //"Nordine", 
    //"Vahagn", 
    //"Daniel", 
   // "Samuel", 
   // "Sola",
   // "Reda",
   // "Jean-Michaël",
   // "Saïd",
   // "Géraldine",
   // "Jeremy",
   // "Mykyta",
   // ];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
//echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

//echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
 //".$stagiairesWeb2025[2]."</p>";

 //Ajoutez les 3 derniers de la classe


 //echo "<p>Les 3 derniers élèves sont : ".$stagiairesWeb2025[13].", ".$stagiairesWeb2025[14].",
 //".$stagiairesWeb2025[15]."</p>";

//exercice 9

//$monTab =["un","deux","trois","quatre","cinq","six","sept","huit","neuf", "dix",];

//echo $monTab[0]."<hr>";
//echo $monTab[1]."<hr>";
//echo $monTab[2]."<hr>";
//echo $monTab[3]."<hr>";
//echo $monTab[4]."<hr>";
//echo $monTab[5]."<hr>";
//echo $monTab[6]."<hr>";
//echo $monTab[7]."<hr>";
//echo $monTab[8]."<hr>";
//echo $monTab[9]."<hr>";


//ou

$monTab =["un","deux","trois","quatre","cinq","six","sept","huit","neuf", "dix",];

//echo $monTab[0]."<hr>";
//echo $monTab[1]."<hr>";
//echo "$monTab[2]<hr>$monTab[3]<hr>$monTab[4]<hr>$monTab[5]<hr>$monTab[6]<hr>$monTab[7]<hr>$monTab[8]<hr>$monTab[9]<hr>";

//Boucle for (initialisation,condition pour tourner,incrémentation)
//Boucle spécialisée pour les numériques.

//for($i=0; $i<count($monTab); $i++){
  //  echo "$monTab[$i]<hr>";
//}

//Boucle foreach
//Boucle spécialisée dans le stableaux et les objets

//foreach($monTab as $value){
    //echo "$value<hr>";
//}

foreach($monTab as $Key => $value){
    echo "$Key) $value<hr>";
}

?>