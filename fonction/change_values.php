<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 6</h1></div>';
$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
$a = '06';
$b = '+33';
for ($i = 0; $i < count($portables); $i++){
    $c = $portables[$i];
    $d = substr($c,0,2);
    $e = substr($c,2,10);
    $f = str_replace($c, $b, $c);
    $newPortables[$i] = $f.$e;
}
echo '<div class="text-center">La transformation du début des numéros de téléphone commencant par ' . $a . ' en ' . $b . ' a bien était effectué</div>';
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
for ($j=0; $j < count($portables); $j++){
    echo '<tr><td>'. $portables[$j].'</td>';
    echo '<td>'. $newPortables[$j].'</td></tr>';
}

?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>