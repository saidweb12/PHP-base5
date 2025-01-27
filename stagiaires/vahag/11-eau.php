<?php
$temperatur = 200; 
if ($temperatur<= 0){
    echo "l'état de l'eau est solide";
}elseif ($temperatur> 0 && $temperatur< 99){
    echo "l'état de l'eau est liquide";
}else {
    echo "l'état de l'eau est gazeux";
}












?>