<?php
$num1 = readline ("Digite o 1° numero:");
$num2 = readline ("Digite o 2° numero:");
$operacao = readline("--- Menu calculadora ---  \nsoma = 1 \nmultiplicação  = 2\nsubtração = 3 \n divisão = 4\ninforme o  numero da operação:");

$soma  = $num1 + $num2;
$mult =  $num1 * $num2;
$sub =  $num1 - $num2;
$div =  $num1 / $num2;


switch ($operacao){
    case 1:
        echo " A soma dos numeros é $soma";
}
switch ($operacao){
    case 2:
        echo " A multiplicação dos numeros é $mult";
}
switch ($operacao){
    case 3:
        echo " A subtração dos numeros é $sub";
}
switch ($operacao){
    case 4:
        echo " A divisão dos numeros é $div";
}

?>