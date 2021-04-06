<?php
//Apresenta a quantidade de caracteres de uma string "strlen()"
$name = "danielhe4rt";
echo "O nome tem " . strlen($name) . ' caracteres ' . PHP_EOL;

//Repete uma determinada string conforme a quantidade 
//de repetições passada "str_repeat"
$string = "Teste ";
$repeat = str_repeat($string, 5);
echo $repeat . PHP_EOL;

//Subtitui caracteres de uma string e retorna uma nova "str_replace"
$string = 'JS é a melhor linguagem';
echo str_replace('JS', 'PHP', $string) . PHP_EOL;

//Cria uma sub string a partir de outra "substr"
$rest = substr('abcdef', -1);
echo $rest . PHP_EOL;

$rest = substr('abcdef', -2);
echo $rest . PHP_EOL;

$rest = substr('abcdef', -3, 1);
echo $rest . PHP_EOL;

//Retorna a posição dos caracteres passados "strpos()"
$stringCompleta = "developers";
$buscandoPor = "s";
$posicao = strpos($stringCompleta, $buscandoPor);
echo $posicao . PHP_EOL;

//Remove os espaços entre os caracteres "trim()"
//ltrim(Remove a esquerda) | rtrim(Remove a direita) 
$trim = trim('   He4rt Developers    ', "\t");
echo $trim . PHP_EOL;

//Converte os caracteres para maiusculas "strtoupper()"
$toupper = strtoupper("Developers");
echo $toupper . PHP_EOL;

//Converte os caracteres para minusculo "strlower()"
$lower = strtolower("DEVELOPERS");
echo $lower . PHP_EOL;

//Verifica se uma string existe dentro de outra "str_contains()"
$palheiro = "He4rt devs é o melhor grupo";
$agulha = 'devs';
$contem = str_contains($palheiro, $agulha);
echo $contem . PHP_EOL;

//Verifica se uma string começa com a string passada "str_starts_with()"
$stringStarts = "He4rt devs é o melhor grupo";
$buscandoStarts = "He4rt";
$contemStarts = str_starts_with($stringStarts, $buscandoStarts);
echo $contemStarts . PHP_EOL;

//Verifica se uma string termina com a string passada "str_ends_with()"
$stringEnds = "He4rt devs é o melhor grupo";
$buscandoEnds = "grupo";
$contemEnds = str_ends_with($stringEnds, $buscandoEnds);
echo $contemEnds . PHP_EOL;

//Substitui caracteres baseado em uma regex
$stringReg = "Meu pé está quente";
echo preg_replace("/pé/", 'braço', $stringReg) . PHP_EOL;

$stringHtml = "<html><div><span>Hello World</span></div></html>";
echo preg_replace('/<[^<>]+>/', '', $stringHtml). PHP_EOL;

//Altera a primeira letra da string para maiúscula
$strinShift = "daniel";
echo ucfirst($strinShift) . PHP_EOL;