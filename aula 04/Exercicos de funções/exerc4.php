<?php
$marca_carro1 =  "honda";
$modelo_carro1 = "civic";
$ano_carro1 = "2016";
$revisao_carro1 = True;
$numero_de_donos_carro1 = 2;

$marca_carro2 =  "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = "2012";
$revisao_carro2 = False;
$numero_de_donos_carro2 = 3;

$marca_carro3 =  "Fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = "2005";
$revisao_carro3 = False;
$numero_de_donos_carro3 = 1;

$marca_carro4 =  "Volkswagem";
$modelo_carro4 = "jetta";
$ano_carro4 = "2020";
$revisao_carro4 = True;
$numero_de_donos_carro4 = 7;

function calcularValor($marca, $ano, $Ndonos) {
    $year = date("Y");
    $valor_inicial = 0;

    if ($marca == 'BMW' || $marca == 'Fiat') {
        $valor_inicial = 300000;
    } elseif ($marca == 'Volkswagem') {
        $valor_inicial = 70000;
    } elseif ($marca == 'honda') {
        $valor_inicial = 150000;
    } else {
        echo "Marca não reconhecida para cálculo de valor.\n";
        return;
    }

    if ($ano < $year) {
        $valor_inicial -= 3000 * ($year - $ano);
    }

    if ($Ndonos > 0) {
        $valor_inicial *= pow(1 - 0.05, $Ndonos);
    }
    echo "O valor do carro é: R$ " . number_format($valor_inicial, 2, ',', '.') . "\n";
}


calcularValor ($marca_carro3, $ano_carro3, $numero_de_donos_carro3)
?>