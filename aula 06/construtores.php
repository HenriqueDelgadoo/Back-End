<?php
class Produtos{ // cria a classe produtos, como se fosse a forma para a criação d eobjetos e seus atributos
    //cria-se os atributos para os objetos (variáveis de uma classe)
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

//Métodos são funções criadas dentro da classe.
    public function atualizarEstoque($qntde_vendida){
        $this->qtde_estoque -= $qntde_vendida;
        return $this->qtde_estoque;
    }

//Criando construtores

public function __construct ($nome, $categoria, $fornecedor, $qtde_estoque){
    $this->nome = $nome;
    $this->categoria = $categoria;
    $this->fornecedor = $fornecedor;
    $this->qtde_estoque = $qtde_estoque;
}
    
}

//Criando objetos com construtor
$produto1 = new Produtos ("suco Tang", "bebidas", "Mondelez" , 200);
$produto2 = new Produtos ("Energético", "bebidas", "Monster" , 150);


 //criando objetos sem construtor
//  $produto1 =  new Produtos();
//  $produto1 ->  $nome ="Suco Tang" ;
//  $produto1 ->  $categoria ="Bebidas" ;
//  $produto1 ->  $fornecedor ="Mondelez" ;
//  $produto1 ->  $qntd_estoque =200 ;

//  $prooduto2 =  new Produtos();
// $nome ="Energético" ;
// $categoria ="Bebidas" ;
// $fornecedor ="Monster" ;
// $qntd_estoque = 150 ;


?>