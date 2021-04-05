<?php

class Pessoa {
    public $nome = "João";
    public function apresenta()
    {
        echo "Meu nome é $this->nome";
    }
}

$pessoa = new Pessoa('');
echo $pessoa->nome . PHP_EOL;
$pessoa->apresenta() . PHP_EOL;