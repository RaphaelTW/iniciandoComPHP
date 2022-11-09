<?php

$idade = 30;
$nome = 'Raphael';
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir 18 anos ou";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

//if $idade for 18
//if ($idade == 18 or $idade > 18) {

// Ex Você 'e' ela. Pode ser usado (&&, ||, and, or)

//if ($idade >= 18 and $nome == 'Raphael') {

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}