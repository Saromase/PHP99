<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 2</h1></div>';

$genres = "horreur fantastique action western thriller comédie drame romance historique";
$tag = explode( " ", $genres);
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
for ($i=0; $i < count($tag); $i++){
    echo '<tr><td>'. $tag[$i].'</td></tr>';
} 
?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>