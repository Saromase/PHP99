<?php include '../include/header.php';
require '../fonction.php';
echo '<div class="text-center"><h1>Exercice 7</h1></div>';
$sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];
$input = "e";
$occurence = occurence($sadisme,$input);


echo '<div class="text-center">Il y a '. $occurence .' lettres ' . ' " ' . $input. ' " ' . ' dans le tableau</div>';
include '../include/footer.php'; ?>