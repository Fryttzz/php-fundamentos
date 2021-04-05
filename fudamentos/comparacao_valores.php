<?php
//Igualdade
echo (0 == false) . PHP_EOL;
echo ('123' == 123) . PHP_EOL;
echo ('um' == 1) . PHP_EOL;
echo (123.0 == 123) . PHP_EOL;
echo "||" . PHP_EOL;

//Diferença
echo (0 != false) . PHP_EOL;
echo ('123' != 123) . PHP_EOL;
echo ('um' != 1) . PHP_EOL;
echo (123.0 != 123) . PHP_EOL;
echo "||" . PHP_EOL;

//Idêntico - trabalha comparando o tipo do valor
echo (0 === false) . PHP_EOL;
echo ('123' === 123) . PHP_EOL;
echo ('um' === 1) . PHP_EOL;
echo (123.0 === 123) . PHP_EOL;
echo "||" . PHP_EOL;

//Não identico - trabalha comparando o tipo do valor
echo (0 !== false) . PHP_EOL;
echo ('123' !== 123) . PHP_EOL;
echo ('um' !== 1) . PHP_EOL;
echo (123.0 !== 123) . PHP_EOL;
echo "||" . PHP_EOL;

//Maior que/Menor que
echo (2 < 3) . PHP_EOL;
echo (2 > 3) . PHP_EOL;
echo (2 <= 3) . PHP_EOL;
echo (2 >= 3) . PHP_EOL;
echo "||" . PHP_EOL;

//O PHP tenta converter os valores na comparação de igual 
//duplo ==, e diferente !=;
