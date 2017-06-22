<?php include '../include/header.php';?>
<pre>
<?php
echo " <br/> Exercice 2 <br/> <br/>";

$genres = "horreur fantastique action western thriller comédie drame romance historique";
var_dump($genres);
$tag = explode( " ", $genres);
print_r($tag);

?>
</pre>