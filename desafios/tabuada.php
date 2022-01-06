<?php

$n = readline("Digite o valor para a tabuada: ");

for ($i = 1; $i <= 10; $i++){
    $result = $n * $i;
    echo "$n x $i = $result\n";
}