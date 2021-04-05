<?php
class Pessoa {
    public $nome;

    public function __construct($nome)
    {
        $this->nome = ucfirst($nome);
        echo "Olá, meu nome é {$this->nome}";
    }
}

$pessoa = new Pessoa('joão');