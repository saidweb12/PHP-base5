<?php
# stagiaires/michael/03-hello-friends.php

echo "Hello World";
echo "<br>Hello friends";
$echo = "Hello";
$if = "World";
//
$addition = (1+25)/2;
$array = [1,2,3,4,5];
$myArray = [
    "prenom" => "Omer",
    "classe" => "Classe 1",
];
?>
<h1>Coucou</h1>
<p>Année: <?=date("Y-m-d H:i:s")?></p>
<p><?="$echo $if"?></p>
<p><?='$echo $if'?></p>
<p><?=$echo." ".$if?></p>
<p><?=$echo.' '.$if." = ".$addition?></p>
<p><?=$echo,' ',$if?></p>
<p><?=$echo.$if?></p>
<?php
echo "<p>$array[0]</p><p>$array[1]</p>";
echo "<p>$myArray[prenom] - $myArray[classe]</p>";
echo "<p>{$myArray['prenom']} - {$myArray['classe']}</p>";
echo '<p>{$myArray["prenom"]} - {$myArray["classe"]}</p>';
echo '<p>{$myArray[\'prenom\']} - {$myArray[\'classe\']}</p>';

?>
<p><?php var_dump($array,$myArray )?></p>
