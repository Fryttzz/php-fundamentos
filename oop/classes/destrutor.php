<?php
class Pessoa
{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = ucfirst($nome);
        echo "Olá, meu nome é {$this->nome}" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Até mais!";
    }
}
$pessoa = new Pessoa('joão');

unset($pessoa);
