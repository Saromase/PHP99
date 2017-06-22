<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 4</h1></div>';
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
$old = $prenoms;
$arrondis = floor((count($prenoms) /2));
unset($prenoms[$arrondis]);
$newPrenoms = array_merge($prenoms);
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
<?php
for ($j=0; $j < count($old); $j++){
    echo '<tr><td>'. $old[$j].'</td>';
    if ($j < count($newPrenoms)){
            echo '<td>'. $newPrenoms[$j].'</td></tr>';
    }
}

?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>
