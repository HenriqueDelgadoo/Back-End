<?php
class Calculadora {
    public function somar() {
        $numArgs = func_num_args();         // Conta quantos argumentos foram passados
        $args = func_get_args();            // Recupera os argumentos como array

        if ($numArgs === 2) {
            return $args[0] + $args[1];
        } elseif ($numArgs === 3) {
            return $args[0] + $args[1] + $args[2];
        } else {
            return "Erro: somar() aceita apenas 2 ou 3 números.";
        }
    }
}


$calc = new Calculadora();

echo $calc->somar(10, 20) . "\n";       
echo $calc->somar(5, 15, 25) . "\n";    
echo $calc->somar(1) . "\n";            
?>