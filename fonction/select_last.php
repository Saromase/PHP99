<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 3</h1></div>';

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
$resultat = Select_last($fruits);
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
printArray($resultat);
?>
    </tbody>
  </table>
<?php include '../include/footer.php';?>