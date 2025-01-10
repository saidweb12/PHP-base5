<?php 
// stagiaires\misi\08-array-env-php-assoc.php
/* 
PHP utilise les tableaux pour les variables d'environnement
comme les variables get ($_GET[])
On va observer la variable $_GET grâce à var_dump()
et ajout de $_POST
*/
var_dump($_GET);
?>
<a href="?p=1"> acceuil</a>
<a href="?p=7"> variable get p vaut 1</a>
<a href="?p=1&search=coucou"> variable get p vaut 1 et search vaut coucou</a>
<p>Par défaut les variables d'environnement sont des tableaux associafs en PHP !</p>