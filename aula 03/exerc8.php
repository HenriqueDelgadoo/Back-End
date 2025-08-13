<?php
$tabuada = (int)readline("Digite o número que deseja saber a tabuada: ");

for ($i = 0; $i <= 10; $i++) {
    $razao = $tabuada * $i;
    echo "$tabuada x $i = $razao\n";
}
?>

