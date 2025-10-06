Cenário 4 – Ciclo da Vida
Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
sangue para ajudar outras.

substantivos: Terra, pessoas, outras, sangue, escolhas 
verbos: engravidar, nascer, crescer, fazer, doar, ajudar 

class:pessoas
Métodos: engravidar, nascer, crescer, tomarDecisão, doar

Métodos para a classe pessoas:
engravidar, crescer, nascer,tomarDecisão, doarSangue


<?php

class pessoas{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade){
        $this->nome = ucwords(strtolower($nome));
        $this->idade = (int)$idade;
    }

    public function engravidar (){
        return (" A $this->nome está gravida.\n");
    }
    public function nascer(){
        return ("$this->nome nasceu.\n");
    }
    public function crescer (){
        return ("$this->nome está crescendo, atualmente tem $this->idade anos .\n");
    }

}

class decisao extends pessoas{
    private $decisao;

    public function __construct($nome, $idade, $decisao){
        parent :: __construct ($nome, $idade);

        $this->decisao = $decisao;
    }

    public function tomarDecisão(){
        return ("$this->nome, é capaz de tomar decisões como $this->decisao.\n");
    }
}

?>

-- Decisão e pessoas tem relação de composição onde a decisão não existe sem a pessoas mas as pessoas existem sem a decisão --