<?php
$pessoa = [
    "nome"=> "danielhe4rt",
    "idade"=> 21,
    "trabalho"=> "FullStack Developer",
];

foreach($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

$pessoa2 = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa2 as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

$pessoa3 = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa3 as $valor) {
    echo "$valor" . PHP_EOL;
}