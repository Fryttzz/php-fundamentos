<?php
while (true) {
    echo "Olá seja bem vindo, qual mensagem deseja enviar?"  . PHP_EOL;
    echo "1. Bom dia" . PHP_EOL;
    echo "2. Boa tarde" . PHP_EOL;
    echo "3. Boa noite" . PHP_EOL;
    echo "0. SAIR" . PHP_EOL;

    $resposta = readline('Digite uma opção: ');

    if ($resposta == 1) {
        echo 'Bom dia' . PHP_EOL;
    } else if ($resposta == 2) {
        echo "Boa tarde" . PHP_EOL;
    } else if ($resposta == 3) {
        echo "Boa noite" . PHP_EOL;
    } else if ($resposta == 0) {
        echo "Bye!" . PHP_EOL;
        break;
    }
}
