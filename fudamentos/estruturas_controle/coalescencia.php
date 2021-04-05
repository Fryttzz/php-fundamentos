<?php
$descricaoPorCodigo = array(
    1 => 'Este usuário já existe.',
    2 => 'Senha Incorreta.',
    3 => 'Este usuário está bloqueado.',
);

return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';

//A logica acima pode ser reduzida com a seguinte expressão
return $descricaoPorCodigo ?? 'Alguam coisa deu errado.';