<?php
class Pai
{
    public $nome = "João";
    public $idioma = "Portugues";

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome} e meu idioma nativo é {$this->idioma}" . PHP_EOL;
    }

}
$pai = new Pai();
$pai->apresentar();

class Filho extends Pai {
    public $nome = 'Enzo';
}

$filho = new Filho();
$filho->apresentar();
