<?php

 $nombre = mt_rand(0,10);

if( $nombre >=0 && $nombre <=3){

    echo "$nombre, nul etudie la prochaois fois";

}elseif ($nombre>= 4 && $nombre <=5){

   echo " $nombre , peut mieux faire " ;

}elseif ($nombre>= 6 && $nombre <=7){

    echo " $nombre, bien";

}else{
    echo " $nombre,tres bien" ;

}


?>