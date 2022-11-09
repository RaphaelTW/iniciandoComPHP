<?php

$multiplicador = 3;

for ($i = 1; $i <= 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}
echo PHP_EOL;

$multiplicador = 4;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}