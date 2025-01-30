<?php

$etatEau = 100;
    if ($etatEau <= 0) {
        echo "L'eau est solide en dessous de 0°";
    } elseif ($etatEau>= 100) {
        echo "L'eau est gazeuse à partir de 100°";
    } else {
        echo "L'eau est liquide entre 1° et 99°";
    }

?>
