<?php
for ($numero =0; $numero < 5; $numero++){
    if($numero % 2 == 1) {
        continue;
    }

    echo $numero . " é par. ";
}

// O comando continue, é funcional para as 
//estruturas for, while, foreach e do-while.