<?php 
$continuaLoop = true;
$i = 1;
echo "Script para contar até 10" . PHP_EOL;

while ($continuaLoop) {
    echo $i . "... ";
    if($i == 10) {
        $continuaLoop = false;
    }
    $i++;
}

echo PHP_EOL . "Script finalizado!";