<?php
$comando = "!he4rt";
echo match($comando) {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada aconte feijoada"
};

$idade = 121;
$result = match(true) {
    $idade >= 65 => PHP_EOL . 'Idoso',
    $idade >= 25 => PHP_EOL . 'Adulto',
    $idade >= 18 => PHP_EOL . 'Jovem Adulto',
    default => PHP_EOL . 'Criança',
};

echo $result;