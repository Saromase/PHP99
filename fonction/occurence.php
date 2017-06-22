<pre>
<?php 
$sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];
$implode = implode($sadisme);
$input = "i";
$count_char = count_chars($implode, 1);
$LetterAskii = ord($input);
$occurence = $count_char[$LetterAskii];
$chr = chr($LetterAskii);
echo "il y a ". $occurence ." de la lettre " . $chr . " dans le tableau";
?>
</pre>