<?php
$marca_carro1 =  "honda";
$modelo_carro1 = "civic";
$ano_carro1 = "2016";
$revisao_carro1 = false;
$numero_de_donos_carro1 = 2;
function precisaRevisao ($revisao , $ano){
    if ($revisao  == false && $ano < 2022){
        echo "Precisa de revisão";
    }else{
        echo "Revisão em dia";
    }
}
precisaRevisao ($revisao_carro1, $ano_carro1)
?>