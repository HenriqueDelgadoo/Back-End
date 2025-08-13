<?php
$temp = readline("Digite a temperatura: ");

if ($temp >= 25) {
    echo "Quente";
} elseif ($temp >= 15) {
    echo "Temperatura agradável";
} else {
    echo "Frio";
}
?>
