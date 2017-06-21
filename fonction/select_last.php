<pre>
<?php
echo " <br/> Exercice 3 <br/> <br/>";

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
$stiuf = array_reverse($fruits);
for ($i=0; $i < (count($fruits) -6); $i++){
    $fruit_preferer[] = $stiuf[$i];
}
print_r($fruit_preferer);
?>
</pre>