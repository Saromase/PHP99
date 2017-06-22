<?php include '../include/header.php';?>
<pre>
<?php
$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];
$a = '06';
$b = '+33';
for ($i = 0; $i < count($portables); $i++){
    $c = $portables[$i];
    $d = substr($c,0,2);
    $e = substr($c,2,10);
    $f = str_replace($c, $b, $c);
    $portables[$i] = $f.$e;
}
print_r($portables);

?>
</pre>
<?php include '../include/footer.php';?>

