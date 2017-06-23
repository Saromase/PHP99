<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 6</h1></div>';
$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
$input_user = '06';
$new_input = '+33';
for ($i = 0; $i < count($portables); $i++){
    $numero = $portables[$i];
    $first_num = substr($numero,2,10);
    $replace = str_replace($numero, $new_input, $numero);
    $newPortables[$i] = $replace.$first_num;
}
echo '<div class="text-center">La transformation du début des numéros de téléphone commencant par ' . $input_user . ' en ' . $new_input . ' a bien était effectué</div>';
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
