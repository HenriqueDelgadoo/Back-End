<?php
class Cachoro{
    public $nome;
    public $raca;
    public $idade;
    public $vacinacao;


    public function latir ($latindo, $nome){
        if ($latindo == True) {
            echo "o $nome , está latindo";
        }else{
            echo "O $nome, não esta latindo";
    }
}
    public function __construct ($nome, $raca, $idade, $vacinacao){

        $this -> nome = $nome;
        $this -> raca = $raca;
        $this -> idade = $idade;
        $this -> vacinacao = $vacinacao;
    }
}
?>