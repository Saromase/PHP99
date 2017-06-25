<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 6</h1></div>';
$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
$valueToChange = '06';
$new_input = '+33';
$newPortables = Change06To33($portables, $new_input);
echo '<div class="text-center">La transformation du début des numéros de téléphone commencant par ' . $valueToChange . ' en ' . $new_input . ' a bien était effectué</div>';
?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Ancien numero</th>
        <th>Nouveau numero</th>
      </tr>
    </thead>
    <tbody>
<?php 
        printTwoArray($portables, $newPortables);

?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>
