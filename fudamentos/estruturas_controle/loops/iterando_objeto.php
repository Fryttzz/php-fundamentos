<?php
$pessoa = new stdClass;
$pessoa->nome = "danielhe4rt";
$pessoa->idade = 21;
$pessoa->trabalho = "FullStack Developer";

foreach($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}