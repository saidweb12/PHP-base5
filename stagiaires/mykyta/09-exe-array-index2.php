<?php
$monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];

/*
echo $monTab[0]."/hr";
echo $monTab[1]."/hr";
echo $monTab[2]."/hr";
echo $monTab[3]."/hr";
echo $monTab[4]."/hr";
echo $monTab[5]."/hr";
echo $monTab[6]."/hr";
echo $monTab[7]."/hr";
echo $monTab[8]."/hr";
echo $monTab[9]."/hr";
*/
?>

<h2> Boucle foreach</h2>

<?php
foreach ($monTab as $value){
    echo "$value <hr>";
}
?>

<h2> For [9 >>> 0]</h2>

<?php
for($i = count($monTab)-1; $i >= 0; $i--){
    echo "$monTab[$i] <hr>";
}
?>

<h2> $Key et foreach </h2>

<?php
foreach ($monTab as $key => $value){
    echo "$key) $value <hr>";
}
?>

