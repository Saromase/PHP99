<?php include '../include/header.php';?>
<pre>
<?php
echo " <br/> Exercice 4 <br/> <br/>";
$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
$arrondis = floor((count($prenoms) /2));
unset($prenoms[$arrondis]);
print_r($prenoms);
?>
</pre>
<?php include '../include/footer.php';?>