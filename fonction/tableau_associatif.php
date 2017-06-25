<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 1</h1></div>';
$ary = array(
    'Cuisson' => array("à point", "bleu", "saignant","bien cuit"),
    'Viandes' => array("Poulet", "Boeuf", "Mouton")
);
$commandes = ArrayToArray($ary,'Cuisson', 'Viandes');
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
