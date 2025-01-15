<?php
$stagiaires = [
  "Nordine",
  "Omer",
  "Sola",
  "Massine",
  "Loukas",
  "Reda",
  "Soulaiman",
  "Agim",
  "Vahagn",
  "Daniel",
  "Samuel",
  "Jean-Michaël",
  "Saïd",
  "Géraldine",
  "Jeremy",
  "Mykyta",
  "sadad",
];


function getCount($tab){
    $i = 0;
 foreach ($tab as $stagiaire) {
  $i++;
}
return $i;

}

echo "<p> we are " . getCount($stagiaires) . " stagiaires </p>";
echo "<p> some of them " . $stagiaires[0] . " , " . $stagiaires[1] . " , " . $stagiaires[2] . "are good </p>";

