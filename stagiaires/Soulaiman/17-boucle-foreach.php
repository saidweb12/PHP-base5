<?php

$tabs = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j'];

foreach($tabs as $tab){
    echo "$tab " ;
}
echo "<br>";
$tabs2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j'];

foreach($tabs2 as $clef =>$tab2){
 
    echo "$clef => $tab2 |";
}
echo "<br>";
$tabs3 = ["1" =>'lundi', "2" =>'mardi', "3" =>'mercredi', "4" =>'jeudi', "5" =>'vendredi', "6" =>'samedi', "7" =>'dimanche'];

foreach($tabs3 as $clef =>$tab3){
 
    echo "$clef => $tab3 |";
}


?>