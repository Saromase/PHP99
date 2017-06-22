<?php include '../include/header.php';?>
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

?>
</pre>
<?php include '../include/footer.php';?>