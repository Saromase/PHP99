<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 1</h1></div>';
$ary = array(
    'Cuisson' => array("à point", "bleu", "saignant","bien cuit"),
    'Viandes' => array("Poulet", "Boeuf", "Mouton")
);
for ($i = 0; $i < count($ary['Cuisson']); $i++) {
    for($j= 0; $j < count($ary['Viandes']); $j++) {
        $commandes[] = $ary['Viandes'][$j] . " " . $ary['Cuisson'][$i];
    }
}
$shuffle = Randomize($commandes);
print_r($shuffle);
?>




<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Types de cuisson</th>
      </tr>
    </thead>
    <tbody>
<?php printArray($commandes); ?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>
