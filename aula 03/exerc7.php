<?php 
$final = (int)readline("Digite o numero final: ");
$contador  = 0;

for ($i = 0; $i <= $final; $i++) {
    if ($i % 2 == 0) {
        $contador++;
        echo $i . " ";
    }
}
echo "\nTotal de números pares: " . $contador;
?>