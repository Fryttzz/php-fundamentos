<?php
class Pai{
    protected $nomePai = "João";
}

class Filho extends Pai {
    public $nome = "Pedro";
    public function apresentar()
    {
        echo "Meu nome é $this->nome e o do meu pai é " .$this->nomePai;
    }
}

//$pai = new Pai();
//$pai->nomePai . PHP_EOL;

$filho = new Filho();

// $filho->nomePai . PHP_EOL;
$filho->apresentar();