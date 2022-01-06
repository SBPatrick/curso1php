<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos, pode entrar!";
}else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e está acompanhado, então pode entrar!";
}else {
    echo "Você só tem $idade anos, não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!";
