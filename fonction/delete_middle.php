<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 4</h1></div>';
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
$arrondis = floor((count($prenoms) /2));
unset($prenoms[$arrondis]);
print_r($prenoms);
?>

<?php include '../include/footer.php';?>