<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 3</h1></div>';

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
$stiuf = array_reverse($fruits);
for ($i=0; $i < (count($fruits) -6); $i++){
    $fruit_favoris[] = $stiuf[$i];
}
?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Fruit Favoris</th>
      </tr>
    </thead>
    <tbody>
<?php 
for ($i=0; $i < count($fruit_favoris); $i++){
    echo '<tr><td>'. $fruit_favoris[$i].'</td></tr>';
} 
?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>