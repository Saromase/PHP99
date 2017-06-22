<?php include '../include/header.php';?>
<pre>
<?php
$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];

for ($i = 0;$i < count($phrase) -1; $i++){
    $motA = $phrase[$i];
    $motB = $phrase[$i+1];
    if (strlen($motA) > strlen($motB)){
        $phrase[$i] = $motB;
        $phrase[$i +1] = $motA;
    }
    }
print_r($phrase[(count($phrase)-1)]);
?>
</pre>