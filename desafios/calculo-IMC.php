<?php

$peso = 60;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC";

if ($imc < 18.5) {
    echo " ABAIXO";
} elseif ($imc < 24.9) {
    echo " DENTRO";
} elseif ($imc > 25) {
    echo " ACIMA";
}

echo " do recomendado!";
