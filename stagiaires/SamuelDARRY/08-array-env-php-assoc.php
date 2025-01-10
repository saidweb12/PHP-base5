<?php
//SamuelDARRY\08-array-env-php-assoc.php
/* 
PHP utilise les tableaux pour les variables d'environnement
Comme les variables get ($_GET[])
On va observer la variable $_GET grâce à var_dump()
*/
var_dump($_GET, $_POST);
?>

<a href="?">Accueil</a>
<a href="?p=1">Variable get p vaut 1</a>
<a href="?p=7">Variable get p vaut 7</a>
<a href="?p=1&search=coucou">Variable get p vaut 1 et search vaut coucou</a>
<p>Par défaut les variables d'envrionnement sont des tableaux associatifs en PHP !</p>

