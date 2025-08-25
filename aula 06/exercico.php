<?php
class Moto{
    public $modelo;
    public $marca;
    public $ano;
    public $cilindrada;}


//Exercio 1 
// public function __construct ($dia, $mes, $ano){
// $this -> dia = $dia;
// $this -> mes = $mes;
// $this -> ano = $ano;
// }

//Exercico 2
// public function __construct ($nome, $idade, $cpf ,$telefone,$endereco, $estado_civil, $sexo){
// $this -> nome = $nome;
// $this -> idade = $idade;
// $this -> cpf = $cpf;
// $this -> telefone = $telefone;
// $this -> nome = $nome;
// $this -> endereco = $endereco;
// $this -> estado_civil = $estado_civil;
// $this -> sexo = $sexo;
// }

//Exercico 3
//public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda){
// $this -> marca = $marca;
// $this -> nome = $nome;
// $this -> categoria = $categoria;
// $this -> data_fabricacao = $data_fabricacao;
// $this -> data_venda = $data_venda;
// }


$moto1  =  new Moto();
$moto1 -> $modelo = "Fan";
$moto1 -> $marca = "Honda";
$moto1 -> $ano = 2019;
$moto1 -> $cilindrada = 160;

$moto2  =  new Moto();
$moto2 -> $modelo = "titan";
$moto2 -> $marca = "Honda";
$moto2 -> $ano = 2020;
$moto2 -> $cilindrada = 160;

$moto3  =  new Moto();
$moto3 -> $modelo = "start";
$moto3 -> $marca = "Honda";
$moto3 -> $ano = 2016;
$moto3 -> $cilindrada = 160;

$moto4  =  new Moto();
$moto4 -> $modelo = "cb300f";
$moto4 -> $marca = "Honda";
$moto4 -> $ano = 2024;
$moto4 -> $cilindrada = 300;




?>