<?php

$contador = 0;
if ($fd = fopen('counter.txt', 'r')) {
    $contador = fgets($fd);
    fclose($fd);
}

$fd2 = fopen('counter.txt', 'w');
$contador = intval($contador) + 1;  // Convertir a entero antes de sumar 1
fwrite($fd2, $contador);
fclose($fd2);

echo $contador;
?>
