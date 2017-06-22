<?php include '../include/header.php';
echo '<div class="text-center"><h1>Exercice 7</h1></div>';
$sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];
$implode = implode($sadisme);
$input = "h";
$count_char = count_chars($implode, 1);
$LetterAskii = ord($input);
$occurence = $count_char[$LetterAskii];
$chr = chr($LetterAskii);
echo '<div class="text-center">Il y a '. $occurence .' lettres ' . ' " ' . $chr. ' " ' . ' dans le tableau</div>';
include '../include/footer.php';?>