<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 5</h1></div>';
$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];

$lenght = ArrayMaxLength($phrase);
echo 'La chaine de caractère la plus longue est :' .' " '. $lenght. ' " ';
include '../include/footer.php';?>
