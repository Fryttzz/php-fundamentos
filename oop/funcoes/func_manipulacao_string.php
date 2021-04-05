<?php
//Apresenta a quantidade de caracteres de uma string
$name = "danielhe4rt";
echo "O nome tem " . strlen($name) . ' caracteres ' . PHP_EOL;

//Repete uma determinada string conforme a quantidade de repetições passada
$string = "Teste ";
$repeat = str_repeat($string, 5);
echo $repeat . PHP_EOL;

//Subtitui caracteres de uma string e retorna uma nova
$string = 'JS é a melhor linguagem';
echo str_replace('JS', 'PHP', $string) . PHP_EOL;

