<?php 
$marca_carro1 =  "honda";
$modelo_carro1 = "civic";
$ano_carro1 = "2023";
$revisao_carro1 = True;
$numero_de_donos_carro1 = 2;

function ehSeminovo($ano){
    $year = date("Y");
    if ( $year - $ano <= 3 ){
        echo "É seminovo";
    }else{
        echo "carro velho";
    }
}
ehSeminovo ($ano_carro1)
?>