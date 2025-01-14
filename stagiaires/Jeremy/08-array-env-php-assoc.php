<?php
/*
PHP utilise les tableaux pour les variables d'environnement
comme les variables GET($_GET []).
On va observer la variable $_GEt grace à var_dum()
et ajout de $_POST

*/
var_dump($_GET,$_POST);
?>
<a href="?">Accueil</a>
<a href="?p=1">variable get p vaut 1</a>
<a href="?p=7">variable get p vaut 7</a>
<a href="?p=1&search=coucou">variable get p vaut 1 et search vaut coucou</a>
<p>par défault les variables d'environement sont des tableaux associatifs
en PHP!</p>
