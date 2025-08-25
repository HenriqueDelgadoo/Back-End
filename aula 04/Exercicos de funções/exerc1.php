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

function exibirCarro ($marca_carro, $modelo_carro, $ano_carro , $revisao_carro , $numero_de_donos_carro){
   echo ( "$marca_carro $modelo_carro, ano $ano_carro, ja passou por revisão: $revisao_carro, numero de donos $numero_de_donos_carro ");
}
exibirCarro($marca_carro1, $modelo_carro1, $ano_carro1 , $revisao_carro1 , $numero_de_donos_carro1);
?>