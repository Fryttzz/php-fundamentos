<?php
function greetings($name)
{
    echo "Hello " . $name;
}

greetings('Fryttzz');

//com valor default
function greetings2($name = "Matheus")
{
    echo "Hello " . $name;
}

greetings2('Fryttzz');

//Parametros com tipagem
function greetings3(string $name, bool $welcome = false)
{
    if ($welcome) {
        echo "Hello " . $name;
    } else {
        echo "Get the fuck out of here " . $name;
    }
}

greetings3('DanielHe4rt', true);

//Funções anônimas

$numeroPares = array_filter([1, 2, 3, 4], function ($numero) {
    return $numero % 2 == 0;
});

$funcaoExemplo = function($nome)
{
    printf("Melhor groupo de desenvolvedores é a %\r\n", $nome);
};

$funcaoExemplo('He4rtDevs');

//Usando var de escopo anterior
$mensagem = "Teste";
$exemplo = function() use ($mensagem)
{
    echo $mensagem;
};
$exemplo();