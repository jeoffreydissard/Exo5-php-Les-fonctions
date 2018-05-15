<?php
function lesnombres($nombre, $nombre2){
    if($nombre > $nombre2){
        echo "Le premier nombre est plus grand";
    }elseif ($nombre < $nombre2){
        echo "Le premier nombre est plus petit";
    }else{
        echo "Les deux nombres sont identiques";
    }
}
lesnombres("7", "7");
?>