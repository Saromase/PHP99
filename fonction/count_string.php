<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 5</h1></div>';
$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];

for ($i = 0;$i < count($phrase) -1; $i++){
    $motA = $phrase[$i];
    $motB = $phrase[$i+1];
    if (strlen($motA) > strlen($motB)){
        $phrase[$i] = $motB;
        $phrase[$i +1] = $motA;
    }
    }
$lenght = $phrase[(count($phrase)-1)];
echo 'La chaine de caractère la plus longue est :' .' " '. $lenght. ' " ';
include '../include/footer.php';?>