<?php
$idade = 18;
if($idade >= 18){
    echo "Você é maior de idade" . PHP_EOL;
} else {
    echo "Você é menor de idade" . PHP_EOL;
}

$grupo = "ZezinhoDevs";

if($grupo == "He4rtDevs") {
    echo "Sim, esse é o melhor grupo do Brasil" . PHP_EOL;
} else {
    echo "Isso nem existe velho maluco" . PHP_EOL;
}

$grupo = "ZezinhoDevs";

if($grupo == "He4rtDevs") {
    echo "Sim, esse é o melhor grupo do Brasil" . PHP_EOL;
} else if ($grupo == "Facvest") {
    echo "Isso nem existe velho maluco" . PHP_EOL;
}