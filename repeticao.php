<?php

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

echo PHP_EOL;

for ($contador = 1; $contador <=15; $contador += 1) {
    echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;

for ($contador = 1; $contador <=15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;

for ($contador = 1; $contador <=15; $contador++)
    echo "#$contador" . PHP_EOL;