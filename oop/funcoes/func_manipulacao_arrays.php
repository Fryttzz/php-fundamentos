<?php
//Retorna uma string a partir de um array "implode()"
$array = array("lastname", "email", "phone");
$comma_separated = implode(',', $array);
echo $comma_separated . PHP_EOL;

//Inseri um novo elemento no array "array_push()"
$communities = [];

array_push($communities, 'He4rtDevs');
print_r($communities);

array_push($communities, 'CodigoFalado');
print_r($communities);

//Procura um elemento dentro dos valores e retorna a 
//chave correspondente caso achado "array_search()"
$commun = ['php.net', 'CodigoFalado', 'Twitch.tv', 'He4rtDevs'];

$result = array_search('CodigoFalado', $commun);
echo $result . PHP_EOL;

//Compara um ou mais arrays e retorna os elementos que divergem "array_diff()"
$colorPallete1 = ["yellow", "pink", "purple", "red"];
$colorPallete2 = ["yellow", "pink", "brown", "blue"];

$resultPallete = array_diff($colorPallete1, $colorPallete2);
print_r($resultPallete);

//Soma todos os argumentos de um array "array_sum()"
$numberSum = [1, 5, 3, 4, 7, 1];
$resultSum = array_sum($numberSum);
print_r($resultSum);

//Substitui os valores de um array baseado em um ou mais array passados,
//substituido pela chave que deve ser igual "array_replace()"
$names = ["matheus", "lucas", "khayan"];
$new_names = [0 => "josé", 3 => "marcos"];
$resultReplace = array_replace($names, $new_names);
print_r($resultReplace);

//Gera um novo array a partir de um ou varios outros, ou 
//de valores dispersos "array_map()"
$languages = array_map('strtoupper', ['php', 'elixir', 'clojure']);
print_r($languages);

//Gera um novo array a partir de um acondição de filtro "array_filter()"
$drinks = array_filter(['tequila', 'vodka', 'whisky'], function ($drink) {
    return $drink != 'tequila';
});
print_r($drinks);

//Reduz um array de n elementos para um "array_reduce()"
$total = array_reduce([10, 20, 30], function ($somatoria, $valor) {
    $somatoria += $valor;
    return $somatoria;
});

print_r($total);

//Retorna um array a partir de uma string separando a 
//string devido uma condição "explode()"
$stringExplode = "Eu gostaria de separar essa string em espaços";
$arraySeparado = explode(' ', $stringExplode);
print_r($arraySeparado);