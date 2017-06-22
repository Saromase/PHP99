<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 1</h1></div>';
$ary = array(
    'Cuisson' => array("à point", "bleu", "saignant","bien cuit"),
    'Viandes' => array("Poulet", "Boeuf", "Mouton")
);
for ($i = 0; $i < count($ary['Cuisson']); $i++) {
    for($j= 0; $j < count($ary['Viandes']); $j++) {
        $commandes[] = $ary['Cuisson'][$i] . " " . $ary['Viandes'][$j];
    }
}

?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Type de films</th>
      </tr>
    </thead>
    <tbody>
<?php 
        
for ($i=0; $i < count($commandes); $i++){
    echo '<tr><td>'. $commandes[$i].'</td></tr>';
} 
?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>