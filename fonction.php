<?php

/*
        AFFICHER LES TABLEAUX
*/
function printTwoArray ($array, $ary) {
    for ($j=0; $j < count($array); $j++){
    echo '<tr><td>'. $array[$j].'</td>';
    echo '<td>'. $ary[$j].'</td></tr>';
    }
}
function printArray ($array){
    for ($i=0; $i < count($array); $i++){
    echo '<tr><td>'. $array[$i].'</td></tr>';
    }
}

function printTwoArrayDiff ($oldarray, $newarray){
    for ($j=0; $j < count($oldarray); $j++){
    echo '<tr><td>'. $oldarray[$j].'</td>';
    if ($j < count($newarray)){
            echo '<td>'. $newarray[$j].'</td></tr>';
        }
    }
}
/*
        Fonction.
*/

function Randomize ($array){
    return shuffle($array);
}
function deleteMedianArray ($array){
    $arrondis = floor((count($array) /2));
    unset($array[$arrondis]);
    return array_merge($array);
}


?>
