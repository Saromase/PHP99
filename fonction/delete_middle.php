<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 4</h1></div>';
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
$old = $prenoms;
$newprenom = deleteMedianArray($prenoms);
?>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Ancien Prénoms</th>
        <th>Nouveau Prénoms</th>
      </tr>
    </thead>
    <tbody>
<?php printTwoArrayDiff($old,$newprenom)?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>
