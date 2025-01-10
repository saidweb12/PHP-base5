<?php //début du code php
// Prenon la date et heure du jour dans une variable.
// Les arguments se trouvent :
// https://www.php.net/manual/fr/datetime.format.php

$DATE = date("Y-m-d H:i:s"); //format datetime MySQL
// Fin duy code php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>05 date <= date("H:i") // Heure et minute?>
</head>
<h1>05 date <?= $DATE ?></h1>
<p>Il est <?= $DATE("H:i:s") // heure, minute, seconde  
          ?>

  <body>

  </body>

</html>
<?php
// on peut même mettre du code php aprés la fermeture 
?>