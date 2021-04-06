<?php
$caminho = "text.txt";
$file = fopen($caminho, "a+");
$string = "\nTeste";
fwrite($file, $string);

echo feof($file);

fclose($file);