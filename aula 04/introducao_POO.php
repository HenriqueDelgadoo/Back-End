<?php
// Modelagem de dados sem ultilização de POO( porgramação orientada a objetos)
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

function revisao_Feita($rev){
    $rev = true;
    return $rev;
}
$revisao_carro3 = revisao_Feita($revisao_carro3); // Resultado True

function donosAtual($qntde_donos){
    return  $qntde_donos + 1 ;
}
$numero_de_donos_carro1 = donosAtual($numero_de_donos_carro1);

function exibirCarro ($marca_carro, $modelo_carro, $ano_carro , $revisao_carro , $numero_de_donos_carro){
   echo "$marca_carro, ano $ano_carro, ja passou por revisão: $revisao_carro, numero de donos $numero_de_donos_carro";
}
exibirCarro($marca_carro1, $modelo_carro1, $ano_carro1 , $revisao_carro1 , $numero_de_donos_carro1);
?>