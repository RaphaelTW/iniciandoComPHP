<?php

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
    } else {
        echo "#$contador" . PHP_EOL;
    }
}

echo PHP_EOL;

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
        echo "#$contador" . PHP_EOL;
    }
}

echo PHP_EOL;

for ($i = 1; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo "#$i" . PHP_EOL;
    }
}

echo PHP_EOL;

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 == 0) {
        continue;
    }
        echo "#$contador" . PHP_EOL;
}
