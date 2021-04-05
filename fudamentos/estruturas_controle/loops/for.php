<?php
$multiplicador = 5;
echo "Script pra imprimir a tabuada do $multiplicador" . PHP_EOL;
for($i = 1; $i <= 10; $i++){
    echo $multiplicador . " x " . $i  . " = " ($multiplicador * $i) . PHP_EOL;
}
echo "Script finalizado!";