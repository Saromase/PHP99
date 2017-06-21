<pre>
<?php
echo " Exercice 1 <br/>";

$ary = array(
    'Cuisson' => array("à point", "bleu", "saignant","bien cuit"),
    'Viandes' => array("Poulet", "Boeuf", "Mouton")
);
for ($i = 0; $i < count($ary['Cuisson']); $i++) {
    for($j= 0; $j < count($ary['Viandes']); $j++) {
        $commandes[] = $ary['Cuisson'][$i] . " " . $ary['Viandes'][$j];
    }
}
print_r($commandes);

echo " <br/> Exercice 2 <br/> <br/>";

$genres = "horreur fantastique action western thriller comédie drame romance historique";
var_dump($genres);
$tag = explode( " ", $genres);
print_r($tag);

echo " <br/> Exercice 3 <br/> <br/>";

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
$stiuf = array_reverse($fruits);
for ($i=0; $i < (count($fruits) -6); $i++){
    $fruit_preferer[] = $stiuf[$i];
}
print_r($fruit_preferer);

echo " <br/> Exercice 4 <br/> <br/>";
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
$arrondis = floor((count($prenoms) /2));
for ($i =0; $i > $arrondis + 1; $i++){
    if ($i > $arrondis) {
        unset($prenoms[$i]);
    }
}
var_dump($prenoms);
?>
</pre>
