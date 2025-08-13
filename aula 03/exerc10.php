<?php

while (true){
$opcao = readline (" --- menu interativo ---\n
1. olá\n
2.Data atual \n
3. sair");

switch ($opcao){
    case 1 :
        echo " Olá Henrique";
        break;
    case 2:
        echo "Data atual: " . date("d/m/Y H:i:s") . "\n";
            break;
    case 3:
        echo "Saindo ..."
        break 2;
}
}
?>