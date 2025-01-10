<?php
// stagiaires\reda\08-array-env-php-assoc.php
// 
// PHP utilise les tableaux pour les variables d'environnement 
// comme les variables get ($_GET[])
// on va observer la variable $_GET grâce a var_dump
// Et ajout de $_POST
var_dump($_GET, $_POST);
?>
<a href="">Acceuil</a>
<a href="?p=1">variable get p vaut 1</a>
<a href="?p=7">variable get p vaut 7</a>
<a href="?p=1&search=coucou">variable get p vaut 1 et search vaut "coucou"</a>
<p>Par défaut les variables d'environnement sont des tableaux associatifs en PHP.</p>