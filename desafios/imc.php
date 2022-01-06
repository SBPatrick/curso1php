<?php

$altura = readline("Qual a sua altura? ");
$peso = readline("Qual o seu peso? ");
$imc = $peso / $altura**2;

echo "Seu IMC é: $imc\n";
if ($imc < 18.5){
    echo "Você está abaixo do peso ideal!\n";
}else if ($imc > 24.9){
    echo "Você está acima do peso ideal!\n";
}else{
    echo "Você está no peso ideal!\n";
}