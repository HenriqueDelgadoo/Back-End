<?php
class turista {
    private $nome;
    private $local;
    private $comida;
    private $ambiente;


    public function getNome(){
        $this->nome;
    }
    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome)); 
    }
    public function getLocal(){
        $this->local;
    }
    public function setLocal($local){
        $this->local;
    }
    public function getComida(){
        $this->comida;
    }
    public function setComida($comida){
        $this->comida;
    }
        public function getAmbiente(){
        $this->ambiente;
    }
    public function setAmbiente($ambiente){
        $this->ambiente;
    }



    public function __construct($nome,$local,$comida){
        $this -> setNome($nome);
        $this -> setLocal($local);
        $this -> setComida($comida);
    }

    public function visitar(){
        return (`O $this->nome, está viajando para o $this->local\n`);
    }
    public function Comer(){
        return(`O $this->nome, está comendo $this->comida\n`);
    }
    public function nadar(){
        return (`O $this->nome, está nadando em $this->ambiente\n`);
    }
}

class localidade {
    private $atividade;
    private $pais;

    public function  getAtividade (){
        $this->atividade;
    }
    public function setAtividade($atividade){
        $this->atividade = ucwords(strtolower($atividade));
    }
    public function getPais(){
        $this->pais;
    }
    public function setPais($pais){
        $this->pais;
    }

    public function __construct($atividade, $pais){
        $this->setAtividade($atividade);
        $this->setPais($pais);
    }
    public function informarAtividades(){
        return(`O $this->pais, possue as $this->atividade`);
    }
}

interface Atividade {
    public function atividade($nome, $acao);
}

class comida {
    private $nome_prato;
    private $pais;

    public function getNome(){
        return $this->nome_prato;
    }

    public function setNome($nome_prato){
        return $this->nome_prato = ucwords(strtolower($nome_prato));
    }
    public function getPais(){
        return $this->pais;
    } 

    public function setPais($pais){
        return $this->pais;
    }

    public function __construct($nome_prato,$pais){
        $this-> setNome($nome_prato);
        $this-> setPais($pais);;
    }

    public function getDescricoes(){
        return ("$this->nome_prato, é de $this->pais.\n");
    }
    
}

class CorpoDagua implements Atividade{
    private $tipo;
    private $nome;
    private $acao;

    public function __construct($tipo,$nome,$acao){
        $this->tipo = $tipo;
        $this->nome =$nome;
        $this->acao = $acao;
    }
    public function atividade($nome,$acao){
        return ("O $this->nome, está realizando $this->acao. \n");
    }
    public function getTipo(){
        return ("O $this->nome é um $this->tipo ");
    }
}
?>

-- turista tem um relacionamento de associação com a localidade, ele está lá mas os dois existem independentemente--
-- turista e comida tem um relacionamento de associação, ele come a comida, mas os dois exitem independentemente um do outro --
-- turista e CorpoDagua, tem um relacionamento de associação, eles exitem independente um do outro mas interagem --
-- Localidade e atividade, tem uma relação de agregação, atividade agrega a localidade, mas existem fora uma da outra --
--localidade e comida, tem uma relação de agregação, onde a comida pertence ao pais mas existe fora dele também --

